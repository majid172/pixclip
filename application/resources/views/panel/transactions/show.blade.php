@extends('panel.layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto py-8">
        <!-- Page Header -->
        <div class="mb-6 flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold text-primary">Transaction Details</h2>
                <p class="text-sm text-slate-500 mt-1">
                    Viewing details for transaction <span class="font-mono font-semibold">{{ $transaction->transaction_id }}</span>
                </p>
            </div>
            <a href="{{ route('transactions.index') }}" class="btn btn-outline btn-sm">
                <span class="icon-[tabler--arrow-left] size-4"></span>
                Back to List
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Left Column (Transaction Info) -->
            <div class="md:col-span-2 space-y-6">
                
                <!-- Main Status Card -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-semibold text-gray-800">Transaction Info</h3>
                        
                        @php
                            $statusClass = '';
                            $statusLabel = '';
                            switch($transaction->status) {
                                case 1:
                                    $statusClass = 'badge-warning';
                                    $statusLabel = 'Pending';
                                    break;
                                case 2:
                                    $statusClass = 'badge-success';
                                    $statusLabel = 'Completed';
                                    break;
                                case 3:
                                    $statusClass = 'badge-error';
                                    $statusLabel = 'Failed';
                                    break;
                                default:
                                    $statusClass = 'badge-ghost';
                                    $statusLabel = 'Unknown';
                            }
                        @endphp
                        
                        <span class="badge {{ $statusClass }} badge-lg">
                            {{ $statusLabel }}
                        </span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label class="text-sm font-medium text-slate-600 block">Transaction ID</label>
                            <span class="text-base font-mono font-semibold text-primary select-all">
                                {{ $transaction->transaction_id }}
                            </span>
                        </div>

                        <div>
                            <label class="text-sm font-medium text-slate-600 block">Amount</label>
                            <span class="text-2xl font-bold text-success">
                                ${{ number_format($transaction->amount, 2) }}
                            </span>
                        </div>

                        <div>
                            <label class="text-sm font-medium text-slate-600 block">Payment Method</label>
                            <span class="badge badge-outline badge-info mt-1">
                                {{ $transaction->payment_method }}
                            </span>
                        </div>

                        <div>
                            <label class="text-sm font-medium text-slate-600 block">Date & Time</label>
                            <span class="text-sm font-semibold">
                                {{ $transaction->created_at->format('M d, Y') }}
                            </span>
                            <br>
                            <span class="text-xs text-slate-500">
                                {{ $transaction->created_at->format('h:i A') }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Order Details -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Order Details</h3>
                        @if($transaction->order)
                            <a href="{{ route('order.details', $transaction->order_id) }}" class="btn btn-xs btn-outline btn-primary">
                                View Order
                            </a>
                        @endif
                    </div>

                    @if($transaction->order)
                        <div class="overflow-x-auto">
                            <table class="table table-sm w-full">
                                <tbody>
                                    <tr>
                                        <td class="text-slate-500 font-medium w-1/3">Order ID</td>
                                        <td class="font-mono font-semibold">{{ $transaction->order->order_id }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-slate-500 font-medium">Job Title</td>
                                        <td>{{ $transaction->order->job_title }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-slate-500 font-medium">Quantity</td>
                                        <td>{{ $transaction->order->image_quantity }} Images</td>
                                    </tr>
                                    <tr>
                                        <td class="text-slate-500 font-medium">Order Price</td>
                                        <td class="font-bold text-gray-700">${{ number_format($transaction->order->price, 2) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-warning">
                            <span class="icon-[tabler--alert-circle] size-5"></span>
                            <span>Order information not available.</span>
                        </div>
                    @endif
                </div>

            </div>

            <!-- Right Column (User & Actions) -->
            <div class="md:col-span-1 space-y-6">
                
                <!-- Action Card -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Update Status</h3>
                    
                    <form action="{{ route('transactions.update', $transaction->id) }}" method="POST" id="statusForm">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-control w-full mb-4">
                            <select name="status" class="select select-bordered w-full" id="statusSelect">
                                <option value="1" {{ $transaction->status == 1 ? 'selected' : '' }}>Pending</option>
                                <option value="2" {{ $transaction->status == 2 ? 'selected' : '' }}>Completed</option>
                                <option value="3" {{ $transaction->status == 3 ? 'selected' : '' }}>Failed</option>
                            </select>
                        </div>
                        
                        <button type="button" onclick="confirmUpdate()" class="btn btn-primary w-full">
                            Update Status
                        </button>
                    </form>

                     <div class="divider my-4"></div>
                     
                     <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this transaction? This action cannot be undone.');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline btn-error w-full">
                            <span class="icon-[tabler--trash] size-4 mr-2"></span>
                            Delete Transaction
                        </button>
                    </form>
                </div>

                <!-- User Info -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">User Information</h3>
                    
                    @if($transaction->user)
                        <div class="flex items-center gap-3 mb-4">
                            <div class="avatar placeholder">
                                <div class="bg-neutral text-neutral-content rounded-full w-12">
                                    <span class="text-xl">{{ substr($transaction->user->name, 0, 1) }}</span>
                                </div>
                            </div>
                            <div>
                                <div class="font-bold">{{ $transaction->user->name }}</div>
                                <div class="text-xs text-slate-500">Customer</div>
                            </div>
                        </div>
                        
                        <div class="space-y-2">
                            <div class="flex gap-2 text-sm">
                                <span class="icon-[tabler--mail] size-5 text-slate-400"></span>
                                <span class="text-slate-600 truncate">{{ $transaction->user->email }}</span>
                            </div>
                            <div class="flex gap-2 text-sm">
                                <span class="icon-[tabler--phone] size-5 text-slate-400"></span>
                                <span class="text-slate-600">{{ $transaction->user->phone ?? 'No phone' }}</span>
                            </div>
                        </div>

                        <div class="mt-4 pt-4 border-t">
                            <a href="{{ route('admin.user.show', $transaction->user->id) }}" class="btn btn-sm btn-ghost w-full">
                                View Profile
                            </a>
                        </div>
                    @else
                        <div class="alert alert-sm alert-ghost">
                            User info unavailable
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>

    <script>
        function confirmUpdate() {
            if(confirm('Are you sure you want to update the transaction status?')) {
                document.getElementById('statusForm').submit();
            }
        }
    </script>
@endsection
