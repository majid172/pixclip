@extends('layouts.app')
@section('content')
    <section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Left Side: Image -->
            <div class="flex justify-center md:justify-end pr-0 md:pr-8">
                <!-- Using a similar bicycle image from Unsplash -->
                <img src="{{ asset('public/assets/images/banner/clipping.webp') }}" alt="Grey Road Bike"
                    class="w-full max-w-md object-contain drop-shadow-2xl grayscale-[30%]">
            </div>

            <div class="flex flex-col text-left">
                <h2 class="text-slate-500 text-xl md:text-2xl font-normal leading-snug mb-1">
                    Clipping Path Services
                </h2>

                <h1 class="text-slate-600 text-3xl md:text-4xl font-bold mb-6">
                    Keep Accurate <span class="text-rose-600">Shape</span>
                </h1>

                <!-- Description Paragraph -->
                <p class="text-slate-400 text-sm md:text-base leading-relaxed max-w-lg mb-8">
                    Unlock the ability to separate subjects from images as needed. Our skilled professionals accurately cut
                    out single or group subjects, delivering exceptional results in record time!
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
                    <h3 class="text-xl font-bold text-slate-600 mb-3">5000/Day</h3>
                    <p class="text-slate-500 text-sm leading-relaxed max-w-xs mx-auto">
                        Achieve top-notch image clipping paths for large volumes.
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
                        Effortless time-saving: Images delivered in just 12 hours!
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
                        Unlimited revisions, lightning-fast delivery, and dedicated support – all included!
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
                    Best clipping path provider
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
                    <h3 class="text-lg font-semibold text-slate-600 mb-2">Inhouse Clipping Team</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        We collaborate with in-house designers exclusively, ensuring no outsourcing for image clipping.
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
                    <h3 class="text-lg font-semibold text-slate-600 mb-2">Hand-drawn Clipping</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Our committed team manually tailors clipping services to your exact needs
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
                    <h3 class="text-lg font-semibold text-slate-600 mb-2">Accurate Shape & Feathering</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Our skilled team carefully carves a precise path while preserving the delicate and authentic form on
                        both sides.
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
                    <h3 class="text-lg font-semibold text-slate-600 mb-2">Satisfaction Guaranteed</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        At PixClipping, quality is never compromised, and your happiness is our constant pursuit.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <section class="bg-[#F6F8FC] py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                <div class="flex justify-center relative">
                    <div class="absolute inset-0 bg-rose-200/20 rounded-full filter blur-3xl transform scale-75"></div>

                    <img src="{{ asset('public/assets/images/images/clipping_path/multi_path/image.png') }}"
                        alt="Multi Path Service Illustration"
                        class="relative z-10 w-full max-w-lg object-contain drop-shadow-xl hover:scale-[1.02] transition-transform duration-500">
                </div>

                <!-- Right Column: Content -->
                <div class="flex flex-col items-start text-left">
                    <h2 class="text-3xl md:text-3xl lg:text-3xl font-extrabold text-slate-600 leading-tight mb-8">
                        <span class="text-rose-600">Multi Path Service:</span> <br>
                        Separate Color, Parts, Object in Photos
                    </h2>

                    <!-- Description Paragraphs -->
                    <div class="space-y-6 text-slate-500 text-base md:text-md leading-relaxed">
                        <p>
                            Precision Clipping Path Service for Flawless Results. Experience the best clipping path service
                            with
                            Pix Clipping Ltd. Our experts skillfully isolate subjects with both hard and soft edges,
                            ensuring
                            that only the subject remains, while the background disappears.
                        </p>
                        <p>
                            When dealing with blurry images, we employ a zoom-in technique to enhance accuracy. Following
                            your
                            instructions, we meticulously cut with precision, whether it's 1px, 2px, inline, or maintaining
                            the
                            original Path name. We prioritise preserving image details and implementing active clipping
                            paths.
                        </p>
                        <p>
                            Save time, maintain your schedule, and enjoy peace of mind with our exceptional services.
                        </p>
                    </div>

                    <!-- Optional CTA Button to complete the look -->
                    <div class="mt-8">
                        <a href="#"
                            class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-rose-600 hover:bg-rose-600 md:text-lg transition duration-300 shadow-lg shadow-rose-600/30">
                            Get Started
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">

        <!-- Header Section -->
        <div class="text-center mb-16 md:mb-24">
            <span class="inline-block bg-rose-50 text-rose-500 text-xs font-bold px-4 py-1.5 rounded-full mb-4">
                Why Us?
            </span>
            <h2 class="text-3xl md:text-3xl lg:text-3xl font-bold text-slate-600 mb-6 leading-tight">
                Why Should You Choose <br>
                Pix Clipping Ltd for Clipping Path ?
            </h2>
            <p class="text-slate-400 text-base md:text-md max-w-2xl mx-auto leading-relaxed">
                With our efficient clipping services, we ensure unwavering quality while respecting your time and goals.
                Your convenience is our priority.
            </p>
        </div>

        <!-- Main Grid Content -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="relative w-full max-w-md mx-auto aspect-[3/4] flex items-center justify-center">

                <!-- SVG Connector Lines (Behind the images) -->
                <svg class="absolute inset-0 w-full h-full pointer-events-none z-0" xmlns="http://www.w3.org/2000/svg">
                    <!-- Line to Top Left -->
                    <line x1="30%" y1="25%" x2="45%" y2="40%" stroke="#cbd5e1"
                        stroke-width="1.5" />
                    <line x1="30%" y1="25%" x2="20%" y2="25%" stroke="#cbd5e1"
                        stroke-width="1.5" />
                    <!-- Line to Top Right -->
                    <line x1="70%" y1="25%" x2="55%" y2="40%" stroke="#cbd5e1"
                        stroke-width="1.5" />
                    <line x1="70%" y1="25%" x2="80%" y2="25%" stroke="#cbd5e1"
                        stroke-width="1.5" />
                    <!-- Line to Bottom Left -->
                    <line x1="30%" y1="75%" x2="45%" y2="60%" stroke="#cbd5e1"
                        stroke-width="1.5" />
                    <line x1="30%" y1="75%" x2="20%" y2="75%" stroke="#cbd5e1"
                        stroke-width="1.5" />
                    <!-- Line to Bottom Right -->
                    <line x1="70%" y1="75%" x2="55%" y2="60%" stroke="#cbd5e1"
                        stroke-width="1.5" />
                    <line x1="70%" y1="75%" x2="80%" y2="75%" stroke="#cbd5e1"
                        stroke-width="1.5" />
                </svg>

                <!-- Central Bottle Image -->
                <div class="z-10 w-28 md:w-36">
                    <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?q=80&w=1887&auto=format&fit=crop"
                        alt="Serum Bottle" class="w-full h-auto object-contain drop-shadow-lg rounded-xl">
                </div>

                <!-- Bubble 1: Top Left (Blur Cut Out) -->
                <div class="absolute top-10 left-0 md:left-4 z-20 flex flex-col items-center">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 rounded-full border-2 border-slate-200 bg-white overflow-hidden shadow-sm relative group">
                        <!-- Placeholder for specific zoomed asset -->
                        <div
                            class="w-full h-full bg-slate-600 flex items-center justify-center text-white text-xs text-center p-1">
                            Zoomed<br>Edge
                        </div>
                    </div>
                    <span class="text-xs font-bold text-slate-700 mt-2 border-b border-slate-700 pb-0.5">Blur Cut Out
                        50%</span>
                </div>

                <!-- Bubble 2: Top Right (Accurate Shape) -->
                <div class="absolute top-10 right-0 md:right-4 z-20 flex flex-col items-center">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 rounded-full border-2 border-rose-200 bg-white overflow-hidden shadow-sm">
                        <!-- Placeholder: Simulating the wireframe look -->
                        <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?q=80&w=1887&auto=format&fit=crop"
                            class="w-full h-full object-cover scale-[3] origin-top-right opacity-50 grayscale"
                            alt="">
                    </div>
                    <span class="text-xs font-bold text-slate-700 mt-2 border-b border-slate-700 pb-0.5">Accurate
                        Shape</span>
                </div>

                <!-- Bubble 3: Bottom Left (Inline-Clipping) -->
                <div class="absolute bottom-10 left-0 md:left-4 z-20 flex flex-col items-center">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 rounded-full border-2 border-rose-200 bg-white overflow-hidden shadow-sm">
                        <!-- Placeholder -->
                        <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?q=80&w=1887&auto=format&fit=crop"
                            class="w-full h-full object-cover scale-[3] origin-bottom-left grayscale" alt="">
                    </div>
                    <span class="text-xs font-bold text-slate-700 mt-2 border-b border-slate-700 pb-0.5">Inline-Clipping
                        Path</span>
                </div>

                <!-- Bubble 4: Bottom Right (Active-Clipping) -->
                <div class="absolute bottom-10 right-0 md:right-4 z-20 flex flex-col items-center">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 rounded-full border-2 border-rose-200 bg-white overflow-hidden shadow-sm">
                        <!-- Placeholder -->
                        <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?q=80&w=1887&auto=format&fit=crop"
                            class="w-full h-full object-cover scale-[2]" alt="">
                    </div>
                    <span class="text-xs font-bold text-slate-700 mt-2 border-b border-slate-700 pb-0.5">Active-Clipping
                        Path</span>
                </div>

            </div>

            <!-- Right Column: Text Content -->
            <div class="flex flex-col space-y-8 text-slate-500 text-[15px] leading-relaxed">

                <p>
                    Our designers manually complete all of the work in order to offer the best clipping path service. To
                    construct a path around the image, we use the Pen Tool in Adobe Photoshop. We don't use the magic wand
                    tool or any other simple gimmicks that can damage the images. Every time we clip, we go edge-to-edge.
                </p>

                <p>
                    Our in-house production designers can quickly trim photos to even the most intricate margins. Therefore,
                    we can provide you with large-scale e-commerce (Amazon, eBay) clipping services. We are capable of
                    clipping your photographs accurately under pressure, regardless of how large or complicated your
                    projects are.
                <p>
                    Pix Clipping Ltd can assist you in meeting your deadline by providing photographs the same day as your
                    order Additionally, we provide a specialised staff for frequent customers who request a minimum of 500
                    pictures for cutout. Therefore, you can relax knowing that we will meet all of your needs when you use
                    our clipping path services.
                </p>

            </div>

        </div>

    </section>

    <section class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 py-20">
        
        <!-- Header Section -->
        <div class="text-center mb-16">
            <span class="inline-block bg-rose-100 text-rose-600 text-[11px] font-bold px-4 py-1.5 rounded-full mb-4 uppercase tracking-wide">
                Portfolio
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-600 mb-4">
                Accuracy. Speed. Satisfaction.
            </h2>
            <p class="text-slate-500 text-sm md:text-base max-w-2xl mx-auto leading-relaxed">
                Our designers draw an accurate path around the subject keeping natural details, crisp and clean look. See sample of our clipping path services recent work.
            </p>
        </div>

        <!-- Portfolio Masonry Grid -->
        <!-- Using 5 columns to match the specific layout of the screenshot -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 items-start">
            
            <!-- Column 1: Chair + Button -->
            <div class="flex flex-col gap-6">
                <!-- Chair -->
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300 flex items-center justify-center aspect-square">
                    <img src="https://images.unsplash.com/photo-1580480055273-228ff5388ef8?q=80&w=1000&auto=format&fit=crop" 
                         alt="Office Chair" class="w-full h-full object-contain">
                </div>
                <!-- Button -->
                <a href="#" class="w-full bg-amber-400 hover:bg-amber-500 text-slate-900 font-semibold py-4 rounded-lg flex items-center justify-center gap-2 transition-colors duration-300 shadow-sm">
                    More Sample
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>

            <!-- Column 2: Plant + Sunglasses -->
            <div class="flex flex-col gap-6">
                <!-- Plant -->
                <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300 flex items-center justify-center">
                    <img src="https://images.unsplash.com/photo-1596245084930-b3b3a3721345?q=80&w=1000&auto=format&fit=crop" 
                         alt="Floral Arrangement" class="w-full h-auto object-contain rounded">
                </div>
                <!-- Sunglasses -->
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300 flex items-center justify-center aspect-[4/3]">
                    <img src="https://images.unsplash.com/photo-1511499767150-a48a237f0083?q=80&w=1000&auto=format&fit=crop" 
                         alt="Sport Sunglasses" class="w-full h-full object-contain">
                </div>
            </div>

            <!-- Column 3: Red Pot + Watch -->
            <div class="flex flex-col gap-6">
                <!-- Pot -->
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300 flex items-center justify-center aspect-square">
                    <img src="https://m.media-amazon.com/images/I/71R+vT-j0IL._AC_SL1500_.jpg" 
                         alt="Red Cooking Pot" class="w-full h-full object-contain">
                </div>
                <!-- Watch -->
                <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300 flex items-center justify-center">
                    <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=1000&auto=format&fit=crop" 
                         alt="Smart Watch" class="w-full h-auto object-contain max-h-[300px]">
                </div>
            </div>

            <!-- Column 4: Green Tube + Suitcase -->
            <div class="flex flex-col gap-6">
                <!-- Cosmetic Tube -->
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300 flex items-center justify-center aspect-[3/4]">
                    <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?q=80&w=1000&auto=format&fit=crop" 
                         alt="Green Cosmetic Tube" class="w-full h-full object-contain grayscale-[20%] sepia-[10%] hue-rotate-90">
                </div>
                <!-- Suitcase -->
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300 flex items-center justify-center aspect-[3/5]">
                    <img src="https://images.unsplash.com/photo-1581553680321-4fffae59f7fb?q=80&w=1000&auto=format&fit=crop" 
                         alt="Black Suitcase" class="w-full h-full object-contain">
                </div>
            </div>

            <!-- Column 5: Bracelet + Wine Glass -->
            <div class="flex flex-col gap-6">
                <!-- Bracelet -->
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300 flex items-center justify-center aspect-square">
                    <img src="https://images.unsplash.com/photo-1611591437281-460bfbe1220a?q=80&w=1000&auto=format&fit=crop" 
                         alt="Pearl Bracelet" class="w-full h-full object-contain">
                </div>
                <!-- Wine Glass -->
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300 flex items-center justify-center aspect-[3/5]">
                    <img src="https://images.unsplash.com/photo-1572293427976-d843da2d3b2b?q=80&w=1000&auto=format&fit=crop" 
                         alt="Painted Wine Glass" class="w-full h-full object-contain">
                </div>
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
                       Unlock the ability to separate subjects from images as needed. Our skilled professionals accurately cut out single or group subjects, delivering exceptional results in record time.
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
