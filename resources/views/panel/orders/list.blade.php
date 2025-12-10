@extends('panel.layouts.app')
@section('content')
    <div class="px-3 py-2">
        <h6 class=" text-primary font-bold">{{ $title }}</h6>
    </div>

    <div class="rounded-box shadow-base-300/10 bg-base-100 w-full pb-2 shadow-md">

        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th>Job Title</th>
                        <th>Date</th>
                        <th>Order No.</th>
                        @if (auth()->user()->is_admin)
                            <th>User Id</th>
                        @endif


                        <th>Amount</th>
                        <th>Quantity</th>
                        <th>Payment</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($orders as $item)
                        <tr class="text-center">
                            <td>{{ Str::ucfirst($item->job_title) }}</td>
                            <td>{{ dateFormat($item->created_at) }}</td>
                            <td>
                                <a href="/admin/order/{{ $item->id }}" class="text-primary">#{{ $item->order_id }}</a>
                            </td>
                            @if (auth()->user()->is_admin)
                                <td>
                                    <a href="javascript:void(0)" class="text-success">
                                        #{{ $item->user->userDetail->uuid }}
                                    </a>
                                </td>
                            @endif

                            <td>${{ $item->price }} </td>
                            <td>{{ $item->image_quantity }} </td>
                            <td>
                                @if ($item->is_paid == 1)
                                    <span class="badge badge-soft badge-primary text-xs">@lang('Paid')</span>
                                @else
                                    <span class="badge badge-soft badge-error text-xs">@lang('Unpaid')</span>
                                @endif

                            </td>
                            <td>

                                @if ($item->status == 'In Review')
                                    <a href="javascript:void(0)" class=""><span
                                            class="badge badge-soft badge-success text-xs">In
                                            Review</span></a>
                                @elseif ($item->status == 'Pending')
                                    <a href="javascript:void(0)" class="badge badge-soft badge-primary text-xs">Pending</a>
                                @elseif ($item->status == 'Processing')
                                    <a href="javascript:void(0)"
                                        class="badge badge-soft badge-primary text-xs">Processing</a>
                                @elseif ($item->status == 'Received')
                                    <a href="javascript:void(0)" class="badge badge-soft badge-success text-xs">Received</a>
                                @elseif($item->status == 'Finalizing')
                                    <a href="javascript:void(0)"><span
                                            class="badge badge-soft badge-success text-xs">@lang('Finalized')</span></a>
                                @elseif($item->status == 'Completed')
                                    <a href="javascript:void(0)"
                                        class="badge badge-soft badge-success text-xs">@lang('Completed')</a>
                                @elseif($item->status == 'Invoiced')
                                    <a href="javascript:void(0)"
                                        class="badge badge-soft badge-info text-xs">@lang('Invoiced')</a>
                                @elseif ($item->status == 'Downloaded')
                                    <a href="javascript:void(0)"
                                        class="badge badge-soft badge-warning text-xs">Downloaded</a>
                                @elseif ($item->status == 'Canceled')
                                    <a href="javascript:void(0)" class="badge badge-soft badge-error text-xs">Canceled</a>
                                @endif


                            </td>

                            <td>
                                @if (auth()->user()->is_admin == '1')
                                    {{-- <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                            class="icon-[tabler--pencil] size-5"></span></button> --}}
                                    <button type="button" class="btn btn-circle btn-text btn-sm" aria-haspopup="dialog"
                                        aria-expanded="false" aria-controls="add-new-address"
                                        data-overlay="#add-new-address"><span
                                            class="icon-[tabler--pencil] size-5"></span></button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                            class="icon-[tabler--trash] size-5"></span></button>
                                    <a class="btn btn-circle btn-text btn-sm"
                                        href="{{ route('order.details', $item->id) }}">
                                        <span class="icon-[tabler--eye] size-5"></span></a>
                                    {{-- <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                            class="icon-[tabler--dots-vertical] size-5"></span></button> --}}
                                @else
                                    <a class="btn btn-circle btn-text btn-sm"
                                        href="{{ route('order.details', $item->id) }}">
                                        <span class="icon-[tabler--eye] size-5"></span></a>
                                @endif

                            </td>
                        </tr>





                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">
                                <p class="text-center text-warning">@lang('No orders found')</p>
                            </td>

                        </tr>
                    @endforelse



                </tbody>
            </table>
            <div id="add-new-address" class="overlay zph40 overlay-open:opacity-100 overlay-open:duration-300 vsva5 hidden"
                role="dialog" style="">
                <div class="aamme bijjq w-full">
                    <div class="kvrm1">
                        <div class="smg08 relative fxh9b">
                            fdasfasf
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
