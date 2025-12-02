@extends('layouts.app')
@section('content')
    <section class="relative w-full overflow-hidden m-0">
        <!-- Container: Added max-w-6xl to bring elements closer together -->
        <div class="container mx-auto px-4 sm:px-6 max-w-7xl">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">

                <div class="order-2 lg:order-1 text-center lg:text-left">
                    <h1 class="text-3xl md:text-4xl lg:text-4xl font-bold text-slate-800 leading-tight">
                        Enhance Images With

                        <span class="text-rose-600 block mt-1 md:inline md:mt-0 ">
                            Simplified Post-Processing
                        </span>
                    </h1>

                    <p class="text-base md:text-lg text-slate-500 leading-relaxed mt-4 max-w-lg mx-auto lg:mx-0">
                        Tailored to perfection, our process caters to your every need, ensuring a seamless journey from
                        order to delivery.
                    </p>
                </div>

                <!-- Right Content: Illustration -->
                <!-- Removed justify-end to allow better centering within the tighter grid -->
                <div class="order-1 lg:order-2 flex justify-center ">
                    <div class=" w-full max-w-md lg:max-w-lg">


                        <!-- Image -->
                        <img src="{{ asset('public/assets/images/home/workflow1.png') }}" alt="Dashboard Illustration"
                            class="relative z-10 w-full h-auto object-contain drop-shadow-xl transform transition duration-500 hover:scale-[1.02]">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 md:py-20">
        <div class="container mx-auto px-4 max-w-7xl">

            <!-- Top Text Section -->
            <div class="text-center mb-16">
                <h2 class="text-2xl md:text-3xl font-bold text-slate-600 mb-5">
                    Why <span class="text-rose-600">PixClipping?</span> 
                </h2>
                <p class="text-slate-500 text-sm md:text-base leading-relaxed max-w-2xl mx-auto">
                    Our customers are satisfied with the work we do.<br class="hidden md:block" />
                    The greatest gratification is to receive recognition for what we have built.<br
                        class="hidden md:block" />
                    This motivates us to improve even more.
                </p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-12 text-center">

                <!-- Item 1: Easy Dashboard -->
                <div class="flex flex-col items-center">
                    <div class="mb-3 text-[#2c4c7c]"> <!-- Adjusted color to match specific blue -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="3" y1="9" x2="21" y2="9"></line>
                            <path d="M9 21V9"></path>
                            <path d="M14 15h3"></path>
                            <circle cx="18" cy="18" r="3"></circle>
                        </svg>
                    </div>
                    <h3 class="text-base md:text-lg font-bold text-slate-800">Easy dashboard</h3>
                    <p class="text-base text-md text-gray-600">
                        Manage everything in one place with a clean, simple dashboard that’s easy to navigate.
                    </p>

                </div>

                <!-- Item 2: Powerful Features -->
                <div class="flex flex-col items-center">
                    <div class="mb-3 text-[#2c4c7c]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                    <h3 class="text-base md:text-lg font-bold text-slate-800">Powerful features</h3>
                    <p class="text-base text-md text-gray-600">
                        Access advanced tools designed to streamline your work, enhance performance, and help you get more done with less effort.
                    </p>
                </div>

                <!-- Item 3: Excellent Design -->
                <div class="flex flex-col items-center">
                    <div class="mb-3 text-[#2c4c7c]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                            <path d="M15 8l-4 4-2-2"></path> <!-- Simple check/design mark inside -->
                        </svg>
                    </div>
                    <h3 class="text-base md:text-lg font-bold text-slate-800">Excellent design</h3>
                    <p class="text-base text-md text-gray-600">
                        Enjoy a modern, thoughtfully crafted design that focuses on clarity, usability, and a smooth user experience.
                    </p>
                </div>

                <!-- Item 4: Real-time Update -->
                <div class="flex flex-col items-center">
                    <div class="mb-3 text-[#2c4c7c]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                            <path d="M20 18h.01"></path> <!-- Small decorative dot -->
                        </svg>
                    </div>
                    <h3 class="text-base md:text-lg font-bold text-slate-800">Real-time Update</h3>

                    <p class="text-base text-md text-gray-600">
                        Stay instantly informed with live updates that keep your data current and your decisions accurate.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 lg:py-16 ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="text-center max-w-3xl mx-auto mb-20">
                <h2 class="mt-6 text-4xl font-semibold text-slate-800 mb-4">Effortless <span class="text-rose-600">Photo
                        editing, simplified</span> </h2>

                <p class="text-slate-500 text-base md:text-md leading-relaxed">
                    Create your account, send us your images, and download your professionally edited images within the
                    allotted time – it truly is that effortless.
                </p>
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                <div class="relative flex justify-center lg:justify-end">
                    <div class="relative w-full max-w-lg">
                        <div class="absolute -top-10 -right-10 bg-gray-50 rounded-full p-4 animate-bounce delay-700"></div>

                        <img src="{{ asset('public/assets/images/home/workflow.png') }}" alt="Dashboard Illustration"
                            class="w-full h-auto object-contain drop-shadow-xl z-10 relative">
                    </div>
                </div>

                <div class="space-y-5">

                    <div
                        class="bg-white rounded-2xl p-6 shadow-md border border-slate-100 flex items-start gap-6 hover:-translate-y-1 transition-transform duration-300">
                        <div class="flex-shrink-0">
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
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Order & Upload</h3>
                            <p class="text-slate-500 text-sm leading-relaxed">
                                Complete form, include order details, provide instructions, and upload images.
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
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Invoice & payment</h3>
                            <p class="text-slate-500 text-sm leading-relaxed">
                                Reviewing order details for invoice creation. Payment required to initiate order processing.
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
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Processing order</h3>
                            <p class="text-slate-500 text-sm leading-relaxed">
                                With payment received, we promptly begin logging and sorting to edit images according to
                                your instructions.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <style>
        .typewriter {
            display: inline-block;
            overflow: hidden;
            white-space: nowrap;
            border-right: 3px solid #333;
            /* Cursor */
            animation: typing 3s steps(30), blink .7s step-end infinite;
        }

        /* typing animation */
        @keyframes typing {
            from {
                width: 0
            }

            to {
                width: 100%
            }
        }

        /* cursor blink */
        @keyframes blink {
            50% {
                border-color: transparent
            }
        }
    </style>
@endsection
