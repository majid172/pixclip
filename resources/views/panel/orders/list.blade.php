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
                                    <button type="button" class="btn btn-circle btn-text btn-sm js-edit-status-btn"
                                        aria-haspopup="dialog" aria-expanded="false" aria-controls="update-status-modal"
                                        data-overlay="#update-status-modal" data-id="{{ $item->id }}"
                                        data-status="{{ $item->status }}">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
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
            <div id="update-status-modal" class="overlay zph40 overlay-open:opacity-100 overlay-open:duration-300 hidden"
                role="dialog">
                <div class="overlay-body w-[90%] max-w-md rounded-box bg-base-100 p-6 shadow-xl">
                    <div class="mb-4 flex items-center justify-between">
                        <h3 class="text-lg font-bold">Update Order Status</h3>
                        <button type="button" class="btn btn-circle btn-text btn-sm" aria-label="Close"
                            data-overlay="#update-status-modal">
                            <span class="icon-[tabler--x] size-5"></span>
                        </button>
                    </div>

                    <form action="{{ route('order.status.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="order_id" id="modal-order-id">

                        <div class="mb-4">
                            <label class="label label-text" for="modal-order-status">Select Status</label>
                            <select class="select select-bordered w-full" name="status" id="modal-order-status">
                                <option value="In Review">In Review</option>
                                <option value="Pending">Pending</option>
                                <option value="Processing">Processing</option>
                                <option value="Received">Received</option>
                                <option value="Finalizing">Finalizing</option>
                                <option value="Completed">Completed</option>
                                <option value="Invoiced">Invoiced</option>
                                <option value="Downloaded">Downloaded</option>
                                <option value="Canceled">Canceled</option>
                            </select>
                        </div>

                        <div class="flex justify-end gap-2">
                            <button type="button" class="btn btn-soft btn-secondary"
                                data-overlay="#update-status-modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update Status</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editButtons = document.querySelectorAll('.js-edit-status-btn');
            const modalOrderId = document.getElementById('modal-order-id');
            const modalOrderStatus = document.getElementById('modal-order-status');

            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const orderId = this.dataset.id;
                    const orderStatus = this.dataset.status;

                    if (modalOrderId) modalOrderId.value = orderId;
                    if (modalOrderStatus) modalOrderStatus.value = orderStatus;
                });
            });
        });
    </script>
@endsection
