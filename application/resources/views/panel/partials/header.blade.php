@php
    $unreadCount = auth()->user()->unreadNotifications()->count();
    $unreadNotifications = auth()->user()->unreadNotifications()->latest()->take(3)->get();
    $readNotifications = auth()->user()->readNotifications()->latest()->take(3)->get();
@endphp

<div class="bg-base-100 border-base-content/20 lg:ps-75 sticky top-0 z-50 flex border-b">
    <div class="mx-auto w-full max-w-7xl">
        <nav class="navbar py-2">
            <div class="navbar-start items-center gap-2">
                <button type="button" class="btn btn-soft btn-square btn-sm lg:hidden" aria-haspopup="dialog"
                    aria-expanded="false" aria-controls="layout-sidebar" data-overlay="#layout-sidebar">
                    <span class="icon-[tabler--menu-2] size-4.5"></span>
                </button>

                <!-- Search  -->
                <div class="input no-focus border-0 px-0">
                    <span class="icon-[tabler--search] text-base-content/80 my-auto me-2 size-4 shrink-0"></span>
                    <input type="search" class="grow placeholder:text-sm" placeholder="Type to Search..."
                        id="kbdInput" />
                    <label class="sr-only" for="kbdInput">Search</label>
                </div>
            </div>

            <div class="navbar-end items-end gap-6">
                <!-- Notification Dropdown -->


                <!-- GitHub Button -->
                @if (!auth()->user()->is_admin)
                    <div class="max-md:hidden">
                        <a class="btn btn-primary" href="{{ route('order.place') }}">@lang('Order Place')</a>
                    </div>
                @endif

                <div class="dropdown dropdown-end relative">
                    <button type="button" class="relative inline-flex" aria-haspopup="menu" aria-expanded="false">

                        <!-- Bell Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-bell-ringing">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                            <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                            <path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727" />
                            <path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727" />
                        </svg>

                        <!-- 2. Updated Badge Classes for perfect corner positioning -->
                        @if ($unreadCount > 0)
                            <span id="notification-count"
                                class="badge badge-error badge-xs absolute !top-0 !right-0 left-auto -translate-y-1/2 translate-x-1/2 flex h-4 w-4 items-center justify-center text-[10px]">
                                {{ $unreadCount }}
                            </span>
                        @endif
                    </button>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const notificationBtn = document.querySelector('.dropdown-end button[aria-haspopup="menu"]');
                            const notificationCount = document.getElementById('notification-count');

                            if (notificationBtn && notificationCount) {
                                notificationBtn.addEventListener('click', function() {
                                  
                                    const isExpanded = notificationBtn.getAttribute('aria-expanded') === 'true';
                                    if (isExpanded) {
                                        // Dropdown is now open, hide the badge
                                        notificationCount.style.display = 'none';
                                    } else {
                                        // Dropdown is now closed, show the badge
                                        notificationCount.style.display = 'flex';
                                    }
                                    setTimeout(() => {
                                        const isNowExpanded = notificationBtn.getAttribute('aria-expanded') ===
                                            'true';
                                        if (isNowExpanded) {
                                            notificationCount.style.display = 'none';
                                        } else {
                                            notificationCount.style.display = 'flex';
                                        }
                                    }, 50);
                                });

                                // Also handle clicking outside which closes the dropdown but might not trigger the button click if handled by document listener
                                document.addEventListener('click', function(event) {
                                    if (!notificationBtn.contains(event.target)) {
                                       
                                        setTimeout(() => {
                                            const isNowExpanded = notificationBtn.getAttribute('aria-expanded') ===
                                                'true';
                                            if (!isNowExpanded) {
                                                notificationCount.style.display = 'flex';
                                            }
                                        }, 50);
                                    }
                                });
                            }
                        });
                    </script>

                    <ul class="dropdown-menu dropdown-open:opacity-100 hidden w-80 max-h-[500px] overflow-y-auto rounded-box border border-base-content/20 bg-base-100 shadow-lg"
                        role="menu">

                        <!-- Header -->
                        <li class="px-4 py-3 border-b border-base-content/20 bg-base-100 sticky top-0 z-10">
                            <h6 class="font-semibold text-base">Notifications</h6>
                            <p class="text-sm text-base-content/70">You have
                                {{ $unreadCount }} new notifications</p>
                        </li>

                        <!-- Unread Notifications -->
                        @if ($unreadNotifications->count() > 0)
                            <li class="px-4 py-2 bg-base-200/50 text-xs font-semibold text-base-content/70">Unread</li>
                            @foreach ($unreadNotifications as $notification)
                                <li>
                                    @php
                                        $isNewUser = $notification->type === 'App\Notifications\NewUserRegistered' && isset($notification->data['user_id']);
                                    @endphp
                                    <div class="flex flex-col px-4 py-3 hover:bg-base-200 bg-base-100 border-l-4 {{ $isNewUser ? 'border-info' : 'border-primary' }}">
                                        <a href="{{ route('notifications.read', $notification->id) }}" class="flex gap-3">
                                            <span class="badge {{ $isNewUser ? 'badge-info' : 'badge-success' }} mt-1 h-2 w-2 rounded-full p-0 flex-shrink-0"></span>
                                            <div>
                                                <p class="font-medium text-sm">
                                                    {{ $notification->data['title'] ?? 'Notification' }}
                                                </p>
                                                <p class="text-xs text-base-content/70">
                                                    {{ $notification->data['message'] ?? '' }}
                                                </p>
                                                <p class="text-xs text-base-content/50 mt-1">
                                                    {{ $notification->created_at->diffForHumans() }}
                                                </p>
                                            </div>
                                        </a>
                                        
                                        @if($isNewUser)
                                            <div class="mt-2 ms-5">
                                                 <a href="{{ \Illuminate\Support\Facades\URL::signedRoute('user.approve.signed', ['user' => $notification->data['user_id']]) }}" 
                                                    class="btn btn-xs btn-success w-full">
                                                    Approve User
                                                 </a>
                                            </div>
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                        @endif

                        <!-- Read Notifications -->
                        @if ($readNotifications->count() > 0)
                            <li class="px-4 py-2 bg-base-200/50 text-xs font-semibold text-base-content/70">Read</li>
                            @foreach ($readNotifications as $notification)
                                <li>
                                    <a href="{{ route('notifications.read', $notification->id) }}"
                                        class="flex gap-3 px-4 py-3 hover:bg-base-200 opacity-75">
                                        <span class="badge badge-neutral mt-1 h-2 w-2 rounded-full p-0"></span>

                                        <div>
                                            <p class="font-medium text-sm">
                                                {{ $notification->data['title'] ?? 'Notification' }}</p>
                                            <p class="text-xs text-base-content/70">
                                                {{ $notification->data['message'] ?? '' }}
                                            </p>
                                            <p class="text-xs text-base-content/50 mt-1">
                                                {{ $notification->created_at->diffForHumans() }}</p>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        @endif

                        @if ($unreadNotifications->isEmpty() && $readNotifications->isEmpty())
                            <li class="px-4 py-3">
                                <p class="text-sm text-base-content/70">No notifications</p>
                            </li>
                        @endif

                        <!-- Footer -->
                        <li class="border-t border-base-content/20 p-2">
                            <a href="{{ route('notifications.index') }}" class="btn btn-text btn-sm btn-block">
                                View All Notifications
                            </a>
                        </li>
                    </ul>
                </div>
                <script async defer src="https://buttons.github.io/buttons.js"></script>

                <!-- Profile Dropdown -->
                <div class="dropdown relative inline-flex [--offset:21]">
                    <button id="profile-dropdown" type="button" class="dropdown-toggle avatar" aria-haspopup="menu"
                        aria-expanded="false" aria-label="Dropdown">
                        <span class="rounded-field size-9.5">
                            <img src="{{ asset('/assets/images/man.png') }}" alt="User Avatar" />
                        </span>
                    </button>
                    <ul class="dropdown-menu dropdown-open:opacity-100 max-w-75 hidden w-full space-y-0.5"
                        role="menu" aria-orientation="vertical" aria-labelledby="profile-dropdown">
                        <li class="dropdown-header pt-4.5 mb-1 gap-4 px-5 pb-3.5">
                            <div class="avatar avatar-online-top">
                                <div class="w-10 rounded-full">
                                    <img src="{{ asset('/assets/images/man.png') }}" alt="User Avatar" />
                                </div>
                            </div>
                            <div>
                                <h6 class="text-base-content mb-0.5 font-semibold">{{ auth()->user()->name }}</h6>
                                <p class="text-base-content/80 font-medium">
                                    {{ auth()->user()->is_admin == 1 ? 'Admin' : 'User' }}</p>
                            </div>
                        </li>
                        <li>
                            <a class="dropdown-item px-3" href="{{ url('/') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-home">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item px-3" href="{{ route('user.show', auth()->user()->id) }}">
                                <span class="icon-[tabler--user] size-5"></span>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item px-3" href="{{ route('user.edit', auth()->user()->id) }}">
                                <span class="icon-[tabler--settings] size-5"></span>
                                Account Settings
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item px-3" href="{{ route('password') }}">
                                <span class="icon-[tabler--lock] size-5"></span>
                                Change Password
                            </a>
                        </li>
                        @if (!auth()->user()->is_admin)
                            <li>
                                <a class="dropdown-item px-3" href="{{ route('billing.index') }}">
                                    <span class="icon-[tabler--credit-card] size-5"></span>
                                    Billing
                                </a>
                            </li>
                        @endif

                        <li>
                            <hr class="border-base-content/20 -mx-2 my-1" />
                        </li>


                        <li class="dropdown-footer p-2 pt-1">
                            <a class="btn btn-text btn-error btn-block h-11 justify-start px-3 font-normal"
                                href="{{ route('logout') }}">
                                <span class="icon-[tabler--logout] size-5"></span>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

