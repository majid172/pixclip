<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderStatusRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'order_id' => 'required|exists:orders,id',
            'status'   => 'required|in:Redo,In Review,Pending,Processing,Received,Finalizing,Completed,Invoiced,Downloaded,Canceled',
        ];
    }

    public function messages()
    {
        return [
            'order_id.required' => 'Order ID is missing.',
            'status.required'   => 'Status field is required.',
            'status.in'         => 'The selected status is invalid.',
        ];
    }
}
