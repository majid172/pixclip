@extends('panel.layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto py-8">
        <!-- Page Header -->
        <div class="mb-6">
            <h2 class="text-xl font-bold text-primary">Payment</h2>
            <p class="text-sm text-slate-500 mt-1">Complete your payment for order {{ $order->order_id }}</p>
        </div>

        <!-- Two Column Layout -->
        <div class="flex flex-col-2 lg:flex-row gap-6">
            <!-- Order Summary Card -->
            <div class="flex-1 rounded-lg shadow-lg bg-white p-6">
                <h3 class="text-lg font-bold text-gray-800 mb-6 border-b pb-2">Order Summary</h3>

                <div class="space-y-4">
                    <!-- Invoice Number -->
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600 font-medium text-sm">Invoice #:</span>
                        <span class="badge badge-soft badge-warning font-bold">{{ $order->invoice?->invoice_id ?? 'N/A' }}</span>
                    </div>

                    <!-- Order Number -->
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600 font-medium text-sm">Order #:</span>
                        <span class="badge badge-soft badge-info font-bold">{{ $order->order_id }}</span>
                    </div>

                    <!-- Job Title -->
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600 font-medium text-sm">Job Title:</span>
                        <span class="text-gray-900 font-semibold text-sm">{{ Str::ucfirst($order->job_title) }}</span>
                    </div>

                    <!-- Image Quantity -->
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600 font-medium text-sm">Quantity:</span>
                        <span class="badge badge-soft badge-primary font-bold">{{ $order->image_quantity }}</span>
                    </div>

                    <!-- Status -->
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600 font-medium text-sm">Status:</span>
                        <span
                            class="badge badge-soft  font-bold
                         {{ $order->status === 'Completed' ? 'badge-success' : 'badge-error' }}">
                            {{ $order->status }}
                        </span>
                    </div>

                    <!-- Divider -->
                    {{-- <div class="border-t my-4"></div> --}}

                    <!-- Total Amount -->
                    <div class="flex justify-between items-center">
                        <span class="text-gray-800 font-semibold text-sm">Total Amount:</span>
                        <span class="text-error font-bold text-sm">${{ number_format($order->price, 2) }}</span>
                    </div>
                </div>
            </div>


            <!-- Payment Form Card -->
            <div class="flex-1 rounded-box shadow-base-300/10 bg-base-100 shadow-md p-6">
                <h3 class="text-md font-semibold  mb-6">Payment Details</h3>

                <form action="{{ route('payment.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <input type="hidden" name="order_id" value="{{ $order->id }}">

                    <!-- Payment Gateway -->
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text font-semibold">Select Payment Gateway <span
                                    class="text-error">*</span></span>
                        </label>
                        <select name="payment_method"
                            class="select select-bordered w-full @error('payment_method') select-error @enderror" required>
                            <option value="" disabled selected>Choose a payment gateway</option>
                            <option value="PayPal" {{ old('payment_method') == 'PayPal' ? 'selected' : '' }}>PayPal
                            </option>
                            {{-- <option value="Stripe" {{ old('payment_method') == 'Stripe' ? 'selected' : '' }}>Stripe
                            </option> --}}
                        </select>
                        @error('payment_method')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <!-- Amount -->
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text font-semibold">Amount (USD)</span>
                        </label>
                        <input type="text" name="amount" value="{{ $order->price }}"
                            class="input input-bordered w-full bg-base-200 cursor-not-allowed" readonly tabindex="-1">
                        <label class="label">
                            <span class="label-text-alt text-error text-xs text-slate-500">This amount cannot be
                                modified</span>
                        </label>
                    </div>


                    <!-- Action Buttons -->
                    <div class="flex gap-4 justify-end pt-4">
                        <button type="submit" class="btn btn-primary">
                            <span class="icon-[tabler--credit-card] size-5 mr-2"></span>
                            Proceed to Payment
                        </button>
                        <a href="{{ route('order.details', $order->id) }}" class="btn btn-outline">
                            Cancel
                        </a>

                    </div>
                </form>
            </div>
        </div>

    
    </div>
@endsection
