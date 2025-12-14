<div class="card bg-base-100 shadow-xl rounded-box border border-base-content/5 overflow-hidden print:shadow-none print:border-none print:w-full print:absolute print:top-0 print:left-0 print:m-0 print:z-[9999]"
    id="invoice-print-area">

    <div class="relative">

        {{-- PAID/UNPAID Watermark --}}
        <!-- @if ($order->is_paid)
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[180px] font-black text-green-500/5 rotate-[-35deg] pointer-events-none select-none z-0 tracking-wider">
                PAID
            </div>
        @else
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[180px] font-black text-red-500/5 rotate-[-35deg] pointer-events-none select-none z-0 tracking-wider">
                UNPAID
            </div>
        @endif -->

        <div class="py-8 px-8 md:p-12 relative z-10">

            {{-- Enhanced Header with Gradient --}}
            <div class="mb-4">
                <div class="flex justify-between items-start text-white mb-4">
                    <div>
                        @if ($order->is_paid)
                            <div class="mt-3 inline-block">
                                <span
                                    class="text-success px-4 py-2 text-xs font-bold uppercase tracking-wide ">
                                    ✓ Paid
                                </span>
                            </div>
                        @else
                            <div class="mt-3 inline-block">
                                <span
                                    class="text-warning px-4 py-2 text-xs font-bold uppercase tracking-wide ">
                                    ⚠ Unpaid
                                </span>
                            </div>
                        @endif
                        
                    </div>

                    <div class="text-right">
                        <!-- <p class="text-xs  tracking-widest opacity-80 mb-2"></p> -->
                        <p class="text-4xl font-black font-bold uppercase text-primary">Invoice No. : #{{ $order->order_id }}</p>
                       
                    </div>
                </div>
                <hr>
            </div>

            {{-- Billing Details with Cards --}}
            <div class="grid md:grid-cols-2 gap-6 mb-8">
                {{-- Billed From Card --}}
                <div class="bg-base-200/50 rounded-xl p-6 border border-base-content/10">
                    <h3 class="text-xs font-bold text-base-content/50 uppercase tracking-wider mb-3">Billed From</h3>
                    <p class="font-semibold text-md text-base-content mb-1">{{ config('app.name') }}</p>
                    <p class="text-base-content/60 text-sm">Avenida Nossa Senhora de Fátima</p>
                    <p class="text-base-content/60 text-sm">Leiria, 2410-140, Portugal</p>
                </div>

                {{-- Billed To Card --}}
                <div class="bg-base-200/50 rounded-xl p-6 border border-base-content/10">
                    <h3 class="text-xs font-bold text-base-content/50 uppercase tracking-wider mb-3">Billed To</h3>
                    <p class="font-semibold text-md text-base-content mb-1 uppercase">{{ $order->user->name ?? 'Guest' }}</p>
                    <p class="text-base-content/60 text-sm">{{ $order->user->userDetail->address ?? 'Address Line 1' }}
                    </p>
                    <p class="text-base-content/60 text-sm">{{ $order->user->userDetail->city ?? 'City' }},
                        {{ $order->user->userDetail->country->name ?? 'Country' }}</p>
                </div>
            </div>

            {{-- Invoice Details --}}
            <div class="flex justify-end mb-8">
                <div class="bg-base-200/30 rounded-xl p-4 border border-base-content/10">
                    <div class="grid grid-cols-2 gap-x-8 gap-y-2 text-sm">
                        <span class="text-base-content/60">Invoice Date:</span>
                        <span class="font-semibold text-base-content">{{ dateFormat($order->created_at) }}</span>
                        <span class="text-base-content/60">Due Date:</span>
                        <span class="font-semibold text-base-content">{{ dateFormat($order->created_at->addDays(7)) }}</span>
                    </div>
                </div>
            </div>

            {{-- Order Summary Header --}}
            <h3 class="font-bold text-base-content/70 mb-4 text-lg flex items-center gap-2">
                <span class="icon-[tabler--list-details] size-5"></span>
                Order Summary
            </h3>

            {{-- Items Table --}}
            <div class="overflow-x-auto mb-8 rounded-xl border border-base-content/10">
                <table class="table w-full">
                    <thead class="bg-base-200">
                        <tr class="border-b border-base-content/10">
                            <th class="font-bold text-xs uppercase text-base-content/60">SL</th>
                            <th class="font-bold text-xs uppercase text-base-content/60">Service Details</th>
                            <th class="text-center font-bold text-xs uppercase text-base-content/60">Qty</th>
                            <th class="text-right font-bold text-xs uppercase text-base-content/60">Price</th>
                            <th class="text-center font-bold text-xs uppercase text-base-content/60">Discount</th>
                            <th class="text-right font-bold text-xs uppercase text-base-content/60">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm" id="invoice-rows">
                        @if(!empty($invoice))
                    
                            {{-- If invoice exists, show invoice data --}}
                            @foreach(json_decode($invoice->service_name) as $key => $service)
                                @php
                                    $comments = json_decode($invoice->comments)[$key];
                                    $qty = json_decode($invoice->qty)[$key];
                                    $price = json_decode($invoice->price)[$key];
                                    $single_discount = json_decode($invoice->single_discount)[$key];
                                    $row_sub_total = json_decode($invoice->row_sub_total)[$key];
                                @endphp
                                <tr class="border-b border-base-content/5 invoice-row">
                                    <td class="py-4 font-semibold text-base-content/60">{{ $key + 1 }}</td>

                                    <td class="py-4">
                                        <select name="service_name[]" class="p-2 border border-base-content/10 rounded-lg bg-base-100 text-base-content font-medium text-sm w-full max-w-md mb-2">
                                            
                                            @foreach($services as $s)
                                                <option value="{{ $s->id }}" {{ $s->id == $service ? 'selected' : '' }}>
                                                    {{ $s->service_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <!-- <input type="text" name="comments[]" placeholder="Comments" value="{{ $comments }}"
                                            class="p-2 border border-base-content/10 rounded-lg bg-base-100 text-base-content/60 text-xs w-full max-w-md"> -->
                                    </td>

                                    <td class="text-center">
                                        <input type="number" name="qty[]" value="{{ $qty }}"
                                            class="qty p-2 border border-base-content/10 rounded-lg bg-base-100 text-base-content/70 text-sm w-20 text-center" required>
                                    </td>

                                    <td class="text-right">
                                        <div class="flex items-center justify-end gap-1">
                                            <span class="text-base-content/40 text-xs">$</span>
                                            <input type="number" step="any" min="0" max="100000" name="price[]" value="{{ $price }}"
                                                class="price p-2 border border-base-content/10 rounded-lg bg-base-100 text-base-content/70 text-sm w-24 text-right" required>
                                        </div>
                                    </td>

                                    <td class="text-center">
                                        <div class="flex items-center justify-center gap-1">
                                            <input type="number" step="any" min="0" max="100" name="single_discount[]" value="{{ $single_discount }}"
                                                class="discount p-2 border border-base-content/10 rounded-lg bg-base-100 text-base-content/70 text-sm w-16 text-center">
                                            <span class="text-base-content/40 text-xs">%</span>
                                        </div>
                                    </td>

                                    <td class="text-right font-bold text-base-content">
                                        <div class="flex items-center justify-end gap-1">
                                            <span class="text-base-content/40 text-xs">$</span>
                                            <span class="row-total font-semibold">{{ $row_sub_total }}</span>
                                            <input type="hidden" class="row_sub_total_input" name="row_sub_total[]" value="{{ $row_sub_total }}">
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            
                            @if(isset($selected_services))
                                @foreach($selected_services as $key => $service)
                                    <tr class="invoice-row">
                                        <td class="py-4 font-semibold text-base-content/60">{{ $key + 1 }}</td>

                                        <td class="py-4">
                                            <select name="service_name[]" class="p-2 border border-base-content/10 rounded-lg bg-base-100 text-base-content font-medium text-sm w-full max-w-md mb-2">
                                                
                                                @foreach($services as $s)
                                                    <option value="{{ $s->service_name }}" {{ $s->service_name == $service->service_name ? 'selected' : '' }}>
                                                        {{ $s->service_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <!-- <input type="text" name="comments[]" placeholder="Comments"
                                                class="p-2 border border-base-content/10 rounded-lg bg-base-100 text-base-content/60 text-xs w-full max-w-md"> -->
                                        </td>

                                        <td class="text-center">
                                            <input type="number" name="qty[]" value=""
                                                class="qty p-2 border border-base-content/10 rounded-lg bg-base-100 text-base-content/70 text-sm w-20 text-center" required>
                                        </td>

                                        <td class="text-right">
                                            <div class="flex items-center justify-end gap-1">
                                                <span class="text-base-content/40 text-xs">$</span>
                                                <input type="number" step="any" min="0" max="100000" name="price[]" value=""
                                                    class="price p-2 border border-base-content/10 rounded-lg bg-base-100 text-base-content/70 text-sm w-24 text-right" required>
                                            </div>
                                        </td>

                                        <td class="text-center">
                                            <div class="flex items-center justify-center gap-1">
                                                <input type="number" step="any" min="0" max="100" name="single_discount[]" value="0"
                                                    class="discount p-2 border border-base-content/10 rounded-lg bg-base-100 text-base-content/70 text-sm w-16 text-center">
                                                <span class="text-base-content/40 text-xs">%</span>
                                            </div>
                                        </td>

                                        <td class="text-right font-bold text-base-content">
                                            <div class="flex items-center justify-end gap-1">
                                                <span class="text-base-content/40 text-xs">$</span>
                                                <span class="row-total font-semibold">0.00</span>
                                                <input type="hidden" class="row_sub_total_input" name="row_sub_total[]" value="">
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        @endif
                    </tbody>



                </table>
            </div>

            {{-- Footer Totals --}}
<div class="flex justify-end mb-8">
    <div class="w-full max-w-md">
        <div class="bg-base-200/30 rounded-xl p-6 border border-base-content/10 space-y-4">

            @php
                $sub_total = $invoice->sub_total ?? 0.00;
                $discount = $invoice->discount ?? 0.00;
                $discount_type = $invoice->discount_type ?? 'Flat';
                $grand_total = $invoice->grand_total ?? 0.00;
            @endphp

            <!-- Sub Total -->
            <div class="flex items-center justify-between text-sm">
                <span class="text-base-content/60 font-medium">
                    {{ __('Sub Total') }}
                </span>

                <div class="text-right">
                    <span class="text-base-content/40">$</span>
                    <span class="sub_total_price font-medium">
                        {{ number_format($sub_total, 2) }}
                    </span>
                    <input type="hidden"
                           name="sub_total"
                           class="sub_total_price_input"
                           value="{{ $sub_total }}">
                </div>
            </div>

            <!-- Discount -->
            <div class="flex items-center justify-between text-sm">
                <span class="text-base-content/60 font-medium">
                    {{ __('Discount') }}
                </span>

                <div class="flex items-center gap-2">
                    <input type="number"
                           name="discount"
                           class="footer-discount p-2 border border-base-content/10 rounded-lg bg-base-100 text-base-content/70 text-sm w-24 text-right"
                           value="{{ $discount }}"
                           step="any"
                           min="0">

                    <select name="discount_type"
                            class="discount_type p-2 border border-base-content/10 rounded-lg bg-base-100 text-base-content/70 text-xs">
                        <option value="Flat" {{ $discount_type == 'Flat' ? 'selected' : '' }}>
                            Flat
                        </option>
                        <option value="Percent" {{ $discount_type == 'Percent' ? 'selected' : '' }}>
                            Percent
                        </option>
                    </select>
                </div>
            </div>

            <!-- Total -->
            <div class="pt-4 border-t border-base-content/20">
                <div class="flex items-center justify-between">
                    <span class="text-lg font-bold text-base-content">
                        {{ __('Total') }}
                    </span>

                    <div class="text-right">
                        <span class="text-base-content/40">$</span>
                        <span class="total_price text-primary font-bold text-lg">
                            {{ number_format($grand_total, 2) }}
                        </span>

                        <input type="hidden"
                               name="total_price"
                               class="total_price_input"
                               value="{{ $grand_total }}">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



            {{-- Footer Note --}}
            <div class="bg-base-200/30 rounded-xl p-4 border border-base-content/10 mb-8">
                <p class="text-xs text-base-content/60 text-center">
                    <span class="font-semibold">Thank you for your business!</span> • Payment is due within 7 days •
                    For questions, contact us at info@pixclip.com
                </p>
            </div>

            {{-- Action Buttons --}}
            <div class="flex justify-between items-center print:hidden pt-4 border-t border-base-content/10">
                <button class="btn btn-ghost gap-2">
                    <span class="icon-[tabler--arrow-left] size-4"></span>
                    Back to Orders
                </button>
                <div class="flex gap-3">
                    <button class="btn btn-outline gap-2">
                        <span class="icon-[tabler--download] size-4"></span>
                        Download PDF
                    </button>
                    <button onclick="window.print()" class="btn btn-primary gap-2 shadow-lg">
                        <span class="icon-[tabler--printer] size-4"></span>
                        Print Invoice
                    </button>
                </div>
            </div>

        </div>
    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Function to calculate row total
        function calculateRowTotal(row) {
            const qtyInput = row.querySelector('.qty');
            const priceInput = row.querySelector('.price');
            const discountInput = row.querySelector('.discount');
            const rowTotalSpan = row.querySelector('.row-total');
            const rowTotalInput = row.querySelector('.row_sub_total_input');

            if (!qtyInput || !priceInput || !discountInput || !rowTotalSpan) return;

            const qty = parseFloat(qtyInput.value) || 0;
            const price = parseFloat(priceInput.value) || 0;
            const discount = parseFloat(discountInput.value) || 0;

            // Calculate: (qty * price) - (qty * price * discount / 100)
            let total = qty * price;
            const discountAmount = (total * discount) / 100;
            total = total - discountAmount;

            rowTotalSpan.textContent = total.toFixed(2);
            if (rowTotalInput) {
                rowTotalInput.value = total.toFixed(2);
            }

            calculateSubtotal();
        }

        // Function to calculate subtotal
        function calculateSubtotal() {
            let subtotal = 0;
            document.querySelectorAll('.invoice-row').forEach(row => {
                const rowTotalInput = row.querySelector('.row_sub_total_input');
                if (rowTotalInput) {
                    subtotal += parseFloat(rowTotalInput.value) || 0;
                }
            });

            const subtotalSpan = document.querySelector('.sub_total_price');
            const subtotalInput = document.querySelector('.sub_total_price_input');
            
            if (subtotalSpan) subtotalSpan.textContent = subtotal.toFixed(2);
            if (subtotalInput) subtotalInput.value = subtotal.toFixed(2);

            calculateGrandTotal();
        }

        // Function to calculate grand total
        function calculateGrandTotal() {
            const subtotalInput = document.querySelector('.sub_total_price_input');
            const discountInput = document.querySelector('.footer-discount');
            const discountTypeSelect = document.querySelector('.discount_type');
            const grandTotalSpan = document.querySelector('.total_price');
            const grandTotalInput = document.querySelector('.total_price_input');

            if (!subtotalInput || !discountInput || !discountTypeSelect) return;

            const subtotal = parseFloat(subtotalInput.value) || 0;
            const discount = parseFloat(discountInput.value) || 0;
            const discountType = discountTypeSelect.value;

            let grandTotal = subtotal;

            if (discountType === 'Flat') {
                grandTotal = subtotal - discount;
            } else if (discountType === 'Percent') {
                const discountAmount = (subtotal * discount) / 100;
                grandTotal = subtotal - discountAmount;
            }

            // Ensure grand total is not negative
            grandTotal = Math.max(0, grandTotal);

            if (grandTotalSpan) grandTotalSpan.textContent = grandTotal.toFixed(2);
            if (grandTotalInput) grandTotalInput.value = grandTotal.toFixed(2);
        }

        // Attach event listeners to all qty, price, and discount inputs
        document.querySelectorAll('.invoice-row').forEach(row => {
            const qtyInput = row.querySelector('.qty');
            const priceInput = row.querySelector('.price');
            const discountInput = row.querySelector('.discount');

            if (qtyInput) {
                qtyInput.addEventListener('input', () => calculateRowTotal(row));
            }
            if (priceInput) {
                priceInput.addEventListener('input', () => calculateRowTotal(row));
            }
            if (discountInput) {
                discountInput.addEventListener('input', () => calculateRowTotal(row));
            }
        });

        // Attach event listeners to footer discount inputs
        const footerDiscountInput = document.querySelector('.footer-discount');
        const footerDiscountTypeSelect = document.querySelector('.discount_type');

        if (footerDiscountInput) {
            footerDiscountInput.addEventListener('input', calculateGrandTotal);
        }
        if (footerDiscountTypeSelect) {
            footerDiscountTypeSelect.addEventListener('change', calculateGrandTotal);
        }

        // Initial calculation on page load
        document.querySelectorAll('.invoice-row').forEach(row => {
            calculateRowTotal(row);
        });
    });
</script>

