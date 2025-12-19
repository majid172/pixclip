@extends('panel.layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto py-8">
        <!-- Page Header -->
        <div class="mb-6 flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold text-primary">Transaction Details</h2>
                <p class="text-sm text-slate-500 mt-1">Transaction ID: {{ $transaction->transaction_id }}</p>
            </div>
            <a href="{{ route('payment.history') }}" class="btn btn-outline btn-sm">
                <span class="icon-[tabler--arrow-left] size-4"></span>
                Back to History
            </a>
        </div>

        <!-- Transaction Status Card -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">Payment Status</h3>
                    <p class="text-sm text-slate-500">Current transaction status</p>
                </div>
                @if ($transaction->status == 1)
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

            <!-- Transaction Info Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Transaction ID -->
                <div>
                    <label class="text-sm font-medium text-slate-600">Transaction ID</label>
                    <p class="text-base font-mono font-semibold text-primary mt-1">
                        {{ $transaction->transaction_id }}
                    </p>
                </div>

                <!-- Amount -->
                <div>
                    <label class="text-sm font-medium text-slate-600">Amount</label>
                    <p class="text-base font-bold text-success mt-1">
                        ${{ number_format($transaction->amount, 2) }}
                    </p>
                </div>

                <!-- Payment Method -->
                <div>
                    <label class="text-sm font-medium text-slate-600">Payment Method</label>
                    <p class="text-base font-semibold mt-1">
                        <span class="badge badge-outline badge-info">
                            {{ $transaction->payment_method }}
                        </span>
                    </p>
                </div>

                <!-- Transaction Date -->
                <div>
                    <label class="text-sm font-medium text-slate-600">Transaction Date</label>
                    <p class="text-base font-semibold mt-1">
                        {{ $transaction->created_at->format('M d, Y h:i A') }}
                    </p>
                </div>

                <!-- User -->
                <div>
                    <label class="text-sm font-medium text-slate-600">User</label>
                    <p class="text-base font-semibold mt-1">
                        {{ $transaction->user->name ?? 'N/A' }}
                    </p>
                </div>

                <!-- Order ID -->
                <div>
                    <label class="text-sm font-medium text-slate-600">Order ID</label>
                    <p class="text-base font-semibold mt-1">
                        <a href="{{ route('order.details', $transaction->order_id) }}" class="link link-hover text-info">
                            {{ $transaction->order->order_id }}
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Order Details Card -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Order Information</h3>
            
            <div class="space-y-4">
                <div class="flex justify-between items-center pb-3 border-b">
                    <span class="text-sm font-medium text-slate-600">Job Title</span>
                    <span class="text-sm font-semibold">{{ $transaction->order->job_title }}</span>
                </div>

                <div class="flex justify-between items-center pb-3 border-b">
                    <span class="text-sm font-medium text-slate-600">Image Quantity</span>
                    <span class="badge badge-primary">{{ $transaction->order->image_quantity }}</span>
                </div>

                <div class="flex justify-between items-center pb-3 border-b">
                    <span class="text-sm font-medium text-slate-600">Order Status</span>
                    <span class="badge badge-outline">{{ $transaction->order->status }}</span>
                </div>

                <div class="flex justify-between items-center pb-3 border-b">
                    <span class="text-sm font-medium text-slate-600">Order Date</span>
                    <span class="text-sm font-semibold">
                        {{ $transaction->order->created_at->format('M d, Y') }}
                    </span>
                </div>

                <div class="flex justify-between items-center">
                    <span class="text-sm font-medium text-slate-600">Order Price</span>
                    <span class="text-base font-bold text-success">
                        ${{ number_format($transaction->order->price, 2) }}
                    </span>
                </div>
            </div>
        </div>

        <!-- Admin Actions (Only for Admins) -->
        @if (auth()->user()->is_admin == 1 && $transaction->status == 1)
            <div class="bg-red-50 border border-red-200 rounded-lg shadow-md p-6">
                <h3 class="text-lg font-semibold text-red-800 mb-4">
                    <span class="icon-[tabler--alert-triangle] size-5 inline-block mr-2"></span>
                    Admin Actions
                </h3>
                
                <p class="text-sm text-red-700 mb-4">
                    Refunding this transaction will mark it as refunded and update the order payment status.
                </p>

                <form action="{{ route('payment.refund', $transaction->transaction_id) }}" method="POST"
                    onsubmit="return confirm('Are you sure you want to refund this transaction? This action cannot be undone.');">
                    @csrf
                    
                    <div class="form-control mb-4">
                        <label class="label">
                            <span class="label-text font-semibold">Refund Reason (Optional)</span>
                        </label>
                        <textarea name="reason" class="textarea textarea-bordered" rows="3"
                            placeholder="Enter reason for refund..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-error">
                        <span class="icon-[tabler--refresh] size-5 mr-2"></span>
                        Process Refund
                    </button>
                </form>
            </div>
        @endif

        <!-- Action Buttons -->
        <div class="flex gap-4 mt-6">
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
