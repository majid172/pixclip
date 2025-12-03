@extends('panel.layouts.app')
@section('content')
    <div class="rounded-box shadow-base-300/10 bg-base-100 w-full pb-2 shadow-md">
        <h3 class="p-4 text-primary font-semibold">Users List</h3>
        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        <tr>
                            <td>{{ Str::ucfirst($item->name) }}</td>
                            <td>{{ __($item->email) }}</td>
                            <td><span
                                    class="badge badge-soft badge-success text-xs">{{ $item->status == 1 ? 'Active' : 'Inactive' }}</span>
                            </td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a class="btn btn-circle btn-text btn-sm" href="{{ route('user.edit', $item->id) }}"
                                    aria-label="Action button"><span class="icon-[tabler--pencil] size-5"></span></a>

                                <form action="{{ route('user.destroy', $item->id) }}" method="POST" style="display: inline;"
                                    onsubmit="return confirm('Are you sure you want to delete this user?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-circle btn-text btn-sm" aria-label="Delete user">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                </form>

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
