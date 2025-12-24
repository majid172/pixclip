@extends('layouts.app')
@section('content')
    <!-- HERO CAROUSEL SECTION -->
    {{-- <section class="container mx-auto px-4 pt-10 md:px-8">
        <div id="hero-carousel" class="relative w-full shadow-xl rounded-xl overflow-hidden bg-white border border-gray-100"
            data-carousel="slide" data-carousel-interval="3000">

            <!-- Carousel wrapper -->
            <div class="relative h-[650px] md:h-[500px] overflow-hidden">

                <!-- ITEM 1: WATCHES -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="grid grid-cols-1 md:grid-cols-2 h-full w-full">
                        <!-- Text Content -->
                        <div
                            class="flex flex-col justify-center px-8 md:px-16 space-y-6 bg-gradient-to-r from-white to-gray-50">
                            <h1 class="text-4xl md:text-4xl font-extrabold text-slate-700 leading-tight">
                                Clipping Path Services
                                <br>
                                Extract Subject <br>
                                <span class="text-indigo-900">Keep Accurate Details</span>
                            </h1>
                            <p class="text-slate-500 text-md leading-relaxed max-w-md">
                                Speed up your business giving yourself a break from photo editing services. Our team is
                                dedicatedly working to give your workflow a speed boost.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4 pt-2">
                                <a href="{{ route('free.trial') }}"
                                    class="px-8 py-3.5 bg-indigo-900 text-white font-bold rounded shadow-lg hover:bg-orange-500 hover:-translate-y-1 transition-all text-center">
                                    Free Trial
                                </a>
                                <a href="javascript:void(0)"
                                    class="px-8 py-3.5 bg-white text-indigo-900 font-bold border border-indigo-200 rounded hover:border-indigo-600 hover:bg-indigo-50 transition-all text-center">
                                    Get Started
                                </a>
                            </div>
                            <p class="text-xs text-slate-400 font-medium">* No credit card required.</p>
                        </div>
                        <!-- Image -->
                        <div class="relative h-full bg-gray-50 flex items-center justify-center p-8">
                            <div class="absolute w-[300px] h-[300px] bg-rose-100 rounded-full blur-3xl opacity-50"></div>
                            <img src="{{ asset('assets/images/banner/clipping.webp') }}"
                                class="relative z-10 max-h-[350px] w-auto drop-shadow-2xl hover:scale-105 transition duration-500"
                                alt="Watches">
                        </div>
                    </div>
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="grid grid-cols-1 md:grid-cols-2 h-full w-full">
                        <!-- Text Content -->
                        <div
                            class="flex flex-col justify-center px-8 md:px-16 space-y-6 bg-gradient-to-r from-white to-gray-50">
                            <h1 class="text-4xl md:text-4xl font-extrabold text-slate-900 leading-tight">
                                Make Your Photo <br>
                                Post-Processing <br>
                                <span class="text-indigo-900">Cost Effective</span>
                            </h1>
                            <p class="text-slate-500 text-md leading-relaxed max-w-md">
                                Speed up your business giving yourself a break from photo editing services. Our team is
                                dedicatedly working to give your workflow a speed boost.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4 pt-2">
                                <a href="javascript:void(0)"
                                    class="px-8 py-3.5 bg-indigo-900 text-white font-bold rounded shadow-lg hover:bg-rose-700 hover:-translate-y-1 transition-all text-center">
                                    Free Trial
                                </a>
                                <a href="javascript:void(0)"
                                    class="px-8 py-3.5 bg-white text-blue-900 font-bold border border-blue-200 rounded hover:border-blue-600 hover:bg-blue-50 transition-all text-center">
                                    Get Started
                                </a>
                            </div>
                            <p class="text-xs text-slate-400 font-medium">* No credit card required.</p>
                        </div>
                        <!-- Image -->
                        <div class="relative h-full bg-gray-50 flex items-center justify-center p-8">
                            <div class="absolute w-[300px] h-[300px] bg-rose-100 rounded-full blur-3xl opacity-50"></div>
                            <img src="{{ asset('/assets/images/banner/photo-editing-services.webp') }}"
                                class="relative z-10 max-h-[350px] w-auto drop-shadow-2xl hover:scale-105 transition duration-500"
                                alt="Watches">
                        </div>
                    </div>
                </div>

                <!-- ITEM 2: SHOES -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="grid grid-cols-1 md:grid-cols-2 h-full w-full">
                        <div
                            class="flex flex-col justify-center px-8 md:px-16 space-y-6 bg-gradient-to-r from-white to-gray-50">
                            <h1 class="text-4xl md:text-4xl font-extrabold text-slate-900 leading-tight">
                                Professional <br>
                                <span class="text-indigo-900">Ghost Mannequin</span> <br>
                                Services
                            </h1>
                            <p class="text-slate-500 text-md leading-relaxed max-w-md">
                                Enhance your clothing line with our invisible mannequin effects. Perfect for eCommerce
                                stores
                                looking to showcase fit.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4 pt-2">
                                <a href="#"
                                    class="px-8 py-3.5 bg-indigo-900 text-white font-bold rounded shadow-lg shadow-indigo-200 hover:bg-indigo-700 transition-all text-center">
                                    See Portfolio
                                </a>
                            </div>
                        </div>
                        <div class="relative h-full bg-gray-50 flex items-center justify-center p-8">
                            <div class="absolute w-[300px] h-[300px] bg-indigo-100 rounded-full blur-3xl opacity-50"></div>
                            <img src="{{ asset('/assets/images/banner/main.png') }}"
                                class="relative z-10 max-h-[350px] w-auto drop-shadow-2xl hover:scale-105 transition duration-500"
                                alt="Shoes">
                        </div>
                    </div>
                </div>

                <!-- ITEM 3: JEWELRY -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="grid grid-cols-1 md:grid-cols-2 h-full w-full">
                        <div
                            class="flex flex-col justify-center px-8 md:px-16 space-y-6 bg-gradient-to-r from-white to-gray-50">
                            <h1 class="text-4xl md:text-4xl font-extrabold text-slate-900 leading-tight">
                                Jewelry Retouching Services
                                <br>
                                <span class="text-indigo-900">Bring natural Shine</span>
                            </h1>
                            <p class="text-slate-500 text-md leading-relaxed max-w-md">
                                We make your diamonds sparkle. Expert color correction and dust removal to make your
                                products
                                shine.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4 pt-2">
                                <a href="javascript:void(0)"
                                    class="px-8 py-3.5 bg-indigo-900 text-white font-bold rounded shadow-lg shadow-indigo-200 hover:bg-indigo-700 hover:-translate-y-1 transition-all text-center">
                                    Free Trial
                                </a>
                                <a href="javascript:void(0)"
                                    class="px-8 py-3.5 bg-white text-indigo-900 font-bold border border-indigo-200 rounded hover:border-indigo-600 hover:bg-indigo-50 transition-all text-center">
                                    Get Started
                                </a>
                            </div>
                        </div>
                        <div class="relative h-full bg-gray-50 flex items-center justify-center p-8">
                            <div class="absolute w-[300px] h-[300px] bg-yellow-100 rounded-full blur-3xl opacity-50"></div>
                            <img src="{{ asset('/assets/images/banner/jewelary.webp') }}"
                                class="relative z-10 max-h-[300px] w-auto drop-shadow-2xl" alt="Jewelry">
                        </div>
                    </div>
                </div>
            </div>

            <!-- CUSTOM BOTTOM RIGHT CONTROLS -->
            <div class="absolute bottom-8 right-8 md:bottom-12 md:right-16 z-30 flex gap-3">
                <button type="button"
                    class="group flex items-center justify-center w-12 h-12 rounded-full bg-white border border-gray-200 shadow-lg text-gray-500 hover:bg-indigo-900 hover:text-white hover:border-indigo-900 transition-all duration-300 focus:outline-none"
                    data-carousel-prev>
                    <svg class="w-5 h-5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </button>

                <!-- Next Button -->
                <button type="button"
                    class="group flex items-center justify-center w-12 h-12 rounded-full bg-white border border-gray-200 shadow-lg text-gray-500 hover:bg-indigo-900 hover:text-white hover:border-indigo-900 transition-all duration-300 focus:outline-none"
                    data-carousel-next>
                    <svg class="w-5 h-5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </button>

            </div>

        </div>
    </section> --}}

    <section class="relative w-full overflow-hidden bg-white">
        <!-- Background Decoration -->
        <div class="bg-text-giant select-none uppercase">Premium</div>

        <div class="container mx-auto px-4 md:px-8 relative z-10">
            <!-- Navigation Row (Visual Only) -->


            <div class="grid grid-cols-1 lg:grid-cols-12 min-h-[600px] items-center">

                <!-- LEFT: CONTENT -->
                <div class="lg:col-span-5 py-12 lg:pr-12">
                    <div class="relative h-[400px]">

                        <!-- Content 1 -->
                        <div class="auto-content slide-1">
                            <h1 class="uppercase tracking-tighter leading-[1]">
                                <span class="block text-5xl font-medium text-slate-600">
                                    Jewelry
                                </span>

                                <span class="block text-5xl font-medium text-indigo-900">
                                    Retouching.
                                </span>
                            </h1>

                            <p class="mt-6 text-slate-500 text-lg leading-relaxed max-w-sm">
                                Hand-drawn clipping path services for complex shapes. We define the boundary of your
                                products with surgical precision.
                            </p>
                            <div class="mt-10">
                                <a href="{{ route('free.trial') }}"
                                    class="inline-block px-10 py-4 bg-indigo-900 text-white font-bold uppercase tracking-widest text-xs hover:bg-orange-600 transition-all">
                                    Get Free Trial
                                </a>
                            </div>
                        </div>

                        <!-- Content 2 -->
                        <div class="auto-content slide-2">
                           
                             <h1 class="uppercase tracking-tighter leading-[1]">
                                <span class="block text-5xl font-medium text-slate-600">
                                    Cost
                                </span>

                                <span class="block text-5xl font-medium text-indigo-900">
                                    Effective.
                                </span>
                            </h1>
                            <p class="mt-6 text-slate-500 text-lg leading-relaxed max-w-sm">
                                Professional invisible mannequin effects that showcase the volume and fit of your apparel
                                without human distraction.
                            </p>
                            <div class="mt-10">
                                <a href="javascript:void(0);"
                                    class="inline-block px-10 py-4 bg-indigo-900 text-white font-bold uppercase tracking-widest text-xs hover:bg-orange-600 transition-all">
                                    View Portfolio
                                </a>
                            </div>
                        </div>

                        <!-- Content 3 -->
                        <div class="auto-content slide-3">
                             <h1 class="uppercase tracking-tighter leading-[1]">
                                <span class="block text-5xl font-medium text-slate-600">
                                    Clipping
                                </span>

                                <span class="block text-5xl font-medium text-indigo-900">
                                    Path.
                                </span>
                            </h1>
                           
                            <p class="mt-6 text-slate-500 text-lg leading-relaxed max-w-sm">
                                High-end jewelry retouching for luxury brands. We enhance reflections and remove
                                imperfections from every gemstone.
                            </p>
                            <div class="mt-10">
                                <a href="javascript:void(0);"
                                    class="inline-block px-10 py-4 bg-indigo-900 text-white font-bold uppercase tracking-widest text-xs hover:bg-orange-600 transition-all">
                                    Check Pricing
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- RIGHT: IMAGES -->
                <div class="lg:col-span-7 relative h-[450px] lg:h-[600px] flex items-center justify-center">
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-[0.03]">
                        <span class="text-[25rem] font-black">{{ date('Y') }}</span>
                    </div>

                    <img src="{{ asset('assets/images/banner/banner1.webp') }}"
                        class="auto-image-item slide-1 w-full max-h-[500px]">
                    <img src="{{ asset('/assets/images/banner/banner3.webp') }}"
                        class="auto-image-item slide-2 w-full max-h-[500px]">
                    <img src="{{ asset('/assets/images/banner/clipping.png') }}"
                        class="auto-image-item slide-3 w-full max-h-[500px]">
                </div>
            </div>

            <!-- STATS SECTION -->
            <div class="grid grid-cols-2 md:grid-cols-4 border-t border-gray-100 py-12">

                <div class="flex items-center gap-4 border-l border-gray-100 pl-8">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-circle-percentage text-indigo-900">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                        <path d="M9 15.075l6 -6" />
                        <path d="M9 9.105v.015" />
                        <path d="M15 15.12v.015" />
                    </svg>
                    <div>
                        <span class="block text-[10px] font-black uppercase text-indigo-900 tracking-widest">Quality</span>
                        <span class="text-sm font-bold text-slate-500">100% Hand-Drawn</span>
                    </div>
                </div>
                <div class="flex items-center gap-4 border-l border-gray-100 pl-8">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="text-indigo-900">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M20.984 12.53a9 9 0 1 0 -7.552 8.355" />
                        <path d="M12 7v5l3 3" />
                        <path d="M19 16l-2 3h4l-2 3" />
                    </svg>
                    <div>
                        <span class="block text-[10px] font-black uppercase text-indigo-900 tracking-widest">Speed</span>
                        <span class="text-sm font-bold text-slate-500">12h Turnaround</span>
                    </div>
                </div>
                <div class="flex items-center gap-4 border-l border-gray-100 pl-8">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="text-indigo-900 icon icon-tabler icons-tabler-outline icon-tabler-hours-24 ">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 13c.325 2.532 1.881 4.781 4 6" />
                        <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2" />
                        <path d="M4 5v4h4" />
                        <path d="M12 15h2a1 1 0 0 1 1 1v1a1 1 0 0 1 -1 1h-1a1 1 0 0 0 -1 1v1a1 1 0 0 0 1 1h2" />
                        <path d="M18 15v2a1 1 0 0 0 1 1h1" />
                        <path d="M21 15v6" />
                    </svg>
                    <div>
                        <span class="block text-[10px] font-black uppercase text-indigo-900 tracking-widest">Support</span>
                        <span class="text-sm font-bold text-slate-500">24/7 Direct Chat</span>
                    </div>
                </div>
                <div class="flex items-center gap-4 border-l border-gray-100 pl-8">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-premium-rights text-indigo-900">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                        <path
                            d="M13.867 9.75c-.246 -.48 -.708 -.769 -1.2 -.75h-1.334c-.736 0 -1.333 .67 -1.333 1.5c0 .827 .597 1.499 1.333 1.499h1.334c.736 0 1.333 .671 1.333 1.5c0 .828 -.597 1.499 -1.333 1.499h-1.334c-.492 .019 -.954 -.27 -1.2 -.75" />
                        <path d="M12 7v2" />
                        <path d="M12 15v2" />
                    </svg>
                    <div>
                        <span class="block text-[10px] font-black uppercase text-indigo-900 tracking-widest">Pricing</span>
                        <span class="text-sm font-bold text-slate-500">From $0.25/Image</span>
                    </div>
                </div>


            </div>
        </div>
    </section>

    {{-- <section class="bg-white py-24 mt-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">

                <!-- Item 1: Customized Editing -->
                <div class="flex flex-col items-center">
                    <!-- Icon Wrapper -->
                    <div class="mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-12 h-12 text-indigo-900">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                    </div>
                    <!-- Text Content -->
                    <h3 class="text-xl font-bold text-slate-600 mb-3">Customized Editing</h3>
                    <p class="text-slate-500 text-sm leading-relaxed max-w-xs mx-auto">
                        Get precise, customised photo editing services that meet your exact specifications
                    </p>
                </div>

                <!-- Item 2: Easy Dashboard (Changed to Chart Icon) -->
                <div class="flex flex-col items-center">
                    <!-- Icon Wrapper -->
                    <div class="mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-12 h-12 text-indigo-900">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                        </svg>
                    </div>
                    <!-- Text Content -->
                    <h3 class="text-xl font-bold text-slate-600 mb-3">Easy Dashboard</h3>
                    <p class="text-slate-500 text-sm leading-relaxed max-w-xs mx-auto">
                        Effortlessly Manage Your Orders in One Convenient Location
                    </p>
                </div>

                <!-- Item 3: Instant Support (Changed to Call/Phone Icon) -->
                <div class="flex flex-col items-center">
                    <!-- Icon Wrapper -->
                    <div class="mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-12 h-12 text-indigo-900">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                    </div>
                    <!-- Text Content -->
                    <h3 class="text-xl font-bold text-slate-600 mb-3">Instant Support</h3>
                    <p class="text-slate-500 text-sm leading-relaxed max-w-xs mx-auto">
                        Connect with Our Rapid-Response Support Representative in Just 10 Seconds
                    </p>
                </div>

            </div>
        </div>
    </section> --}}

    <section class="relative bg-gradient-to-b from-white via-indigo-50/30 to-white py-24 overflow-hidden">
        <!-- Decorative Background -->
        <div
            class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-indigo-200/20 to-purple-200/20 rounded-full blur-3xl">
        </div>
        <div
            class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-br from-pink-200/20 to-orange-200/20 rounded-full blur-3xl">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">

                <!-- Feature 1: Customized Editing -->
                <div class="group relative">
                    <!-- Card -->
                    <div
                        class="relative h-full bg-white rounded-3xl p-10 shadow-lg hover:shadow-2xl transition-all duration-500 border border-indigo-100/50 hover:border-indigo-300/50 hover:-translate-y-2">
                        <!-- Gradient Overlay on Hover -->
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-indigo-500/5 to-purple-500/5 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>

                        <div class="relative z-10 flex flex-col items-center text-center">
                            <!-- Icon Container with Gradient -->
                            <div class="mb-6 relative">
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-indigo-400 to-purple-400 rounded-2xl blur-xl opacity-40 group-hover:opacity-60 transition-opacity">
                                </div>
                                <div
                                    class="relative w-20 h-20 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" class="w-10 h-10 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-xl font-bold bg-gradient-to-r from-slate-800 to-indigo-900 bg-clip-text text-transparent mb-4 group-hover:from-indigo-600 group-hover:to-purple-600 transition-all duration-300">
                                Customized Editing
                            </h3>
                            <p class="text-slate-600 text-base leading-relaxed">
                                Get precise, customised photo editing services that meet your exact specifications
                            </p>

                            <!-- Decorative Element -->
                            <div
                                class="mt-6 w-16 h-1 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature 2: Easy Dashboard -->
                <div class="group relative">
                    <div
                        class="relative h-full bg-white rounded-3xl p-10 shadow-lg hover:shadow-2xl transition-all duration-500 border border-purple-100/50 hover:border-purple-300/50 hover:-translate-y-2">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-pink-500/5 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>

                        <div class="relative z-10 flex flex-col items-center text-center">
                            <div class="mb-6 relative">
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-purple-400 to-pink-400 rounded-2xl blur-xl opacity-40 group-hover:opacity-60 transition-opacity">
                                </div>
                                <div
                                    class="relative w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" class="w-10 h-10 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                                    </svg>
                                </div>
                            </div>

                            <h3
                                class="text-xl font-bold bg-gradient-to-r from-slate-800 to-purple-900 bg-clip-text text-transparent mb-4 group-hover:from-purple-600 group-hover:to-pink-600 transition-all duration-300">
                                Easy Dashboard
                            </h3>
                            <p class="text-slate-600 text-base leading-relaxed">
                                Effortlessly Manage Your Orders in One Convenient Location
                            </p>

                            <div
                                class="mt-6 w-16 h-1 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature 3: Instant Support -->
                <div class="group relative">
                    <div
                        class="relative h-full bg-white rounded-3xl p-10 shadow-lg hover:shadow-2xl transition-all duration-500 border border-pink-100/50 hover:border-pink-300/50 hover:-translate-y-2">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-pink-500/5 to-orange-500/5 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>

                        <div class="relative z-10 flex flex-col items-center text-center">
                            <div class="mb-6 relative">
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-pink-400 to-orange-400 rounded-2xl blur-xl opacity-40 group-hover:opacity-60 transition-opacity">
                                </div>
                                <div
                                    class="relative w-20 h-20 bg-gradient-to-br from-pink-500 to-orange-600 rounded-2xl flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" class="w-10 h-10 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                    </svg>
                                </div>
                            </div>

                            <h3
                                class="text-xl font-bold bg-gradient-to-r from-slate-800 to-pink-900 bg-clip-text text-transparent mb-4 group-hover:from-pink-600 group-hover:to-orange-600 transition-all duration-300">
                                Instant Support
                            </h3>
                            <p class="text-slate-600 text-base leading-relaxed">
                                Connect with Our Rapid-Response Support Representative in Just 10 Seconds
                            </p>

                            <div
                                class="mt-6 w-16 h-1 bg-gradient-to-r from-pink-500 to-orange-500 rounded-full transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="w-full bg-white py-10">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24 items-center">

                <!-- Left Side: Illustration Image -->
                <div class="relative flex justify-center lg:justify-start">
                    <img src="{{ asset('/assets/images/home/benefit.webp') }}" alt="Team meeting and discussion"
                        class="w-full max-w-lg h-auto object-contain">
                </div>

                <!-- Right Side: Content -->
                <div>
                    <!-- Label with Dash -->
                    <div class="flex items-center space-x-3 mb-4">
                        <span class="w-6 h-0.5 bg-indigo-900"></span>
                        <span class="text-xs font-bold text-slate-500 uppercase tracking-widest">Benefits</span>
                    </div>

                    <!-- Heading -->
                    <h2 class="text-2xl md:text-3xl font-bold text-slate-700 mb-6 leading-tight">
                        Devoted to Deliver <span class="text-indigo-900">Perfection</span>
                    </h2>

                    <!-- Description Paragraph -->
                    <p class="text-slate-500 text-base md:text-md leading-relaxed mb-10">
                        Pix Clipping is dedicated to saving time for photographers, agencies, and studio owners through our
                        expert photo retouching services. With a track record of editing over 1 million images, we have
                        proudly served more than 500 satisfied clients worldwide. Trust us to assist you with exceptional
                        photo retouching services that enhance the visual appeal of your work.

                    </p>

                    <!-- Features List -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-4 gap-x-6">

                        <!-- List Item 1 -->
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2.5" stroke="currentColor" class="w-5 h-5 text-indigo-900 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm font-medium">Retouch as you need</span>
                        </div>

                        <!-- List Item 2 -->
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2.5" stroke="currentColor" class="w-5 h-5 text-indigo-900 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm font-medium">24×7 live support</span>
                        </div>

                        <!-- List Item 3 -->
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2.5" stroke="currentColor" class="w-5 h-5 text-indigo-900 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm font-medium">Save your editing time</span>
                        </div>

                        <!-- List Item 4 -->
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2.5" stroke="currentColor" class="w-5 h-5 text-indigo-900 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm font-medium">Image privacy protection</span>
                        </div>

                        <!-- List Item 5 -->
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2.5" stroke="currentColor" class="w-5 h-5 text-indigo-900 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm font-medium">Deliver images on-time</span>
                        </div>

                        <!-- List Item 6 -->
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2.5" stroke="currentColor" class="w-5 h-5 text-indigo-900 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm font-medium">Secured payment gateway</span>
                        </div>

                        <!-- List Item 7 -->
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2.5" stroke="currentColor" class="w-5 h-5 text-indigo-900 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm font-medium">Cost-effective pricing</span>
                        </div>

                        <!-- List Item 8 -->
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2.5" stroke="currentColor" class="w-5 h-5 text-indigo-900 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm font-medium">Project Based Work</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <span
                    class="inline-flex items-center justify-center bg-amber-50 text-indigo-900 text-xs font-bold px-4 py-1.5 rounded-full uppercase tracking-widest mb-6 border border-indigo-100">
                    Our Services
                </span>
                <h2 class="text-4xl md:text-4xl font-bold text-slate-800 mb-6 tracking-tight">
                    Get Editing <span class="text-indigo-900">Effortlessly</span> Services
                </h2>
                <p class="text-slate-500 text-md leading-relaxed max-w-2xl mx-auto">
                    Choose the professional photo editing services you need to make your images outstanding and enhance
                    perfection.
                </p>
            </div>

            <input type="radio" name="serviceTabs" id="tab-editing" class="hidden peer/editing" checked>
            <input type="radio" name="serviceTabs" id="tab-retouching" class="hidden peer/retouching">
            <input type="radio" name="serviceTabs" id="tab-photography" class="hidden peer/photography">
            <input type="radio" name="serviceTabs" id="tab-ecommerce" class="hidden peer/ecommerce">

            <!-- TABS NAVIGATION -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-2 mb-16 overflow-x-auto">
                <div class="flex min-w-max md:w-full gap-2">

                    <!-- Editing Tab Label -->
                    <label for="tab-editing"
                        class="flex-1 flex items-center justify-center space-x-2 py-4 px-6 rounded-xl transition-all duration-300 cursor-pointer text-slate-500 hover:bg-slate-50 hover:text-indigo-900 peer-checked/editing:bg-indigo-50 peer-checked/editing:text-indigo-700 peer-checked/editing:shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                            </path>
                        </svg>
                        <span class="font-semibold text-sm">Editing</span>
                    </label>

                    <!-- Retouching Tab Label -->
                    <label for="tab-retouching"
                        class="flex-1 flex items-center justify-center space-x-2 py-4 px-6 rounded-xl transition-all duration-300 cursor-pointer text-slate-500 hover:bg-slate-50 hover:text-indigo-900 peer-checked/retouching:bg-indigo-50 peer-checked/retouching:text-indigo-700 peer-checked/retouching:shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        <span class="font-semibold text-sm">Retouching</span>
                    </label>

                    <!-- Photography Tab Label -->
                    <label for="tab-photography"
                        class="flex-1 flex items-center justify-center space-x-2 py-4 px-6 rounded-xl transition-all duration-300 cursor-pointer text-slate-500 hover:bg-slate-50 hover:text-indigo-900 peer-checked/photography:bg-indigo-50 peer-checked/photography:text-indigo-700 peer-checked/photography:shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z">
                            </path>
                        </svg>
                        <span class="font-semibold text-sm">Photography</span>
                    </label>

                    <!-- E-commerce Tab Label -->
                    <label for="tab-ecommerce"
                        class="flex-1 flex items-center justify-center space-x-2 py-4 px-6 rounded-xl transition-all duration-300 cursor-pointer text-slate-500 hover:bg-slate-50 hover:text-indigo-900 peer-checked/ecommerce:bg-indigo-50 peer-checked/ecommerce:text-indigo-700 peer-checked/ecommerce:shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                        <span class="font-semibold text-sm">E-commerce</span>
                    </label>

                </div>
            </div>

            <!-- 1. EDITING CONTENT (3 Columns) -->
            <div class="hidden peer-checked/editing:block animate-fade-in">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-center">

                    <!-- Left List -->
                    <div class="space-y-12">
                        <!-- Item -->
                        <div
                            class="flex gap-5 group items-start hover:bg-white hover:shadow-lg hover:shadow-indigo-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-indigo-50 text-indigo-900 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <a href="{{ route('services.slug', 'clipping-path') }}"
                                    class="text-slate-800 font-bold text-lg mb-2 group-hover:text-indigo-900 transition-colors">
                                    Clipping Path</a>
                                <p class="text-slate-500 text-sm leading-relaxed">Hand-drawn photo clipping service
                                    expertly shapes and isolates subjects for a perfect cut.</p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div
                            class="flex gap-5 group items-start hover:bg-white hover:shadow-lg hover:shadow-indigo-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-indigo-50 text-indigo-900 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <a href="{{ route('services.slug', 'background-remove') }}"
                                    class="text-slate-800 font-bold text-lg mb-2 group-hover:text-indigo-900 transition-colors">
                                    Background Remove</a>
                                <p class="text-slate-500 text-sm leading-relaxed">Refine your images by eliminating
                                    background distractions, allowing your subject to shine.</p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div
                            class="flex gap-5 group items-start hover:bg-white hover:shadow-lg hover:shadow-indigo-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-indigo-50 text-indigo-900 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <a href="{{ route('services.slug', 'shadow-making') }}"
                                    class="text-slate-800 font-bold text-lg mb-2 group-hover:text-indigo-900 transition-colors">
                                    Shadow Making</a>
                                <p class="text-slate-500 text-sm leading-relaxed">Enhance realism by adding natural-looking
                                    shadows and depth to your images.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Center Image -->
                    <div class="flex justify-center items-center py-10 lg:py-0 order-first lg:order-none">
                        <div class="relative w-full max-w-sm">
                            <div class="absolute inset-0 bg-rose-200 rounded-full blur-3xl opacity-30 animate-pulse"></div>
                            <!-- Replace with your actual asset -->
                            <img src="{{ asset('/assets/images/home/home_service_tab.png') }}" alt="Retouching"
                                class="relative z-10 w-full h-auto object-cover rounded-2xl ">
                        </div>
                    </div>

                    <!-- Right List -->
                    <div class="space-y-12 text-right lg:text-left">
                        <!-- Item -->
                        <div
                            class="flex gap-5 group items-start flex-row-reverse lg:flex-row hover:bg-white hover:shadow-lg hover:shadow-indigo-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-indigo-50 text-indigo-900 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <a href="{{ route('services.slug', 'ghost-mannequin') }}"
                                    class="text-slate-800 font-bold text-lg mb-2 group-hover:text-indigo-900 transition-colors">
                                    Ghost Mannequin</a>
                                <p class="text-slate-500 text-sm leading-relaxed">Enhance visual impact for apparel by
                                    replacing mannequins with tailored hollow fits.</p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div
                            class="flex gap-5 group items-start flex-row-reverse lg:flex-row hover:bg-white hover:shadow-lg hover:shadow-indigo-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-indigo-50 text-indigo-900 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <a href="{{ route('services.slug', 'photo-recoloring') }}"
                                    class="text-slate-800 font-bold text-lg mb-2 group-hover:text-indigo-900 transition-colors">
                                    Photo Recoloring</a>
                                <p class="text-slate-500 text-sm leading-relaxed">Capture a single photo and transform it
                                    with endless color possibilities.</p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div
                            class="flex gap-5 group items-start flex-row-reverse lg:flex-row hover:bg-white hover:shadow-lg hover:shadow-indigo-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-indigo-50 text-indigo-900 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4
                                    class="text-slate-800 font-bold text-lg mb-2 group-hover:text-indigo-900 transition-colors">
                                    Real Estate Editing</h4>
                                <p class="text-slate-500 text-sm leading-relaxed">Represent infrastructures, buildings &
                                    interiors attractively with HDR blending.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. RETOUCHING CONTENT (3 Columns - Reusing Structure) -->
            <div class="hidden peer-checked/retouching:block animate-fade-in">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-center">
                    <!-- Left List -->
                    <div class="space-y-12">
                        <div
                            class="flex gap-5 group items-start hover:bg-white hover:shadow-lg hover:shadow-indigo-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-indigo-50 text-indigo-900 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4
                                    class="text-slate-800 font-bold text-lg mb-2 group-hover:text-indigo-900 transition-colors">
                                    High-End Retouching</h4>
                                <p class="text-slate-500 text-sm leading-relaxed">Skin smoothing, blemish removal, and
                                    advanced frequency separation.</p>
                            </div>
                        </div>
                        <div
                            class="flex gap-5 group items-start hover:bg-white hover:shadow-lg hover:shadow-indigo-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-indigo-50 text-indigo-900 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4
                                    class="text-slate-800 font-bold text-lg mb-2 group-hover:text-indigo-900 transition-colors">
                                    Jewelry Enhancement</h4>
                                <p class="text-slate-500 text-sm leading-relaxed">Make diamonds sparkle and metals shine
                                    with careful stone correction.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Center Image -->
                    <div class="flex justify-center items-center py-10 lg:py-0 order-first lg:order-none">
                        <div class="relative w-full max-w-sm">
                            <div class="absolute inset-0 bg-rose-200 rounded-full blur-3xl opacity-30 animate-pulse">
                            </div>
                            <img src="{{ asset('/assets/images/home/retouching.webp') }}" alt="Retouching"
                                class="relative z-10 w-full h-auto object-cover rounded-2xl ">
                        </div>
                    </div>

                    <!-- Right List -->
                    <div class="space-y-12 text-right lg:text-left">
                        <div
                            class="flex gap-5 group items-start hover:bg-white hover:shadow-lg hover:shadow-indigo-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-indigo-50 text-indigo-900 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4
                                    class="text-slate-800 font-bold text-lg mb-2 group-hover:text-indigo-900 transition-colors">
                                    Headshot Editing</h4>
                                <p class="text-slate-500 text-sm leading-relaxed">Professional corporate or editorial
                                    headshot cleanup for a perfect look.</p>
                            </div>
                        </div>
                        <div
                            class="flex gap-5 group items-start hover:bg-white hover:shadow-lg hover:shadow-indigo-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-indigo-50 text-indigo-900 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4
                                    class="text-slate-800 font-bold text-lg mb-2 group-hover:text-indigo-900 transition-colors">
                                    Food Retouching</h4>
                                <p class="text-slate-500 text-sm leading-relaxed">Make food look fresh, steaming, and
                                    appetizing with color grading.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. PHOTOGRAPHY CONTENT (2 Columns) -->
            <div class="hidden peer-checked/photography:block animate-fade-in">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                    <!-- Left Column: Image -->
                    <div class="relative group">
                        <div
                            class="absolute -inset-2 bg-indigo-100 rounded-2xl opacity-50 blur-lg group-hover:opacity-75 transition duration-500">
                        </div>
                        <!-- Replace with asset -->
                        <img src="https://images.unsplash.com/photo-1542038784456-1ea8e935640e?auto=format&fit=crop&q=80&w=800"
                            alt="Photography Service"
                            class="relative rounded-2xl shadow-xl w-full object-cover transform transition duration-500 hover:scale-[1.01]">
                    </div>

                    <!-- Right Column: List -->
                    <div class="space-y-12">

                        <!-- Item -->
                        <div class="flex gap-5">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-indigo-50 text-indigo-900 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <a href="javascript:void(0)"
                                    class="text-slate-800 hover:text-rose-600 font-bold text-lg mb-1">Product
                                    Photography</a>
                                <p class="text-slate-500 text-sm">We capture high-fidelity product photos preserving
                                    natural colors and textures.</p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="flex gap-5">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-indigo-50 text-indigo-900 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <a href="javascript:void(0)"
                                    class="text-slate-800 hover:text-rose-600 font-bold text-lg mb-1">Apparel
                                    Photography</a>
                                <p class="text-slate-500 text-sm">Need your brand with our professional apparel
                                    photography.</p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="flex gap-5">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-indigo-50 text-indigo-900 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <a href="javascript:void(0)"
                                    class="text-slate-800 hover:text-rose-600 font-bold text-lg mb-1">Jewelry
                                    Photography</a>
                                <p class="text-slate-500 text-sm">Macro photography that captures the luxurious sparkle of
                                    ornaments and gems.</p>
                            </div>
                        </div>
                        <div class="flex gap-5">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-indigo-50 text-indigo-900 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <a href="javascript:void(0)"
                                    class="text-slate-800 hover:text-rose-600 font-bold text-lg mb-1">School
                                    Photography</a>
                                <p class="text-slate-500 text-sm">We shoot portraits or groups for entire school in your
                                    preferred style.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. E-COMMERCE CONTENT (2 Columns) -->
            <div class="hidden peer-checked/ecommerce:block animate-fade-in">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                    <!-- Left Column: Illustration -->
                    <div class="relative flex justify-center">
                        <!-- Background circle decoration -->
                        <div
                            class="absolute w-80 h-80 bg-indigo-50 rounded-full -z-10 blur-xl top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        </div>
                        <!-- Replace with asset -->
                        <img src="{{ asset('/assets/images/home/ecommerce-service.png') }}" alt="Photography Service"
                            class="relative rounded-2xl w-full object-cover transform transition duration-500 hover:scale-[1.01]">
                    </div>

                    <!-- Right Column: Services List -->
                    <div class="space-y-10">
                        <!-- Item -->
                        <div
                            class="flex gap-5 group items-start hover:bg-white hover:shadow-lg hover:shadow-indigo-50/50 p-4 rounded-2xl transition-all duration-300">

                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-indigo-50 text-indigo-900 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <a href="{{ route('services.slug', 'amazon') }}"
                                    class="text-slate-800 font-bold text-lg mb-1">Amazon & Shopify Ready</a>
                                <p class="text-slate-500 text-sm">Optimized images that meet strict marketplace guidelines
                                    for white backgrounds and dimensions.</p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div
                            class="flex gap-5 group items-start hover:bg-white hover:shadow-lg hover:shadow-indigo-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-indigo-50 text-indigo-900 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <a href="{{ route('services.slug', 'ecommerce') }}"
                                    class="text-slate-800 font-bold text-lg mb-1">360° Degree Editing</a>
                                <p class="text-slate-500 text-sm">Create symmetrical, rotatable product visuals by
                                    perfectly aligning and adjusting perspectives.</p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div
                            class="flex gap-5 group items-start hover:bg-white hover:shadow-lg hover:shadow-indigo-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-indigo-50 text-indigo-900 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <a href="{{ route('services.slug', 'essential-editing') }}"
                                    class="text-slate-800 font-bold text-lg mb-1">Essential Editing</a>
                                <p class="text-slate-500 text-sm">Web-ready compression that loads fast without sacrificing
                                    visual quality.</p>
                            </div>
                        </div>
                        <div
                            class="flex gap-5 group items-start hover:bg-white hover:shadow-lg hover:shadow-indigo-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-indigo-50 text-indigo-900 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <a href="{{ route('services.slug', 'image-optimization') }}"
                                    class="text-slate-800 font-bold text-lg mb-1">Image Optimization</a>
                                <p class="text-slate-500 text-sm">Web-ready compression that loads fast without sacrificing
                                    visual quality.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="py-24 bg-gradient-to-b from-white to-slate-50">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Header -->
            <div class="text-center mb-20">
                <span
                    class="bg-indigo-100 text-indigo-900 px-4 py-1.5 rounded-full text-xs font-semibold uppercase">Pricing</span>
                <h2 class="mt-6 text-4xl font-semibold text-slate-800">Choose Your <span class="text-indigo-900">Perfect
                        Plan</span> </h2>
                <p class="mt-2 text-slate-500 max-w-xl mx-auto text-sm">Flexible pricing built for individuals, agencies &
                    large volume clients.</p>
            </div>

            <!-- Pricing Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                <!-- CARD 1 -->
                <div
                    class="bg-white shadow-xl p-10 rounded-2xl border border-slate-200 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300">

                    <div class="text-center">
                        <div
                            class="w-16 h-16 mx-auto mb-6 bg-indigo-50 text-indigo-900 rounded-xl flex items-center justify-center shadow-sm">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 8V3c0-.552.448-1 1-1zm5 5h.01" />
                            </svg>
                        </div>

                        <h3 class="text-slate-700 text-xl font-semibold">Free Trial</h3>

                        <p class="mt-4 inline-block text-xl font-bold text-indigo-900 border px-8 py-2 rounded-full">
                            Free
                        </p>
                    </div>

                    <ul class="mt-10 space-y-4 text-sm text-slate-600">
                        <li class="flex justify-between border-b pb-4">First image free <svg class="w-5 text-indigo-900"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 13l4 4L19 7" />
                            </svg></li>
                        <li class="flex justify-between border-b pb-4">12-hour delivery <svg class="w-5 text-indigo-900"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 13l4 4L19 7" />
                            </svg></li>
                        <li class="flex justify-between border-b pb-4">Quick response <svg class="w-5 text-indigo-900"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 13l4 4L19 7" />
                            </svg></li>
                        <li class="flex justify-between border-b pb-4">No credit card required <svg
                                class="w-5 text-indigo-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 13l4 4L19 7" />
                            </svg></li>
                    </ul>

                    <div class="mt-10 text-center">
                        <a href="{{ route('free.trial') }}"
                            class="bg-indigo-900 hover:bg-indigo-700 text-white px-8 py-3 rounded-lg shadow-lg text-sm font-semibold transition">Get
                            Free Trial</a>
                    </div>

                </div>

                <!-- CARD 2 (HIGHLIGHTED / PREMIUM) -->
                <div
                    class="bg-gradient-to-br from-indigo-900 to-indigo-800 text-white shadow-2xl p-10 rounded-2xl border border-indigo-300/30 scale-[1.06] hover:scale-[1.07] transition-transform duration-300 relative overflow-hidden">

                    <!-- Shine -->
                    <div class="absolute inset-0 bg-white/10 backdrop-blur-sm opacity-20"></div>

                    <div class="relative z-10 text-center">
                        <div class="w-16 h-16 mx-auto mb-6 bg-white/20 rounded-xl flex items-center justify-center">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>

                        <h3 class="text-xl font-semibold text-white">As Low As</h3>

                        <p class="mt-4 inline-block border px-8 py-2 rounded-full border-white/30">
                            <span class="text-3xl font-extrabold">$0.29</span>
                            <span class="ml-1 text-lg">/ image</span>
                        </p>
                    </div>

                    <ul class="relative z-10 mt-10 space-y-4 text-sm">
                        <li class="flex justify-between border-b border-white/20 pb-4">On-demand editing <svg
                                class="w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 13l4 4L19 7" />
                            </svg></li>
                        <li class="flex justify-between border-b border-white/20 pb-4">On-time delivery <svg
                                class="w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 13l4 4L19 7" />
                            </svg></li>
                        <li class="flex justify-between border-b border-white/20 pb-4">Free revision <svg class="w-5"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 13l4 4L19 7" />
                            </svg></li>
                        <li class="flex justify-between border-b border-white/20 pb-4">Guaranteed quality <svg
                                class="w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 13l4 4L19 7" />
                            </svg></li>
                    </ul>

                    <div class="relative z-10 mt-10 text-center">
                        <a href="#"
                            class="bg-white hover:bg-indigo-100 text-indigo-900  px-8 py-3 rounded-lg shadow-lg text-sm transition">Order
                            Now</a>
                    </div>

                </div>

                <!-- CARD 3 -->
                <div
                    class="bg-white shadow-xl p-10 rounded-2xl border border-slate-200 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300">

                    <div class="text-center">
                        <div
                            class="w-16 h-16 mx-auto mb-4 bg-indigo-50 text-indigo-900 rounded-xl flex items-center justify-center shadow-sm">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20Z" opacity="0.2" />
                                <path stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>

                        <h3 class="text-slate-700 text-xl font-semibold">Large Volume</h3>

                        <p class="mt-4 inline-block text-xl font-bold text-indigo-900 border px-8 py-2 rounded-full">
                            Project
                        </p>
                    </div>

                    <ul class="mt-10 space-y-4 text-sm text-slate-600">
                        <li class="flex justify-between border-b pb-4">Dedicated manager <svg class="w-5 text-indigo-900"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 13l4 4L19 7" />
                            </svg></li>
                        <li class="flex justify-between border-b pb-4">Priority support <svg class="w-5 text-indigo-900"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 13l4 4L19 7" />
                            </svg></li>
                        <li class="flex justify-between border-b pb-4">Unlimited revisions <svg
                                class="w-5 text-indigo-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 13l4 4L19 7" />
                            </svg></li>
                        <li class="flex justify-between border-b pb-4">Flexible pay period <svg
                                class="w-5 text-indigo-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 13l4 4L19 7" />
                            </svg></li>
                    </ul>

                    <div class="mt-10 text-center">
                        <a href="#"
                            class="bg-indigo-900 hover:bg-indigo-700 text-white px-8 py-3 rounded-lg shadow-lg text-sm transition">Project
                            Proposal</a>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="text-center max-w-3xl mx-auto mb-20">
                <h2 class="mt-6 text-4xl font-semibold text-slate-800 mb-4">Simplify Editing: <span
                        class="text-indigo-900">Easy, Efficient Steps</span> </h2>

                <p class="text-slate-500 text-base md:text-lg leading-relaxed">
                    Create your account, send us your images, and download your professionally edited images within the
                    allotted time – it truly is that effortless.
                </p>
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                <!-- Left Column: Illustration -->
                <div class="relative flex justify-center lg:justify-end">

                    <div class="relative w-full max-w-lg">
                        <!-- Floating elements simulation (if you don't have a single image) -->
                        <div class="absolute -top-10 -right-10 bg-gray-50 rounded-full p-4 animate-bounce delay-700"></div>

                        <img src="{{ asset('/assets/images/home/efficiant.webp') }}" alt="Dashboard Illustration"
                            class="w-full h-auto object-contain drop-shadow-xl z-10 relative">
                    </div>
                </div>

                <!-- Right Column: Steps List -->
                <div class="space-y-8">

                    <!-- Step 1: Place Order -->
                    <div
                        class="bg-white rounded-2xl p-6 shadow-md border border-slate-100 flex items-start gap-6 hover:-translate-y-1 transition-transform duration-300">
                        <div class="flex-shrink-0">
                            <!-- Icon Container -->
                            <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-blue-50 text-blue-900">
                                <!-- List/Form Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Place order</h3>
                            <p class="text-slate-500 text-sm leading-relaxed">
                                Fill up form, write instructions and select images to create order
                            </p>
                        </div>
                    </div>

                    <!-- Step 2: Make Payment -->
                    <div
                        class="bg-white rounded-2xl p-6 shadow-md border border-slate-100 flex items-start gap-6 hover:-translate-y-1 transition-transform duration-300">
                        <div class="flex-shrink-0">
                            <!-- Icon Container -->
                            <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-blue-50 text-blue-900">
                                <!-- Credit Card Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Make Payment</h3>
                            <p class="text-slate-500 text-sm leading-relaxed">
                                Pay against your order Invoice to start image processing and relax.
                            </p>
                        </div>
                    </div>

                    <!-- Step 3: Download Output -->
                    <div
                        class="bg-white rounded-2xl p-6 shadow-md border border-slate-100 flex items-start gap-6 hover:-translate-y-1 transition-transform duration-300">
                        <div class="flex-shrink-0">
                            <!-- Icon Container -->
                            <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-blue-50 text-blue-900">
                                <!-- Download Cloud Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3 3m0 0l-3-3m3 3V8" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Download Output</h3>
                            <p class="text-slate-500 text-sm leading-relaxed">
                                Download the final edited images and give us your feedback.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    @include('layouts.includes.portal')
@endsection

@push('css')
    <style>
        /* 15s Total Loop (3 Slides x 5s) */
        @keyframes autoCycle {

            0%,
            28% {
                opacity: 1;
                transform: translateX(0);
                visibility: visible;
            }

            33.33%,
            100% {
                opacity: 0;
                transform: translateX(-40px);
                visibility: hidden;
            }
        }

        @keyframes autoImage {

            0%,
            28% {
                opacity: 1;
                transform: scale(1);
                visibility: visible;
            }

            33.33%,
            100% {
                opacity: 0;
                transform: scale(1.1);
                visibility: hidden;
            }
        }

        /* Progress Bar for Navigation */
        @keyframes navProgress {
            0% {
                width: 0%;
            }

            28%,
            33.33% {
                width: 100%;
            }

            33.34%,
            100% {
                width: 0%;
            }
        }

        .auto-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            animation: autoCycle 15s infinite;
        }

        .auto-image-item {
            position: absolute;
            inset: 0;
            opacity: 0;
            visibility: hidden;
            object-fit: contain;
            animation: autoImage 15s infinite;
        }

        /* Delays for Slide 2 */
        .slide-2 {
            animation-delay: 5s;
        }

        /* Delays for Slide 3 */
        .slide-3 {
            animation-delay: 10s;
        }

        /* Navigation Underline Animation */
        .nav-indicator {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 2px;
            background: #1e1b4b;
            width: 0;
            animation: navProgress 15s infinite;
        }

        /* Large Background Text Styling */
        .bg-text-giant {
            position: absolute;
            font-size: 20vw;
            font-weight: 900;
            color: #f8fafc;
            line-height: 1;
            pointer-events: none;
            z-index: 0;
            white-space: nowrap;
            bottom: -2vw;
            right: -5vw;
        }
    </style>
@endpush
