# Payment Service Documentation

## Overview

The `PaymentService` class provides a comprehensive solution for handling payment-related operations in the PixClip application. It follows the service layer pattern to separate business logic from controllers, making the code more maintainable, testable, and reusable.

## Location

`app/Service/PaymentService.php`

## Features

### 1. **Payment Processing**
- Process payments for orders
- Generate unique transaction IDs
- Validate payment amounts
- Update order payment status
- Transaction logging

### 2. **Access Control**
- Validate user permissions for orders
- Admin and user access differentiation

### 3. **Payment Validation**
- Check if order is already paid
- Validate payment amount matches order price

### 4. **Transaction Management**
- Retrieve transactions by ID
- Get order transaction history
- Get user payment history with pagination

### 5. **Refund Processing**
- Process payment refunds
- Update transaction and order status
- Refund logging

### 6. **Revenue Analytics**
- Calculate total revenue
- Filter by date range and payment method

## Usage Examples

### Basic Payment Processing

```php
use App\Service\PaymentService;

// In your controller
public function __construct(PaymentService $paymentService)
{
    $this->paymentService = $paymentService;
}

public function processPayment(Request $request)
{
    $paymentData = [
        'user_id'        => auth()->id(),
        'admin_id'       => 1,
        'order_id'       => $request->order_id,
        'amount'         => $request->amount,
        'payment_method' => $request->payment_method,
    ];

    try {
        $transaction = $this->paymentService->processPayment($paymentData);
        return redirect()->back()->with('success', 'Payment successful!');
    } catch (Exception $e) {
        return redirect()->back()->with('error', $e->getMessage());
    }
}
```

### Check Order Access

```php
$order = Order::find($orderId);
$canAccess = $this->paymentService->canAccessOrder(
    $order, 
    auth()->id(), 
    auth()->user()->is_admin == 1
);

if (!$canAccess) {
    abort(403, 'Unauthorized access');
}
```

### Validate Payment

```php
$order = Order::find($orderId);

// Check if already paid
if ($this->paymentService->isOrderPaid($order)) {
    return redirect()->back()->with('info', 'Order already paid');
}

// Validate amount
if (!$this->paymentService->validatePaymentAmount($amount, $order)) {
    return redirect()->back()->with('error', 'Invalid amount');
}
```

### Get Payment History

```php
// Get user's payment history (paginated)
$transactions = $this->paymentService->getUserPaymentHistory(
    auth()->id(), 
    15 // items per page
);

return view('payments.history', compact('transactions'));
```

### Process Refund

```php
try {
    $this->paymentService->refundPayment(
        $transactionId, 
        'Customer requested refund'
    );
    return redirect()->back()->with('success', 'Refund processed');
} catch (Exception $e) {
    return redirect()->back()->with('error', $e->getMessage());
}
```

### Calculate Revenue

```php
// Total revenue
$totalRevenue = $this->paymentService->calculateRevenue();

// Revenue for specific period
$revenue = $this->paymentService->calculateRevenue([
    'start_date' => '2024-01-01',
    'end_date' => '2024-12-31',
    'payment_method' => 'PayPal'
]);
```

## Available Methods

### Payment Processing

#### `processPayment(array $paymentData): Transaction`

Process a payment transaction.

**Parameters:**
- `$paymentData` (array):
  - `user_id` (int): User ID
  - `admin_id` (int): Admin ID (optional, defaults to 1)
  - `order_id` (int): Order ID
  - `amount` (float): Payment amount
  - `payment_method` (string): Payment method (PayPal, Stripe)

**Returns:** `Transaction` object

**Throws:** `Exception` if payment fails

---

### Validation Methods

#### `canAccessOrder(Order $order, int $userId, bool $isAdmin): bool`

Check if user can access an order.

**Parameters:**
- `$order` (Order): Order instance
- `$userId` (int): User ID
- `$isAdmin` (bool): Is user admin

**Returns:** `bool`

---

#### `isOrderPaid(Order $order): bool`

Check if order is already paid.

