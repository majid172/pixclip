@extends('panel.layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto py-8">
        <!-- Page Header -->
        <div class="mb-6 flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold text-primary">Notifications</h2>
                <p class="text-sm text-slate-500 mt-1">View all your notifications</p>
            </div>
            <!-- Potential 'Mark All Read' button could go here -->
        </div>

        <div class="bg-base-100 rounded-lg shadow-md overflow-hidden">
            <ul class="divide-y divide-base-content/10">
                @forelse ($notifications as $notification)
                    <li class="{{ $notification->read_at ? 'bg-base-100 opacity-75' : 'bg-base-100 border-l-4 border-primary' }} hover:bg-base-200 transition-colors">
                        <a href="{{ route('notifications.read', $notification->id) }}" class="block px-6 py-4">
                            <div class="flex items-start gap-4">
                                <div class="mt-1">
                                    <span class="badge {{ $notification->read_at ? 'badge-neutral' : 'badge-primary' }} badge-sm"></span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-base font-semibold {{ $notification->read_at ? 'text-base-content/70' : 'text-base-content' }}">
                                        {{ $notification->data['title'] ?? 'Notification' }}
                                    </h4>
                                    <p class="text-sm {{ $notification->read_at ? 'text-base-content/60' : 'text-base-content/80' }} mt-1">
                                        {{ $notification->data['message'] ?? '' }}
                                    </p>
                                    <div class="mt-2 flex items-center text-xs text-base-content/50">
                                        <span class="icon-[tabler--clock] size-3.5 me-1"></span>
                                        {{ $notification->created_at->diffForHumans() }}
                                    </div>
                                </div>
                                @if(!$notification->read_at)
                                <div class="shrink-0">
                                    <span class="text-xs font-semibold text-primary">Unread</span>
                                </div>
                                @endif
                            </div>
                        </a>
                    </li>
                @empty
                    <li class="px-6 py-12 text-center">
                        <span class="icon-[tabler--bell-off] size-12 text-base-content/30 mx-auto mb-3 block"></span>
                        <p class="text-base-content/60 font-medium">No notifications found.</p>
                    </li>
                @endforelse
            </ul>

            <!-- Pagination -->
            @if ($notifications->hasPages())
                <div class="p-4 border-t border-base-content/10 bg-base-100">
                    {{ $notifications->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
