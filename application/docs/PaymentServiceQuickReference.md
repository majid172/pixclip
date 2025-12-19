# Payment Service Quick Reference

## Common Operations

### 1. Process a Payment

```php
use App\Service\PaymentService;

// Inject service in controller
public function __construct(PaymentService $paymentService)
{
    $this->paymentService = $paymentService;
}

// Process payment
$paymentData = [
    'user_id'        => auth()->id(),
    'admin_id'       => 1,
    'order_id'       => $orderId,
    'amount'         => $amount,
    'payment_method' => 'PayPal', // or 'Stripe'
];

try {
    $transaction = $this->paymentService->processPayment($paymentData);
    // Success: $transaction->transaction_id
} catch (Exception $e) {
    // Error: $e->getMessage()
}
```

### 2. Check Payment Status

```php
$order = Order::find($orderId);

// Check if order is paid
if ($this->paymentService->isOrderPaid($order)) {
    // Order is already paid
}
```

### 3. Validate User Access

```php
$order = Order::find($orderId);

$canAccess = $this->paymentService->canAccessOrder(
    $order,
    auth()->id(),
    auth()->user()->is_admin == 1
);

if (!$canAccess) {
    abort(403, 'Unauthorized');
}
```

### 4. Get Payment History

```php
// Get paginated payment history
$transactions = $this->paymentService->getUserPaymentHistory(
    auth()->id(),
    15 // per page
);

// In blade view
@foreach ($transactions as $transaction)
    {{ $transaction->transaction_id }}
    {{ $transaction->amount }}
@endforeach

{{ $transactions->links() }}
```

### 5. Get Transaction Details

```php
$transaction = $this->paymentService->getTransactionById($transactionId);

if ($transaction) {
    echo $transaction->amount;
    echo $transaction->payment_method;
    echo $transaction->status; // 1 = Success, 0 = Refunded
}
```

### 6. Process Refund (Admin Only)

```php
// Check if user is admin
if (auth()->user()->is_admin != 1) {
    abort(403);
}

try {
    $this->paymentService->refundPayment(
        $transactionId,
        'Customer requested refund'
    );
    // Success
} catch (Exception $e) {
    // Error: $e->getMessage()
}
```

### 7. Calculate Revenue

```php
// Total revenue
$totalRevenue = $this->paymentService->calculateRevenue();

// Revenue with filters
$revenue = $this->paymentService->calculateRevenue([
    'start_date' => '2024-01-01',
    'end_date' => '2024-12-31',
    'payment_method' => 'PayPal'
]);
```

### 8. Get Order Transactions

```php
$transactions = $this->paymentService->getOrderTransactions($orderId);

foreach ($transactions as $transaction) {
    echo $transaction->transaction_id;
}
```

## Blade View Examples

### Link to Payment Page

```blade
<a href="{{ route('payment.create', $order->id) }}" class="btn btn-primary">
    Pay Now
</a>
```

### Link to Payment History

```blade
<a href="{{ route('payment.history') }}" class="btn btn-outline">
    Payment History
</a>
```

### Link to Transaction Details

```blade
<a href="{{ route('payment.transaction.show', $transaction->transaction_id) }}">
    View Transaction
</a>
```

### Display Transaction Status

```blade
@if ($transaction->status == 1)
    <span class="badge badge-success">Success</span>
@else
    <span class="badge badge-error">Refunded</span>
@endif
```

### Refund Form (Admin Only)

```blade
@if (auth()->user()->is_admin == 1 && $transaction->status == 1)
    <form action="{{ route('payment.refund', $transaction->transaction_id) }}" method="POST">
        @csrf
        <textarea name="reason" placeholder="Refund reason"></textarea>
        <button type="submit" class="btn btn-error">Process Refund</button>
    </form>
@endif
```

## Route List

```php
// Payment form
GET  /payment/create/{order}

// Process payment
POST /payment/store

// Payment history
GET  /payment/history

// Transaction details
GET  /payment/transaction/{transactionId}

// Process refund (admin only)
POST /payment/refund/{transactionId}
```

## Validation Rules

```php
// Payment store validation
[
    'order_id'       => 'required|exists:orders,id',
    'payment_method' => 'required|in:PayPal,Stripe',
    'amount'         => 'required|numeric|min:0',
]

// Refund validation
[
    'reason' => 'nullable|string|max:500',
]
```

## Transaction ID Format

```
TXN-{METHOD}-{TIMESTAMP}

Examples:
- TXN-PA-123456  (PayPal)
- TXN-ST-789012  (Stripe)
```

## Error Messages

```php
// Common errors
'Order has already been paid.'
'Payment amount does not match order price.'
'Transaction not found.'
'Transaction already refunded.'
'Unauthorized access to this order'
```

## Flash Messages

```php
// Success
return redirect()->back()->with('success', 'Payment processed successfully!');

// Error
return redirect()->back()->with('error', 'Payment failed.');

// Info
return redirect()->back()->with('info', 'Order already paid.');
```

## Display Flash Messages in Blade

```blade
@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if (session('error'))
    <div class="alert alert-error">{{ session('error') }}</div>
@endif

@if (session('info'))
    <div class="alert alert-info">{{ session('info') }}</div>
@endif
```

## Payment Methods

```php
$methods = $this->paymentService->getPaymentMethods();
// Returns: ['PayPal' => 'PayPal', 'Stripe' => 'Stripe']
```

## Status Codes

- `1` - Payment Success / Completed
- `0` - Payment Refunded / Failed

## Quick Checks

```php
// Is order paid?
$isPaid = $order->is_paid == 1;

// Is transaction successful?
$isSuccess = $transaction->status == 1;

// Is user admin?
$isAdmin = auth()->user()->is_admin == 1;

// Can user access order?
$canAccess = $order->user_id === auth()->id() || auth()->user()->is_admin == 1;
```

## Relationships

```php
// Transaction relationships
$transaction->user;      // User who made payment
$transaction->admin;     // Admin who processed
$transaction->order;     // Related order

// Order relationships
$order->transactions;    // All transactions for order
$order->user;           // Order owner
```

## Logging

```php
// Logs are automatically created for:
- Payment success
- Payment failure
- Refund processing
- Refund failure

// View logs
tail -f storage/logs/laravel.log
```

## Testing Checklist

- [ ] Process payment for new order
- [ ] Try to pay for already paid order
- [ ] Validate payment amount mismatch
- [ ] View payment history
- [ ] View transaction details
- [ ] Process refund as admin
- [ ] Try refund as non-admin (should fail)
- [ ] Try to refund already refunded transaction
- [ ] Check authorization for other user's orders
- [ ] Verify transaction ID generation

## Common Issues

**Issue:** "Order has already been paid"
**Solution:** Check `$order->is_paid` status before showing payment form

**Issue:** "Payment amount does not match order price"
**Solution:** Ensure amount sent matches `$order->price` exactly

**Issue:** "Unauthorized access"
**Solution:** Verify user owns the order or is admin

**Issue:** Transaction not found
**Solution:** Use correct `transaction_id` (not database `id`)

## Performance Tips

1. Use pagination for payment history
2. Eager load relationships: `with(['order', 'user'])`
3. Cache revenue calculations for dashboards
4. Index `transaction_id` column for faster lookups

## Security Notes

- ✅ Always validate user permissions
- ✅ Use CSRF tokens on all forms
- ✅ Validate all inputs
- ✅ Log all payment operations
- ✅ Use database transactions for atomicity
- ✅ Never expose sensitive payment details
- ✅ Restrict refunds to admins only
