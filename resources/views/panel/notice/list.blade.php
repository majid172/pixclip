@extends('panel.layouts.app')
@section('content')

    <div class="rounded-box shadow-base-300/10 bg-base-100 w-full pb-2 shadow-md">
        <div class="flex items-center justify-between p-4">
            <h3 class="text-primary font-semibold">Notices</h3>
            @if(auth()->user()->is_admin == 1)
                <a href="{{ route('notice.create') }}" class="btn btn-primary btn-sm">Create Notice</a>
            @endif
        </div>
        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th>Sl.</th>
                        <th>Title</th>  
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notices as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ Str::ucfirst($item->title) }}</td>
                            <td><span
                                    class="badge badge-soft badge-success text-xs">{{ $item->status == 1 ? 'Active' : 'Inactive' }}</span>
                            </td>
                            <td>{{ dateFormat($item->publish_date) }}</td>
                            <td>
                                @if (auth()->user()->is_admin == 1)
                                    <a class="btn btn-circle btn-text btn-sm" href="{{ route('notice.edit', $item->id) }}"
                                        aria-label="Action button"><span class="icon-[tabler--pencil] size-5"></span></a>

                                    <form action="{{ route('notice.destroy', $item->id) }}" method="POST" style="display: inline;"
                                        onsubmit="return confirm('Are you sure you want to delete this notice?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-circle btn-text btn-sm" aria-label="Delete notice">
                                            <span class="icon-[tabler--trash] size-5"></span>
                                        </button>
                                    </form>
                                @endif

                                <button class="btn btn-circle btn-text btn-sm" aria-label="Action button"><span
                                        class="icon-[tabler--dots-vertical] size-5"></span></button>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection
