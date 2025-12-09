@extends('panel.layouts.app')
@section('content')
    <div class="max-w-7xl mx-auto space-y-8 text-slate-600 ">

        <div class="relative bg-white rounded-xl shadow p-6 space-y-6 mb-6">

            <div class="flex flex-col md:flex-row md:items-center justify-between">

                {{-- LEFT SIDE: ORDER + STATS --}}
                <div class="space-y-4">

                    {{-- ORDER TITLE --}}
                    <div>
                        <h1 class="text-2xl font-bold text-slate-800">{{ $order->order_id }}</h1>
                        <p class="text-sm text-slate-500">{{ __($order->service_id) }}</p>
                    </div>

                    {{-- STATS ROW --}}
                    <div class="flex flex-wrap gap-3">

                        {{-- TOTAL ORDERS --}}
                        <div class="flex items-center gap-3 shadow px-4 py-2 rounded-md">
                            <i class="fa-solid fa-cart-shopping text-primary"></i>
                            <div >
                                <p class="font-semibold text-blue-700">{{ $total_orders }}</p>
                                <p class="text-xs text-slate-500">Total Orders</p>
                            </div>
                        </div>

                        {{-- UNPAID ORDERS --}}
                        <div class="flex items-center gap-3 bg-yellow-100 border border-yellow-300 px-4 py-2 rounded-md">
                            <i class="fa-solid fa-file-invoice-dollar text-yellow-600"></i>
                            <div>
                                <p class="font-semibold text-yellow-700">{{ $total_orders }}</p>
                                <p class="text-xs text-slate-500">Unpaid Orders</p>
                            </div>
                        </div>

                        {{-- TOTAL DUE --}}
                        <div class="flex items-center gap-3 bg-red-100 border border-red-300 px-4 py-2 rounded-md">
                            <i class="fa-solid fa-credit-card text-red-600"></i>
                            <div>
                                <p class="font-semibold text-red-700">{{ '$0.00' }}</p>
                                <p class="text-xs text-slate-500">Total Due</p>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- RIGHT SIDE: STATUS BADGE --}}
                <div class="mt-4 md:mt-0">
                    @php

                        $status = '';
                        if ($order->status === 'In Review') {
                            $status =
                                '<span class="float-end" style="padding: 5px 30px; color: white; background-color: #079bc4; border-radius: 5px;">' .
                                $order->status .
                                '</span>';
                        } elseif ($order->status === 'Received') {
                            $status =
                                '<span class="float-end" style="padding: 5px 30px; color: white; background-color: #5fac05; border-radius: 5px;">' .
                                $order->status .
                                '</span>';
                        } elseif ($order->status === 'Pending') {
                            $status =
                                '<span class="float-end" style="padding: 5px 30px; color: white; background-color: #9c27b0; border-radius: 5px;">' .
                                $order->status .
                                '</span>';
                        } elseif ($order->status === 'Invoiced') {
                            $status =
                                '<span class="float-end" style="padding: 5px 30px; color: white; background-color: #00bcd4; border-radius: 5px;">' .
                                $order->status .
                                '</span>';
                        } elseif ($order->status === 'Delivered') {
                            $status =
                                '<span class="float-end" style="padding: 5px 30px; color: white; background-color: #0ab210; border-radius: 5px;">' .
                                $order->status .
                                '</span>';
                        }
                        echo $status;
                    @endphp
                </div>

            </div>
            <hr>
            <div class="flex flex-wrap gap-3">
                <button class="px-5 py-2 rounded-full bg-blue-600 text-white text-sm shadow">Overview</button>
                <button class="px-5 py-2 rounded-full bg-white border text-sm hover:bg-slate-50">Invoice</button>
                <button class="px-5 py-2 rounded-full bg-white border text-sm hover:bg-slate-50">Redo</button>
                <button class="px-5 py-2 rounded-full bg-white border text-sm hover:bg-slate-50">Chat</button>
                <button class="px-5 py-2 rounded-full bg-white border text-sm hover:bg-slate-50">Output</button>
            </div>
        </div>


        <!-- ✅ TABS -->


        <!-- ✅ INFO CARDS (Image Quantity, Complexity, Invoice) -->


        <div class="flex flex-col md:flex-row gap-4 w-full text-sm mb-6 mt-6">

            <!-- Card 1: Image Complexity -->
            <div class="flex-1 rounded-box bg-base-100 shadow p-4 ">
                <p class="text-xs text-slate-400 mb-1">Image Quantity</p>
                <h3 class="text-3xl font-bold text-primary">{{ $order->image_quantity }}</h3>
            </div>

            <!-- Card 2: Return File Extensions -->
            <div class="flex-1 rounded-box bg-base-100 shadow p-4 ">
                <p class="text-xs text-slate-400 mb-1">Image Complexity</p>
                <h3 class="text-xl font-semibold text-slate-700">{{ Str::ucfirst($order->image_complexity) }}</h3>
            </div>

            <!-- Card 3: Turn Around -->
            <div class="flex-1 rounded-box bg-base-100 shadow p-4 ">
                <p class="text-warning font-bold text-center">
                    Invoice not generated yet
                </p>
            </div>

        </div>


        <!-- ✅ DATES -->
        <div class="flex flex-col md:flex-row w-full gap-6 mb-6">
            <div class="flex-1 bg-white p-6 rounded-xl shadow-sm">
                <p class="text-xs text-slate-400">Order Date</p>
                <p class="font-medium mt-1">{{ date('d M, Y, h:i A', strtotime($order->created_at)) }}</p>
            </div>

            <div class="flex-1 bg-white p-6 rounded-xl shadow-sm">
                <p class="text-xs text-slate-400">Turnaround</p>
                <p class="font-medium mt-1 capitalize">{{ $order->turnaround }} {{ __('Hours') }}</p>
            </div>

            <div class="flex-1 bg-white p-6 rounded-xl shadow-sm">
                <p class="text-xs text-slate-400">Delivery Deadline</p>
                @if ($order->turnaround !== 'flexible')
                    <p class="text-blue-500">
                        {{ date('d M, Y, h:i A', strtotime('+' . $order->turnaround . ' hours', $order->submitted_at)) }}
                    </p>
                @else
                    <p class="text-blue-500">{{ __('Flexible') }}</p>
                @endif

            </div>
        </div>

        <!-- ✅ SERVICES & FORMATS -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">

            <div class="bg-white p-6 rounded-xl shadow-sm">
                <h3 class="text-sm font-medium text-slate-500 mb-4">Selected Services</h3>
                <div class="flex flex-wrap gap-2">
                    @foreach ($services as $service)
                        <span class="px-3 py-1 text-xs bg-pink-50 text-pink-600 border border-pink-200 rounded-full">
                            {{ $service->service_name }}
                        </span>
                    @endforeach
                </div>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm ">
                <h3 class="text-sm font-medium text-slate-500 mb-4">Return File Formats</h3>
                <div class="flex gap-2">

                    @if (isset($order->return_file_extension))
                        @foreach (json_decode($order->return_file_extension) as $extension)
                            <button type="button"
                                class="btn btn-success btn-sm my-1 text-xs font-semibold rounded uppercase">{{ strtoupper($extension) }}</button>
                        @endforeach
                    @endif

                </div>
            </div>

        </div>

        <!-- ✅ INSTRUCTION -->
        <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-blue-500">
            <h3 class="text-sm font-medium text-slate-500 mb-2">Special Instruction</h3>
            <p class="text-slate-700 text-sm leading-relaxed">
                {!! $order->instruction !!}
            </p>
        </div>

    </div>
@endsection
