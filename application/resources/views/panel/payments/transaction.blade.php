@extends('panel.layouts.app')

@section('content')
<div class="max-w-5xl mx-auto py-8">

    <!-- Page Header -->
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-primary">Transaction Details</h2>
            <p class="text-sm text-slate-500 mt-1">
                Transaction ID: {{ $transaction->transaction_id }}
            </p>
        </div>

        <a href="{{ route('payment.history') }}" class="btn btn-outline btn-sm">
            <span class="icon-[tabler--arrow-left] size-4"></span>
            Back to History
        </a>
    </div>

    <!-- STATUS + ORDER INFO (2 Columns) -->
    <div class="flex flex-wrap gap-4 mb-6 items-center justify-center">

        <!-- Payment Status Card -->
        <div class="flex-1 bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">Payment Status</h3>
                    <p class="text-sm text-slate-500">Current transaction state</p>
                </div>

                @if ($transaction->status == 1 || $transaction->status == 2)
                    <span class="badge badge-success badge-lg">
                        <span class="icon-[tabler--check] size-5 mr-1"></span>
                        Success
                    </span>
                @else
                    <span class="badge badge-error badge-lg">
                        <span class="icon-[tabler--x] size-5 mr-1"></span>
                        Refunded
                    </span>
                @endif
            </div>

            <div class="space-y-4">
                <div>
                    <label class="text-sm font-medium text-slate-600">Transaction ID</label>
                    <p class="font-mono font-semibold text-primary">
                        {{ $transaction->transaction_id }}
                    </p>
                </div>

                <div>
                    <label class="text-sm font-medium text-slate-600">Amount</label>
                    <p class="font-bold text-success">
                        ${{ number_format($transaction->amount, 2) }}
                    </p>
                </div>

                <div>
                    <label class="text-sm font-medium text-slate-600">Payment Method</label>
                    <div class="mt-1">
                        @if (strtolower($transaction->payment_method) == 'paypal')
                        <img src="{{ asset('assets/images/gateway/paypal.png') }}"
                     alt="PayPal"
                     class="object-contain" style="width: 100px; height: 100px;">
                     @else 
<span class="badge badge-outline badge-info">
                            {{ $transaction->payment_method }}
                        </span>
                     @endif
                        
                    </div>
                </div>

                <div>
                    <label class="text-sm font-medium text-slate-600">Transaction Date</label>
                    <p class="font-semibold">
                        {{ $transaction->created_at->format('M d, Y h:i A') }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Order Information Card -->
        <div class="flex-1 bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">
                Order Information
            </h3>

            <div class="space-y-4">

                <div class="flex justify-between items-center border-b pb-2">
                    <span class="text-sm text-slate-600">Order ID</span>
                    <a href="{{ route('order.details', $transaction->order_id) }}"
                       class="link link-hover text-info font-semibold">
                        {{ $transaction->order->order_id }}
                    </a>
                </div>

                <div class="flex justify-between items-center border-b pb-2">
                    <span class="text-sm text-slate-600">Job Title</span>
                    <span class="font-semibold">
                        {{ $transaction->order->job_title }}
                    </span>
                </div>

                <div class="flex justify-between items-center border-b pb-2">
                    <span class="text-sm text-slate-600">Image Quantity</span>
                    <span class="badge badge-primary">
                        {{ $transaction->order->image_quantity }}
                    </span>
                </div>

                <div class="flex justify-between items-center border-b pb-2">
                    <span class="text-sm text-slate-600">Order Status</span>
                    <span class="badge badge-outline">
                        {{ $transaction->order->status }}
                    </span>
                </div>

                <div class="flex justify-between items-center">
                    <span class="text-sm text-slate-600">Order Price</span>
                    <span class="font-bold text-success">
                        ${{ number_format($transaction->order->price, 2) }}
                    </span>
                </div>

            </div>
        </div>

    </div>

    <!-- ACTION BUTTONS -->
    <div class="flex gap-4">
        <a href="{{ route('order.details', $transaction->order_id) }}" class="btn btn-primary">
            <span class="icon-[tabler--file-text] size-5 mr-2"></span>
            View Order
        </a>

        <a href="{{ route('payment.history') }}" class="btn btn-outline">
            <span class="icon-[tabler--list] size-5 mr-2"></span>
            All Transactions
        </a>
    </div>

</div>
@endsection
