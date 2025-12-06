@extends('layouts.app')
@section('content')
    <section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Left Side: Image -->
            <div class="flex justify-center md:justify-end pr-0 md:pr-8">
                <!-- Using a similar bicycle image from Unsplash -->
                <img src="{{ asset('public/assets/images/images/background_remove/main_image.png') }}" alt="Grey Road Bike"
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
                    Eliminate unwanted image backdrops effortlessly while ensuring the utmost quality. Restore focus and
                    clarity by correcting background imperfections with our exceptional expertise.
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
                    <h3 class="text-xl font-bold text-slate-600 mb-3">10K /Day</h3>
                    <p class="text-slate-500 text-sm leading-relaxed max-w-xs mx-auto">
                        High-quality background removal service for big volumes of images.
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
                        Get your images within 12 hours - save time, stress-free!"
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
                        Limitless revisions, lightning-fast delivery, and dedicated support - unleash your vision!
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
                    Get next-level photos
                </h2>

                <!-- Description Paragraphs -->
                <div class="space-y-6 text-slate-500 leading-relaxed text-[15px]">
                    <p>
                        Experience excellence with our precision cutout services: Expert background removal, precise subject
                        focus, and unparalleled quality results. Optimise your time and budget by entrusting us with your
                        project.

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
                    <h3 class="text-lg font-semibold text-slate-600 mb-2">Image Cutouts</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Effortlessly extract subjects of any shape or products in record time.
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
                    <h3 class="text-lg font-semibold text-slate-600 mb-2">Transparent/Any Colour</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Subject shines on your chosen backdrop - your vision, our expertise.
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
                    <h3 class="text-lg font-semibold text-slate-600 mb-2">Customised Editing</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Cut, replace, amaze: Elevate your visuals with stunning backgrounds.
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
                    <h3 class="text-lg font-semibold text-slate-600 mb-2">Background Composition</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Transform your images with stunning on-demand creative backgrounds.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <!-- Left Column: Text Content -->
            <div class="order-2 md:order-1">
                <h2 class="text-2xl md:text-3xl font-medium text-slate-600 mb-4 leading-tight">
                    Cutting out backgrounds with razor-sharp precision <br>
                    <span class="font-bold text-rose-600">Pen Tool magic</span>
                </h2>

                <p class="text-slate-400 text-sm leading-relaxed mb-8 max-w-md">
                    Get premium-quality image background removal with our special offer! Our skilled team meticulously
                    outlines every edge, guaranteeing the finest results within your deadline.
                </p>

                <!-- Check List -->
                <ul class="space-y-4">

                    <!-- Item 1 -->
                    <li class="flex items-center gap-4">
                        <div class="flex-shrink-0 w-6 h-6 rounded-full bg-rose-50 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                                stroke="currentColor" class="w-3 h-3 text-rose-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                        </div>
                        <span class="text-slate-600 text-sm font-medium">Crafted by our skilled team</span>
                    </li>

                    <!-- Item 2 -->
                    <li class="flex items-center gap-4">
                        <div class="flex-shrink-0 w-6 h-6 rounded-full bg-rose-50 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                                stroke="currentColor" class="w-3 h-3 text-rose-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                        </div>
                        <span class="text-slate-600 text-sm font-medium"> Precision to the max.</span>
                    </li>

                    <!-- Item 3 -->
                    <li class="flex items-center gap-4">
                        <div class="flex-shrink-0 w-6 h-6 rounded-full bg-rose-50 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                                stroke="currentColor" class="w-3 h-3 text-rose-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                        </div>
                        <span class="text-slate-600 text-sm font-medium">Quality without compromise</span>
                    </li>

                </ul>
            </div>

            <!-- Right Column: Image with Zoom Effect -->
            <div class="order-1 md:order-2 relative flex justify-center items-center mt-12 md:mt-0">

                <!-- Main Product Image -->
                <div class="relative z-10 ">
                    <img src="{{ asset('public/assets/images/images/background_remove/main_imge_2.png') }}" alt=" Jar"
                        class="w-full h-auto object-contain">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white px-4 sm:px-6 lg:px-8 py-20">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">

                <!-- Left Column: Image (NOW LEFT) -->
                <div class="order-1 md:order-1 relative flex justify-center items-center mt-12 md:mt-0">
                    <div class="relative z-10 ">
                        <img src="{{ asset('public/assets/images/images/background_remove/main_image_3.png') }}"
                            alt="Jar" class="w-full h-auto object-contain">
                    </div>
                </div>

                <!-- Right Column: Text (NOW RIGHT) -->
                <div class="order-2 md:order-2">
                    <h2 class="text-2xl md:text-3xl font-medium text-slate-600 mb-4 leading-tight">
                        Instantly erase backgrounds with the magical touch of the <br>
                        <span class="font-bold text-rose-600">Wand Tool</span>
                    </h2>

                    <p class="text-slate-400 text-sm leading-relaxed mb-8 max-w-md">
                        Attention E-commerce Sellers! "Enhance your e-commerce visuals with lightning-fast image processing:
                        vibrant subjects, contrasting backgrounds, and fewer details for swift cutout perfection.
                    </p>

                    <ul class="space-y-4">
                        <li class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-rose-50 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="3" stroke="currentColor" class="w-3 h-3 text-rose-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </div>
                            <span class="text-slate-600 text-sm font-medium"> High volume Image Processing</span>
                        </li>

                        <li class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-rose-50 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="3" stroke="currentColor" class="w-3 h-3 text-rose-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </div>
                            <span class="text-slate-600 text-sm font-medium">Fast Turnaround</span>
                        </li>

                        <li class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-rose-50 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="3" stroke="currentColor" class="w-3 h-3 text-rose-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </div>
                            <span class="text-slate-600 text-sm font-medium">Cost Savings.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    <section class="bg-white px-4 sm:px-6 lg:px-8 py-20">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <!-- Left Column: Text Content -->
                <div class="order-2 md:order-1">
                    <h2 class="text-2xl md:text-3xl font-medium text-slate-600 mb-4 leading-tight">
                        Cutout at lightning speed, starting from
                        <span class="font-bold text-rose-600">just $0.15!</span>
                    </h2>

                    <p class="text-slate-400 text-sm leading-relaxed mb-8 max-w-md">
                        For rapid, high-quality bulk image background removal, this offer is your ideal solution. Our
                        precision rivals the Pen tool, ensuring exacting image quality and accuracy. Optimal results are
                        achieved with a distinct background colour (green preferred) contrasting the subject, while keeping
                        photo details to a minimum.
                    </p>

                    <!-- Check List -->
                    <ul class="space-y-4">

                        <!-- Item 1 -->
                        <li class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-rose-50 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="3" stroke="currentColor" class="w-3 h-3 text-rose-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </div>
                            <span class="text-slate-600 text-sm font-medium">Quick Delivery During Rush-Hour</span>
                        </li>

                        <!-- Item 2 -->
                        <li class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-rose-50 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="3" stroke="currentColor" class="w-3 h-3 text-rose-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </div>
                            <span class="text-slate-600 text-sm font-medium"> Flexible Project-Based Engagement</span>
                        </li>

                        <!-- Item 3 -->
                        <li class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-rose-50 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="3" stroke="currentColor" class="w-3 h-3 text-rose-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </div>
                            <span class="text-slate-600 text-sm font-medium"> Unbeatable Market-Beating Prices</span>
                        </li>

                    </ul>
                </div>

                <!-- Right Column: Image with Zoom Effect -->
                <div class="order-1 md:order-2 relative flex justify-center items-center mt-12 md:mt-0">

                    <!-- Main Product Image -->
                    <div class="relative z-10 ">
                        <img src="{{ asset('public/assets/images/images/background_remove/main_image_4.png') }}"
                            alt=" Jar" class="w-full h-auto object-contain">
                    </div>
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
                    Let our expert team swiftly remove photo backgrounds and enhance them to perfection, delivering stunning
                    results in record time.
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
                        Struggling to edit your photo background during rush hour? Let our expert team handle it for you! We
                        can quickly remove or improve the background to your exact specifications, making post-processing a
                        breeze. Using the latest version of Photoshop CC, our skilled editing team can seamlessly isolate
                        your subject and replace the background of your choice. Even for complex-edged images, we guarantee
                        a professionally retouched background that will leave your image looking stunning.

                    </p>

                    <p>

                        At PixClipping, we are committed to delivering impressive results through our image background
                        removal service. Trust us to make your photos stand out with enhanced backgrounds. Say goodbye to
                        worries and uncertainties, and let us provide you with the perfect image mask, freeing your subject
                        from the background.
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
                Photo Background Removal - Highest quality with Lowest cost
            </h2>
            <p class="text-slate-500 text-md">
                Choose a plan that scales with your business. No hidden fees.
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
                    <span class="text-4xl font-extrabold text-slate-800">$0.29 - $0.69</span>
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
                    <span class="text-4xl font-extrabold text-slate-800">$0.70 - $2.99</span>
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
                    <span class="text-4xl font-extrabold text-slate-800">Custom</span>
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
