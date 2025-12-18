<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentRequest;
use App\Http\Requests\RefundRequest;
use App\Models\Order;
use App\Service\PaymentService;
use Exception;

class PaymentController extends Controller
{
    protected $paymentService;

    /**
     * Create a new controller instance
     */
    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    /**
     * Display payment page for a specific order
     */
    public function create($orderId)
    {
        $order = Order::findOrFail($orderId);

        // Check if user has permission to pay for this order
        if (!$this->paymentService->canAccessOrder($order, auth()->id(), auth()->user()->is_admin == 1)) {
            abort(403, 'Unauthorized access to this order');
        }

        // Check if order is already paid
        if ($this->paymentService->isOrderPaid($order)) {
            return redirect()->route('order.details', $order->id)
                ->with('info', 'This order has already been paid.');
        }

        $paymentMethods = $this->paymentService->getPaymentMethods();

        return view('panel.payments.payment', compact('order', 'paymentMethods'));
    }

    /**
     * Process payment submission
     */
    public function store(PaymentRequest $request)
    {
        // Validation and authorization are handled by PaymentRequest
        $validated = $request->validated();

        try {
            // Prepare payment data
            $paymentData = [
                'user_id'        => auth()->id(),
                'admin_id'       => 1,
                'order_id'       => $validated['order_id'],
                'amount'         => $validated['amount'],
                'payment_method' => $validated['payment_method'],
            ];

            // Process payment through service
            $transaction = $this->paymentService->processPayment($paymentData);
dd($transaction);
            $order = Order::find($validated['order_id']);

            return redirect()->route('order.details', $order->id)
                ->with('success', 'Payment processed successfully! Transaction ID: ' . $transaction->transaction_id);
        } catch (Exception $e) {
            return back()
                ->with('error', $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Display payment history for the authenticated user
     */
    public function history()
    {
        $transactions = $this->paymentService->getUserPaymentHistory(auth()->id(), 15);

        return view('panel.payments.history', compact('transactions'));
    }

    /**
     * Show transaction details
     */
    public function show($transactionId)
    {
        $transaction = $this->paymentService->getTransactionById($transactionId);

        if (!$transaction) {
            abort(404, 'Transaction not found');
        }

        // Check if user has permission to view this transaction
        if (!$this->paymentService->canAccessOrder($transaction->order, auth()->id(), auth()->user()->is_admin == 1)) {
            abort(403, 'Unauthorized access to this transaction');
        }

        return view('panel.payments.transaction', compact('transaction'));
    }

    /**
     * Process refund (Admin only)
     */
    public function refund(RefundRequest $request, $transactionId)
    {
        // Validation and authorization are handled by RefundRequest
        $validated = $request->validated();

        try {
            $this->paymentService->refundPayment($transactionId, $validated['reason'] ?? '');

            return back()->with('success', 'Payment refunded successfully.');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
