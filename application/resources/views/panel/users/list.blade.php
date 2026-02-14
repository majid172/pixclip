@extends('panel.layouts.app')
@section('content')
    <div class="rounded-box shadow-base-300/10 bg-base-100 w-full pb-2 shadow-md">
        <h3 class="p-4 text-primary font-semibold">Users List</h3>
        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th>SL.</th>
                        <th>Name</th>
                        <th>IP</th>
                        <th>Status</th>
                        <th>Create Acc.</th>
                        <th>Last Login</th>

                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ Str::ucfirst($item->name) }} <br>
                                <span class="text-xs">{{ __($item->email) }}</span>
                            </td>
                            <td>{{ $item->userDetail?->ip }}</td>
                            <td><span
                                    class="badge badge-soft badge-{{ $item->status == 1 ? 'success' : 'error' }}  text-xs">{{ $item->status == 1 ? 'Active' : 'Inactive' }}</span>
                            </td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->userDetail?->last_access_at }}</td>
                            <td>
                                {{-- Show Profile --}}
                                <a class="btn btn-circle btn-text btn-sm btn-success" href="{{ route('user.show', $item->id) }}"
                                    aria-label="View Profile"><span class="icon-[tabler--eye] size-5"></span></a>
                                    <a class="btn btn-circle btn-text btn-sm btn-primary" href="{{ route('user.edit', $item->id) }}"
                                    aria-label="Action button"><span class="icon-[tabler--pencil] size-5"></span></a>

                                <form action="{{ route('user.destroy', $item->id) }}" method="POST"
                                    style="display: inline;"
                                    onsubmit="return confirm('Are you sure you want to delete this user?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-circle btn-text btn-sm btn-error" aria-label="Delete user">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                </form>
                                {{--  --}}
                                {{-- Customer: Edit --}}
                                
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

        {{-- Pagination Links --}}
        @if ($users->hasPages())
            {{ $users->links() }}
        @endif

    </div>
@endsection
