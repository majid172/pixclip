<!doctype html>

<html lang="en" data-assets-path="../assets/" data-layout-path="dashboard-free/" dir="ltr" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Dashboards || PixClipping</title>

    <meta name="description"
        content="PixClipping is the best dashboard for responsive web apps. Streamline your app development process with ease." />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/assets/images/logo_2.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&ampdisplay=swap"
        rel="stylesheet" />

    <!-- Core CSS -->
    <!-- endbuild -->

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/dist/libs/apexcharts/dist/apexcharts.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/dist/libs/flyonui/src/vendor/apexcharts.css') }}" />

    <!-- build:css -->
    <link rel="stylesheet" href="{{ asset('/assets/dist/css/output.css') }}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/flasher/flasher.min.css') }}">
    <script src="{{ asset('assets/vendor/flasher/flasher.min.js') }}"></script>


    <!-- Theme JS -->
    {{-- <script type="text/javascript">
        (function() {
            try {
                const root = document.documentElement;
                const layoutPath = root.getAttribute('data-layout-path')?.replace('/', '') || 'dashboard-default';
                const localStorageKey = `${layoutPath}-theme`;

                // Theme configuration loaded from page-config.json at build time
                window.THEME_CONFIG = {
                    'dashboard-free': {
                        default: 'light',
                        light: 'light',
                        dark: 'dark',
                        system: {
                            light: 'light',
                            dark: 'dark'
                        }
                    }
                };

                // Get current system theme preference
                const getSystemPreference = () => window.matchMedia('(prefers-color-scheme: dark)').matches;

                // Resolve theme based on user selection and layout configuration
                const resolveTheme = (selectedTheme, layoutPath) => {
                    const layoutConfig = window.THEME_CONFIG[layoutPath];
                    if (!layoutConfig) return selectedTheme === 'system' ? (getSystemPreference() ? 'dark' :
                        'light') : selectedTheme;

                    if (selectedTheme === 'system') {
                        const systemConfig = layoutConfig.system;
                        const prefersDark = getSystemPreference();
                        return prefersDark ? systemConfig.dark : systemConfig.light;
                    }

                    return layoutConfig[selectedTheme] || selectedTheme || layoutConfig.default || 'light';
                };

                const savedTheme = localStorage.getItem(localStorageKey) || 'system';
                const resolvedTheme = resolveTheme(savedTheme, layoutPath);

                root.setAttribute('data-theme', resolvedTheme);
            } catch (e) {
                console.warn('Early theme script error:', e);
            }
        })();
    </script> --}}
</head>

<body>
    <!-- Layout wrapper -->
    <div class="bg-base-200 flex min-h-screen flex-col">
        <!-- Layout Navbar -->
        <!-- ---------- HEADER ---------- -->
        @include('panel.partials.header')
        @include('panel.partials.aside')
        <!-- / Menu -->

        <!-- Layout Container -->
        <div class="lg:ps-75 flex grow flex-col">
            <!-- Content -->
            <main class="mx-auto w-full max-w-[1280px] flex-1 grow space-y-6 p-6">
                @yield('content')
            </main>
            <!-- / Content -->

            <!-- Footer: Start -->
            @include('panel.partials.footer')
            <!-- Footer: End -->
        </div>
        <!-- / Layout Container -->
    </div>
    <!-- / Layout Wrapper -->
<<<<<<< HEAD
    @stack('css')
    @stack('styles')
