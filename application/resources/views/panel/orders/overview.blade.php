<div class="flex flex-col md:flex-row gap-4 w-full text-sm mb-6 mt-6">

    <!-- Card 1: Image Complexity -->
    <div class="flex-1 rounded-box bg-base-100 shadow p-4 ">

        <p class="text-xs text-slate-400 mb-1">Image Quantity</p>
        <h3 class="text-3xl font-bold text-primary">{{ $order->image_quantity }}</h3>
    </div>

    <!-- Card 2: Return File Extensions -->
    <div class="flex-1 rounded-box bg-base-100 shadow p-4 ">
        <p class="text-xs text-slate-400 mb-1">Image Complexity</p>
        <h3 class="text-xl font-semibold text-slate-700">{{ Str::ucfirst($order->image_complexity) }}
        </h3>
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
            @if (isset($selected_services))
                @foreach ($selected_services as $service)
                    <span class="px-3 py-1 text-xs bg-pink-50 text-pink-600 border border-pink-200 rounded-full">
                        {{ $service->service_name }}
                    </span>
                @endforeach
            @endif

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
<div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-indigo-500">
    <h3 class="text-sm font-medium text-slate-500 mb-2">Special Instruction</h3>
    <p class="text-slate-700 text-sm leading-relaxed">
        {!! $order->instruction !!}
    </p>
</div>
