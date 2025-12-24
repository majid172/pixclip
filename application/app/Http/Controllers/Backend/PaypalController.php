<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Transaction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

/**
 * PayPal Payment Controller
 * Handles PayPal payment integration for orders
 */
class PaypalController extends Controller
{
    /**
     * Initialize PayPal payment for an order
     */
    public function payment(Request $request, $orderId)
    {
        
        try {
            $order = Order::findOrFail($orderId);
            
            if (auth()->user()->is_admin != 1 && $order->user_id != auth()->id()) {
                abort(403, 'Unauthorized access to this order');
            }
            
            if ($order->is_paid == 1) {
                
                return redirect()->route('order.details', $order->id)
                    ->with('error', 'This order has already been paid.');
            }
            
            $amount = $order->price ?? 0;
    
            if ($amount <= 0) {

                return redirect()->route('order.details', $order->id)
                    ->with('error', 'Invalid order amount.');
            }

            $prefix = strtoupper(substr('PayPal', 0, 2));
 
            $timestamp = time();
            $random = mt_rand(1000, 9999);
            $trx_id = "TXN-{$prefix}-" . substr($timestamp . $random, -6);
       
            $transaction = Transaction::create([
                'user_id'        => auth()->id(),
                'order_id'       => $order->id,
                'admin_id'       => 1,
                'amount'         => $amount,
                'payment_method' => 'PayPal',
                'transaction_id' => $trx_id,
                'status'         => 1,
            ]);

            $provider = new PayPalClient();
            $provider->setApiCredentials(config('paypal'));
            $provider->setAccessToken($provider->getAccessToken());

            $response = $provider->createOrder([
                "intent" => "CAPTURE",
                "purchase_units" => [
                    [
                        "reference_id" => $order->order_id,
                        "description" => "Order #{$order->order_id} - {$order->job_title}",
                        "amount" => [
                            "currency_code" => config('paypal.currency', 'USD'),
                            "value" => number_format($amount, 2, '.', ''),
                        ],
                        "custom_id" => $transaction->id,
                    ],
                ],
                "application_context" => [
                    "return_url" => route('paypal.success', ['transaction' => $transaction->id]),
                    "cancel_url" => route('paypal.cancel', ['transaction' => $transaction->id]),
                    "brand_name" => config('app.name', 'PixClip'),
                    "user_action" => "PAY_NOW",
                ],
            ]);

            if (isset($response['id']) && isset($response['links'])) {
                $transaction->update(['transaction_id' => $response['id']]);

                foreach ($response['links'] as $link) {
                    if ($link['rel'] === 'approve') {
                        return redirect()->away($link['href']);
                    }
                }
            }

            Log::error('PayPal order creation failed', [
                'response' => $response,
                'order_id' => $order->id,
            ]);

            return redirect()->route('paypal.cancel', ['transaction' => $transaction->id]);

        } catch (Exception $e) {
            Log::error('PayPal payment initialization failed', [
                'error' => $e->getMessage(),
                'order_id' => $orderId ?? null,
            ]);

            return redirect()->route('order.details', $orderId)
                ->with('error', 'Failed to initialize payment: ' . $e->getMessage());
        }
    }

    public function success(Request $request)
    {
        try {
            $transactionId = $request->get('transaction');
            $paypalToken = $request->get('token');

            if (!$transactionId || !$paypalToken) {
                throw new Exception('Missing transaction or token parameter');
            }

            $transaction = Transaction::findOrFail($transactionId);
            $order = Order::findOrFail($transaction->order_id);

            $provider = new PayPalClient();
            $provider->setApiCredentials(config('paypal'));
            $provider->setAccessToken($provider->getAccessToken());

            $response = $provider->capturePaymentOrder($paypalToken);

            if (isset($response['status']) && $response['status'] === 'COMPLETED') {
                DB::beginTransaction();

                try {
                    $paypalTransactionId = $response['id'] ?? $paypalToken;
                    $payerEmail = $response['payer']['email_address'] ?? null;

                    $transaction->update([
                        'status' => 2,
                        'transaction_id' => $paypalTransactionId,
                    ]);

                    $order->update(['is_paid' => 1]);

                    Log::info('PayPal payment completed', [
                        'transaction_id' => $transaction->id,
                        'paypal_transaction_id' => $paypalTransactionId,
                        'order_id' => $order->id,
                        'amount' => $transaction->amount,
                        'payer_email' => $payerEmail,
                    ]);

                    DB::commit();

                    return redirect()->route('order.details', $order->id)
                        ->with('success', 'Payment completed successfully! Your order has been paid.');

                } catch (Exception $e) {
                    DB::rollBack();
                    throw $e;
                }
            } else {
                $transaction->update(['status' => 3]);

                Log::warning('PayPal payment not completed', [
                    'response' => $response,
                    'transaction_id' => $transaction->id,
                ]);

                return redirect()->route('order.details', $order->id)
                    ->with('error', 'Payment was not completed. Status: ' . ($response['status'] ?? 'Unknown'));
            }

        } catch (Exception $e) {
            Log::error('PayPal success handler failed', [
                'error' => $e->getMessage(),
                'request' => $request->all(),
            ]);

            return redirect()->route('dashboard')
                ->with('error', 'Payment processing failed: ' . $e->getMessage());
        }
    }

    public function cancel(Request $request)
    {
        try {
            $transactionId = $request->get('transaction');

            if ($transactionId) {
                $transaction = Transaction::find($transactionId);

                if ($transaction) {
                    $transaction->update(['status' => 3]);
                    $order = Order::find($transaction->order_id);

                    Log::info('PayPal payment cancelled', [
                        'transaction_id' => $transaction->id,
                        'order_id' => $order->id ?? null,
                    ]);

                    if ($order) {
                        return redirect()->route('order.details', $order->id)
                            ->with('warning', 'Payment was cancelled. You can try again when ready.');
                    }
                }
            }


            return redirect()->route('dashboard')
                ->with('warning', 'Payment was cancelled.');

        } catch (Exception $e) {
            Log::error('PayPal cancel handler failed', ['error' => $e->getMessage()]);

            return redirect()->route('dashboard')
                ->with('warning', 'Payment was cancelled.');
        }
    }
}