=======
    @stack('styles')
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script type="module">
        // Wait for Echo to be ready
        setTimeout(() => {
            if (window.Echo) {
                const userId = {{ auth()->id() }};

                // Listen to user's private notification channel
                window.Echo.private(`notifications.${userId}`)
                    .notification((notification) => {
                        console.log('Realtime Notification Received:', notification);

                        // Update notification badge count
                        const badge = document.getElementById('notification-count');
                        if (badge) {
                            const currentCount = parseInt(badge.textContent) || 0;
                            badge.textContent = currentCount + 1;
                            badge.style.display = 'flex';
                        } else {
                            // Create badge if it doesn't exist
                            const bellButton = document.querySelector(
                                '.dropdown-end button[aria-haspopup="menu"]');
                            if (bellButton) {
                                const newBadge = document.createElement('span');
                                newBadge.id = 'notification-count';
                                newBadge.className =
                                    'badge badge-error badge-xs absolute !top-0 !right-0 left-auto -translate-y-1/2 translate-x-1/2 flex h-4 w-4 items-center justify-center text-[10px]';
                                newBadge.textContent = '1';
                                bellButton.appendChild(newBadge);
                            }
                        }

                        // Prepend notification to dropdown
                        const notificationList = document.querySelector('.dropdown-menu[role="menu"]');
                        if (notificationList) {
                            // Find or create unread section
                            let unreadSection = Array.from(notificationList.children).find(li =>
                                li.textContent.includes('Unread') && li.classList.contains('bg-base-200/50')
                            );

                            if (!unreadSection) {
                                // Create unread section header
                                unreadSection = document.createElement('li');
                                unreadSection.className =
                                    'px-4 py-2 bg-base-200/50 text-xs font-semibold text-base-content/70';
                                unreadSection.textContent = 'Unread';

                                // Insert after header
                                const header = notificationList.querySelector('.border-b');
                                if (header && header.nextElementSibling) {
                                    notificationList.insertBefore(unreadSection, header.nextElementSibling);
                                }
                            }

                            // Create notification item
                            const notificationItem = document.createElement('li');
                            notificationItem.innerHTML = `
                                <a href="/notifications/${notification.id}/read" 
                                   class="flex gap-3 px-4 py-3 hover:bg-base-200 bg-base-100 border-l-4 border-primary">
                                    <span class="badge badge-primary badge-sm mt-1"></span>
                                    <div>
                                        <p class="font-medium text-sm">${notification.title || 'Notification'}</p>
                                        <p class="text-xs text-base-content/70">${notification.message || ''}</p>
                                        <p class="text-xs text-base-content/50 mt-1">Just now</p>
                                    </div>
                                </a>
                            `;

                            // Insert after unread section
                            if (unreadSection.nextElementSibling) {
                                notificationList.insertBefore(notificationItem, unreadSection
                                    .nextElementSibling);
                            }
                        }

                        // Update header count text
                        const headerCount = notificationList?.querySelector('p.text-sm');
                        if (headerCount) {
                            const match = headerCount.textContent.match(/(\d+)/);
                            const count = match ? parseInt(match[1]) + 1 : 1;
                            headerCount.textContent = `You have ${count} new notifications`;
                        }

                        // Show toast notification using Flasher
                        if (typeof flasher !== 'undefined') {
                            flasher.info(notification.message, notification.title);
                        }

                        // Optional: Play notification sound
                        // const audio = new Audio('/assets/sounds/notification.mp3');
                        // audio.play().catch(e => console.log('Audio play failed:', e));
                    });

                console.log('Echo connected and listening to notifications channel');
            } else {
                console.error('Echo is not available');
            }
        }, 1000);
    </script>
>>>>>>> f4487809c6336aa094a5037239790f3f6100af79
    @stack('js')
    @stack('plugins')

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Vendors JS -->
    <script src="{{ asset('/assets/dist/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('/assets/dist/libs/flyonui/dist/helper-apexcharts.js') }}"></script>

    <!-- FlyonUI JS -->
    <script src="{{ asset('/assets/dist/libs/flyonui/flyonui.js') }}"></script>

    <!-- Theme Utils JS -->
    {{-- <script src="{{ asset('/assets/dist/js/theme-utils.js') }}"></script> --}}

    <!-- Main JS -->
    <script src="{{ asset('/assets/dist/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('/assets/dist/js/common-dashboard-free.js') }}"></script>

<<<<<<< HEAD

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>  --}}
    {{-- <script> 
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": "3000",
        };
    </script>
    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif

        @if (Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
        @endif
    </script> --}}
=======
    @flasher_render
>>>>>>> f4487809c6336aa094a5037239790f3f6100af79
</body>

</html>
