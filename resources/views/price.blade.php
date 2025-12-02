@extends('layouts.app')
@section('content')
    @include('layouts.includes.breadcumb')
    <section class="py-16 md:py-24">
        <div class="container mx-auto px-4 max-w-7xl">

            <!-- Header -->
            <div class="text-center mb-10">
                <h2 class="text-2xl md:text-3xl font-bold text-slate-700 mb-4">
                    Approximate Pricing Calculator
                </h2>
                <p class="text-slate-500 text-sm md:text-base leading-relaxed max-w-2xl mx-auto">
                    Estimate the cost based on the quantity, delivery, and services.<br class="hidden md:block" />
                    The cost listed below serves as an example of our pricing.
                </p>
            </div>

            <!-- Controls / Inputs Section -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 mb-4">

                <!-- Service Select -->
                <div class="lg:col-span-5 flex rounded-md shadow-sm">
                    <span
                        class="inline-flex items-center px-4 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-slate-600 text-sm font-medium">
                        Services
                    </span>
                    <select
                        class="flex-1 min-w-0 block w-full px-3 py-3 rounded-none rounded-r-md focus:ring-rose-500 focus:border-rose-500 border-gray-300 text-sm outline-none">
                        <option>Select Service</option>
                        <option>Clipping Path</option>
                        <option>Retouching</option>
                    </select>
                </div>

                <!-- Delivery Select -->
                <div class="lg:col-span-5 flex rounded-md shadow-sm">
                    <span
                        class="inline-flex items-center px-4 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-slate-600 text-sm font-medium">
                        Delivery
                    </span>
                    <select
                        class="flex-1 min-w-0 block w-full px-3 py-3 rounded-none rounded-r-md focus:ring-rose-500 focus:border-rose-500 border-gray-300 text-sm outline-none">
                        <option>Normal Delivery: 24 Hours</option>
                        <option>Express: 12 Hours</option>
                    </select>
                </div>

                <!-- Quantity Input -->
                <div class="lg:col-span-2 flex rounded-md shadow-sm">
                    <span
                        class="inline-flex items-center px-4 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-slate-600 text-sm font-medium">
                        Quantity
                    </span>
                    <input type="number" value="1"
                        class="flex-1 min-w-0 block w-full px-3 py-3 rounded-none rounded-r-md focus:ring-rose-500 focus:border-rose-500 border-gray-300 text-sm outline-none">
                </div>
            </div>

            <!-- Summary Bar -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-12">
                <div class="bg-white py-3 px-4 text-center rounded shadow-sm text-sm font-medium text-slate-600">
                    Clipping Path
                </div>
                <div class="bg-white py-3 px-4 text-center rounded shadow-sm text-sm font-medium text-slate-600">
                    6 Hours Turnaround Time
                </div>
                <div class="bg-white py-3 px-4 text-center rounded shadow-sm text-sm font-medium text-slate-600">
                    1 Images
                </div>
            </div>

            <!-- Pricing Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Card 1: Basic -->
                <div
                    class="bg-white rounded-xl border border-gray-200 p-6 flex flex-col items-center hover:shadow-lg transition-shadow duration-300">
                    <!-- Icon -->
                    <div class="text-rose-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>

                    <h3 class="text-lg font-bold text-slate-700 mb-3">Basic</h3>

                    <!-- Price Pill -->
                    <div class="border-2 border-slate-200 rounded-full px-8 py-2 mb-4">
                        <span class="text-2xl font-bold text-rose-600">$0.00</span>
                    </div>

                    <p class="text-xs text-slate-500 text-center mb-8 leading-relaxed">
                        Images containing the following information and a simple touchup request will come under the basic
                        category.
                    </p>

                    <!-- Features List -->
                    <ul class="w-full text-sm text-slate-600 mb-8 space-y-0">
                        <li class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span>Les design and simple edge</span>
                            <svg class="w-4 h-4 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </li>
                        <li class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span>Single diamond</span>
                            <svg class="w-4 h-4 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </li>
                        <li class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span>Single gemstone</span>
                            <svg class="w-4 h-4 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </li>
                        <li class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span>Cluster ring</span>
                            <svg class="w-4 h-4 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </li>
                        <li class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span>Long chain</span>
                            <svg class="w-4 h-4 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </li>
                    </ul>

                    <button
                        class="bg-rose-600 text-white text-sm font-medium py-2.5 px-6 rounded hover:bg-rose-600 transition-colors mt-auto">
                        See Sample <span class="ml-1 text-xs">▶</span>
                    </button>
                </div>

                <!-- Card 2: Moderate -->
                <div
                    class="bg-white rounded-xl border border-gray-200 p-6 flex flex-col items-center hover:shadow-lg transition-shadow duration-300">
                    <!-- Icon -->
                    <div class="text-rose-600 mb-4 relative">
                        <!-- Composite icon to look like multiple boxes -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                            <!-- Small overlay box simulation -->
                            <rect x="14" y="3" width="6" height="6" stroke="currentColor" stroke-width="1"
                                fill="white" />
                        </svg>
                    </div>

                    <h3 class="text-lg font-bold text-slate-700 mb-3">Moderate</h3>

                    <!-- Price Pill -->
                    <div class="border-2 border-slate-200 rounded-full px-6 py-2 mb-4">
                        <span class="text-2xl font-bold text-rose-600">$5.00 - $8.99</span>
                    </div>

                    <p class="text-xs text-slate-500 text-center mb-8 leading-relaxed">
                        Images with the features listed below and a modest demand for touch-ups fall into the medium
                        category.
                    </p>

                    <!-- Features List -->
                    <ul class="w-full text-sm text-slate-600 mb-8 space-y-0">
                        <li class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span>Curvy design</span>
                            <svg class="w-4 h-4 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </li>
                        <li class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span>Multiple edges</span>
                            <svg class="w-4 h-4 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </li>
                        <li class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span>Two colors</span>
                            <svg class="w-4 h-4 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </li>
                        <li class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span>Double diamond</span>
                            <svg class="w-4 h-4 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </li>
                        <li class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span>Double gemstone</span>
                            <svg class="w-4 h-4 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </li>
                    </ul>

                    <button
                        class="bg-rose-600 text-white text-sm font-medium py-2.5 px-6 rounded hover:bg-rose-600 transition-colors mt-auto">
                        See Sample <span class="ml-1 text-xs">▶</span>
                    </button>
                </div>

                <!-- Card 3: High-end -->
                <div
                    class="bg-white rounded-xl border border-gray-200 p-6 flex flex-col items-center hover:shadow-lg transition-shadow duration-300">
                    <!-- Icon -->
                    <div class="text-rose-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <rect x="7" y="3" width="5" height="5" stroke="currentColor" stroke-width="1"
                                fill="white" />
                            <rect x="13" y="2" width="5" height="5" stroke="currentColor" stroke-width="1"
                                fill="white" />
                            <rect x="15" y="8" width="5" height="5" stroke="currentColor" stroke-width="1"
                                fill="white" />
                        </svg>
                    </div>

                    <h3 class="text-lg font-bold text-slate-700 mb-3">High-end</h3>

                    <!-- Price Pill -->
                    <div class="border-2 border-slate-200 rounded-full px-8 py-2 mb-4">
                        <span class="text-2xl font-bold text-rose-600">Talk to us</span>
                    </div>

                    <p class="text-xs text-slate-500 text-center mb-8 leading-relaxed">
                        Demand for advanced touch-ups will be classified as high-end.
                    </p>

                    <!-- Features List -->
                    <ul class="w-full text-sm text-slate-600 mb-8 space-y-0">
                        <li class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span>Complex design</span>
                            <svg class="w-4 h-4 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </li>
                        <li class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span>Group of Jewelry</span>
                            <svg class="w-4 h-4 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </li>
                        <li class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span>Numerous edge</span>
                            <svg class="w-4 h-4 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </li>
                        <li class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span>Multiple diamonds</span>
                            <svg class="w-4 h-4 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </li>
                        <li class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span>Multiple gemstones</span>
                            <svg class="w-4 h-4 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </li>
                    </ul>

                    <button
                        class="bg-rose-600 text-white text-sm font-medium py-2.5 px-6 rounded hover:bg-rose-600 transition-colors mt-auto">
                        See Sample <span class="ml-1 text-xs">▶</span>
                    </button>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 md:py-24">
        <div class="container mx-auto px-4">
            
            <!-- Section Header -->
            <div class="text-center mb-16 md:mb-20">
                <h2 class="text-2xl md:text-3xl font-semibold text-slate-500 leading-snug">
                    <span class="text-rose-600">PixClipping</span> - Where Affordability Meets<br />
                    Performance in Post-Processing
                </h2>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-16 gap-x-8 max-w-7xl mx-auto">

                <!-- Item 1: Flexible Pay Period -->
                <div class="flex flex-col items-center text-center group">
                    <div class="mb-6 text-[#2c4c7c] transition-transform duration-300 group-hover:-translate-y-1">
                        <!-- Icon: Hand/Money/Clock -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="6" width="20" height="12" rx="2"></rect>
                            <circle cx="12" cy="12" r="2"></circle>
                            <path d="M6 12h.01M18 12h.01"></path>
                            <circle cx="18" cy="6" r="3" fill="white" stroke="currentColor"></circle> <!-- Clock overlay -->
                            <path d="M18 4.5v1.5l1 1"></path>
                            <path d="M4 18l2 2 4-4"></path> <!-- Hand hint -->
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#1a365d] mb-4">Flexible Pay Period</h3>
                    <p class="text-slate-500 text-sm leading-relaxed max-w-xs mx-auto">
                        Flexible payment options: Weekly, Monthly, and Tailored Plans for our valued regular and project clients.
                    </p>
                </div>

                <!-- Item 2: Accurate Estimations -->
                <div class="flex flex-col items-center text-center group">
                    <div class="mb-6 text-[#2c4c7c] transition-transform duration-300 group-hover:-translate-y-1">
                        <!-- Icon: Target/Dart -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <circle cx="12" cy="12" r="6"></circle>
                            <circle cx="12" cy="12" r="2"></circle>
                            <path d="M22 2l-6 6"></path> <!-- Dart tail -->
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#1a365d] mb-4">Accurate Estimations</h3>
                    <p class="text-slate-500 text-sm leading-relaxed max-w-xs mx-auto">
                        We determine fixed pricing based on manual complexity assessment and your retouching requirements.
                    </p>
                </div>

                <!-- Item 3: Transparent Pricing -->
                <div class="flex flex-col items-center text-center group">
                    <div class="mb-6 text-[#2c4c7c] transition-transform duration-300 group-hover:-translate-y-1">
                        <!-- Icon: Rocket -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"></path>
                            <path d="M12 15l-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path>
                            <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
                            <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#1a365d] mb-4">Transparent Pricing</h3>
                    <p class="text-slate-500 text-sm leading-relaxed max-w-xs mx-auto">
                        Price is fixed upon discussion - No hidden surprises. We'll send an invoice before processing your images - Smooth, transparent transactions.
                    </p>
                </div>

                <!-- Item 4: Price Negotiation -->
                <div class="flex flex-col items-center text-center group">
                    <div class="mb-6 text-[#2c4c7c] transition-transform duration-300 group-hover:-translate-y-1">
                        <!-- Icon: Handshake -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 9.31c.2 1.48-1.12 2.69-2.22 2.69a2 2 0 0 1-1.28-.42l-1.3-1.09c-.27-.22-.38-.6-.23-.92L14 7a4 4 0 0 0-8 0l1.03 2.57c.15.32.04.7-.23.92l-1.3 1.09A2 2 0 0 1 4.22 12C3.12 12 1.8 10.79 2 9.31V9a6 6 0 0 1 12 0v.31"></path>
                            <path d="M12 13h10"></path>
                            <path d="M12 17h10"></path>
                            <path d="M4 17h4"></path>
                            <circle cx="8" cy="13" r="4" stroke="currentColor" fill="none"></circle> <!-- Abstracting handshake circle -->
                            <path d="M11 15l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#1a365d] mb-4">Price Negotiation</h3>
                    <p class="text-slate-500 text-sm leading-relaxed max-w-xs mx-auto">
                        Maximising negotiation for the best price if it seems high to you.
                    </p>
                </div>

                <!-- Item 5: Discount & Offers -->
                <div class="flex flex-col items-center text-center group">
                    <div class="mb-6 text-[#2c4c7c] transition-transform duration-300 group-hover:-translate-y-1">
                        <!-- Icon: Percentage Badge -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <path d="M9 15l6-6"></path>
                            <path d="M9 9h.01"></path>
                            <path d="M15 15h.01"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#1a365d] mb-4">Discount & Offers</h3>
                    <p class="text-slate-500 text-sm leading-relaxed max-w-xs mx-auto">
                        Enhance your photos affordably and seize the best deals with our unbeatable occasion offers.
                    </p>
                </div>

                <!-- Item 6: Bulk Editing Discount -->
                <div class="flex flex-col items-center text-center group">
                    <div class="mb-6 text-[#2c4c7c] transition-transform duration-300 group-hover:-translate-y-1">
                        <!-- Icon: Shopping Cart/Boxes -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            <rect x="9" y="4" width="4" height="4" fill="white" stroke="currentColor"></rect>
                            <rect x="14" y="2" width="4" height="4" fill="white" stroke="currentColor"></rect>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#1a365d] mb-4">Bulk Editing Discount</h3>
                    <p class="text-slate-500 text-sm leading-relaxed max-w-xs mx-auto">
                        All prices mentioned above are negotiable for bulk editing and projects.
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection
