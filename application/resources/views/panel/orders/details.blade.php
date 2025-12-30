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
                            <p class="text-sm text-slate-500">{{$selected_services[0]->service_name}}</p>
                        </div>

                        {{-- STATS ROW --}}
                        <div class="flex flex-wrap gap-3">

                            {{-- TOTAL ORDERS --}}
                            <div class="flex-1 min-w-[200px] flex bg-primary items-center gap-3 shadow px-4 py-2 rounded-md">
                                <i class="fa-solid fa-cart-shopping text-primary"></i>
                                <div>
                                    <p class="font-semibold text-success">{{ $total_orders }}</p>
                                    <p class="text-sm font-semibold text-success">Total Orders</p>
                                </div>
                            </div>

                            {{-- UNPAID ORDERS --}}
                            <div class="flex-1 min-w-[200px] flex items-center gap-3 bg-yellow-100 border border-primary px-4 py-2 rounded-md">
                                <i class="fa-solid fa-file-invoice-dollar text-yellow-600"></i>
                                <div>
                                    <p class="font-semibold text-primary">{{ $total_orders }}</p>
                                    <p class="text-sm font-semibold text-primary">Unpaid Orders</p>
                                </div>
                            </div>

                            {{-- TOTAL DUE --}}
                            <div class="flex-1 min-w-[200px] flex items-center gap-3 bg-red-100 border border-red-300 px-4 py-2 rounded-md">
                                <i class="fa-solid fa-credit-card text-red-600"></i>
                                <div>
                                    <p class="font-semibold text-warning">${{ numberFormat($order->price) }}</p>
                                    <p class="text-sm font-semibold text-warning">Total Due</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- RIGHT SIDE: STATUS BADGE --}}
                    <div class="mt-4 md:mt-0">
                        @php
                            $badgeClass = 'badge badge-lg text-white border-0';
                            $colorClass = match($order->status) {
                                'In Review' => 'bg-[#079bc4]',
                                'Received' => 'bg-[#5fac05]',
                                'Pending' => 'bg-[#9c27b0]',
                                'Invoiced' => 'bg-[#00bcd4]',
                                'Delivered' => 'bg-[#0ab210]',
                                default => 'bg-gray-500',
                            };
                        @endphp
                        <span class="{{ $badgeClass }} {{ $colorClass }} px-6 py-4 rounded-md">
                            {{ $order->status }}
                        </span>
                    </div>
                </div>

                <hr>
                <div class="mb-4"></div>
                <!-- Tabs for Overview, Chat, Redo, and Output -->
                <div class="flex overflow-x-auto pb-2 space-x-4 gap-4 mb-4 whitespace-nowrap scrollbar-hide">
                    <button class="tab-btn btn px-4 py-2 rounded-lg btn-primary flex-shrink-0" data-target="overviewContent">Overview</button>
                    <button class="tab-btn btn px-4 py-2 rounded-lg flex-shrink-0" data-target="invoiceContent">Invoice</button>
                    <button class="tab-btn btn px-4 py-2 rounded-lg flex-shrink-0" data-target="redoContent">Redo</button>
                    <button class="tab-btn btn px-4 py-2 rounded-lg flex-shrink-0" data-target="chatContent">Chat</button>
                    <button class="tab-btn btn px-4 py-2 rounded-lg flex-shrink-0" data-target="outputContent">Output</button>
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
