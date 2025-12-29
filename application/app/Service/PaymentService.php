<?php

namespace App\Service;

use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

class PaymentService
{
    /**
     * Validate if user can access the order
     *
     * @param Order $order
     * @param int $userId
     * @param bool $isAdmin
     * @return bool
     */
    public function canAccessOrder(Order $order, int $userId, bool $isAdmin): bool
    {
        
        if ($isAdmin) {
            return true;
        }

        return $order->user_id == $userId;
    }


    public function isOrderPaid(Order $order): bool
    {
        return $order->is_paid == 1;
    }


    public function validatePaymentAmount(float $amount, Order $order): bool
    {
        return $amount == $order->price;
    }

    public function generateTransactionId(string $paymentMethod): string
    {
        $prefix = strtoupper(substr($paymentMethod, 0, 2));
        $timestamp = time();
        $random = mt_rand(1000, 9999);

        return "TXN-{$prefix}-" . substr($timestamp . $random, -6);
    }

    /**
     * Process payment transaction
     *
     * @param array $paymentData
     * @return Transaction
     * @throws Exception
     */
    public function processPayment(array $paymentData): Transaction
    {
        try {
            DB::beginTransaction();

            $order = Order::findOrFail($paymentData['order_id']);

            // Validate order is not already paid
            if ($this->isOrderPaid($order)) {
                throw new Exception('Order has already been paid.');
            }

            // Validate payment amount
            if (!$this->validatePaymentAmount($paymentData['amount'], $order)) {
                throw new Exception('Payment amount does not match order price.');
            }

            // Generate transaction ID
            $transactionId = $this->generateTransactionId($paymentData['payment_method']);

            // Create transaction record
            $transaction = Transaction::create([
                'user_id'        => $paymentData['user_id'],
                'admin_id'       => $paymentData['admin_id'] ?? 1,
                'order_id'       => $order->id,
                'amount'         => $paymentData['amount'],
                'payment_method' => $paymentData['payment_method'],
                'transaction_id' => $transactionId,
                'status'         => 2, // 1 = Success
            ]);

            $order->update(['is_paid' => 1]);

            DB::commit();

            return $transaction;
        } catch (Exception $e) {
            DB::rollBack();

            // Log payment failure
            Log::error('Payment processing failed', [
                'error' => $e->getMessage(),
                'order_id' => $paymentData['order_id'] ?? null,
            ]);

            throw $e;
        }
    }

    /**
     * Get payment methods
     *
     * @return array
     */
    public function getPaymentMethods(): array
    {
        return [
            'PayPal' => 'PayPal',
            'Stripe' => 'Stripe',
        ];
    }

    /**
     * Get transaction by ID
     *
     * @param string $transactionId
     * @return Transaction|null
     */
    public function getTransactionById(string $transactionId): ?Transaction
    {
        return Transaction::where('transaction_id', $transactionId)->first();
    }

    /**
     * Get all transactions for an order
     *
     * @param int $orderId
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getOrderTransactions(int $orderId)
    {
        return Transaction::where('order_id', $orderId)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    /**
     * Get user's payment history
     *
     * @param int $userId
     * @param int $perPage
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getUserPaymentHistory(int $userId, int $perPage = 10)
    {
        return Transaction::where('user_id', $userId)
            ->with(['order'])
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);
    }

    /**
     * Calculate total revenue
     *
     * @param array $filters
     * @return float
     */
    public function calculateRevenue(array $filters = []): float
    {
        $query = Transaction::where('status', 1);

        if (isset($filters['start_date'])) {
            $query->where('created_at', '>=', $filters['start_date']);
        }

        if (isset($filters['end_date'])) {
            $query->where('created_at', '<=', $filters['end_date']);
        }

        if (isset($filters['payment_method'])) {
            $query->where('payment_method', $filters['payment_method']);
        }

        return $query->sum('amount');
    }

    /**
     * Refund a payment
     *
     * @param string $transactionId
     * @param string $reason
     * @return bool
     * @throws Exception
     */
    public function refundPayment(string $transactionId, string $reason = ''): bool
    {
        try {
            DB::beginTransaction();

            $transaction = $this->getTransactionById($transactionId);

            if (!$transaction) {
                throw new Exception('Transaction not found.');
            }

            if ($transaction->status == 0) {
                throw new Exception('Transaction already refunded.');
            }

            // Update transaction status to refunded
            $transaction->update([
                'status' => 0, // 0 = Refunded
            ]);

            // Update order payment status
            $order = Order::find($transaction->order_id);
            if ($order) {
                $order->update(['is_paid' => 0]);
            }

            // Log refund
            Log::info('Payment refunded', [
                'transaction_id' => $transactionId,
                'order_id' => $transaction->order_id,
                'reason' => $reason,
            ]);

            DB::commit();

            return true;
        } catch (Exception $e) {
            DB::rollBack();

            Log::error('Refund processing failed', [
                'error' => $e->getMessage(),
                'transaction_id' => $transactionId,
            ]);

            throw $e;
        }
    }
}
