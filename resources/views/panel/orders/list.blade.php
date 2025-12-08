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
                        <th>Date</th>
                        <th>Order No.</th>
                        <th>Job Title</th>
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
                            <td>{{ dateFormat($item->created_at) }}</td>
                            <td>
                                <a href="/admin/order/{{ $item->id }}" class="text-primary">#{{ $item->order_id }}</a>
                            </td>

                            <td>{{ Str::ucfirst($item->job_title) }}</td>
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
                                    <a href="javascript:void(0)" class=""><span class="badge badge-soft badge-success text-xs">In
                                            Review</span></a>
                                @elseif ($item->status == 'Pending')
                                    <a href="javascript:void(0)" class="badge badge-soft badge-primary text-xs">Pending</a>
                                @elseif ($item->status == 'Processing')
                                    <a href="javascript:void(0)" class="badge badge-soft badge-primary text-xs">Processing</a>
                                @elseif ($item->status == 'Received')
                                    <a href="javascript:void(0)" class="badge badge-soft badge-success text-xs">Received</a>
                                @elseif($item->status == 'Finalizing')
                                    <a href="javascript:void(0)"><span
                                            class="badge badge-soft badge-success text-xs">@lang('Finalized')</span></a>
                                @elseif($item->status == 'Completed')
                                    <a href="javascript:void(0)" class="badge badge-soft badge-success text-xs">@lang('Completed')</a>
                                @elseif($item->status == 'Invoiced')
                                    <a href="javascript:void(0)" class="badge badge-soft badge-info text-xs">@lang('Invoiced')</a>
                                @elseif ($item->status == 'Downloaded')
                                    <a href="javascript:void(0)" class="badge badge-soft badge-warning text-xs">Downloaded</a>
                                @elseif ($item->status == 'Canceled')
                                    <a href="javascript:void(0)" class="badge badge-soft badge-error text-xs">Canceled</a>
                                @endif


                            </td>

                            <td>
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                        class="icon-[tabler--pencil] size-5"></span></button>
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                        class="icon-[tabler--trash] size-5"></span></button>
                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                        class="icon-[tabler--dots-vertical] size-5"></span></button>
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
        </div>
    </div>
@endsection
