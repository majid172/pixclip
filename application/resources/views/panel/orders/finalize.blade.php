@extends('panel.layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto space-y-6">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-bold text-slate-700">Finalize Order: #{{ $order->order_id }}</h1>
            <a href="{{ route('order.list') }}" class="btn btn-sm btn-outline btn-error">Cancel</a>
        </div>

        <div class="bg-white rounded-xl shadow-md p-6">
            <form action="{{ route('order.finalize.store', $order->id) }}" method="POST" enctype="multipart/form-data"
                class="space-y-6">
                @csrf

                <!-- Order Overview (Read-only) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-slate-600 bg-slate-50 p-4 rounded-lg">
                    <div><span class="font-semibold">Job Title:</span> {{ $order->job_title }}</div>
                    <div><span class="font-semibold">Quantity:</span> {{ $order->image_quantity }}</div>
                    <div><span class="font-semibold">Services:</span>
                        @foreach (json_decode($order->service_id ?? '[]') as $sid)
                            {{ \App\Models\PathService::find($sid)?->service_name ?? $sid }},
                        @endforeach
                    </div>
                </div>

                <div class="divider">Final Deliverables</div>

                <!-- Upload Final Images -->
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text font-semibold">Upload Completed Images</span>
                        <span class="label-text-alt text-slate-400">Multiple files allowed</span>
                    </label>
                    <input type="file" name="output_files[]" multiple
                        class="file-input file-input-bordered file-input-primary w-full" />
                    @error('output_files.*')
                        <span class="text-error text-xs mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <!-- OR -->
                <div class="divider text-xs text-slate-400">AND / OR</div>

                <!-- External Link -->
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text font-semibold">External Download Link</span>
                        <span class="label-text-alt text-slate-400">e.g. Google Drive, Dropbox, WeTransfer</span>
                    </label>
                    <input type="text" name="output_link" placeholder="https://..." value="{{ old('output_link') }}"
                        class="input input-bordered w-full" />
                    @error('output_link')
                        <span class="text-error text-xs mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit -->
                <div class="pt-4 flex justify-end">
                    <button type="submit" class="btn btn-primary px-8">Complete & Finalize Order</button>
                </div>
            </form>
        </div>
    </div>
@endsection
