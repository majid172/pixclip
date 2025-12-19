<div class="bg-white rounded-xl shadow overflow-hidden p-6">
    @php
        $canDownload = $order->is_paid && in_array($order->status, ['Finalizing', 'Completed', 'Invoiced']);
    @endphp

    @if($canDownload)
        <h3 class="text-lg font-bold text-slate-700 mb-4">Final Output Files</h3>
        
        @if(($output_images && count($output_images) > 0) || ($output_redo_images && count($output_redo_images) > 0))
            <div class="overflow-x-auto">
                <table class="min-w-full border-collapse text-left">
                    <thead>
                        <tr class="bg-slate-50 border-b">
                            <th class="px-4 py-3 text-sm font-semibold text-slate-500">File Name</th>
                            <th class="px-4 py-3 text-sm font-semibold text-slate-500">Type</th>
                            <th class="px-4 py-3 text-sm font-semibold text-slate-500 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        {{--  Main Output Images --}}
                        @if($output_images)
                            @foreach($output_images as $media)
                                <tr class="hover:bg-slate-50">
                                    <td class="px-4 py-3 text-sm text-slate-700">
                                        {{ $media->file_name }}
                                        <span class="ml-2 text-xs bg-blue-100 text-blue-600 px-2 py-0.5 rounded">Original</span>
                                    </td>
                                    <td class="px-4 py-3 text-sm text-slate-600 uppercase">{{ $media->extension }}</td>
                                    <td class="px-4 py-3 text-right">
                                        <a href="{{ asset($media->file) }}" download="{{ $media->file_name }}" class="text-primary hover:text-primary/80 font-medium text-sm">
                                            <i class="fa-solid fa-download mr-1"></i> Download
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif

                        {{-- Redo Output Images --}}
                        @if($output_redo_images)
                            @foreach($output_redo_images as $media)
                                <tr class="hover:bg-slate-50">
                                    <td class="px-4 py-3 text-sm text-slate-700">
                                        {{ $media->file_name }}
                                        <span class="ml-2 text-xs bg-purple-100 text-purple-600 px-2 py-0.5 rounded">Correction</span>
                                    </td>
                                    <td class="px-4 py-3 text-sm text-slate-600 uppercase">{{ $media->extension }}</td>
                                    <td class="px-4 py-3 text-right">
                                        <a href="{{ asset($media->file) }}" download="{{ $media->file_name }}" class="text-primary hover:text-primary/80 font-medium text-sm">
                                            <i class="fa-solid fa-download mr-1"></i> Download
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

            {{-- External Link Check --}}
            @if($order->output_link || $order->output_redo_link)
                <div class="mt-6">
                    <h4 class="text-md font-semibold text-slate-700 mb-2">External Download Links</h4>
                    <div class="space-y-2">
                         @if($order->output_link)
                            <div class="flex items-center justify-between p-3 bg-slate-50 rounded border">
                                <span class="text-sm text-slate-600">Main Output Link</span>
                                <a href="{{ $order->output_link }}" target="_blank" class="text-blue-600 hover:underline text-sm font-medium">Open Link <i class="fa-solid fa-external-link-alt ml-1"></i></a>
                            </div>
                        @endif
                        @if($order->output_redo_link)
                            <div class="flex items-center justify-between p-3 bg-slate-50 rounded border">
                                <span class="text-sm text-slate-600">Correction Output Link</span>
                                <a href="{{ $order->output_redo_link }}" target="_blank" class="text-blue-600 hover:underline text-sm font-medium">Open Link <i class="fa-solid fa-external-link-alt ml-1"></i></a>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

        @else
             <div class="text-center py-6">
                <p class="text-slate-500">No output files uploaded yet.</p>
            </div>
        @endif

    @else
        <div class="flex flex-col items-center justify-center py-12 text-center">
            <div class="w-16 h-16 bg-yellow-100 text-yellow-600 rounded-full flex items-center justify-center mb-4 text-2xl">
                <i class="fa-solid fa-lock"></i>
            </div>
            <h3 class="text-xl font-bold text-slate-800 mb-2">Output Locked</h3>
            @if(!$order->is_paid)
                <p class="text-slate-600 max-w-md mx-auto mb-4"> Please complete the payment to access and download your final files.</p>
                <button class="btn btn-primary px-6 py-2 rounded-lg" onclick="document.querySelector('[data-target=\'invoiceContent\']').click()">
                    Go to Invoice (Pay First)
                </button>
            @else
                <p class="text-slate-600 max-w-md mx-auto">Your order is being processed. You will be notified once the files are ready for download.</p>
            @endif
        </div>
    @endif
</div>
