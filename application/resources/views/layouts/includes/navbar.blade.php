<nav class="bg-blue-50 shadow-sm sticky top-0 z-50 font-sans">
    <div class="container mx-auto px-4 md:px-8 py-4 flex justify-between items-center">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center gap-3">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Pix Clipping Logo" class="h-10 w-auto object-contain" />
        </a>


        <!-- Desktop Menu Links -->
        <div class="hidden lg:flex items-center space-x-8 text-[15px] font-medium text-indigo-900">

            <a href="{{ url('/') }}" class="hover:text-orange-600 transition">Home</a>

            <!-- DROPDOWN: Services -->
            <div class="relative group h-full flex items-center">
                <button class="flex items-center gap-1 hover:text-orange-600 transition focus:outline-none">
                    Services
                    <svg class="w-3 h-3 transform group-hover:rotate-180 transition-transform duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <!-- Main Dropdown -->
                <div
                    class="absolute top-full left-0 pt-6 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2 w-64">
                    <div class="bg-white rounded-lg shadow-xl border-t-4 border-orange-600 py-2 px-1">

                        <div class="relative group/sub">
                            <a href="javascript:void(0)"
                                class="flex justify-between items-center px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">
                                <span>@lang('Editing')</span>

                                <svg class="w-3 h-3 text-gray-400 group-hover/sub:text-orange-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>


                            <div
                                class="absolute left-full top-0 ml-1 w-56 opacity-0 invisible group-hover/sub:opacity-100 group-hover/sub:visible transition-all duration-300 transform group-hover/sub:translate-x-0 -translate-x-2">
                                <div class="bg-white rounded-lg shadow-xl border-t-4 border-orange-600 py-2 px-1">
                                    <a href="{{ route('services.slug', 'clipping-path') }}"
                                        class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">
                                        Clipping Path</a>
                                    <a href="{{ route('services.slug', 'background-remove') }}"
                                        class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">Background
                                        Remove</a>
                                    <a href="{{ route('services.slug', 'shadow-making') }}"
                                        class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">@lang('Shadow Making')</a>
                                    <a href="{{ route('services.slug', 'ghost-mannequin') }}"
                                        class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">Ghost
                                        Mannequin</a>

                                    <a href="{{ route('services.slug', 'photo-recoloring') }}"
                                        class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">Photo
                                        Recoloring</a>

                                    <a href="{{ route('services.slug', 'ghost-mannequin') }}"
                                        class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">Real
                                        Estate Editing</a>
                                </div>
                            </div>
                        </div>
                        <!-- END ITEM 1 -->

                        <!-- ITEM 2: Image Masking (HAS SUBMENU) -->
                        <div class="relative group/sub">
                            <a href="javascript:void(0)"
                                class="flex justify-between items-center px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">
                                <span>Retouching</span>
                                <svg class="w-3 h-3 text-gray-400 group-hover/sub:text-orange-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <!-- SUBMENU -->
                            <div
                                class="absolute left-full top-0 ml-1 w-56 opacity-0 invisible group-hover/sub:opacity-100 group-hover/sub:visible transition-all duration-300 transform group-hover/sub:translate-x-0 -translate-x-2">
                                <div class="bg-white rounded-lg shadow-xl border-t-4 border-orange-600 py-2 px-1">
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">High-End
                                        Retouching</a>

                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">Jewelry
                                        Enhancement</a>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">Headshot
                                        Editing</a>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">Food
                                        Retouching</a>
                                </div>
                            </div>
                        </div>

                        <div class="relative group/sub">
                            <a href="javascript:void(0)"
                                class="flex justify-between items-center px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">
                                <span>Photography</span>
                                <svg class="w-3 h-3 text-gray-400 group-hover/sub:text-orange-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <!-- SUBMENU -->
                            <div
                                class="absolute left-full top-0 ml-1 w-56 opacity-0 invisible group-hover/sub:opacity-100 group-hover/sub:visible transition-all duration-300 transform group-hover/sub:translate-x-0 -translate-x-2">
                                <div class="bg-white rounded-lg shadow-xl border-t-4 border-orange-600 py-2 px-1">
                                    <a href="javascript:void(0)"
                                        class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">Product
                                        Photography</a>

                                    <a href="javascript:void(0)"
                                        class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">Apparel
                                        Photography</a>
                                    <a href="javascript:void(0)"
                                        class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">Jewelry
                                        Photography</a>
                                    <a href="javascript:void(0)"
                                        class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">School
                                        Photography
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Regular Items -->

                        <div class="relative group/sub">
                            <a href="javascript:void(0)"
                                class="flex justify-between items-center px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">
                                <span>@lang('E-Commerce')</span>
                                <svg class="w-3 h-3 text-gray-400 group-hover/sub:text-orange-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <!-- SUBMENU -->
                            <div
                                class="absolute left-full top-0 ml-1 w-56 opacity-0 invisible group-hover/sub:opacity-100 group-hover/sub:visible transition-all duration-300 transform group-hover/sub:translate-x-0 -translate-x-2">
                                <div class="bg-white rounded-lg shadow-xl border-t-4 border-orange-600 py-2 px-1">
                                    <a href="{{ route('services.slug', 'essential-editing') }}"
                                        class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">Essential
                                        Editing</a>

                                    <a href="{{ route('services.slug', 'amazon') }}"
                                        class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">Amazon,
                                        e-Bay, Shopify Ready</a>
                                    <a href="{{ route('services.slug', 'ecommerce') }}"
                                        class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">E-commerce
                                        360 degree editing</a>
                                    <a href="{{ route('services.slug', 'image-optimization') }}"
                                        class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">Image
                                        Optimization
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a href="{{ url('/workflow') }}" class="hover:text-orange-600 transition">Workflow</a>
            <a href="{{ url('/price') }}" class="hover:text-orange-600 transition">Price</a>

            <!-- DROPDOWN: Resources -->
            <div class="relative group h-full flex items-center">
                <button class="flex items-center gap-1 hover:text-orange-600 transition focus:outline-none">
                    Resources
                    <svg class="w-3 h-3 transform group-hover:rotate-180 transition-transform duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </button>
                <div
                    class="absolute top-full -left-4 pt-6 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2 w-48">
                    <div class="bg-white rounded-lg shadow-xl border-t-4 border-orange-600 py-2 px-1">
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">Blog</a>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">Case
                            Studies</a>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">Help
                            Center</a>
                    </div>
                </div>
            </div>

            <!-- DROPDOWN: Company -->
            <div class="relative group h-full flex items-center">
                <button class="flex items-center gap-1 hover:text-orange-600 transition focus:outline-none">
                    Company
                    <svg class="w-3 h-3 transform group-hover:rotate-180 transition-transform duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </button>
                <div
                    class="absolute top-full right-0 pt-6 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2 w-48">
                    <div class="bg-white rounded-lg shadow-xl border-t-4 border-orange-600 py-2 px-1">
                        <a href="{{ url('/about') }}"
                            class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">About
                            Company</a>
                        {{-- <a href="#"
                            class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">Career</a>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">Our
                            Team</a> --}}
                        <a href="{{ url('/contact') }}"
                            class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-50 hover:text-orange-600 rounded transition">Contact
                            Us</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Right Actions: Socials + Order Button -->
        <div class="hidden md:flex items-center gap-6">
            <div class="flex items-center gap-4 text-blue-900">
                <!-- Social Icons -->
                <a href="#" class="hover:text-rose-700 hover:scale-110 transition-transform"><svg
                        class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                    </svg></a>
                <a href="#" class="hover:text-rose-700 hover:scale-110 transition-transform"><svg
                        class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"
                            stroke-width="2"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z" stroke-width="2"></path>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" stroke-width="2"></line>
                    </svg></a>
            </div>
            <a href="#"
                class="bg-indigo-900 text-white px-6 py-2.5 rounded shadow-lg shadow-indigo-200 font-bold text-sm flex items-center gap-2 transition transform hover:-translate-y-0.5">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
                ORDER NOW
            </a>
        </div>

        <!-- Mobile Menu Toggle -->
        <div class="lg:hidden">
            <button id="mobile-menu-btn" class="text-rose-900 hover:text-rose-600 p-2 focus:outline-none">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-100 overflow-y-auto max-h-[80vh]">
        <div class="px-6 pt-4 pb-6 space-y-3">
            <a href="#" class="block font-bold text-blue-900 hover:text-rose-600">Home</a>

            <!-- Mobile Services with Submenu structure -->
            <div class="border-l-2 border-gray-100 pl-4 space-y-3">
                <span class="block font-bold text-blue-900 text-sm uppercase tracking-wider mb-2">Services</span>

                <!-- Clipping Path Mobile Submenu -->
                <div class="space-y-1">
                    <a href="#" class="block text-gray-700 font-semibold hover:text-rose-600 text-sm">Clipping
                        Path</a>
                    <div class="pl-3 border-l border-gray-200 ml-1 space-y-1">
                        <a href="#" class="block text-gray-500 hover:text-rose-600 text-xs py-0.5">Basic
                            Clipping</a>
                        <a href="#" class="block text-gray-500 hover:text-rose-600 text-xs py-0.5">Complex
                            Clipping</a>
                        <a href="#" class="block text-gray-500 hover:text-rose-600 text-xs py-0.5">Super
                            Complex</a>
                    </div>
                </div>

                <!-- Image Masking Mobile Submenu -->
                <div class="space-y-1">
                    <a href="#" class="block text-gray-700 font-semibold hover:text-rose-600 text-sm">Image
                        Masking</a>
                    <div class="pl-3 border-l border-gray-200 ml-1 space-y-1">
                        <a href="#" class="block text-gray-500 hover:text-rose-600 text-xs py-0.5">Alpha
                            Masking</a>
                        <a href="#" class="block text-gray-500 hover:text-rose-600 text-xs py-0.5">Hair
                            Masking</a>
                    </div>
                </div>

                <a href="#" class="block text-gray-600 hover:text-rose-600 text-sm">Ghost Mannequin</a>
                <a href="#" class="block text-gray-600 hover:text-rose-600 text-sm">Photo Retouching</a>
            </div>

            <a href="#" class="block font-bold text-blue-900 hover:text-rose-600">Workflow</a>
            <a href="#" class="block font-bold text-blue-900 hover:text-rose-600">Price</a>

            <!-- Mobile Company -->
            <div class="border-l-2 border-gray-100 pl-4 space-y-2">
                <span class="block font-bold text-rose-500 text-sm uppercase tracking-wider mb-2">Company</span>
                <a href="#" class="block text-gray-600 hover:text-rose-600 text-sm">About Company</a>
                <a href="#" class="block text-gray-600 hover:text-rose-600 text-sm">Career</a>
                <a href="#" class="block text-gray-600 hover:text-rose-600 text-sm">Our Team</a>
                <a href="#" class="block text-gray-600 hover:text-rose-600 text-sm">Contact Us</a>
            </div>

            <a href="#"
                class="block mt-6 text-center bg-rose-800 text-white py-3 rounded font-bold shadow-md">ORDER NOW</a>
        </div>
    </div>
</nav>
