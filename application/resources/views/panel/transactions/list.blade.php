@extends('panel.layouts.app')

@section('content')
    <div class="max-w-full mx-auto py-8">
        <!-- Page Header -->
        <div class="mb-6 flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold text-primary">All Transactions</h2>
                <p class="text-sm text-slate-500 mt-1">Manage all payment transactions</p>
            </div>
        </div>

        <!-- Filters -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <form method="GET" action="{{ route('transactions.index') }}" class="flex flex-3 flex-wrap gap-4">

                <!-- Search -->
                <div class="flex-1 form-control w-full md:w-1/2 lg:w-1/5">
                    <label class="label">
                        <span class="label-text font-semibold text-slate-700">Search</span>
                    </label>
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Transaction ID"
                        class="input input-bordered w-full focus:input-primary transition-all">
                </div>



                <!-- Date Range -->
                <div class="flex-1 form-control w-full md:w-1/2 lg:w-1/5">
                    <label class="label">
                        <span class="label-text font-semibold text-slate-700">Date Range</span>
                    </label>

                    <input type="text" id="date_range" name="date_range" value="{{ request('date_range') }}"
                        placeholder="Select date range"
                        class="input input-bordered w-full focus:input-primary transition-all text-xs px-2">
                </div>


                <!-- Actions -->
                <div class="flex-1 form-control w-full md:w-1/2 lg:w-1/5">
                    <label class="label">
                        <span class="label-text">&nbsp;</span>
                    </label>
                    <button type="submit" class="btn btn-primary text-white shadow-lg shadow-primary/30">
                        <span class="icon-[tabler--search] size-5"></span>
                        Filter
                    </button>
                </div>

            </form>
        </div>



        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="overflow-x-auto">
                <table class="table table-zebra w-full">
                    <thead class="bg-base-200">
                        <tr>
                            <th>SL</th>
                            <th>Transaction ID</th>
                            <th>User</th>
                            <th>Order ID</th>
                            <th>Amount</th>
                            <th>Payment Method</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($transactions as $index => $transaction)
                            <tr>
                                <td>{{ $transactions->firstItem() + $index }}</td>
                                <td>
                                    <span class="font-mono text-sm font-semibold text-primary">
                                        {{ $transaction->transaction_id }}
                                    </span>
                                </td>
                                <td>
                                    <div>
                                        <div class="font-semibold">{{ $transaction->user->name ?? 'N/A' }}</div>
                                        <div class="text-xs text-slate-500">{{ $transaction->user->email ?? '' }}</div>
                                    </div>
                                </td>
                                <td>
                                    @if ($transaction->order)
                                        <a href="{{ route('order.details', $transaction->order_id) }}"
                                            class="link link-hover text-info">
                                            {{ $transaction->order->order_id }}
                                        </a>
                                    @else
                                        <span class="text-slate-400">N/A</span>
                                    @endif
                                </td>
                                <td>
                                    <span class="font-bold text-success">
                                        ${{ number_format($transaction->amount, 2) }}
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-outline badge-info">
                                        {{ $transaction->payment_method }}
                                    </span>
                                </td>
                                <td>
                                    <select class="select select-sm select-bordered status-select"
                                        data-transaction-id="{{ $transaction->id }}"
                                        data-old-status="{{ $transaction->status }}">
                                        <option value="1" {{ $transaction->status == 1 ? 'selected' : '' }}>
                                            Pending
                                        </option>
                                        <option value="2" {{ $transaction->status == 2 ? 'selected' : '' }}>
                                            Completed
                                        </option>
                                        <option value="3" {{ $transaction->status == 3 ? 'selected' : '' }}>
                                            Failed
                                        </option>
                                    </select>
                                </td>
                                <td>
                                    <span class="text-sm text-slate-600">
                                        {{ $transaction->created_at->format('M d, Y') }}
                                    </span>
                                    <br>
                                    <span class="text-xs text-slate-400">
                                        {{ $transaction->created_at->format('h:i A') }}
                                    </span>
                                </td>
                                <td>
                                    <div class="flex gap-2">
                                        <a href="{{ route('transactions.show', $transaction->id) }}"
                                            class="btn btn-sm btn-outline btn-info" title="View Details">
                                            <span class="icon-[tabler--eye] size-4"></span>
                                        </a>
                                        <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST"
                                            class="inline"
                                            onsubmit="return confirm('Are you sure you want to delete this transaction?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline btn-error" title="Delete">
                                                <span class="icon-[tabler--trash] size-4"></span>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center py-8">
                                    <span class="icon-[tabler--receipt-off] size-16 text-slate-300 mx-auto mb-4"></span>
                                    <p class="text-slate-600 font-semibold">No transactions found</p>
                                    <p class="text-sm text-slate-500">Try adjusting your filters</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if ($transactions->hasPages())
                <div class="p-4 border-t">
                    {{ $transactions->links() }}
                </div>
            @endif
        </div>

        <!-- Summary Cards -->
        <!-- @if ($transactions->total() > 0)
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-6">
                        <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg shadow-md p-6 text-white">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm opacity-90">Total Transactions</p>
                                    <h3 class="text-3xl font-bold mt-1">{{ $transactions->total() }}</h3>
                                </div>
                                <span class="icon-[tabler--receipt] size-12 opacity-50"></span>
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-lg shadow-md p-6 text-white">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm opacity-90">Pending</p>
                                    <h3 class="text-3xl font-bold mt-1">
                                        {{ $transactions->where('status', 1)->count() }}
                                    </h3>
                                </div>
                                <span class="icon-[tabler--clock] size-12 opacity-50"></span>
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-lg shadow-md p-6 text-white">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm opacity-90">Completed</p>
                                    <h3 class="text-3xl font-bold mt-1">
                                        {{ $transactions->where('status', 2)->count() }}
                                    </h3>
                                </div>
                                <span class="icon-[tabler--check] size-12 opacity-50"></span>
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-red-500 to-red-600 rounded-lg shadow-md p-6 text-white">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm opacity-90">Failed</p>
                                    <h3 class="text-3xl font-bold mt-1">
                                        {{ $transactions->where('status', 3)->count() }}
                                    </h3>
                                </div>
                                <span class="icon-[tabler--x] size-12 opacity-50"></span>
                            </div>
                        </div>
                    </div>
    @endif -->
    </div>

    <!-- AJAX Status Update Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const statusSelects = document.querySelectorAll('.status-select');

            statusSelects.forEach(select => {
                select.addEventListener('change', function() {
                    const transactionId = this.dataset.transactionId;
                    const newStatus = this.value;
                    const oldStatus = this.dataset.oldStatus;

                    if (confirm('Are you sure you want to change the transaction status?')) {
                        updateTransactionStatus(transactionId, newStatus, this);
                    } else {
                        // Revert to old status
                        this.value = oldStatus;
                    }
                });
            });

            function updateTransactionStatus(transactionId, status, selectElement) {
                fetch('{{ route('transactions.update.status') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            transaction_id: transactionId,
                            status: status
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Update old status
                            selectElement.dataset.oldStatus = status;

                            // Show success message
                            showToast('Success', data.message, 'success');
                        } else {
                            // Revert to old status
                            selectElement.value = selectElement.dataset.oldStatus;
                            showToast('Error', data.message, 'error');
                        }
                    })
                    .catch(error => {
                        // Revert to old status
                        selectElement.value = selectElement.dataset.oldStatus;
                        showToast('Error', 'Failed to update transaction status', 'error');
                    });
            }

            function showToast(title, message, type) {
                // Simple alert for now - you can replace with a toast library
                alert(title + ': ' + message);
            }
        });
    </script>
@endsection
@push('plugins')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/airbnb.css">

    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
@endpush
@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr("#date_range", {
                mode: "range",
                dateFormat: "Y-m-d",
                maxDate: "today",
            });
        });
    </script>
@endpush
