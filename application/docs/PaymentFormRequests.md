# Payment Form Request Validation

## Overview

Form Request classes have been created to handle validation and authorization for payment operations. This follows Laravel best practices by separating validation logic from controllers.

## Created Files

### 1. PaymentRequest
**Location:** `app/Http/Requests/PaymentRequest.php`

Handles validation and authorization for payment processing.

### 2. RefundRequest
**Location:** `app/Http/Requests/RefundRequest.php`

Handles validation and authorization for refund operations.

---

## PaymentRequest

### Purpose
Validates payment submission data and ensures users are authorized to make payments for specific orders.

### Validation Rules

```php
[
    'order_id'       => 'required|integer|exists:orders,id',
    'payment_method' => 'required|string|in:PayPal,Stripe',
    'amount'         => 'required|numeric|min:0.01|max:999999.99',
]
```

### Authorization Logic

- ✅ Admins can pay for any order
- ✅ Users can only pay for their own orders
- ❌ Unauthorized users receive 403 error

### Custom Validation

The request includes additional validation in the `withValidator()` method:

1. **Order Already Paid Check**
   - Prevents duplicate payments
   - Error: "This order has already been paid."

2. **Amount Validation**
   - Ensures payment amount matches order price
   - Error: "Payment amount ($X.XX) does not match order price ($Y.YY)."

### Custom Error Messages

```php
'order_id.required'       => 'Order ID is required.'
'order_id.exists'         => 'The selected order does not exist.'
'payment_method.required' => 'Please select a payment method.'
'payment_method.in'       => 'Invalid payment method selected. Please choose PayPal or Stripe.'
'amount.required'         => 'Payment amount is required.'
'amount.numeric'          => 'Payment amount must be a valid number.'
'amount.min'              => 'Payment amount must be at least $0.01.'
'amount.max'              => 'Payment amount cannot exceed $999,999.99.'
```

### Usage in Controller

```php
use App\Http\Requests\PaymentRequest;

public function store(PaymentRequest $request)
{
    // Validation and authorization automatically handled
    $validated = $request->validated();
    
    // Use validated data
    $paymentData = [
        'order_id'       => $validated['order_id'],
        'amount'         => $validated['amount'],
        'payment_method' => $validated['payment_method'],
    ];
}
```

---

## RefundRequest

### Purpose
Validates refund operations and ensures only administrators can process refunds.

### Validation Rules

```php
[
    'reason' => 'nullable|string|max:500|min:3',
]
```

### Authorization Logic

- ✅ Only admins (is_admin == 1) can process refunds
- ❌ Non-admin users receive 403 error with message: "Only administrators are authorized to process refunds."

### Custom Validation

The request includes additional validation in the `withValidator()` method:

1. **Transaction Exists Check**
   - Verifies transaction exists by transaction_id
   - Error: "Transaction not found."

2. **Already Refunded Check**
   - Prevents refunding the same transaction twice
   - Error: "This transaction has already been refunded."

### Custom Error Messages

```php
'reason.string' => 'Refund reason must be a valid text.'
'reason.max'    => 'Refund reason cannot exceed 500 characters.'
'reason.min'    => 'Refund reason must be at least 3 characters if provided.'
```

### Usage in Controller

```php
use App\Http\Requests\RefundRequest;

public function refund(RefundRequest $request, $transactionId)
{
    // Validation and authorization automatically handled
    $validated = $request->validated();
    
    // Process refund
    $this->paymentService->refundPayment(
        $transactionId, 
        $validated['reason'] ?? ''
    );
}
```

---

## Benefits of Form Requests

### 1. **Cleaner Controllers**
Controllers are now focused on business logic, not validation.

**Before:**
```php
public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'order_id' => 'required|exists:orders,id',
        // ... more rules
    ]);
    
    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }
    
    // Authorization checks
    if (auth()->user()->is_admin == 0 && $order->user_id != auth()->id()) {
        abort(403);
    }
    
    // Business logic...
}
```

**After:**
```php
public function store(PaymentRequest $request)
{
    $validated = $request->validated();
    // Business logic...
}
```

### 2. **Reusable Validation**
Form requests can be reused across multiple controllers.

