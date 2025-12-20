<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Order;

class PaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Get the order
        $order = Order::find($this->order_id);

        if (!$order) {
            return false;
        }

        // Check if user is admin or owns the order
        if (auth()->user()->is_admin == 1) {
            return true;
        }

        return $order->user_id == auth()->id();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'order_id'       => [
                'required',
                'integer',
                'exists:orders,id',
            ],
            'payment_method' => [
                'required',
                'string',
                'in:PayPal,Stripe',
            ],
            'amount'         => [
                'required',
                'numeric',
                'min:0.01',
                'max:999999.99',
            ],
        ];
    }

    /**
     * Get custom validation messages
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'order_id.required'       => 'Order ID is required.',
            'order_id.exists'         => 'The selected order does not exist.',
            'payment_method.required' => 'Please select a payment method.',
            'payment_method.in'       => 'Invalid payment method selected. Please choose PayPal or Stripe.',
            'amount.required'         => 'Payment amount is required.',
            'amount.numeric'          => 'Payment amount must be a valid number.',
            'amount.min'              => 'Payment amount must be at least $0.01.',
            'amount.max'              => 'Payment amount cannot exceed $999,999.99.',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'order_id'       => 'order',
            'payment_method' => 'payment method',
            'amount'         => 'payment amount',
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            // Check if order exists
            $order = Order::find($this->order_id);

            if ($order) {
                // Check if order is already paid
                if ($order->is_paid == 1) {
                    $validator->errors()->add(
                        'order_id',
                        'This order has already been paid.'
                    );
                }

                // Check if payment amount matches order price
                if ($this->amount != $order->price) {
                    $validator->errors()->add(
                        'amount',
                        'Payment amount ($' . number_format($this->amount, 2) . ') does not match order price ($' . number_format($order->price, 2) . ').'
                    );
                }
            }
        });
    }

    /**
     * Handle a failed authorization attempt.
     *
     * @return void
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    protected function failedAuthorization()
    {
        throw new \Illuminate\Auth\Access\AuthorizationException(
            'You are not authorized to make payment for this order.'
        );
    }
}
