@extends('layouts.app')
@section('content')
    <!-- HERO CAROUSEL SECTION -->
    <section class="container mx-auto px-4 md:px-8">
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
                            <h1 class="text-4xl md:text-4xl font-extrabold text-slate-900 leading-tight">
                                Clipping Path Services
                                <br>
                                Extract Subject <br>
                                <span class="text-rose-600">Keep Accurate Details</span>
                            </h1>
                            <p class="text-slate-500 text-md leading-relaxed max-w-md">
                                Speed up your business giving yourself a break from photo editing services. Our team is
                                dedicatedly working to give your workflow a speed boost.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4 pt-2">
                                <a href="javascript:void(0)"
                                    class="px-8 py-3.5 bg-rose-600 text-white font-bold rounded shadow-lg shadow-rose-200 hover:bg-rose-700 hover:-translate-y-1 transition-all text-center">
                                    Free Trial
                                </a>
                                <a href="javascript:void(0)"
                                    class="px-8 py-3.5 bg-white text-rose-600 font-bold border border-rose-200 rounded hover:border-rose-600 hover:bg-rose-50 transition-all text-center">
                                    Get Started
                                </a>
                            </div>
                            <p class="text-xs text-slate-400 font-medium">* No credit card required.</p>
                        </div>
                        <!-- Image -->
                        <div class="relative h-full bg-gray-50 flex items-center justify-center p-8">
                            <div class="absolute w-[300px] h-[300px] bg-rose-100 rounded-full blur-3xl opacity-50"></div>
                            <img src="{{ asset('public/assets/images/banner/clipping.webp') }}"
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
                                <span class="text-rose-600">Cost Effective</span>
                            </h1>
                            <p class="text-slate-500 text-md leading-relaxed max-w-md">
                                Speed up your business giving yourself a break from photo editing services. Our team is
                                dedicatedly working to give your workflow a speed boost.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4 pt-2">
                                <a href="javascript:void(0)"
                                    class="px-8 py-3.5 bg-rose-600 text-white font-bold rounded shadow-lg shadow-rose-200 hover:bg-rose-700 hover:-translate-y-1 transition-all text-center">
                                    Free Trial
                                </a>
                                <a href="javascript:void(0)"
                                    class="px-8 py-3.5 bg-white text-rose-600 font-bold border border-rose-200 rounded hover:border-rose-600 hover:bg-rose-50 transition-all text-center">
                                    Get Started
                                </a>
                            </div>
                            <p class="text-xs text-slate-400 font-medium">* No credit card required.</p>
                        </div>
                        <!-- Image -->
                        <div class="relative h-full bg-gray-50 flex items-center justify-center p-8">
                            <div class="absolute w-[300px] h-[300px] bg-rose-100 rounded-full blur-3xl opacity-50"></div>
                            <img src="{{ asset('public/assets/images/banner/photo-editing-services.webp') }}"
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
                                <span class="text-rose-600">Ghost Mannequin</span> <br>
                                Services
                            </h1>
                            <p class="text-slate-500 text-md leading-relaxed max-w-md">
                                Enhance your clothing line with our invisible mannequin effects. Perfect for eCommerce
                                stores
                                looking to showcase fit.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4 pt-2">
                                <a href="#"
                                    class="px-8 py-3.5 bg-rose-600 text-white font-bold rounded shadow-lg shadow-rose-200 hover:bg-rose-700 transition-all text-center">
                                    See Portfolio
                                </a>
                            </div>
                        </div>
                        <div class="relative h-full bg-gray-50 flex items-center justify-center p-8">
                            <div class="absolute w-[300px] h-[300px] bg-rose-100 rounded-full blur-3xl opacity-50"></div>
                            <img src="{{ asset('public/assets/images/banner/main.png') }}"
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
                                <span class="text-rose-600">Bring natural Shine</span>
                            </h1>
                            <p class="text-slate-500 text-md leading-relaxed max-w-md">
                                We make your diamonds sparkle. Expert color correction and dust removal to make your
                                products
                                shine.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4 pt-2">
                                <a href="javascript:void(0)"
                                    class="px-8 py-3.5 bg-rose-600 text-white font-bold rounded shadow-lg shadow-rose-200 hover:bg-rose-700 hover:-translate-y-1 transition-all text-center">
                                    Free Trial
                                </a>
                                <a href="javascript:void(0)"
                                    class="px-8 py-3.5 bg-white text-rose-600 font-bold border border-rose-200 rounded hover:border-rose-600 hover:bg-rose-50 transition-all text-center">
                                    Get Started
                                </a>
                            </div>
                        </div>
                        <div class="relative h-full bg-gray-50 flex items-center justify-center p-8">
                            <div class="absolute w-[300px] h-[300px] bg-yellow-100 rounded-full blur-3xl opacity-50"></div>
                            <img src="{{ asset('public/assets/images/banner/jewelary.webp') }}"
                                class="relative z-10 max-h-[300px] w-auto drop-shadow-2xl" alt="Jewelry">
                        </div>
                    </div>
                </div>
            </div>

            <!-- CUSTOM BOTTOM RIGHT CONTROLS -->
            <div class="absolute bottom-8 right-8 md:bottom-12 md:right-16 z-30 flex gap-3">
                <button type="button"
                    class="group flex items-center justify-center w-12 h-12 rounded-full bg-white border border-gray-200 shadow-lg text-gray-500 hover:bg-rose-600 hover:text-white hover:border-rose-600 transition-all duration-300 focus:outline-none"
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
                    class="group flex items-center justify-center w-12 h-12 rounded-full bg-white border border-gray-200 shadow-lg text-gray-500 hover:bg-rose-600 hover:text-white hover:border-rose-600 transition-all duration-300 focus:outline-none"
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
    </section>

    <section class="bg-white py-24 mt-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">

                <!-- Item 1: Customized Editing -->
                <div class="flex flex-col items-center">
                    <!-- Icon Wrapper -->
                    <div class="mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-12 h-12 text-rose-600">
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
                            stroke="currentColor" class="w-12 h-12 text-rose-600">
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
                            stroke="currentColor" class="w-12 h-12 text-rose-600">
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
    </section>

    <section class="w-full bg-white py-10">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24 items-center">

                <!-- Left Side: Illustration Image -->
                <div class="relative flex justify-center lg:justify-start">
                    <img src="https://img.freepik.com/free-vector/business-team-brainstorming-discussing-startup-project_74855-6564.jpg"
                        alt="Team meeting and discussion" class="w-full max-w-lg h-auto object-contain">
                </div>

                <!-- Right Side: Content -->
                <div>
                    <!-- Label with Dash -->
                    <div class="flex items-center space-x-3 mb-4">
                        <span class="w-6 h-0.5 bg-rose-600"></span>
                        <span class="text-xs font-bold text-slate-500 uppercase tracking-widest">Benefits</span>
                    </div>

                    <!-- Heading -->
                    <h2 class="text-2xl md:text-3xl font-bold text-slate-700 mb-6 leading-tight">
                        Devoted to Deliver <span class="text-rose-600">Perfection</span>
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
                                stroke-width="2.5" stroke="currentColor" class="w-5 h-5 text-rose-600 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm font-medium">Retouch as you need</span>
                        </div>

                        <!-- List Item 2 -->
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2.5" stroke="currentColor" class="w-5 h-5 text-rose-600 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm font-medium">24×7 live support</span>
                        </div>

                        <!-- List Item 3 -->
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2.5" stroke="currentColor" class="w-5 h-5 text-rose-600 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm font-medium">Save your editing time</span>
                        </div>

                        <!-- List Item 4 -->
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2.5" stroke="currentColor" class="w-5 h-5 text-rose-600 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm font-medium">Image privacy protection</span>
                        </div>

                        <!-- List Item 5 -->
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2.5" stroke="currentColor" class="w-5 h-5 text-rose-600 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm font-medium">Deliver images on-time</span>
                        </div>

                        <!-- List Item 6 -->
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2.5" stroke="currentColor" class="w-5 h-5 text-rose-600 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm font-medium">Secured payment gateway</span>
                        </div>

                        <!-- List Item 7 -->
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2.5" stroke="currentColor" class="w-5 h-5 text-rose-600 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-slate-600 text-sm font-medium">Cost-effective pricing</span>
                        </div>

                        <!-- List Item 8 -->
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2.5" stroke="currentColor" class="w-5 h-5 text-rose-600 flex-shrink-0">
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

            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-20">
                <span
                    class="inline-flex items-center justify-center bg-rose-50 text-rose-600 text-xs font-bold px-4 py-1.5 rounded-full uppercase tracking-widest mb-6 border border-rose-100">
                    Our Services
                </span>
                <h2 class="text-4xl md:text-4xl font-bold text-slate-800 mb-6 tracking-tight">
                    Get Editing <span class="text-rose-600">Effortlessly</span> Services
                </h2>
                <p class="text-slate-500 text-md leading-relaxed max-w-2xl mx-auto">
                    Choose the professional photo editing services you need to make your images outstanding and enhance
                    perfection.
                </p>
            </div>

            <!-- TABS LOGIC (Radio Inputs) -->
            <!-- Checked 'tab-editing' by default for a clean start -->
            <input type="radio" name="serviceTabs" id="tab-editing" class="hidden peer/editing" checked>
            <input type="radio" name="serviceTabs" id="tab-retouching" class="hidden peer/retouching">
            <input type="radio" name="serviceTabs" id="tab-photography" class="hidden peer/photography">
            <input type="radio" name="serviceTabs" id="tab-ecommerce" class="hidden peer/ecommerce">

            <!-- TABS NAVIGATION -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-2 mb-16 overflow-x-auto">
                <div class="flex min-w-max md:w-full gap-2">

                    <!-- Editing Tab Label -->
                    <label for="tab-editing"
                        class="flex-1 flex items-center justify-center space-x-2 py-4 px-6 rounded-xl transition-all duration-300 cursor-pointer text-slate-500 hover:bg-slate-50 hover:text-rose-600 peer-checked/editing:bg-rose-50 peer-checked/editing:text-rose-700 peer-checked/editing:shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                            </path>
                        </svg>
                        <span class="font-semibold text-sm">Editing</span>
                    </label>

                    <!-- Retouching Tab Label -->
                    <label for="tab-retouching"
                        class="flex-1 flex items-center justify-center space-x-2 py-4 px-6 rounded-xl transition-all duration-300 cursor-pointer text-slate-500 hover:bg-slate-50 hover:text-rose-600 peer-checked/retouching:bg-rose-50 peer-checked/retouching:text-rose-700 peer-checked/retouching:shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        <span class="font-semibold text-sm">Retouching</span>
                    </label>

                    <!-- Photography Tab Label -->
                    <label for="tab-photography"
                        class="flex-1 flex items-center justify-center space-x-2 py-4 px-6 rounded-xl transition-all duration-300 cursor-pointer text-slate-500 hover:bg-slate-50 hover:text-rose-600 peer-checked/photography:bg-rose-50 peer-checked/photography:text-rose-700 peer-checked/photography:shadow-sm">
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
                        class="flex-1 flex items-center justify-center space-x-2 py-4 px-6 rounded-xl transition-all duration-300 cursor-pointer text-slate-500 hover:bg-slate-50 hover:text-rose-600 peer-checked/ecommerce:bg-rose-50 peer-checked/ecommerce:text-rose-700 peer-checked/ecommerce:shadow-sm">
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
                            class="flex gap-5 group items-start hover:bg-white hover:shadow-lg hover:shadow-rose-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4
                                    class="text-slate-800 font-bold text-lg mb-2 group-hover:text-rose-600 transition-colors">
                                    Clipping Path</h4>
                                <p class="text-slate-500 text-sm leading-relaxed">Hand-drawn photo clipping service
                                    expertly shapes and isolates subjects for a perfect cut.</p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div
                            class="flex gap-5 group items-start hover:bg-white hover:shadow-lg hover:shadow-rose-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4
                                    class="text-slate-800 font-bold text-lg mb-2 group-hover:text-rose-600 transition-colors">
                                    Background Remove</h4>
                                <p class="text-slate-500 text-sm leading-relaxed">Refine your images by eliminating
                                    background distractions, allowing your subject to shine.</p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div
                            class="flex gap-5 group items-start hover:bg-white hover:shadow-lg hover:shadow-rose-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4
                                    class="text-slate-800 font-bold text-lg mb-2 group-hover:text-rose-600 transition-colors">
                                    Shadow Making</h4>
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
                            <img src="{{ asset('public/assets/images/home/home_service_tab.png') }}" alt="Retouching"
                                class="relative z-10 w-full h-auto object-cover rounded-2xl ">
                        </div>
                    </div>

                    <!-- Right List -->
                    <div class="space-y-12 text-right lg:text-left">
                        <!-- Item -->
                        <div
                            class="flex gap-5 group items-start flex-row-reverse lg:flex-row hover:bg-white hover:shadow-lg hover:shadow-rose-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4
                                    class="text-slate-800 font-bold text-lg mb-2 group-hover:text-rose-600 transition-colors">
                                    Ghost Mannequin</h4>
                                <p class="text-slate-500 text-sm leading-relaxed">Enhance visual impact for apparel by
                                    replacing mannequins with tailored hollow fits.</p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div
                            class="flex gap-5 group items-start flex-row-reverse lg:flex-row hover:bg-white hover:shadow-lg hover:shadow-rose-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4
                                    class="text-slate-800 font-bold text-lg mb-2 group-hover:text-rose-600 transition-colors">
                                    Photo Recoloring</h4>
                                <p class="text-slate-500 text-sm leading-relaxed">Capture a single photo and transform it
                                    with endless color possibilities.</p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div
                            class="flex gap-5 group items-start flex-row-reverse lg:flex-row hover:bg-white hover:shadow-lg hover:shadow-rose-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4
                                    class="text-slate-800 font-bold text-lg mb-2 group-hover:text-rose-600 transition-colors">
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
                            class="flex gap-5 group items-start hover:bg-white hover:shadow-lg hover:shadow-rose-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4
                                    class="text-slate-800 font-bold text-lg mb-2 group-hover:text-rose-600 transition-colors">
                                    High-End Retouching</h4>
                                <p class="text-slate-500 text-sm leading-relaxed">Skin smoothing, blemish removal, and
                                    advanced frequency separation.</p>
                            </div>
                        </div>
                        <div
                            class="flex gap-5 group items-start hover:bg-white hover:shadow-lg hover:shadow-rose-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4
                                    class="text-slate-800 font-bold text-lg mb-2 group-hover:text-rose-600 transition-colors">
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
                            <img src="{{ asset('public/assets/images/home/retouching.webp') }}" alt="Retouching"
                                class="relative z-10 w-full h-auto object-cover rounded-2xl ">
                        </div>
                    </div>

                    <!-- Right List -->
                    <div class="space-y-12 text-right lg:text-left">
                        <div
                            class="flex gap-5 group items-start hover:bg-white hover:shadow-lg hover:shadow-rose-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4
                                    class="text-slate-800 font-bold text-lg mb-2 group-hover:text-rose-600 transition-colors">
                                    Headshot Editing</h4>
                                <p class="text-slate-500 text-sm leading-relaxed">Professional corporate or editorial
                                    headshot cleanup for a perfect look.</p>
                            </div>
                        </div>
                        <div
                            class="flex gap-5 group items-start hover:bg-white hover:shadow-lg hover:shadow-rose-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4
                                    class="text-slate-800 font-bold text-lg mb-2 group-hover:text-rose-600 transition-colors">
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
                            class="absolute -inset-2 bg-rose-100 rounded-2xl opacity-50 blur-lg group-hover:opacity-75 transition duration-500">
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
                                    class="w-14 h-14 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-slate-800 font-bold text-lg mb-1">Product Photography</h4>
                                <p class="text-slate-500 text-sm">We capture high-fidelity product photos preserving
                                    natural colors and textures.</p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="flex gap-5">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-slate-800 font-bold text-lg mb-1">Apparel Photography</h4>
                                <p class="text-slate-500 text-sm">Elevate your fashion brand with our professional model
                                    and ghost mannequin photography.</p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="flex gap-5">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-slate-800 font-bold text-lg mb-1">Jewelry Photography</h4>
                                <p class="text-slate-500 text-sm">Macro photography that captures the luxurious sparkle of
                                    ornaments and gems.</p>
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
                            class="absolute w-80 h-80 bg-rose-50 rounded-full -z-10 blur-xl top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        </div>
                        <!-- Replace with asset -->
                        <img src="{{ asset('public/assets/images/home/ecommerce-service.png') }}"
                            alt="Photography Service"
                            class="relative rounded-2xl w-full object-cover transform transition duration-500 hover:scale-[1.01]">
                    </div>

                    <!-- Right Column: Services List -->
                    <div class="space-y-10">
                        <!-- Item -->
                        <div
                            class="flex gap-5 group items-start hover:bg-white hover:shadow-lg hover:shadow-rose-50/50 p-4 rounded-2xl transition-all duration-300">

                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-slate-800 font-bold text-lg mb-1">Amazon & Shopify Ready</h4>
                                <p class="text-slate-500 text-sm">Optimized images that meet strict marketplace guidelines
                                    for white backgrounds and dimensions.</p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div
                            class="flex gap-5 group items-start hover:bg-white hover:shadow-lg hover:shadow-rose-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-slate-800 font-bold text-lg mb-1">360° Degree Editing</h4>
                                <p class="text-slate-500 text-sm">Create symmetrical, rotatable product visuals by
                                    perfectly aligning and adjusting perspectives.</p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div
                            class="flex gap-5 group items-start hover:bg-white hover:shadow-lg hover:shadow-rose-50/50 p-4 rounded-2xl transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-14 h-14 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-slate-800 font-bold text-lg mb-1">Image Optimization</h4>
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
                    class="bg-rose-100 text-rose-600 px-4 py-1.5 rounded-full text-xs font-semibold uppercase">Pricing</span>
                <h2 class="mt-6 text-4xl font-semibold text-slate-800">Choose Your <span class="text-rose-600">Perfect
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
                            class="w-16 h-16 mx-auto mb-6 bg-rose-50 text-rose-600 rounded-xl flex items-center justify-center shadow-sm">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 8V3c0-.552.448-1 1-1zm5 5h.01" />
                            </svg>
                        </div>

                        <h3 class="text-slate-700 text-xl font-semibold">Free Trial</h3>

                        <p class="mt-4 inline-block text-xl font-bold text-rose-600 border px-8 py-2 rounded-full">
                            Free
                        </p>
                    </div>

                    <ul class="mt-10 space-y-4 text-sm text-slate-600">
                        <li class="flex justify-between border-b pb-4">First image free <svg class="w-5 text-rose-500"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 13l4 4L19 7" />
                            </svg></li>
                        <li class="flex justify-between border-b pb-4">12-hour delivery <svg class="w-5 text-rose-500"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 13l4 4L19 7" />
                            </svg></li>
                        <li class="flex justify-between border-b pb-4">Quick response <svg class="w-5 text-rose-500"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 13l4 4L19 7" />
                            </svg></li>
                        <li class="flex justify-between border-b pb-4">No credit card required <svg
                                class="w-5 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 13l4 4L19 7" />
                            </svg></li>
                    </ul>

                    <div class="mt-10 text-center">
                        <a href="#"
                            class="bg-rose-600 hover:bg-rose-700 text-white px-8 py-3 rounded-lg shadow-lg text-sm font-semibold transition">Get
                            Free Trial</a>
                    </div>

                </div>

                <!-- CARD 2 (HIGHLIGHTED / PREMIUM) -->
                <div
                    class="bg-gradient-to-br from-rose-600 to-rose-800 text-white shadow-2xl p-10 rounded-2xl border border-rose-300/30 scale-[1.06] hover:scale-[1.07] transition-transform duration-300 relative overflow-hidden">

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
                            class="bg-white hover:bg-rose-100 text-rose-900  px-8 py-3 rounded-lg shadow-lg text-sm transition">Order
                            Now</a>
                    </div>

                </div>

                <!-- CARD 3 -->
                <div
                    class="bg-white shadow-xl p-10 rounded-2xl border border-slate-200 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300">

                    <div class="text-center">
                        <div
                            class="w-16 h-16 mx-auto mb-4 bg-rose-50 text-rose-600 rounded-xl flex items-center justify-center shadow-sm">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20Z" opacity="0.2" />
                                <path stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>

                        <h3 class="text-slate-700 text-xl font-semibold">Large Volume</h3>

                        <p class="mt-4 inline-block text-xl font-bold text-rose-600 border px-8 py-2 rounded-full">
                            Project
                        </p>
                    </div>

                    <ul class="mt-10 space-y-4 text-sm text-slate-600">
                        <li class="flex justify-between border-b pb-4">Dedicated manager <svg class="w-5 text-rose-500"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 13l4 4L19 7" />
                            </svg></li>
                        <li class="flex justify-between border-b pb-4">Priority support <svg class="w-5 text-rose-500"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 13l4 4L19 7" />
                            </svg></li>
                        <li class="flex justify-between border-b pb-4">Unlimited revisions <svg class="w-5 text-rose-500"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 13l4 4L19 7" />
                            </svg></li>
                        <li class="flex justify-between border-b pb-4">Flexible pay period <svg class="w-5 text-rose-500"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 13l4 4L19 7" />
                            </svg></li>
                    </ul>

                    <div class="mt-10 text-center">
                        <a href="#"
                            class="bg-rose-600 hover:bg-rose-700 text-white px-8 py-3 rounded-lg shadow-lg text-sm transition">Project
                            Proposal</a>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="py-20 lg:py-28">

        <div
            class="absolute -bottom-20 -right-20 w-[600px] h-[600px] bg-slate-200/50 rounded-full blur-3xl -z-10 pointer-events-none">
        </div>
        <div
            class="absolute bottom-0 right-0 w-1/3 h-1/2 bg-gradient-to-tl from-blue-100 to-transparent rounded-tl-[100px] -z-10 opacity-60">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="text-center max-w-3xl mx-auto mb-20">
                <h2 class="mt-6 text-4xl font-semibold text-slate-800 mb-4">Simplify Editing: <span
                        class="text-rose-600">Easy, Efficient Steps</span> </h2>

                <p class="text-slate-500 text-base md:text-lg leading-relaxed">
                    Create your account, send us your images, and download your professionally edited images within the
                    allotted time – it truly is that effortless.
                </p>
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                <!-- Left Column: Illustration -->
                <div class="relative flex justify-center lg:justify-end">
                    <!--
                                NOTE: Replace the src below with your actual "Laptop/Dashboard" illustration asset.
                                I am using a placeholder that resembles the layout.
                            -->
                    <div class="relative w-full max-w-lg">
                        <!-- Floating elements simulation (if you don't have a single image) -->
                        <div class="absolute -top-10 -right-10 bg-gray-50 rounded-full p-4 animate-bounce delay-700"></div>

                        <img src="{{ asset('public/assets/images/home/workflow.png') }}" alt="Dashboard Illustration"
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
                            <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-rose-50 text-rose-600">
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
                            <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-rose-50 text-rose-600">
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
                            <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-rose-50 text-rose-600">
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

    <section class="py-20 lg:py-28 overflow-hidden bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                <div class="order-2 lg:order-1">

                    <!-- Label with Dash -->
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-6 h-0.5 bg-rose-600 rounded-full"></span>
                        <span class="text-xs font-bold text-slate-500 uppercase tracking-widest">Portal</span>
                    </div>

                    <!-- Headline -->
                    <h2 class="text-3xl md:text-3xl font-semibold text-slate-700 mb-6">
                        Use Our Portal <span class="text-rose-600">at Ease</span>
                    </h2>

                    <!-- Description -->
                    <p class="text-slate-500 text-base md:text-md leading-relaxed mb-8">
                        We have designed our Portal with lots of user-focused features so that you can complete the order
                        easily. Give it a try to efficient Portal Service to speed up your business.
                    </p>

                    <!-- Features List -->
                    <div class="mb-10">
                        <h3 class="text-md font-medium text-slate-600 mb-4">Features:</h3>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-3 gap-x-6">

                            <!-- List Item 1 -->
                            <div class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-slate-500 text-sm md:text-base">Simple User Interface</span>
                            </div>

                            <!-- List Item 2 -->
                            <div class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-slate-500 text-sm md:text-base">Big Size Image Upload</span>
                            </div>

                            <!-- List Item 3 -->
                            <div class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-slate-500 text-sm md:text-base">On Fly Navigation</span>
                            </div>

                            <!-- List Item 4 -->
                            <div class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-slate-500 text-sm md:text-base">Live Order Status</span>
                            </div>

                            <!-- List Item 5 -->
                            <div class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-rose-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-slate-500 text-sm md:text-base">Resumable Upload</span>
                            </div>

                            <!-- List Item 6 -->
                            <div class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-rose-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-slate-500 text-sm md:text-base">Easy Sorting, Quick Search</span>
                            </div>

                            <!-- List Item 7 -->
                            <div class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-rose-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-slate-500 text-sm md:text-base">Quick Access Dashboard</span>
                            </div>

                            <!-- List Item 8 -->
                            <div class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-rose-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-slate-500 text-sm md:text-base">Separate Billing Profile</span>
                            </div>

                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="flex flex-wrap gap-4">
                        <a href="#"
                            class="px-8 py-3 bg-rose-600 text-white font-medium rounded hover:bg-rose-700 transition shadow-md shadow-rose-200">
                            Login Now
                        </a>
                        <a href="#"
                            class="px-8 py-3 bg-white border border-rose-600 text-rose-600 font-medium rounded hover:bg-rose-50 transition">
                            Get Started
                        </a>
                    </div>

                </div>

                <!-- Right Column: Illustration -->
                <div class="order-1 lg:order-2 flex justify-center">
                  
                    <img src="{{ asset('public/assets/images/banner/home2.png') }}"
                        alt="Portal Illustration"
                        class="w-full max-w-lg lg:max-w-xl h-auto object-contain drop-shadow-xl">
                </div>

            </div>
        </div>
    </section>

     <section class="bg-stone-200 py-6 w-full">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-center gap-6 md:gap-8 text-center md:text-left">
                
                <!-- Text -->
                <h2 class="text-rose-800 text-md md:text-md font-normal tracking-wide">
                    We are dedicated to editing photos in your style and <span class="font-semibold">enhancing perfection</span>.
                </h2>

                <!-- Buttons -->
                <div class="flex items-center gap-4">
                    <!-- Filled Button -->
                    <a href="#" class="bg-rose-600 hover:bg-rose-700 text-white text-sm font-medium px-6 py-2.5 rounded shadow-sm transition-colors duration-200">
                        Free Trial
                    </a>

                    <!-- Outline Button -->
                    <a href="#" class="bg-transparent border border-white hover:bg-white/10 text-white text-sm font-medium px-6 py-2.5 rounded transition-colors duration-200">
                        Get Started
                    </a>
                </div>

            </div>
        </div>
    </section>
@endsection
