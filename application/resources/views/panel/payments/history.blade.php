@extends('panel.layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-8">
        <!-- Page Header -->
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-primary">Payment History</h2>
            <p class="text-sm text-slate-500 mt-1">View all your payment transactions</p>
        </div>

        <!-- Transactions Table -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">

            <div class="overflow-x-auto">
                <table class="table table-zebra w-full">
                    <thead class="bg-base-200">
                        <tr>
                            <th class="text-left">Transaction ID</th>
                            <th class="text-left">Order ID</th>
                            <th class="text-left">Amount</th>
                            <th class="text-center">Payment Method</th>
                            <th class="text-left">Status</th>
                            <th class="text-left">Date</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($transactions as $transaction)
                            <tr>
                                <td>
                                    <span class="font-mono text-sm font-semibold text-primary">
                                        {{ $transaction->transaction_id }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('order.details', $transaction->order_id) }}"
                                        class="link link-hover text-info">
                                        {{ $transaction->order->order_id }}
                                    </a>
                                </td>
                                <td>
                                    <span class="font-bold text-success">
                                        ${{ number_format($transaction->amount, 2) }}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <div class="flex items-center justify-center">
                                        @if (strtolower($transaction->payment_method) == 'paypal')
                                            <div
                                                class="flex items-center justify-center
                        h-10 w-10
                        rounded-full
                        bg-white
                        shadow-sm">
                                                <img src="{{ asset('assets/images/gateway/paypal.png') }}" alt="PayPal"
                                                    class="h-6 w-6 object-contain">
                                            </div>
                                        @else
                                            <div
                                                class="px-3 py-1
                        rounded-full
                        bg-info/10
                        text-info
                        text-sm
                        font-semibold
                        shadow-sm">
                                                {{ strtoupper($transaction->payment_method) }}
                                            </div>
                                        @endif
                                    </div>
                                </td>


                                <td>
                                    @if ($transaction->status == 1)
                                        <span class="badge badge-info">Pending </span>
                                    @elseif ($transaction->status == 2)
                                        <span class="badge badge-success">Completed</span>
                                    @elseif ($transaction->status == 3)
                                        <span class="badge badge-error">Failed</span>
                                    @endif
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
                                <td class="text-center">
                                    <a href="{{ route('payment.transaction.show', $transaction->transaction_id) }}"
                                        class="btn btn-sm btn-outline btn-info">
                                        <span class="icon-[tabler--eye] size-4"></span>
                                        View
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">
                                    <p>No transactions found</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if ($transactions->hasPages())
                <div class="flex justify-center items-center gap-2 p-4">
                    <div class="join">
                        {{-- Previous Button --}}
                        @if ($transactions->onFirstPage())
                            <button class="join-item btn btn-disabled" disabled>«</button>
                        @else
                            <a href="{{ $transactions->previousPageUrl() }}" class="join-item btn">«</a>
                        @endif

                        {{-- Page Numbers --}}
                        @foreach ($transactions->getUrlRange(1, $transactions->lastPage()) as $page => $url)
                            @if ($page == $transactions->currentPage())
                                <button class="join-item btn btn-active">{{ $page }}</button>
                            @else
                                <a href="{{ $url }}" class="join-item btn">{{ $page }}</a>
                            @endif
                        @endforeach

                        {{-- Next Button --}}
                        @if ($transactions->hasMorePages())
                            <a href="{{ $transactions->nextPageUrl() }}" class="join-item btn">»</a>
                        @else
                            <button class="join-item btn btn-disabled" disabled>»</button>
                        @endif
                    </div>
                </div>
            @endif
            <!-- <div class="p-4 border-t">
                            {{ $transactions->links() }}
                        </div> -->

        </div>

        <!-- Summary Card -->
        <!-- @if ($transactions->count() > 0)
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
                        <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg shadow-md p-6 text-white">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm opacity-90">Total Transactions</p>
                                    <h3 class="text-3xl font-bold mt-1">{{ $transactions->total() }}</h3>
                                </div>
                                <span class="icon-[tabler--receipt] size-12 opacity-50"></span>
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-lg shadow-md p-6 text-white">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm opacity-90">Total Paid</p>
                                    <h3 class="text-3xl font-bold mt-1">
                                        ${{ number_format($transactions->where('status', 1)->sum('amount'), 2) }}
                                    </h3>
                                </div>
                                <span class="icon-[tabler--cash] size-12 opacity-50"></span>
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg shadow-md p-6 text-white">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm opacity-90">Successful Payments</p>
                                    <h3 class="text-3xl font-bold mt-1">
                                        {{ $transactions->where('status', 1)->count() }}
                                    </h3>
                                </div>
                                <span class="icon-[tabler--check] size-12 opacity-50"></span>
                            </div>
                        </div>
                    </div>
    @endif -->
    </div>
@endsection
