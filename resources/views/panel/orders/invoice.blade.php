<div class="card bg-base-100 shadow-xl rounded-box border border-base-content/5 overflow-hidden print:shadow-none print:border-none print:w-full print:absolute print:top-0 print:left-0 print:m-0 print:z-[9999]" id="invoice-print-area">
    
    <div class="p-8 md:p-12 relative">
        
        {{-- Header Top --}}
        <div class="flex justify-between items-center mb-12 border-b border-base-content/10 pb-4">
             <div class="text-primary">
                <span class="icon-[tabler--send] size-8"></span> {{-- Placeholder Logo Icon --}}
            </div>
            <h1 class="text-lg font-bold text-base-content/40 uppercase tracking-widest">INVOICE# {{ $order->order_id }}</h1>
        </div>

        {{-- Billing Details --}}
        <div class="flex flex-col md:flex-row justify-between mb-16 gap-8">
            {{-- Billed From --}}
            <div>
                <h3 class="font-bold text-base-content/50 mb-2">Billed From:</h3>
                <p class="font-bold text-lg text-base-content">Pix Clipping Ltd</p>
                <p class="text-base-content/60 text-sm">Avenida nossa senhora de Fatima</p>
                <p class="text-base-content/60 text-sm">Leiria, 2410-140, Portugal</p>
            </div>

            {{-- Billed To & Dates --}}
            <div class="text-right">
                <div class="mb-6">
                    <h3 class="font-bold text-base-content/50 mb-2">Billed To:</h3>
                    <p class="font-bold text-lg text-base-content">{{ $order->user->name ?? 'Guest' }}</p>
                    <p class="text-base-content/60 text-sm">{{ $order->user->userDetail->address ?? 'Address Line 1' }}</p>
                    <p class="text-base-content/60 text-sm">{{ $order->user->userDetail->city ?? 'City' }}, {{ $order->user->userDetail->country->name ?? 'Country' }}</p>
                </div>
                <div class="space-y-1">
                    <div class="flex justify-end gap-4">
                        <span class="font-bold text-base-content/50">Billing Date:</span>
                        <span class="font-semibold text-base-content/80">{{ dateFormat($order->created_at) }}</span>
                    </div>
                    <div class="flex justify-end gap-4">
                        <span class="font-bold text-base-content/50">Due Date:</span>
                        <span class="font-semibold text-base-content/80">{{ dateFormat($order->created_at->addDays(7)) }}</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Order Summary Header --}}
        <h3 class="font-bold text-base-content/40 mb-6 text-lg">Order summary</h3>

        {{-- Items Table --}}
        <div class="overflow-x-auto mb-8">
            <table class="table w-full">
                <thead>
                    <tr class="border-b-0 text-base-content/40 text-xs uppercase">
                        <th class="pl-0 font-bold w-16">SL</th>
                        <th class="font-bold">Service Name</th>
                        <th class="text-center font-bold">Qty</th>
                        <th class="text-right font-bold">Price</th>
                        <th class="text-center font-bold">Discount</th>
                        <th class="text-right pr-0 font-bold">Sub Total</th>
                    </tr>
                </thead>
                <tbody class="text-sm font-medium">
                    <tr class="border-base-content/5">
                        <td class="pl-0 py-4 text-base-content/60">1</td>
                        <td class="py-4">
                            <div class="p-3 border border-base-content/10 rounded-lg bg-base-100 w-full max-w-md">
                                {{ $order->job_title ?? 'Clipping Path' }}
                            </div>
                            <div class="mt-2 p-3 border border-base-content/10 rounded-lg bg-base-100 text-base-content/40 text-xs w-full max-w-md">
                                {{ $order->instruction ?? 'comments' }}
                            </div>
                        </td>
                        <td class="text-center py-4">
                             <div class="join items-center border border-base-content/10 rounded-lg p-1 bg-white">
                                <span class="pl-2 pr-1 text-base-content/40">$</span>
                                <span class="w-12 text-center">{{ $order->image_quantity ?? 1 }}</span>
                             </div>
                        </td>
                        <td class="text-right py-4">
                            <div class="join items-center justify-end border border-base-content/10 rounded-lg p-1 bg-white inline-flex">
                                <span class="pl-2 pr-1 text-base-content/40">$</span>
                                <span class="w-16 text-center">{{ number_format($order->price / ($order->image_quantity ?? 1), 2) }}</span>
                             </div>
                        </td>
                        <td class="text-center py-4">
                            <div class="join items-center justify-center border border-base-content/10 rounded-lg p-1 bg-white inline-flex">
                                <span class="w-8 text-center">0</span>
                                <span class="pl-1 pr-2 text-base-content/40">%</span>
                             </div>
                        </td>
                        <td class="text-right pr-0 py-4 text-base-content/60 font-bold">
                            ${{ number_format($order->price, 2) }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Footer Totals --}}
        <div class="flex justify-end pt-4 border-t border-base-content/5">
            <div class="w-64 space-y-3">
                <div class="flex justify-between text-sm font-medium text-base-content/60">
                    <span>Sub Total</span>
                    <span>${{ number_format($order->price, 2) }}</span>
                </div>
                 <div class="flex justify-between items-center text-sm font-medium text-base-content/60">
                    <span>Discount $</span>
                    <div class="flex items-center gap-2">
                        <span class="border border-base-content/10 rounded px-2 py-1 bg-white">0</span>
                        <span class="text-xs">Flat</span>
                    </div>
                </div>
                <div class="flex justify-between text-xl font-bold text-primary mt-4 pt-4">
                    <span>Total</span>
                    <span>${{ number_format($order->price, 2) }}</span>
                </div>
            </div>
        </div>

        {{-- Unpaid Stamp --}}
        @if(!$order->is_paid)
            <div class="absolute bottom-32 left-32 transform -rotate-12 border-4 border-red-200 text-red-200 text-6xl font-black px-8 py-2 rounded-xl uppercase tracking-widest opacity-50 pointer-events-none select-none">
                UNPAID
            </div>
        @endif

        {{-- Action Buttons --}}
        <div class="mt-12 flex justify-between items-end print:hidden">
            <button class="btn btn-ghost btn-sm">
                <span class="icon-[tabler--caret-left] size-4"></span> Back
            </button>
            <button onclick="window.print()" class="btn btn-primary px-8 gap-2">
                Send
                <span class="icon-[tabler--send] size-4"></span>
            </button>
        </div>

    </div>
    
    {{-- Print Style --}}
    <style>
        @media print {
            body * {
                visibility: hidden;
            }
            #invoice-print-area, #invoice-print-area * {
                visibility: visible;
            }
            #invoice-print-area {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                margin: 0;
                padding: 0;
                box-shadow: none;
                border: none;
            }
            .no-print {
                display: none !important;
            }
        }
    </style>
</div>