### 3. **Centralized Authorization**
Authorization logic is in one place, making it easier to maintain.

### 4. **Better Error Messages**
Custom error messages provide better user experience.

### 5. **Testable**
Form requests can be unit tested independently.

---

## Testing Form Requests

### Test PaymentRequest

```php
use App\Http\Requests\PaymentRequest;
use App\Models\Order;
use App\Models\User;

public function test_payment_request_validates_required_fields()
{
    $request = new PaymentRequest();
    
    $validator = Validator::make([], $request->rules());
    
    $this->assertTrue($validator->fails());
    $this->assertArrayHasKey('order_id', $validator->errors()->toArray());
    $this->assertArrayHasKey('payment_method', $validator->errors()->toArray());
    $this->assertArrayHasKey('amount', $validator->errors()->toArray());
}

public function test_user_can_authorize_own_order()
{
    $user = User::factory()->create(['is_admin' => 0]);
    $order = Order::factory()->create(['user_id' => $user->id]);
    
    $this->actingAs($user);
    
    $request = new PaymentRequest();
    $request->merge(['order_id' => $order->id]);
    
    $this->assertTrue($request->authorize());
}
```

### Test RefundRequest

```php
use App\Http\Requests\RefundRequest;

public function test_only_admin_can_authorize_refund()
{
    $admin = User::factory()->create(['is_admin' => 1]);
    $user = User::factory()->create(['is_admin' => 0]);
    
    // Admin should be authorized
    $this->actingAs($admin);
    $request = new RefundRequest();
    $this->assertTrue($request->authorize());
    
    // Regular user should not be authorized
    $this->actingAs($user);
    $request = new RefundRequest();
    $this->assertFalse($request->authorize());
}
```

---

## Error Handling

### Validation Errors

When validation fails, Laravel automatically:
1. Redirects back to the previous page
2. Flashes validation errors to the session
3. Preserves old input

### Display Errors in Blade

```blade
@if ($errors->any())
    <div class="alert alert-error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Or for specific field -->
@error('payment_method')
    <span class="text-error text-sm">{{ $message }}</span>
@enderror
```

### Authorization Errors

When authorization fails:
- HTTP 403 Forbidden response
- Custom error message displayed

---

## Customization

### Add More Validation Rules

```php
public function rules(): array
{
    return [
        'order_id'       => ['required', 'exists:orders,id'],
        'payment_method' => ['required', 'in:PayPal,Stripe'],
        'amount'         => ['required', 'numeric', 'min:0.01'],
        // Add new rules
        'currency'       => ['required', 'string', 'in:USD,EUR,GBP'],
        'billing_email'  => ['required', 'email'],
    ];
}
```

### Add Conditional Validation

```php
public function rules(): array
{
    $rules = [
        'order_id' => ['required', 'exists:orders,id'],
        'payment_method' => ['required', 'in:PayPal,Stripe'],
        'amount' => ['required', 'numeric', 'min:0.01'],
    ];
    
    // Add conditional rules
    if ($this->payment_method === 'PayPal') {
        $rules['paypal_email'] = ['required', 'email'];
    }
    
    if ($this->payment_method === 'Stripe') {
        $rules['stripe_token'] = ['required', 'string'];
    }
    
    return $rules;
}
```

### Customize Authorization Message

```php
protected function failedAuthorization()
{
    throw new AuthorizationException(
        'Custom authorization message here.'
    );
}
```

---

## Best Practices

1. ✅ **Use Form Requests for all form submissions**
2. ✅ **Keep validation logic in Form Requests, not controllers**
3. ✅ **Provide clear, user-friendly error messages**
4. ✅ **Use `withValidator()` for complex validation logic**
5. ✅ **Test Form Requests independently**
6. ✅ **Document custom validation rules**
7. ✅ **Use type hints for better IDE support**

---

## Summary

Form Request classes provide:
- ✅ Clean, maintainable code
- ✅ Centralized validation logic
- ✅ Built-in authorization
- ✅ Custom error messages
- ✅ Reusable validation rules
- ✅ Better testability
- ✅ Improved developer experience

The PaymentController is now much cleaner and focused on business logic, while validation and authorization are handled by dedicated Form Request classes.
