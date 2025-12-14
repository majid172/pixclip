@extends('layouts.app')
@section('content')
    <section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Left Side: Image -->


            <div class="flex flex-col text-left">
                <h2 class="text-slate-500 text-xl md:text-2xl font-normal leading-snug mb-1">
                    {{ $title }}
                </h2>

                <h1 class="text-slate-600 text-3xl md:text-4xl font-bold mb-6">
                    Professional Photo <span class="text-blue-900">Services</span>
                </h1>

                <!-- Description Paragraph -->
                <p class="text-slate-400 text-sm md:text-base leading-relaxed max-w-lg mb-8">
                    Introducing Affordable : Amazon e-Bay Shopify Service
                    Experience flawless image masking with us! Effortlessly extract intricate elements like hairs and furs.
                    Seamlessly integrate subjects into any background. Elevate your editing game now!
                </p>

                <!-- Buttons Container -->
                <div class="flex flex-wrap gap-4">

                    <!-- Free Trial Button -->
                    <a href="{{ route('free.trial') }}"
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
            <div class="flex justify-center md:justify-end pr-0 md:pr-8">
                <!-- Using a similar bicycle image from Unsplash -->
                <img src="{{ asset('public/assets/images/images/ecommerce/main_2.webp') }}" alt="Grey Road Bike"
                    class="w-full max-w-md object-contain drop-shadow-2xl grayscale-[30%]">
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

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

            <!-- Left Column: Main Text -->
            <div class="flex flex-col items-start">
                <!-- Badge -->
                <span class="inline-block bg-rose-100 text-rose-600 text-xs font-semibold px-4 py-1.5 rounded-full mb-6">
                    Why pixclipping?
                </span>

                <!-- Main Heading -->
                <h2 class="text-3xl md:text-4xl font-bold text-slate-600 mb-6">
                    Boost Your Brand's Credibility
                </h2>

                <!-- Description Paragraphs -->
                <div class="space-y-6 text-slate-500 leading-relaxed text-[15px]">
                    <p>
                        Compelling images drive clicks and sales. But the story doesn't end there. Mismatched products lead
                        to customer dissatisfaction, negative reviews, and various challenges.



                    </p>
                    <p>
                        Partner with us to craft a professional website that captivates your audience with expertly enhanced
                        images. Elevate your brand, increase conversions, and thrive in the online business arena.

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
                    <h3 class="text-lg font-semibold text-slate-600 mb-2">Fast Turn-around</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        PixClipping: Your Swift Solution for Web-Ready Images, with Lightning-Fast Rush-Hour Delivery.


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
                    <h3 class="text-lg font-semibold text-slate-600 mb-2">Legal Agreement</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Before commencing the project, both parties (client and PixClipping) will sign a confidential
                        contract.
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
                    <h3 class="text-lg font-semibold text-slate-600 mb-2">Enterprise-grade Policy</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        We tailor our image editing services to meet the unique requirements of various photography niches,
                        ensuring top-notch quality.
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
                    <h3 class="text-lg font-semibold text-slate-600 mb-2">Professional Service</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Our seasoned DTP experts are passionately delivering professional photo editing.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <section class="bg-white py-20 px-4 md:px-8 ">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20">
                <span class="inline-block bg-rose-100 text-rose-600 text-xs font-bold px-4 py-1.5 rounded-full mb-6">
                    Basics
                </span>
                <h1 class="text-3xl md:text-3xl font-semibold text-slate-700 leading-tight mb-6">
                    E-commerce Photo Editing<br>
                    Services: <span class="text-rose-600">Basic Editing</span>
                </h1>
                <p class="max-w-2xl mx-auto text-gray-500 text-base md:text-lg leading-relaxed">
                    We focus on displaying the product features, logos, & names, maintaining specific e-commerce
                    specifications.
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                <div class="lg:col-span-7 grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-12">

                    <!-- Feature 1: Background Remove -->
                    <div class="flex flex-col items-start gap-3">
                        <div class="w-10 h-10 mb-1">
                            <!-- Custom Icon: Half Circle -->
                            <svg viewBox="0 0 24 24" fill="none" class="w-10 h-10">
                                <circle cx="12" cy="12" r="10" stroke="#374151" stroke-width="1.5" />
                                <path d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22V2Z" fill="#374151" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-slate-700">Background Remove</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">
                            Make your product images attractive and represent in a realistic view, removing any unwanted
                            flaws
                            easily.
                        </p>
                    </div>

                    <!-- Feature 2: Shadow Making -->
                    <div class="flex flex-col items-start gap-3">
                        <div class="w-10 h-10 mb-1">
                            <!-- Custom Icon: Window/Building -->
                            <svg viewBox="0 0 24 24" fill="none" class="w-10 h-10">
                                <rect x="4" y="4" width="16" height="16" rx="1" stroke="#fb923c"
                                    stroke-width="1.5" />
                                <path d="M9 4V20" stroke="#fb923c" stroke-width="1.5" />
                                <path d="M15 4V20" stroke="#fb923c" stroke-width="1.5" />
                                <path d="M4 10H20" stroke="#fb923c" stroke-width="1.5" />
                                <path d="M4 15H20" stroke="#fb923c" stroke-width="1.5" />
                                <rect x="5" y="5" width="3" height="4" fill="#fdba74" fill-opacity="0.5" />
                                <rect x="16" y="11" width="3" height="3" fill="#fdba74" fill-opacity="0.5" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-slate-700">Shadow Making</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">
                            Add natural shadow to captivate viewers and turn them into a buyer with a realistic look.
                        </p>
                    </div>

                    <!-- Feature 3: Color Correction -->
                    <div class="flex flex-col items-start gap-3">
                        <div class="w-10 h-10 mb-1">
                            <!-- Custom Icon: Dropper -->
                            <svg viewBox="0 0 24 24" fill="none" class="w-10 h-10">
                                <path
                                    d="M19.5 4.5L14 10L12 8L17.5 2.5C18.0523 1.94772 18.9477 1.94772 19.5 2.5C20.0523 3.05228 20.0523 3.94772 19.5 4.5Z"
                                    fill="#d8b4fe" />
                                <path d="M13 11L11 9L3 17V21H7L15 13L13 11Z" stroke="#a855f7" stroke-width="1.5" />
                                <path d="M3 21L7 17" stroke="#a855f7" stroke-width="1.5" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-slate-700">Color Correction</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">
                            Fix color issues to make images as natural as possible and enhance images with vivid color
                            adjustment.
                        </p>
                    </div>

                    <!-- Feature 4: Product Recolor -->
                    <div class="flex flex-col items-start gap-3">
                        <div class="w-10 h-10 mb-1">
                            <!-- Custom Icon: 4 Grids -->
                            <svg viewBox="0 0 24 24" fill="none" class="w-10 h-10">
                                <rect x="3" y="3" width="8" height="8" rx="1" fill="#4ade80"
                                    stroke="#22c55e" stroke-width="1.5" />
                                <rect x="13" y="3" width="8" height="8" rx="1" fill="#f87171"
                                    stroke="#ef4444" stroke-width="1.5" />
                                <rect x="3" y="13" width="8" height="8" rx="1" fill="#60a5fa"
                                    stroke="#3b82f6" stroke-width="1.5" />
                                <rect x="13" y="13" width="8" height="8" rx="1" fill="#94a3b8"
                                    stroke="#64748b" stroke-width="1.5" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-slate-700">Product Recolor</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">
                            Recolor product Image to save your effort, time, and money from photographing products
                            repeatedly.
                        </p>
                    </div>

                    <!-- Feature 5: Basic Retouch -->
                    <div class="flex flex-col items-start gap-3">
                        <div class="w-10 h-10 mb-1">
                            <!-- Custom Icon: Magic Wand -->
                            <svg viewBox="0 0 24 24" fill="none" class="w-10 h-10">
                                <path d="M3 21L9 15" stroke="#374151" stroke-width="2" stroke-linecap="round" />
                                <rect x="8.5" y="2.5" width="4" height="12" rx="1"
                                    transform="rotate(-45 8.5 2.5)" fill="#fbbf24" />
                                <path d="M16 5L16.5 6.5L18 7L16.5 7.5L16 9L15.5 7.5L14 7L15.5 6.5L16 5Z" fill="#f59e0b" />
                                <path d="M20 12L20.5 13.5L22 14L20.5 14.5L20 16L19.5 14.5L18 14L19.5 13.5L20 12Z"
                                    fill="#f59e0b" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-slate-700">Basic Retouch</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">
                            Essential editing services like removing dust, masking furs/model hairs, ghost mannequin
                            editing.
                        </p>
                    </div>

                    <!-- Feature 6: Add Magnifier -->
                    <div class="flex flex-col items-start gap-3">
                        <div class="w-10 h-10 mb-1">
                            <!-- Custom Icon: Magnifier -->
                            <svg viewBox="0 0 24 24" fill="none" class="w-10 h-10">
                                <circle cx="10" cy="10" r="7" fill="#86efac" fill-opacity="0.3"
                                    stroke="#22c55e" stroke-width="1.5" />
                                <path d="M15 15L21 21" stroke="#4b5563" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M10 7V13" stroke="#15803d" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M7 10H13" stroke="#15803d" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-slate-700">Add Magnifier</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">
                            Display your product with the Original view as possible without any damage by adding Magnifier
                            on
                            the image.
                        </p>
                    </div>

                </div>

                <!-- Right Side: Image & Annotation -->
                <div class="lg:col-span-5 relative mt-12 lg:mt-0 flex justify-center">

                    <!-- The Juicer Image Container -->
                    <div class="relative w-full max-w-sm">

                        <!-- Floating Bubble: 3 Bottle Free -->
                        <!-- Positioned relative to the image container to match design -->
                        <div class="absolute -top-6 -left-4 md:-left-10 z-10">
                            <div
                                class="bg-white rounded-full shadow-[0_8px_30px_rgb(0,0,0,0.12)] p-1 px-4 border border-rose-50 flex flex-col items-center justify-center w-28 h-28 md:w-32 md:h-32">
                                <span class="text-[10px] text-rose-500 font-bold mb-1">3 Bottle Free</span>
                                <div class="flex items-end justify-center space-x-1">
                                    <!-- Mini Bottle 1 -->
                                    <div class="w-3 h-8 bg-gray-400 rounded-sm"></div>
                                    <!-- Mini Bottle 2 -->
                                    <div class="w-3 h-8 bg-teal-400 rounded-sm"></div>
                                    <!-- Mini Bottle 3 -->
                                    <div class="w-3 h-8 bg-rose-400 rounded-sm"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Main Image (Placeholder for Black Juicer) -->
                        <!-- I am using a transparent placeholder URL. In production, replace with the specific black juicer PNG -->
                        <img src="https://i.ibb.co/30hFp2K/black-juicer-mockup.png" alt="Black Citrus Juicer"
                            class="w-full h-auto drop-shadow-2xl relative z-0">
                        <!-- Note: If the image above breaks, use this fallback: https://placehold.co/400x500/transparent/png -->

                        <!-- Dimension Line: Right (Vertical) -->
                        <div class="absolute top-0 -right-4 h-full flex flex-col items-center justify-center">
                            <!-- Top Cap -->
                            <div class="w-2 h-px bg-black absolute top-2 right-0"></div>
                            <!-- Line -->
                            <div class="w-px h-[95%] bg-black"></div>
                            <!-- Bottom Cap -->
                            <div class="w-2 h-px bg-black absolute bottom-2 right-0"></div>

                            <!-- Text -->
                            <span class="absolute right-[-60px] top-1/2 -translate-y-1/2 font-bold text-black text-sm">48
                                CM"</span>
                        </div>

                        <!-- Dimension Line: Left (Diagonal) -->
                        <div class="absolute top-1/2 -left-2 w-32 h-32 pointer-events-none">
                            <!-- Using SVG to draw the specific diagonal line style from the image -->
                            <svg width="100%" height="100%" viewBox="0 0 100 100" fill="none"
                                style="overflow: visible;">
                                <!-- The line goes from near the juicer handle downwards -->
                                <path d="M 60 20 L 10 90" stroke="black" stroke-width="1.5" />
                                <!-- End cap -->
                                <path d="M 10 90 L 15 88" stroke="black" stroke-width="1.5" />
                            </svg>
                            <span class="absolute bottom-[-10px] left-0 font-bold text-black text-sm">15 CM"</span>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50 font-sans overflow-hidden">
        <div class="container mx-auto px-4 md:px-8">

            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                <!-- LEFT COLUMN: Image Representation -->
                <!-- Using 'order-2 lg:order-1' to keep image left on desktop, but maybe stack differently on mobile if desired. Currently standard. -->
                <div class="relative order-2 lg:order-1">
                    <!-- Background decoration -->
                    <div class="absolute -top-4 -left-4 w-2/3 h-2/3 bg-rose-100 rounded-full blur-3xl opacity-50 -z-10">
                    </div>
                    <div
                        class="absolute -bottom-4 -right-4 w-2/3 h-2/3 bg-blue-100 rounded-full blur-3xl opacity-50 -z-10">
                    </div>

                    <!-- Main Image Container -->
                    <div class="relative rounded-2xl overflow-hidden shadow-xl border-4 border-white group">
                        <img src="{{ asset('public/assets/images/images/ecommerce/main_3.webp') }}"
                            alt="360 Product Photography Editing"
                            class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105">

                        <!-- 360 Overlay Icon/Badge -->
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black/10 group-hover:bg-black/20 transition-all duration-300">
                            <div class="bg-white/90 backdrop-blur rounded-full p-4 shadow-lg animate-pulse">
                                <svg class="w-10 h-10 text-rose-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                                    </path>
                                </svg>
                            </div>
                        </div>

                        <!-- Bottom Tag -->

                    </div>
                </div>

                <!-- RIGHT COLUMN: Text Content -->
                <div class="order-1 lg:order-2">
                    <div class="mb-8">
                        <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-3">
                            360° Product <span class="text-rose-600">Image Editing</span>
                        </h2>
                        <p class="text-lg text-gray-700 font-medium">
                            Capture attention with precise 360° product images, showcasing every detail from every angle.
                        </p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 mb-8">
                        <p class="text-gray-600 leading-relaxed">
                            Unlock the power of 360° product presentation with our expert image editing services.
                            Just send us a minimum of <span
                                class="font-bold text-rose-600 bg-rose-50 px-2 py-0.5 rounded">24 product images</span>
                            from various angles, and we'll work our magic.
                        </p>
                    </div>

                    <!-- Feature List (Grid Layout) -->
                    <div class="grid sm:grid-cols-2 gap-y-3 gap-x-6 mb-8">

                        <!-- List Items with Custom Checks -->
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span class="text-gray-700 text-sm">Create a seamless 360° rotation view</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span class="text-gray-700 text-sm">Precise clipping paths for clean edges</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span class="text-gray-700 text-sm">Expert shadow & reflection enhancement</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span class="text-gray-700 text-sm">Basic retouching for perfection</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span class="text-gray-700 text-sm">Crop images for optimal presentation</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span class="text-gray-700 text-sm">Adjust color tones for consistency</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span class="text-gray-700 text-sm">Sharpen product details</span>
                        </div>
                    </div>

                    <!-- Conclusion / CTA Box -->
                    <div class="flex items-start gap-4 p-4 bg-rose-50 border-l-4 border-rose-600 rounded-r-lg">
                        <svg class="w-6 h-6 text-rose-600 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <p class="text-rose-900 font-medium text-sm leading-relaxed">
                            Trust our seasoned designers to ensure your images flow seamlessly in a captivating 360° product
                            rotation.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white overflow-hidden font-sans">
        <div class="max-w-7xl mx-auto px-4 md:px-8">

            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-semibold text-gray-900 mb-4">
                    Amazon, eBay & Shopify <span class="text-rose-600">Ready Images</span>
                </h2>
                <p class="text-lg text-gray-600">
                    Get instant e-commerce-ready images, optimized for global platforms. We handle the technical guidelines
                    so you can focus on selling.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center">

                <!-- Left Column: Content -->
                <div class="space-y-8">
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Optimize Your Product Images</h3>
                        <p class="text-gray-500 text-sm">Every platform has specific rules. We ensure your photos meet them
                            perfectly.</p>
                    </div>

                    <!-- Platform List -->
                    <div class="space-y-6">

                        <!-- Amazon Item -->
                        <div class="flex gap-4 items-start group">
                            <div
                                class="shrink-0 w-12 h-12 rounded-lg bg-orange-50 flex items-center justify-center text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition-colors duration-300">
                                <!-- Amazon Icon (Simple A or generic) -->
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M15.93 17.09c-2.8-.93-4.25-1.07-6.25-.66-3.07.64-4.5 1.84-4.5 3.19 0 1.25.99 2.14 2.65 2.14 1.27 0 2.64-.5 3.99-1.5l.38-.29v-2.88zm-3.63 2.87c-.89 0-1.25-.33-1.25-.8 0-.58.73-1.12 2.3-1.39.46-.08 1.1-.15 1.57-.15v1.26c-.32.61-1.34 1.08-2.62 1.08zM16.18 1.6C13.2.14 8.7 1.25 8.7 1.25L9.61 4s3.75-.95 6.09.2c1.76.85 1.54 2.8 1.54 2.8v1.36c-1.12-.13-2.6-.2-3.7-.2-6.52 0-7.84 4.14-7.84 6.22 0 3.32 2.62 5.62 6.01 5.62 2.66 0 4.24-1.2 4.95-2.26l.16.21 2.5-.29V11.2c0-5.74-2.85-9.45-13.14-9.6z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Amazon</h4>
                                <p class="text-gray-600 text-sm leading-relaxed mt-1">
                                    We adhere to strict guidelines: <span class="font-medium text-gray-800">Pure White
                                        Background (RGB 255,255,255)</span>, product occupying 85% of frame, and 1000px+
                                    dimensions using sRGB or CMYK.
                                </p>
                            </div>
                        </div>

                        <!-- eBay Item -->
                        <div class="flex gap-4 items-start group">
                            <div
                                class="shrink-0 w-12 h-12 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <!-- eBay Icon (Generic Bag) -->
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">eBay</h4>
                                <p class="text-gray-600 text-sm leading-relaxed mt-1">
                                    Square or rectangular images against a neutral backdrop. We ensure a minimum dimension
                                    of <span class="font-medium text-gray-800">500 pixels</span> on the longest side to
                                    make your product stand out.
                                </p>
                            </div>
                        </div>

                        <!-- Shopify Item -->
                        <div class="flex gap-4 items-start group">
                            <div
                                class="shrink-0 w-12 h-12 rounded-lg bg-green-50 flex items-center justify-center text-green-600 group-hover:bg-green-600 group-hover:text-white transition-colors duration-300">
                                <!-- Shopify Icon (Generic Tag) -->
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Shopify</h4>
                                <p class="text-gray-600 text-sm leading-relaxed mt-1">
                                    High-res square photos (2048 x 2048px). For pro looks, we scale up to <span
                                        class="font-medium text-gray-800">4472 x 4472px</span> (up to 20MB) enabling
                                    excellent zoom capabilities.
                                </p>
                            </div>
                        </div>

                        <!-- Etsy Item -->
                        <div class="flex gap-4 items-start group">
                            <div
                                class="shrink-0 w-12 h-12 rounded-lg bg-orange-50 flex items-center justify-center text-orange-600 group-hover:bg-orange-600 group-hover:text-white transition-colors duration-300">
                                <!-- Etsy Icon (Generic Heart/Handmade) -->
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Etsy</h4>
                                <p class="text-gray-600 text-sm leading-relaxed mt-1">
                                    For captivating product zoom and thumbnails, we provide optimized images at <span
                                        class="font-medium text-gray-800">1000 x 1000 pixels</span>.
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="pt-4">
                        <p class="text-rose-600 font-bold tracking-wide uppercase text-sm">
                            Get platform-perfect product images effortlessly!
                        </p>
                    </div>
                </div>

                <!-- Right Column: Image with Decoration -->
                <div class="relative mt-8 lg:mt-0">
                    <!-- Decorative background blob -->
                    <div
                        class="absolute -inset-4 bg-gradient-to-r from-rose-100 to-amber-50 rounded-2xl transform rotate-2 -z-10">
                    </div>

                    <!-- Main Image Container -->
                    <div class="bg-white p-2 rounded-xl shadow-xl relative overflow-hidden group">
                        <!-- Overlay text (Optional) -->
                        <div class="absolute top-4 left-4 z-10">
                            <span
                                class="bg-rose-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-md">eCommerce
                                Ready</span>
                        </div>

                        <!-- Placeholder Image (Replace with your actual 'main_4' image) -->
                        <!-- I used a generic ecommerce shoe image for demonstration -->
                        <img src="{{ asset('public/assets/images/images/ecommerce/portfolio/ecom_2.webp') }}"
                            alt="Product Photography Example"
                            class="w-full h-auto rounded-lg transform group-hover:scale-105 transition-transform duration-500 object-cover">

                        <!-- Floating Badge -->
                        <div
                            class="absolute bottom-4 right-4 bg-white/95 backdrop-blur-sm p-3 rounded-lg shadow-lg border border-gray-100 max-w-[180px]">
                            <div class="flex items-center gap-2 mb-1">
                                <div class="w-2 h-2 rounded-full bg-green-500"></div>
                                <span class="text-xs font-bold text-gray-700">Pixclipping</span>
                            </div>
                            <div class="text-[10px] text-gray-500">

                                Ecommerce by BinaryIT
                            </div>
                        </div>
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
                    Image Optimization
                </h2>

                <!-- Subtitle -->
                <p class="text-slate-500 text-sm md:text-base leading-relaxed">
                    Transforming your images into web-ready perfection, we offer expert photo editing tailored to your
                    needs.
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
                    <span class="text-4xl font-extrabold text-slate-800">$3.50 - $4.99</span>
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
                    <span class="text-4xl font-extrabold text-slate-800">$5.00 - $8.99</span>
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

    @include('layouts.includes.portal')
@endsection
