@extends('layouts.app')
@section('content')
    <section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Left Side: Image -->
            <div class="flex justify-center md:justify-end pr-0 md:pr-8">
                <!-- Using a similar bicycle image from Unsplash -->
                <img src="{{ asset('public/assets/images/images/shadow/drop-shadow.png') }}" alt="Grey Road Bike"
                    class="w-full max-w-md object-contain drop-shadow-2xl grayscale-[30%]">
            </div>

            <div class="flex flex-col text-left">
                <h2 class="text-slate-500 text-xl md:text-2xl font-normal leading-snug mb-1">
                    {{ $title }}
                </h2>

                <h1 class="text-slate-600 text-3xl md:text-4xl font-bold mb-6">
                    Professional Photo <span class="text-rose-600">Services</span>
                </h1>

                <!-- Description Paragraph -->
                <p class="text-slate-400 text-sm md:text-base leading-relaxed max-w-lg mb-8">
                    Enhance your images with expertly crafted shadows, for a naturally vivid and authentically beautiful
                    photo finish.
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
                    <h3 class="text-xl font-bold text-slate-600 mb-3">5000k /Day</h3>
                    <p class="text-slate-500 text-sm leading-relaxed max-w-xs mx-auto">
                        Transform your images with high-volume, lifelike shadow making services.
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
                    <h3 class="text-xl font-bold text-slate-600 mb-3">12 Hours</h3>
                    <p class="text-slate-500 text-sm leading-relaxed max-w-xs mx-auto">
                        Save your time - receive stunning images in just 12 hours!"
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
                        Limitless revisions, lightning-fast delivery, and devoted support – guaranteed.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">

        <!-- Header Section -->
        <div class="text-center mb-16 max-w-3xl mx-auto">
            <!-- Badge -->
            <span
                class="inline-block bg-rose-50 text-rose-500 text-[11px] font-bold px-4 py-1.5 rounded-full mb-6 uppercase tracking-wide">
                Variety
            </span>

            <!-- Main Title -->
            <h2 class="text-3xl md:text-4xl font-semibold text-slate-600 mb-6 leading-tight">
                What Shadow Effect Services
            </h2>

            <!-- Subtitle -->
            <p class="text-slate-400 text-sm md:text-base leading-relaxed max-w-2xl mx-auto">
                Tailor-made shadows crafted to your precise needs and photo requirements. Explore our range of shadow making
                services and choose the perfect option for your visuals.
            </p>
        </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <div
                class="bg-white rounded-lg shadow-sm border border-slate-100 overflow-hidden flex flex-col group hover:shadow-xl transition-all duration-300">

                <div class="h-64 flex items-center justify-center p-6 relative">
                    <!-- Image -->
                    <img src="{{ asset('public/assets/images/images/shadow/original_shadow.png') }}" alt="Nike Shoe"
                        class="w-full h-full object-contain drop-shadow-2xl mix-blend-multiply filter contrast-125 transform group-hover:scale-105 transition-transform duration-500">
                </div>

                <!-- Content Area -->
                <div class="p-8 flex-grow">
                    <h3 class="text-xl font-semibold text-slate-600 mb-4">Original Shadow</h3>
                    <p class="text-slate-400 text-[15px] leading-relaxed">
                        We create a natural shadow beneath the product to makes your images more attractive.
                    </p>
                </div>

                <!-- Footer Area -->
                <div class="bg-slate-50 px-8 py-5 border-t border-slate-100 mt-auto">
                    <p class="text-slate-500 text-sm">
                        Capacity: <span class="text-slate-700 font-medium">5000 / Day</span>
                    </p>
                </div>
            </div>

            <!-- Card 2: Drop Shadow -->
            <div
                class="bg-white rounded-lg shadow-sm border border-slate-100 overflow-hidden flex flex-col group hover:shadow-xl transition-all duration-300">
                <!-- Image Area (rose Background) -->
                <div class="h-64  flex items-center justify-center p-6 relative">
                    <!-- Image -->
                    <img src="{{ asset('public/assets/images/images/shadow/drop_shadow.png') }}" alt="Velvet Sofa"
                        class="w-full h-full object-contain drop-shadow-2xl mix-blend-multiply filter contrast-125 transform group-hover:scale-105 transition-transform duration-500">
                </div>

                <!-- Content Area -->
                <div class="p-8 flex-grow">
                    <h3 class="text-xl font-semibold text-slate-600 mb-4">Drop Shadow</h3>
                    <p class="text-slate-400 text-[15px] leading-relaxed">
                        Experience the transformative touch of our retouchers, adding depth and dimension to your photos
                        based on the size and shape of the objects.
                    </p>
                </div>

                <!-- Footer Area -->
                <div class="bg-slate-50 px-8 py-5 border-t border-slate-100 mt-auto">
                    <p class="text-slate-500 text-sm">
                        Capacity: <span class="text-slate-700 font-medium">3500 / Day</span>
                    </p>
                </div>
            </div>

            <!-- Card 3: Reflection Shadow -->
            <div
                class="bg-white rounded-lg shadow-sm border border-slate-100 overflow-hidden flex flex-col group hover:shadow-xl transition-all duration-300">
                <!-- Image Area (Gray Background) -->
                <div class="h-64 flex items-center p-6 relative">
                    <!-- Image -->
                    <img src="{{ asset('public/assets/images/images/shadow/reflection_shadow.png') }}" alt="Cosmetics"
                        class="w-full h-full object-contain drop-shadow-2xl mix-blend-multiply filter contrast-125 transform group-hover:scale-105 transition-transform duration-500">
                </div>

                <!-- Content Area -->
                <div class="p-8 flex-grow">
                    <h3 class="text-xl font-semibold text-slate-600 mb-4">Reflection Shadow</h3>
                    <p class="text-slate-400 text-[15px] text-justify leading-relaxed">
                        Capture mesmerising reflective mirror images of objects in a pristine environment, bathed in
                        impeccable lighting.
                    </p>
                </div>

                <!-- Footer Area -->
                <div class="bg-slate-50 px-8 py-5 border-t border-slate-100 mt-auto">
                    <p class="text-rose-500 text-sm">
                        Capacity: <span class="text-rose-600 font-medium">1500 / Day</span>
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
                    How We Execute Task
                </h2>

                <!-- Subtitle -->
                <p class="text-slate-500 text-sm md:text-base leading-relaxed">
                    Our expert team employs time-proven retouching techniques to craft images with a stunningly realistic
                    look.
                </p>
            </div>

            <!-- Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                <!-- Left Column: Illustration -->
                <!-- Ideally, place your isometric vector image here -->
                <div class="flex justify-center lg:justify-end">
                    <img src="{{ asset('public/assets/images/images/background_remove/mocup.png') }}"
                        alt="Designer Workspace Illustration"
                        class="w-full max-w-lg object-contain drop-shadow-xl hover:scale-[1.02] transition-transform duration-500 rounded-lg">

                </div>

                <!-- Right Column: Text Content -->
                <div class="flex flex-col text-slate-500 text-[15px] leading-7 space-y-6 text-justify md:text-left">

                    <p>
                        Pix Clipping specialises in providing images with a stunningly natural look through our exceptional
                        shadow-making service. Our highly skilled designers leverage cutting-edge technology to deliver
                        realistic product images that captivate your audience.

                    </p>

                    <p>
                        With meticulous attention to detail, we maintain opacity levels, allowing you to control the
                        transparency of objects for optimal viewing. By expertly editing angles, we determine the precise
                        placement of light sources and shadow effects, ensuring they align opposite to the light source.
                        Tailoring the shadow effect to match the apparent size of each product, we add just the right amount
                        of noise to create an authentic, natural feel. The percentage of shadow spread is carefully
                        adjusted, creating a gradual falloff that results in darker edges, adding depth and dimension to
                        your images. Our designers possess the artistry and expertise to masterfully craft shadows that
                        perfectly suit your desired aesthetic.
                    </p>
                    <p>
                        By seamlessly removing backdrops and introducing new, meticulously crafted drop shadows, we
                        guarantee that your product will always exude a remarkably natural look that captivates viewers.
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

    <section class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-24">

        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-rose-600 font-semibold tracking-wide uppercase text-sm">Flexible Pricing</span>
            <h2 class="text-3xl md:text-3xl font-semibold text-slate-800 mt-3 mb-4">
                Shadow Making Service Cost
            </h2>
            <p class="text-slate-500 text-md">
                Achieve effortless natural shadows in your images, no editing hassle. Enjoy quality at a budget-friendly
                price, no additional fees!
            </p>

            <!-- Pricing Toggle (Visual Only) -->

        </div>

        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">

            <!-- Card 1: Basic -->
            <div
                class="bg-white rounded-2xl p-8 border border-slate-200 shadow-sm hover:shadow-lg transition-all duration-300 relative group">
                <h3 class="text-slate-800 text-xl font-bold">Basic</h3>
                <p class="text-slate-400 text-sm mt-2">Perfect for simple product photos.</p>

                <div class="my-6">
                    <span class="text-4xl font-extrabold text-slate-800">$0.20</span>
                    <span class="text-slate-400 text-base font-medium">/ image</span>
                </div>

                <a href="#"
                    class="block w-full py-3 px-4 bg-slate-50 hover:bg-rose-100 text-slate-700 font-bold text-center rounded-lg border border-slate-200 transition-colors">
                    Start Free Trial
                </a>

                <ul class="mt-8 space-y-4 text-sm text-slate-600">
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        Simple Clipping Path
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        White Background
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        24 Hour Delivery
                    </li>
                    <li class="flex items-center gap-3 text-slate-400 line-through decoration-slate-300">
                        <svg class="w-5 h-5 text-slate-300 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        Retouching
                    </li>
                </ul>
            </div>

            <!-- Card 2: Pro (Highlighted) -->
            <div
                class="bg-white rounded-2xl p-8 border-2 border-rose-500 shadow-xl relative transform md:-translate-y-4 z-10">
                <!-- Most Popular Badge -->
                <div class="absolute top-0 right-0 -mt-3 -mr-3">
                    <span
                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-rose-600 text-white shadow-md">
                        MOST POPULAR
                    </span>
                </div>

                <h3 class="text-slate-800 text-xl font-bold">Standard</h3>
                <p class="text-slate-400 text-sm mt-2">For complex shapes and retouching.</p>

                <div class="my-6">
                    <span class="text-4xl font-extrabold text-slate-800">$0.30</span>
                    <span class="text-slate-400 text-base font-medium">/ image</span>
                </div>

                <a href="#"
                    class="block w-full py-3 px-4 bg-rose-600 hover:bg-rose-700 text-white font-bold text-center rounded-lg shadow-lg shadow-rose-500/30 transition-all hover:-translate-y-0.5">
                    Get Started
                </a>

                <ul class="mt-8 space-y-4 text-sm text-slate-600">
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        Complex Clipping Path
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        Basic Retouching
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        Natural Shadow
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        12 Hour Delivery
                    </li>
                </ul>
            </div>

            <!-- Card 3: Enterprise -->
            <div
                class="bg-white rounded-2xl p-8 border border-slate-200 shadow-sm hover:shadow-lg transition-all duration-300">
                <h3 class="text-slate-800 text-xl font-bold">Enterprise</h3>
                <p class="text-slate-400 text-sm mt-2">High volume & custom needs.</p>

                <div class="my-6">
                    <span class="text-4xl font-extrabold text-slate-800">$0.50</span>
                </div>

                <a href="#"
                    class="block w-full py-3 px-4 bg-slate-50 hover:bg-rose-50 text-slate-700 font-bold text-center rounded-lg border border-slate-200 transition-colors">
                    Contact Sales
                </a>

                <ul class="mt-8 space-y-4 text-sm text-slate-600">
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        <span class="font-bold">Unlimited</span> Revisions
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        Dedicated Project Manager
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        API Integration
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        Priority Support
                    </li>
                </ul>
            </div>

        </div>


    </section>


    <section class="py-10 lg:py-10 overflow-hidden bg-white">
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
                        Effortlessly navigate <span class="text-rose-600">user-friendly portal!</span>
                    </h2>

                    <!-- Description -->
                    <p class="text-slate-500 text-base md:text-md leading-relaxed mb-8">
                        Unlock the ability to separate subjects from images as needed. Our skilled professionals accurately
                        cut out single or group subjects, delivering exceptional results in record time.
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

                    <img src="{{ asset('public/assets/images/banner/home2.png') }}" alt="Portal Illustration"
                        class="w-full max-w-lg lg:max-w-xl h-auto object-contain drop-shadow-xl">
                </div>

            </div>
        </div>
    </section>
@endsection
