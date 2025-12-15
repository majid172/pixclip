@extends('panel.layouts.app')
@section('content')
    <div class="rounded-box shadow-base-300/10 bg-base-100 w-full pb-2 shadow-md">
        <h3 class="p-4 text-primary font-semibold">Transactions List</h3>
        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th>SL.</th>
                        <th>Invoice No.</th>
                        <th>User Name</th>
                        <th>Amount</th>
                        <th>Payment Method</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($transactions as $item)
                        <tr>
                            <td></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">
                                <p class="text-center text-error font-semibold">Empty Transaction</p>
                            </td>
                        </tr>
                    @endforelse
                     
                </tbody>
            </table>
        </div>
        
        {{-- Pagination Links --}}
        @if ($transactions->hasPages())
            <div class="flex justify-center items-center gap-2 p-4">
                <div class="join">
                    {{-- Previous Button --}}
                    @if ($users->onFirstPage())
                        <button class="join-item btn btn-disabled" disabled>«</button>
                    @else
                        <a href="{{ $users->previousPageUrl() }}" class="join-item btn">«</a>
                    @endif

                    {{-- Page Numbers --}}
                    @foreach ($users->getUrlRange(1, $users->lastPage()) as $page => $url)
                        @if ($page == $users->currentPage())
                            <button class="join-item btn btn-active">{{ $page }}</button>
                        @else
                            <a href="{{ $url }}" class="join-item btn">{{ $page }}</a>
                        @endif
                    @endforeach

                    {{-- Next Button --}}
                    @if ($users->hasMorePages())
                        <a href="{{ $users->nextPageUrl() }}" class="join-item btn">»</a>
                    @else
                        <button class="join-item btn btn-disabled" disabled>»</button>
                    @endif
                </div>
            </div>
        @endif

    </div>
@endsection
