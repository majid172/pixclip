@extends('panel.layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto space-y-8 text-slate-600 ">
        <div class="relative space-y-6 mb-6">
            <div class="rounded-xl shadow p-6 bg-white">
                <div class="flex flex-col md:flex-row md:items-center justify-between mb-5">

                    {{-- LEFT SIDE: ORDER + STATS --}}
                    <div class="space-y-4">

                        {{-- ORDER TITLE --}}
                        <div>
                            <h1 class="text-2xl font-bold text-primary">{{ $order->order_id }}</h1>
                            <p class="text-sm text-slate-500">{{ __($order->service_id) }}</p>
                        </div>

                        {{-- STATS ROW --}}
                        <div class="flex flex-wrap gap-3">

                            {{-- TOTAL ORDERS --}}
                            <div class="flex bg-primary items-center gap-3 shadow px-4 py-2 rounded-md">
                                <i class="fa-solid fa-cart-shopping text-primary"></i>
                                <div>
                                    <p class="font-semibold text-success">{{ $total_orders }}</p>
                                    <p class="text-sm font-semibold text-success">Total Orders</p>
                                </div>
                            </div>

                            {{-- UNPAID ORDERS --}}
                            <div class="flex items-center gap-3 bg-yellow-100 border border-primary px-4 py-2 rounded-md">
                                <i class="fa-solid fa-file-invoice-dollar text-yellow-600"></i>
                                <div>
                                    <p class="font-semibold text-primary">{{ $total_orders }}</p>
                                    <p class="text-sm font-semibold text-primary">Unpaid Orders</p>
                                </div>
                            </div>

                            {{-- TOTAL DUE --}}
                            <div class="flex items-center gap-3 bg-red-100 border border-red-300 px-4 py-2 rounded-md">
                                <i class="fa-solid fa-credit-card text-red-600"></i>
                                <div>
                                    <p class="font-semibold text-warning">{{ '$0.00' }}</p>
                                    <p class="text-sm font-semibold text-warning">Total Due</p>
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
                <div class="mb-4"></div>
                <!-- Tabs for Overview, Chat, Redo, and Output -->
                <div class="flex space-x-4 gap-4 mb-4">
                    <button class="tab-btn btn px-4 py-2 rounded-lg btn-primary" data-target="overviewContent">Overview</button>
                    <button class="tab-btn btn px-4 py-2 rounded-lg" data-target="invoiceContent">Invoice</button>
                    <button class="tab-btn btn px-4 py-2 rounded-lg" data-target="redoContent">Redo</button>
                    <button class="tab-btn btn px-4 py-2 rounded-lg" data-target="chatContent">Chat</button>
                    <button class="tab-btn btn px-4 py-2 rounded-lg" data-target="outputContent">Output</button>
                </div>
            </div>


            <!-- Tab Content -->


            <div id="tabContent" class="rounded-xl">
                <div id="overviewContent" class="tab-panel">
                    @include('panel.orders.overview')
                </div>
                <div id="invoiceContent" class="tab-panel hidden">
                    @include('panel.orders.invoice')
                </div>
                <div id="redoContent" class="tab-panel hidden">
                    @include('panel.orders.redo')
                </div>
                <div id="chatContent" class="tab-panel hidden">
                    @include('panel.orders.chat')
                </div>
                <div id="outputContent" class="tab-panel hidden">
                    @include('panel.orders.output')
                </div>
            </div>

        </div>

        <!-- Other sections like Image Complexity, Services, and Date details go here -->


    </div>

    @push('js')
        <script>
            const tabs = document.querySelectorAll('.tab-btn');
            const panels = document.querySelectorAll('.tab-panel');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    // Remove active styles from all tabs
                    tabs.forEach(t => t.classList.remove('btn-primary', 'text-white'));
                    // tabs.forEach(t => t.classList.add('bg-gray-100', 'text-gray-800'));

                    // Hide all panels
                    panels.forEach(panel => panel.classList.add('hidden'));

                    // Show the target panel
                    const target = document.getElementById(tab.dataset.target);
                    target.classList.remove('hidden');

                    // Add active styles to clicked tab
                    tab.classList.add('btn-primary', 'text-white');
                    // tab.classList.remove('bg-gray-100', 'text-gray-800');
                });
            });

            // Optionally, set the first tab as active on page load
            tabs[0].classList.add('btn-primary', 'text-white');
        </script>
    @endpush
@endsection
