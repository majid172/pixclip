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
                        <th> Title</th>
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
                                <a href="{{ route('order.details', $item->id) }}" class="text-primary">{{ $item->order_id }}</a>
                            </td>
                            @if (auth()->user()->is_admin)
                                <td>
                                    <a href="{{ route('user.show', $item->user_id) }}" class="text-success">
                                        {{ $item->user?->userDetail?->uuid ?? "-"}}
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
                            
                            @if(auth()->user()->is_admin)
                            <td>
                                <select class="select select-bordered select-sm w-full max-w-xs js-status-action text-primary border-primary focus:border-primary focus:ring-primary font-semibold"
                                    data-id="{{ $item->id }}">
                                    @foreach (['In Review', 'Pending','Received','Invoiced', 'Processing',  'Finalizing', 'Completed',  'Downloaded', 'Canceled'] as $status)
                                        <option value="{{ $status }}"
                                            {{ $item->status == $status ? 'selected' : '' }}>
                                            {{ $status }}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            @else
                            <td>
                                <!-- Display badge for non-admins -->
                                @if ($item->status == 'In Review')
                                    <span class="badge badge-soft badge-success text-xs">In Review</span>
                                @elseif ($item->status == 'Pending')
                                    <span class="badge badge-soft badge-primary text-xs">Pending</span>
                                @elseif($item->status == 'Invoiced')
                                    <span class="badge badge-soft badge-info text-xs">@lang('Invoiced')</span>
                                @elseif ($item->status == 'Processing')
                                    <span class="badge badge-soft badge-primary text-xs">Processing</span>
                                @elseif ($item->status == 'Received')
                                    <span class="badge badge-soft badge-success text-xs">Received</span>
                                @elseif($item->status == 'Finalizing')
                                    <span class="badge badge-soft badge-success text-xs">@lang('Finalized')</span>
                                @elseif($item->status == 'Completed')
                                    <span class="badge badge-soft badge-success text-xs">@lang('Completed')</span>
                                
                                @elseif ($item->status == 'Downloaded')
                                    <span class="badge badge-soft badge-warning text-xs">Downloaded</span>
                                @elseif ($item->status == 'Canceled')
                                    <span class="badge badge-soft badge-error text-xs">Canceled</span>
                                @endif
                            </td>
                            @endif

                           
                            <td>
                               
                                @if (auth()->user()->is_admin == '1')
                                   
                                    <!-- <button type="button" class="btn btn-circle btn-text btn-sm js-edit-status-btn"
                                        aria-haspopup="dialog" aria-expanded="false" aria-controls="update-status-modal"
                                        data-overlay="#update-status-modal" data-id="{{ $item->id }}"
                                        data-status="{{ $item->status }}">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button> -->
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

@push('js')
    <!-- jQuery Local -->
    <script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.js-status-action').on('change', function() {
                const $this = $(this);
                const orderId = $this.data('id');
                const status = $this.val();
                const originalColor = $this.css('color');

                // Visual feedback
                $this.prop('disabled', true);
                $this.css('color', '#9ca3af');

                $.ajax({
                    url: "{{ route('order.status.update') }}",
                    type: "POST",
                    data: {
                        order_id: orderId,
                        status: status,
                        _token: "{{ csrf_token() }}"
                    },
                    dataType: 'json',
                    success: function(response) {
                        $this.prop('disabled', false);
                        $this.css('color', originalColor);

                        if (response.success) {
                            alert(response.message);
                            location.reload();
                        } else {
                            alert('Something went wrong');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                        $this.prop('disabled', false);
                        $this.css('color', originalColor);
                        alert('Error updating status');
                    }
                });
            });
        });
    </script>
@endpush
