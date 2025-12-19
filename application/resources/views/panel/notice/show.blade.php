@extends('panel.layouts.app')
@section('content')
    <div class="card mb-6">
        <div class="card-body gap-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="card-title text-2xl font-bold">{{ $notice->title }}</h2>
                <a href="{{ route('notice.index') }}" class="btn btn-secondary btn-sm">Back to List</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-base-content/70 border-b pb-4">
                <div>
                    <span class="font-semibold text-base-content">Publish Date:</span> 
                    {{ dateFormat($notice->publish_date) }}
                </div>
                <div>
                    <span class="font-semibold text-base-content">Status:</span>
                    <span class="badge badge-soft badge-{{ $notice->status == 1 ? 'success' : 'error' }} text-xs">
                        {{ $notice->status == 1 ? 'Active' : 'Inactive' }}
                    </span>
                </div>
            </div>

            <div class="content py-4">
                <h3 class="text-lg font-semibold mb-2">Description</h3>
                <div class="prose max-w-none">
                    {!! $notice->description !!}
                </div>
            </div>
        </div>
    </div>
@endsection
