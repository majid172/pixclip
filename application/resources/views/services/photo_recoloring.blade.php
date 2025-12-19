@extends('layouts.app')
@section('content')
    <section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Left Side: Image -->
            <div class="flex justify-center md:justify-end pr-0 md:pr-8">
                <!-- Using a similar bicycle image from Unsplash -->
                <img src="{{ asset('/assets/images/images/photo_recolor/main.png') }}" alt="Grey Road Bike"
                    class="w-full max-w-md object-contain drop-shadow-2xl grayscale-[30%]">
            </div>

            <div class="flex flex-col text-left">
                <h2 class="text-slate-500 text-xl md:text-2xl font-normal leading-snug mb-1">
                    {{ $title }}
                </h2>

                <h1 class="text-slate-600 text-3xl md:text-4xl font-bold mb-6">
                    Professional Image Recoloring Services : <span class="text-rose-600">Maximise Savings, Boost
                        Productivity!</span>
                </h1>

                <!-- Description Paragraph -->
                <p class="text-slate-400 text-sm md:text-base leading-relaxed max-w-lg mb-8">
                    Enhance Your Photos with Ghost Mannequin Magic! Say goodbye to wrinkles and mannequins. Experience the
                    realism of our 3D ghost effect service. Grab more viewers' attention today!
                </p>

                <!-- Buttons Container -->
                <div class="flex flex-wrap gap-4">

                    <!-- Free Trial Button -->
                    <a href="#"
                        class="group flex items-center gap-2 bg-rose-600 hover:bg-rose-700 text-white text-sm font-medium py-3 px-6 rounded transition-colors duration-200">
                        Free Trial
                        <!-- Chevron Right Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="currentColor" class="w-3 h-3 group-hover:translate-x-1 transition-transform">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>

                    <!-- Get Started Button -->
                    <a href="#"
                        class="group flex items-center gap-2 bg-white border border-rose-200 hover:bg-rose-50 text-rose-500 text-sm font-medium py-3 px-6 rounded transition-colors duration-200">
                        Get Started

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="currentColor" class="w-3 h-3 group-hover:translate-x-1 transition-transform">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>

                </div>
            </div>

        </div>

    </section>
    <section class="bg-white py-24 mt-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">

                <!-- Item 1: 5000/Day -->
                <div class="flex flex-col items-center">
                    <!-- Icon: Stack / Layers (Representing Volume) -->
                    <div class="mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-12 h-12 text-rose-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l-5.571 3-5.571-3" />
                        </svg>
                    </div>
                    <!-- Text Content -->
                    <h3 class="text-xl font-bold text-slate-600 mb-3">1250/Day</h3>
                    <p class="text-slate-500 text-sm leading-relaxed max-w-xs mx-auto">
                        High-volume, premium product image recoloring services available.
                    </p>
                </div>

                <!-- Item 2: 12 Hours -->
                <div class="flex flex-col items-center">
                    <!-- Icon: Clock (Representing Time) -->
                    <div class="mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-12 h-12 text-rose-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <!-- Text Content -->
                    <h3 class="text-xl font-bold text-slate-600 mb-3">24 Hours</h3>
                    <p class="text-slate-500 text-sm leading-relaxed max-w-xs mx-auto">
                        Save time with our quick image delivery - within 24 hours!
                    </p>
                </div>

                <!-- Item 3: Unlimited -->
                <div class="flex flex-col items-center">
                    <!-- Icon: Infinity (Representing Unlimited) -->
                    <div class="mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-12 h-12 text-rose-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 12a3.75 3.75 0 11-5.303 5.303 3.75 3.75 0 015.303-5.303zm0 0c2.25-2.25 5.25 2.25 7.5 0m0 0a3.75 3.75 0 115.303-5.304A3.75 3.75 0 0115.75 12" />
                        </svg>
                    </div>
                    <!-- Text Content -->
                    <h3 class="text-xl font-bold text-slate-600 mb-3">Unlimited</h3>
                    <p class="text-slate-500 text-sm leading-relaxed max-w-xs mx-auto">
                        Unlimited revisions, speedy delivery, and dedicated support - all guaranteed!
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

            <!-- Left Column: Main Text -->
            <div class="flex flex-col items-start">
                <!-- Badge -->
                <span class="inline-block bg-rose-100 text-rose-600 text-xs font-semibold px-4 py-1.5 rounded-full mb-6">
                    What we do?
                </span>

                <!-- Main Heading -->
                <h2 class="text-3xl md:text-4xl font-bold text-slate-600 mb-6">
                    Precise Photo Recoloring
                </h2>

                <!-- Description Paragraphs -->
                <div class="space-y-6 text-slate-500 leading-relaxed text-[15px]">
                    <p>
                        Precision Clipping Path Service for Flawless Results Experience the best clipping path service with
                        Pix Clipping Ltd. Our experts skillfully isolate subjects with both hard and soft edges, ensuring
                        that only the subject remains, while the background disappears.

                    </p>
                    <p>
                        When dealing with blurry images, we employ a zoom-in technique to enhance accuracy. Following your
                        instructions, we meticulously cut with precision, whether it's 1px, 2px, inline, or maintaining the
                        original Path name. We prioritise preserving image details and implementing active clipping paths.

                    </p>
                    <p>
                        Save time, maintain your schedule, and enjoy peace of mind with our exceptional services.
                    </p>
                </div>
            </div>

            <!-- Right Column: Feature Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-12 mt-4 lg:mt-0">

                <!-- Feature 1: Inhouse Clipping Team -->
                <div class="flex flex-col items-start">
                    <!-- Icon: Team/People -->
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10 text-rose-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-slate-600 mb-2">Save time</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Capture one product in various colours and unwind - no need to photograph each item individually.
                        Simplify your process!
                    </p>
                </div>

                <!-- Feature 2: Hand-drawn Clipping -->
                <div class="flex flex-col items-start">
                    <!-- Icon: Pen Tool / Bezier -->
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10 text-rose-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 7.5L12 12" />
                            <circle cx="6" cy="18" r="2" fill="currentColor" class="text-rose-200" />
                            <circle cx="18" cy="6" r="1" fill="currentColor" class="text-rose-500" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-slate-600 mb-2">Recolor as you need</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Our expert team ensures precise colour reproduction for your product photos, following your
                        instructions to perfection.
                    </p>
                </div>

                <!-- Feature 3: Accurate Shape & Feathering -->
                <div class="flex flex-col items-start">
                    <!-- Icon: Shapes -->
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10 text-rose-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z" />
                            <circle cx="16" cy="16" r="4" class="text-rose-300" stroke="currentColor"
                                stroke-width="1.5" fill="white" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-slate-600 mb-2">Precision of colours</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        We ensure precise colour matching from the Pantone chart while maintaining 100% authenticity of the
                        actual products.
                    </p>
                </div>

                <!-- Feature 4: Satisfaction Guaranteed -->
                <div class="flex flex-col items-start">
                    <!-- Icon: Thumbs Up -->
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10 text-rose-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.247-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.396C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-slate-600 mb-2">Quality work</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Transform your images with our photo recoloring services, restoring them to their original
                        brilliance.
                    </p>
                </div>

            </div>

        </div>
    </section>


    <section class="bg-white px-4 sm:px-6 lg:px-8 py-20">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <!-- Badge -->
                <span
                    class="inline-block bg-rose-50 text-rose-500 text-xs font-bold px-4 py-1.5 rounded-full mb-5 uppercase tracking-wide">
                    Process
                </span>

                <!-- Main Title -->
                <h2 class="text-3xl md:text-3xl font-semibold text-slate-700 mb-4">
                    Recoloring: Discover how it works
                </h2>

                <!-- Subtitle -->
                <p class="text-slate-500 text-sm md:text-base leading-relaxed">
                    Experience vibrant photo transformations! We expertly enhance image colours while preserving the natural
                    essence.

                </p>
            </div>

            <!-- Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                <!-- Left Column: Illustration -->
                <!-- Ideally, place your isometric vector image here -->
                <div class="flex justify-center lg:justify-end">
                    <img src="{{ asset('/assets/images/images/photo_recolor/mockup.png') }}"
                        alt="Designer Workspace Illustration"
                        class="w-full max-w-lg object-contain drop-shadow-xl hover:scale-[1.02] transition-transform duration-500 rounded-lg">

                </div>

                <!-- Right Column: Text Content -->
                <div class="flex flex-col text-slate-500 text-[15px] leading-7 space-y-6 text-justify md:text-left">

                    <p>
                        Get perfect product images with striking colours to catch viewers' attention! Our skilled retouchers
                        meticulously adjust colour, tones, and temperature to match the product's real-life appearance,
                        pixel by pixel.


                    </p>

                    <p>

                        We tailor our photo recoloring process to your preferences, delivering lifelike representations of
                        your products in exact and genuine colours.
                    </p>
                    <p>

                        Save time and money with our image recoloring services, receiving multiple images with striking
                        colours and perfect saturation, just as you desire.
                    </p>



                </div>

            </div>
        </div>
        <!-- Header Section -->


    </section>






    <section class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 py-20">

        <!-- Header Section -->
        <div class="text-center mb-16">
            <span
                class="inline-block bg-rose-100 text-rose-600 text-[11px] font-bold px-4 py-1.5 rounded-full mb-4 uppercase tracking-wide">
                Portfolio
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-600 mb-4">
                Accuracy. Speed. Satisfaction.
            </h2>
            <p class="text-slate-500 text-sm md:text-base max-w-2xl mx-auto leading-relaxed">
                Our designers draw an accurate path around the subject keeping natural details, crisp and clean look. See
                sample of our clipping path services recent work.
            </p>
        </div>

        <!-- Portfolio Masonry Grid -->
        <!-- Using 5 columns to match the specific layout of the screenshot -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 items-start">

            <!-- Column 1: Chair + Button -->
            <div class="flex flex-col gap-6">
                <!-- Chair -->
                <div
                    class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300 flex items-center justify-center aspect-square">
                    <img src="https://images.unsplash.com/photo-1580480055273-228ff5388ef8?q=80&w=1000&auto=format&fit=crop"
                        alt="Office Chair" class="w-full h-full object-contain">
                </div>
                <!-- Button -->
                <a href="#"
                    class="w-full bg-amber-400 hover:bg-amber-500 text-slate-900 font-semibold py-4 rounded-lg flex items-center justify-center gap-2 transition-colors duration-300 shadow-sm">
                    More Sample
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>

            <!-- Column 2: Plant + Sunglasses -->
            <div class="flex flex-col gap-6">
                <!-- Plant -->
                <div
                    class="bg-white p-4 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300 flex items-center justify-center">
                    <img src="https://images.unsplash.com/photo-1596245084930-b3b3a3721345?q=80&w=1000&auto=format&fit=crop"
                        alt="Floral Arrangement" class="w-full h-auto object-contain rounded">
                </div>
                <!-- Sunglasses -->
                <div
                    class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300 flex items-center justify-center aspect-[4/3]">
                    <img src="https://images.unsplash.com/photo-1511499767150-a48a237f0083?q=80&w=1000&auto=format&fit=crop"
                        alt="Sport Sunglasses" class="w-full h-full object-contain">
                </div>
            </div>

            <!-- Column 3: Red Pot + Watch -->
            <div class="flex flex-col gap-6">
                <!-- Pot -->
                <div
                    class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300 flex items-center justify-center aspect-square">
                    <img src="https://m.media-amazon.com/images/I/71R+vT-j0IL._AC_SL1500_.jpg" alt="Red Cooking Pot"
                        class="w-full h-full object-contain">
                </div>
                <!-- Watch -->
                <div
                    class="bg-white p-4 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300 flex items-center justify-center">
                    <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=1000&auto=format&fit=crop"
                        alt="Smart Watch" class="w-full h-auto object-contain max-h-[300px]">
                </div>
            </div>

            <!-- Column 4: Green Tube + Suitcase -->
            <div class="flex flex-col gap-6">
                <!-- Cosmetic Tube -->
                <div
                    class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300 flex items-center justify-center aspect-[3/4]">
                    <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?q=80&w=1000&auto=format&fit=crop"
                        alt="Green Cosmetic Tube"
                        class="w-full h-full object-contain grayscale-[20%] sepia-[10%] hue-rotate-90">
                </div>
                <!-- Suitcase -->
                <div
                    class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300 flex items-center justify-center aspect-[3/5]">
                    <img src="https://images.unsplash.com/photo-1581553680321-4fffae59f7fb?q=80&w=1000&auto=format&fit=crop"
                        alt="Black Suitcase" class="w-full h-full object-contain">
                </div>
            </div>

            <!-- Column 5: Bracelet + Wine Glass -->
            <div class="flex flex-col gap-6">
                <!-- Bracelet -->
                <div
                    class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300 flex items-center justify-center aspect-square">
                    <img src="https://images.unsplash.com/photo-1611591437281-460bfbe1220a?q=80&w=1000&auto=format&fit=crop"
                        alt="Pearl Bracelet" class="w-full h-full object-contain">
                </div>
                <!-- Wine Glass -->
                <div
                    class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300 flex items-center justify-center aspect-[3/5]">
                    <img src="https://images.unsplash.com/photo-1572293427976-d843da2d3b2b?q=80&w=1000&auto=format&fit=crop"
                        alt="Painted Wine Glass" class="w-full h-full object-contain">
                </div>
            </div>

        </div>

    </section>

    <section class="py-20 px-4 md:px-8 bg-white">
        <div class="max-w-7xl mx-auto">

            <!-- Header -->
            <div class="text-center mb-16">
                <span class="inline-block bg-rose-50 text-rose-600 text-xs font-semibold px-4 py-1.5 rounded-full mb-4">
                    Price
                </span>

                <h2 class="text-3xl md:text-3xl font-semibold text-gray-800 mb-4">
                    Image Recoloring Service Price
                </h2>

                <p class="max-w-2xl mx-auto text-gray-500 text-sm md:text-base leading-relaxed">
                    Experience premium image recoloring at an unbeatable price. High quality, fast delivery,
                    and fully customizable packages — with no hidden costs.
                </p>
            </div>

            <!-- Main Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

                <!-- Left Price Card -->
                <div class="lg:col-span-5 relative">
                    <div
                        class="bg-gradient-to-br from-rose-600 to-rose-500 rounded-2xl p-10 text-white shadow-xl
                            h-full flex flex-col justify-between relative overflow-hidden">

                        <!-- Price Block -->
                        <div class="relative z-10">
                            <div class="flex items-end space-x-1 mb-4">
                                <span class="text-2xl font-semibold">$</span>
                                <span class="text-7xl font-bold leading-none">0</span>
                                <span class="text-4xl font-semibold leading-none">.79</span>
                            </div>

                            <p class="text-rose-100 font-medium mb-8">as low as</p>

                            <div class="w-full h-px bg-rose-200/40 mb-8"></div>

                            <p class="text-lg font-medium mb-2 text-white">
                                Transform your product photos with 100% satisfaction.
                            </p>

                            <p class="text-rose-200 text-sm mb-10">
                                No extra charge — simple, transparent pricing.
                            </p>

                            <div class="flex flex-col items-start gap-3">
                                <a href="javascript:void(0)"
                                    class="bg-white text-rose-600 hover:bg-rose-100 px-8 py-3 rounded-full font-semibold
                                      flex items-center gap-2 shadow-md transition-all">
                                    Free Trial
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                    </svg>
                                </a>
                                <span class="text-xs text-rose-200 ml-2">No credit card required.</span>
                            </div>
                        </div>

                        <!-- Decorative Waves -->
                        <div class="absolute bottom-0 right-0 opacity-50 pointer-events-none">
                            <svg width="200" height="200" viewBox="0 0 200 200" fill="none">
                                <path d="M50 200C50 200 80 120 160 140C240 160 200 200 200 200H50Z"
                                    class="fill-rose-500" />
                                <path d="M100 200C100 200 120 150 180 170C240 190 200 200 200 200H100Z"
                                    class="fill-rose-300" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Right Features -->
                <div class="lg:col-span-7 grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-14 py-4">

                    <!-- Feature Item -->
                    <div class="flex flex-col items-start">
                        <div class="mb-5">
                            <svg class="w-12 h-12 text-rose-600" viewBox="0 0 24 24" fill="none">
                                <path d="M12 8C12 8 15 8 15 11C15 14 11 14 11 17C11 17 14 17 14 17" stroke="currentColor"
                                    stroke-width="2" />
                                <path d="M13 5V6M13 19V20" stroke="currentColor" stroke-width="2" />
                                <rect x="4" y="4" width="16" height="16" rx="2" stroke="currentColor"
                                    stroke-width="2" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Affordable Pricing</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            Get top-quality recoloring at a competitive price without hidden fees.
                        </p>
                    </div>

                    <!-- Feature Item -->
                    <div class="flex flex-col items-start">
                        <div class="mb-5">
                            <svg class="w-12 h-12 text-rose-600" viewBox="0 0 24 24" fill="none">
                                <rect x="3" y="6" width="14" height="12" rx="2" stroke="currentColor"
                                    stroke-width="2" />
                                <circle cx="7" cy="12" r="1.5" fill="currentColor" />
                                <path d="M21 6L17 2M17 2H21V6" stroke="currentColor" stroke-width="2" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Bulk Discounts</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            Enjoy discount rates up to 30% when processing high-volume batches.
                        </p>
                    </div>

                    <!-- Feature Item -->
                    <div class="flex flex-col items-start">
                        <div class="mb-5">
                            <svg class="w-12 h-12 text-rose-600" viewBox="0 0 24 24" fill="none">
                                <circle cx="12" cy="12" r="6" stroke="currentColor" stroke-width="2"
                                    stroke-dasharray="4 4" />
                                <path d="M12 8V12L15 15" stroke="currentColor" stroke-width="2" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Free Revisions</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            Need corrections? We offer multiple revision rounds free of charge.
                        </p>
                    </div>

                    <!-- Feature Item -->
                    <div class="flex flex-col items-start">
                        <div class="mb-5">
                            <svg class="w-12 h-12 text-rose-600" viewBox="0 0 24 24" fill="none">
                                <rect x="4" y="6" width="16" height="12" rx="2" stroke="currentColor"
                                    stroke-width="2" />
                                <circle cx="17" cy="16" r="4" stroke="currentColor" stroke-width="2" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Flexible Payment</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            Pay upfront, post-pay, or pay-as-you-go — depending on your workflow.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@include('layouts.includes.portal')
@endsection
