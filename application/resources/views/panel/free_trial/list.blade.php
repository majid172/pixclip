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
                        <th>User</th>
                        <th>Service</th>
                        <th>Quantity</th>
                        <th>Instructions</th>
                        <th>File/Link</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($trials as $item)
                        <tr class="text-center">
                            <td>
                                <div class="flex flex-col items-center">
                                    <span class="font-bold">{{ $item->name }}</span>
                                    <span class="text-xs text-gray-500">{{ $item->email }}</span>
                                    <span class="text-xs text-gray-500">{{ $item->phone }}</span>
                                    @if($item->company_name) <span class="text-xs text-gray-500">{{ $item->company_name }}</span> @endif
                                </div>
                            </td>
                            <td>{{ $item->service_name }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>
                                <div class="tooltip tooltip-bottom" data-tip="{{ $item->instruction }}">
                                    <span class="cursor-help text-primary underline">View</span>
                                </div>
                                {{-- Simple modal or expand for long instructions could be better, but tooltip for now --}}
                            </td>
                            <td>
                                <div class="flex flex-col gap-1 items-center">
                                    @php
                                        $media_ids = $item->media_id ? json_decode($item->media_id, true) : [];
                                    @endphp
                                    @if(!empty($media_ids))
                                        @foreach($media_ids as $mid)
                                            @php $media = \App\Models\Media::find($mid); @endphp
                                            @if($media)
                                                <a href="{{ asset($media->file) }}" target="_blank" class="link link-primary text-xs flex items-center gap-1">
                                                    <span class="icon-[tabler--file] size-3"></span> {{ Str::limit($media->file_name, 15) }}
                                                </a>
                                            @endif
                                        @endforeach
                                    @endif

                                    @if($item->website)
                                        <a href="{{ $item->website }}" target="_blank" class="link link-info text-xs flex items-center gap-1">
                                            <span class="icon-[tabler--link] size-3"></span> Website
                                        </a>
                                    @endif
                                </div>
                            </td>
                            <td>{{ $item->created_at->format('d M, Y') }}</td>
                            
                            <td>
                                <form action="{{ route('free-trial-list.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-circle btn-text btn-sm text-error" aria-label="Delete">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td colspan="7">
                                <p class="text-center text-warning">No free trial requests found</p>
                            </td>

                        </tr>
                    @endforelse

                </tbody>
            </table>

        </div>
    </div>
@endsection
