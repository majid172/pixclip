<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Transaction;

class RefundRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Only admins can process refunds
        return auth()->user()->is_admin == 1;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'reason' => [
                'nullable',
                'string',
                'max:500',
                'min:3',
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
            'reason.string' => 'Refund reason must be a valid text.',
            'reason.max'    => 'Refund reason cannot exceed 500 characters.',
            'reason.min'    => 'Refund reason must be at least 3 characters if provided.',
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
            'reason' => 'refund reason',
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
            // Get transaction ID from route parameter
            $transactionId = $this->route('transactionId');

            // Check if transaction exists
            $transaction = Transaction::where('transaction_id', $transactionId)->first();

            if (!$transaction) {
                $validator->errors()->add(
                    'transaction_id',
                    'Transaction not found.'
                );
                return;
            }

            // Check if transaction is already refunded
            if ($transaction->status == 0) {
                $validator->errors()->add(
                    'transaction_id',
                    'This transaction has already been refunded.'
                );
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
            'Only administrators are authorized to process refunds.'
        );
    }

    /**
     * Get the validated data from the request.
     *
     * @return array
     */
    public function validated($key = null, $default = null)
    {
        $validated = parent::validated($key, $default);

        // Add transaction ID from route to validated data
        $validated['transaction_id'] = $this->route('transactionId');

        return $validated;
    }
}
