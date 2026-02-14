@extends('layouts.app')
@section('title', 'Pixclipping Professional Image Editing Services ')
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
                        class="auto-image-item slide-1 w-full max-h-[500px]" loading="lazy">
                    <img src="{{ asset('/assets/images/banner/banner3.webp') }}"
                        class="auto-image-item slide-2 w-full max-h-[500px]" loading="lazy">
                    <img src="{{ asset('/assets/images/banner/clipping.png') }}"
                        class="auto-image-item slide-3 w-full max-h-[500px]" loading="lazy">
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

    <section class="py-24 bg-slate-50/50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-end mb-16">
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <span class="h-px w-8 bg-indigo-600"></span>
                        <span class="text-xs font-bold uppercase tracking-[0.2em] text-indigo-900">Our Expertise</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-semibold text-slate-900 leading-[1.15]">
                        Get Editing Services<span class="relative inline-block text-indigo-900">Effortlessly
                            <svg class="absolute -bottom-2 left-0 w-full" viewBox="0 0 100 10"
                                preserveAspectRatio="none">
                                <path d="M0 5 Q 25 0 50 5 T 100 5" stroke="currentColor" stroke-width="2" fill="none"
                                    class="opacity-30" />
                            </svg>
                        </span><br />
                    </h2>
                </div>
                <div class="lg:border-l border-slate-200 lg:pl-12">
                    <p class="text-slate-500 text-lg leading-relaxed max-w-md">
                        Choose the professional photo editing services you need to make your images outstanding and enhance
                        perfection.
                    </p>
                </div>
            </div>

            <!-- FUNCTIONAL LOGIC (Hidden Radios) -->
            <input type="radio" name="serviceTabs" id="tab-editing" class="hidden peer/editing" checked>
            <input type="radio" name="serviceTabs" id="tab-retouching" class="hidden peer/retouching">
            <input type="radio" name="serviceTabs" id="tab-photography" class="hidden peer/photography">
            <input type="radio" name="serviceTabs" id="tab-ecommerce" class="hidden peer/ecommerce">

            <!-- TABS NAVIGATION (Premium Pill Style) -->
            <div class="relative z-10 mb-20 flex justify-center">
                <div class="inline-flex p-1.5 bg-white rounded-2xl shadow-sm border border-slate-200 overflow-x-auto">
                    <label for="tab-editing"
                        class="flex items-center gap-2 px-8 py-3 rounded-xl cursor-pointer transition-all duration-300 font-bold text-sm text-slate-400 hover:text-indigo-600 peer-checked/editing:bg-indigo-600 peer-checked/editing:text-white peer-checked/editing:shadow-lg peer-checked/editing:shadow-indigo-200">
                        Editing
                    </label>
                    <label for="tab-retouching"
                        class="flex items-center gap-2 px-8 py-3 rounded-xl cursor-pointer transition-all duration-300 font-bold text-sm text-slate-400 hover:text-indigo-600 peer-checked/retouching:bg-indigo-600 peer-checked/retouching:text-white peer-checked/retouching:shadow-lg peer-checked/retouching:shadow-indigo-200">
                        Retouching
                    </label>
                    <label for="tab-photography"
                        class="flex items-center gap-2 px-8 py-3 rounded-xl cursor-pointer transition-all duration-300 font-bold text-sm text-slate-400 hover:text-indigo-600 peer-checked/photography:bg-indigo-600 peer-checked/photography:text-white peer-checked/photography:shadow-lg peer-checked/photography:shadow-indigo-200">
                        Photography
                    </label>
                    <label for="tab-ecommerce"
                        class="flex items-center gap-2 px-8 py-3 rounded-xl cursor-pointer transition-all duration-300 font-bold text-sm text-slate-400 hover:text-indigo-600 peer-checked/ecommerce:bg-indigo-600 peer-checked/ecommerce:text-white peer-checked/ecommerce:shadow-lg peer-checked/ecommerce:shadow-indigo-200">
                        E-commerce
                    </label>
                </div>
            </div>

            <!-- 1. EDITING CONTENT -->
            <div class="hidden peer-checked/editing:block animate-fade-in">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <!-- Left: Card List -->
                    <div class="lg:col-span-7 space-y-6">
                        <div
                            class="p-4 bg-white border border-slate-100 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all duration-300 flex items-center gap-8 group">
                            <div
                                class="text-indigo-600/20 font-black text-4xl leading-none group-hover:text-indigo-600/40 transition-colors">
                                01</div>
                            <div>
                                <a href="{{ route('services.slug', 'clipping-path') }}"
                                    class="block text-xl font-bold text-slate-900 mb-1 group-hover:text-amber-600 transition-colors">Clipping
                                    Path</a>
                                <p class="text-slate-500 text-sm">Hand-drawn clipping service expertly shapes and isolates
                                    subjects.</p>
                            </div>
                        </div>
                        <div
                            class="p-4 bg-white border border-slate-100 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all duration-300 flex items-center gap-8 group">
                            <div
                                class="text-indigo-600/20 font-black text-4xl leading-none group-hover:text-indigo-600/40 transition-colors">
                                02</div>
                            <div>
                                <a href="{{ route('services.slug', 'background-remove') }}"
                                    class="block text-xl font-bold text-slate-900 mb-1 group-hover:text-amber-600 transition-colors">Background
                                    Remove</a>
                                <p class="text-slate-500 text-sm">Refine images by eliminating background distractions.</p>
                            </div>
                        </div>
                        <div
                            class="p-4 bg-white border border-slate-100 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all duration-300 flex items-center gap-8 group">
                            <div
                                class="text-indigo-600/20 font-black text-4xl leading-none group-hover:text-indigo-600/40 transition-colors">
                                03</div>
                            <div>
                                <a href="{{ route('services.slug', 'shadow-making') }}"
                                    class="block text-xl font-bold text-slate-900 mb-1 group-hover:text-amber-600 transition-colors">Shadow
                                    Making</a>
                                <p class="text-slate-500 text-sm">Enhance realism by adding natural-looking shadows.</p>
                            </div>
                        </div>

                        <div
                            class="p-4 bg-white border border-slate-100 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all duration-300 flex items-center gap-8 group">
                            <div
                                class="text-indigo-600/20 font-black text-4xl leading-none group-hover:text-indigo-600/40 transition-colors">
                                04</div>
                            <div>
                                <a href="{{ route('services.slug', 'ghost-mannequin') }}"
                                    class="block text-xl font-bold text-slate-900 mb-1 group-hover:text-amber-600 transition-colors">Ghost Mannequin</a>
                                <p class="text-slate-500 text-sm">Enhance realism by adding natural-looking shadows.</p>
                            </div>
                        </div>
                         <div
                            class="p-4 bg-white border border-slate-100 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all duration-300 flex items-center gap-8 group">
                            <div
                                class="text-indigo-600/20 font-black text-4xl leading-none group-hover:text-indigo-600/40 transition-colors">
                                05</div>
                            <div>
                                <a href="{{ route('services.slug', 'photo-recoloring') }}"
                                    class="block text-xl font-bold text-slate-900 mb-1 group-hover:text-amber-600 transition-colors">Photo Recoloring</a>
                                <p class="text-slate-500 text-sm">Enhance realism by adding natural-looking shadows.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Right: Large Image -->
                    <div class="lg:col-span-5 relative flex justify-center order-first lg:order-none">
                        <div class="absolute inset-0 bg-indigo-100 rounded-full blur-3xl opacity-30 scale-110"></div>
                        <div
                            class="relative z-10 p-4 bg-white rounded-[3rem] shadow-2xl rotate-2 hover:rotate-0 transition-transform duration-500 border border-slate-100">
                            <img src="{{ asset('/assets/images/home/home_service_tab.png') }}" alt="Editing"
                                class="w-full h-auto object-cover rounded-[2.5rem]">
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. RETOUCHING CONTENT -->
            <div class="hidden peer-checked/retouching:block animate-fade-in">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <!-- Left: Large Image -->
                    <div class="lg:col-span-5 relative flex justify-center py-12">
                        <div class="absolute inset-0 bg-violet-100 rounded-full blur-3xl opacity-30 scale-110"></div>
                        <div
                            class="relative z-10 p-2 bg-slate-900 rounded-[3rem] shadow-2xl -rotate-2 hover:rotate-0 transition-transform duration-500">
                            <img src="{{ asset('/assets/images/home/retouching.webp') }}" alt="Retouching"
                                class="w-full h-auto object-cover rounded-[2.5rem] opacity-90">
                        </div>
                    </div>
                    <!-- Right: Card List -->
                    <div class="lg:col-span-7 space-y-6">
                        <div
                            class="p-4 bg-white border border-slate-100 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all duration-300 flex items-center gap-8 group">
                            <div
                                class="text-indigo-600/20 font-black text-5xl group-hover:text-indigo-600/40 transition-colors">
                                01</div>
                            <div>
							<a href="{{ route('services.slug', 'food-photo-retouching') }}"
                                    class="block text-xl font-bold text-slate-900 mb-1 group-hover:text-amber-600 transition-colors">
                                High-End Retouching</a>
                                <p class="text-slate-500 text-sm">Advanced skin smoothing and frequency separation for
                                    portraits.</p>
                            </div>
                        </div>
                        <div
                            class="p-4 bg-white border border-slate-100 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all duration-300 flex items-center gap-8 group">
                            <div
                                class="text-indigo-600/20 font-black text-5xl group-hover:text-indigo-600/40 transition-colors">
                                02</div>
                            <div>
                                <h4 class="text-xl font-bold text-slate-900 mb-1">Jewelry Enhancement</h4>
                                <p class="text-slate-500 text-sm">Make diamonds sparkle and metals shine with stone
                                    cleaning.</p>
                            </div>
                        </div>
                        <div
                            class="p-4 bg-white border border-slate-100 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all duration-300 flex items-center gap-8 group">
                            <div
                                class="text-indigo-600/20 font-black text-5xl group-hover:text-indigo-600/40 transition-colors">
                                03</div>
                            <div>
                                <h4 class="text-xl font-bold text-slate-900 mb-1">Headshot Editing</h4>
                                <p class="text-slate-500 text-sm">Make headshot look fresh, steaming, and appetizing with color
                                    grading.</p>
                            </div>
                        </div>
                        <div
                            class="p-4 bg-white border border-slate-100 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all duration-300 flex items-center gap-8 group">
                            <div
                                class="text-indigo-600/20 font-black text-5xl group-hover:text-indigo-600/40 transition-colors">
                                04</div>
                            <div>
                                <a href="{{ route('services.slug', 'food-photo-retouching') }}"
                                    class="block text-xl font-bold text-slate-900 mb-1 group-hover:text-amber-600 transition-colors">Food Retouching</h4>
                                <p class="text-slate-500 text-sm">Make food look fresh, steaming, and appetizing with color
                                    grading.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. PHOTOGRAPHY CONTENT -->
            <div class="hidden peer-checked/photography:block animate-fade-in">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <div class="lg:col-span-7">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div
                                class="p-8 bg-white border border-slate-100 rounded-[2rem] shadow-sm hover:shadow-md transition-all group">
                                <span class="text-indigo-600/20 font-black text-4xl block mb-4">01</span>
                                <h4 class="text-xl font-bold text-slate-900 mb-2">Product</h4>
                                <p class="text-slate-500 text-sm">High-fidelity photos preserving natural textures.</p>
                            </div>
                            <div
                                class="p-8 bg-white border border-slate-100 rounded-[2rem] shadow-sm hover:shadow-md transition-all group">
                                <span class="text-indigo-600/20 font-black text-4xl block mb-4">02</span>
                                <h4 class="text-xl font-bold text-slate-900 mb-2">Apparel</h4>
                                <p class="text-slate-500 text-sm">Professional brand storytelling with premium imagery.</p>
                            </div>
                            <div
                                class="p-8 bg-white border border-slate-100 rounded-[2rem] shadow-sm hover:shadow-md transition-all group">
                                <span class="text-indigo-600/20 font-black text-4xl block mb-4">03</span>
                                <h4 class="text-xl font-bold text-slate-900 mb-2">Jewelry</h4>
                                <p class="text-slate-500 text-sm">Macro photography capturing the sparkle of gems.</p>
                            </div>
                            <div
                                class="p-8 bg-white border border-slate-100 rounded-[2rem] shadow-sm hover:shadow-md transition-all group">
                                <span class="text-indigo-600/20 font-black text-4xl block mb-4">04</span>
                                <h4 class="text-xl font-bold text-slate-900 mb-2">School</h4>
                                <p class="text-slate-500 text-sm">Portraits or groups for schools in your preferred style.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-5">
                        <div class="relative aspect-[4/5] rounded-[3rem] overflow-hidden shadow-2xl group">
                            <img src="https://images.unsplash.com/photo-1542038784456-1ea8e935640e?auto=format&fit=crop&q=80&w=800"
                                class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-indigo-900/10 group-hover:bg-transparent transition-colors">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. E-COMMERCE CONTENT -->
            <div class="hidden peer-checked/ecommerce:block animate-fade-in">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <div class="lg:col-span-5 flex justify-center order-last lg:order-none">
                        <img src="{{ asset('/assets/images/home/ecommerce-service.png') }}"
                            class="w-full h-auto drop-shadow-2xl animate-float" alt="Ecommerce">
                    </div>
                    <div class="lg:col-span-7 space-y-6">
                        <div
                            class="p-8 bg-white border border-slate-100 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all duration-300 flex items-center gap-8 group">
                            <div
                                class="text-indigo-600/20 font-black text-5xl group-hover:text-indigo-600/40 transition-colors">
                                01</div>
                            <div>
                                <h4 class="text-xl font-bold text-slate-900 mb-1">Marketplace Ready</h4>
                                <p class="text-slate-500 text-sm">Optimized images that meet strict Amazon & Shopify
                                    standards.</p>
                            </div>
                        </div>
                        <div
                            class="p-8 bg-white border border-slate-100 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all duration-300 flex items-center gap-8 group">
                            <div
                                class="text-indigo-600/20 font-black text-5xl group-hover:text-indigo-600/40 transition-colors">
                                02</div>
                            <div>
                                <h4 class="text-xl font-bold text-slate-900 mb-1">360° Degree Editing</h4>
                                <p class="text-slate-500 text-sm">Create symmetrical, rotatable visuals by perfectly
                                    aligning perspectives.</p>
                            </div>
                        </div>
                        <div
                            class="p-8 bg-white border border-slate-100 rounded-[2.5rem] shadow-sm hover:shadow-xl transition-all duration-300 flex items-center gap-8 group">
                            <div
                                class="text-indigo-600/20 font-black text-5xl group-hover:text-indigo-600/40 transition-colors">
                                03</div>
                            <div>
                                <h4 class="text-xl font-bold text-slate-900 mb-1">Image Optimization</h4>
                                <p class="text-slate-500 text-sm">Web-ready compression that loads fast without sacrificing
                                    quality.</p>
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

                        <img src="{{ asset('/assets/images/home/workflow.png') }}" alt="Dashboard Illustration"
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

    <!-- Required Custom Animation -->

    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 0.5s ease-out forwards;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        .animate-float {
            animation: float 5s ease-in-out infinite;
        }
    </style>
@endpush