**Parameters:**
- `$order` (Order): Order instance

**Returns:** `bool`

---

#### `validatePaymentAmount(float $amount, Order $order): bool`

Validate payment amount matches order price.

**Parameters:**
- `$amount` (float): Payment amount
- `$order` (Order): Order instance

**Returns:** `bool`

---

### Transaction Methods

#### `generateTransactionId(string $paymentMethod): string`

Generate unique transaction ID.

**Parameters:**
- `$paymentMethod` (string): Payment method

**Returns:** `string` (Format: TXN-XX-XXXXXX)

---

#### `getTransactionById(string $transactionId): ?Transaction`

Get transaction by transaction ID.

**Parameters:**
- `$transactionId` (string): Transaction ID

**Returns:** `Transaction|null`

---

#### `getOrderTransactions(int $orderId)`

Get all transactions for an order.

**Parameters:**
- `$orderId` (int): Order ID

**Returns:** `Collection` of transactions

---

#### `getUserPaymentHistory(int $userId, int $perPage = 10)`

Get user's payment history with pagination.

**Parameters:**
- `$userId` (int): User ID
- `$perPage` (int): Items per page (default: 10)

**Returns:** `LengthAwarePaginator`

---

### Refund Methods

#### `refundPayment(string $transactionId, string $reason = ''): bool`

Process a payment refund.

**Parameters:**
- `$transactionId` (string): Transaction ID
- `$reason` (string): Refund reason (optional)

**Returns:** `bool`

**Throws:** `Exception` if refund fails

---

### Analytics Methods

#### `calculateRevenue(array $filters = []): float`

Calculate total revenue with optional filters.

**Parameters:**
- `$filters` (array):
  - `start_date` (string): Start date (optional)
  - `end_date` (string): End date (optional)
  - `payment_method` (string): Payment method (optional)

**Returns:** `float`

---

#### `getPaymentMethods(): array`

Get available payment methods.

**Returns:** `array`

---

## Transaction Statuses

- `1` - Success/Completed
- `0` - Refunded/Failed

## Payment Methods

Currently supported payment methods:
- **PayPal**
- **Stripe**

## Error Handling

All critical operations are wrapped in try-catch blocks with database transactions. Errors are logged and thrown as exceptions for proper handling in controllers.

```php
try {
    $transaction = $this->paymentService->processPayment($data);
} catch (Exception $e) {
    // Handle error
    Log::error('Payment failed: ' . $e->getMessage());
    return back()->with('error', $e->getMessage());
}
```

## Logging

The service automatically logs:
- Successful payments
- Payment failures
- Refunds
- Refund failures

Logs can be found in `storage/logs/laravel.log`

## Database Transactions

All write operations use database transactions to ensure data consistency:
- Payment processing
- Refund processing

If any step fails, all changes are rolled back automatically.

## Testing

Example test case:

```php
public function test_can_process_payment()
{
    $paymentService = new PaymentService();
    
    $paymentData = [
        'user_id' => 1,
        'order_id' => 1,
        'amount' => 100.00,
        'payment_method' => 'PayPal',
    ];
    
    $transaction = $paymentService->processPayment($paymentData);
    
    $this->assertInstanceOf(Transaction::class, $transaction);
    $this->assertEquals(1, $transaction->status);
}
```

## Best Practices

1. **Always use dependency injection** to inject the service into controllers
2. **Wrap service calls in try-catch blocks** for proper error handling
3. **Validate input** before calling service methods
4. **Use the service methods** instead of direct model manipulation
5. **Check permissions** using `canAccessOrder()` before processing payments
6. **Log important operations** for audit trails

## Integration with Controllers

The `PaymentController` has been refactored to use this service. See `app/Http/Controllers/Backend/PaymentController.php` for implementation examples.

## Future Enhancements

Potential improvements:
- Add more payment gateways (Razorpay, Paystack, etc.)
- Implement webhook handlers for payment confirmations
- Add payment retry logic
- Implement partial refunds
- Add payment installment support
- Generate payment receipts/invoices
- Add payment analytics dashboard
