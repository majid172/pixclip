@extends('layouts.app')
@section('content')
    <section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Left Side: Image -->
            <div class="flex justify-center md:justify-end pr-0 md:pr-8">
                <!-- Using a similar bicycle image from Unsplash -->
                <img src="{{ asset('/assets/images/images/ghost/main.png') }}" alt="Grey Road Bike"
                    class="w-full max-w-md object-contain drop-shadow-2xl grayscale-[30%]">
            </div>

            <div class="flex flex-col text-left">
                <h2 class="text-slate-500 text-xl md:text-2xl font-normal leading-snug mb-1">
                    {{ $title }}
                </h2>

                <h1 class="text-slate-600 text-3xl md:text-4xl font-bold mb-6">
                    Capturing Images with Natural Depth :  <span class="text-rose-600">Ghost Mannequin Service</span>
                </h1>

                <!-- Description Paragraph -->
                <p class="text-slate-400 text-sm md:text-base leading-relaxed max-w-lg mb-8">
                    Enhance Your Photos with Ghost Mannequin Magic! Say goodbye to wrinkles and mannequins. Experience the realism of our 3D ghost effect service. Grab more viewers' attention today!
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
                    <h3 class="text-xl font-bold text-slate-600 mb-3">1000 /Day</h3>
                    <p class="text-slate-500 text-sm leading-relaxed max-w-xs mx-auto">
                        Ghost mannequin editing: Experts in bulk.
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
                    What pixclipping?
                </span>

                <!-- Main Heading -->
                <h2 class="text-3xl md:text-4xl font-bold text-slate-600 mb-6">
                    Excellence defined: Our high-quality ghost mannequin editing.
                </h2>

                <!-- Description Paragraphs -->
                <div class="space-y-6 text-slate-500 leading-relaxed text-[15px]">
                    <p>
                        We excel in high-quality ghost mannequin editing services. Our professional neck joint service ensures an accurate portrayal of every part of the cloth. By adding a captivating 3D effect, we infuse vibrancy and confidence into your clothing products. Say goodbye to wrinkles and unwanted spots as we make them vanish seamlessly.

                    </p>
                    <p>
                       Experience super-fast service with the added benefit of free revisions, tailored to your needs. Our personalised web app simplifies the ordering process, making it effortless for our valued clients. Trust us to elevate your product visuals and bring out the best in your clothing line.

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
                    <h3 class="text-lg font-semibold text-slate-600 mb-2">Perfect 'Ghost' Effect - Enchanting Impact</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Transform your photos with our expert touch! Experience the natural ghost mannequin effect, giving your products the look of a real-life model wearing them.
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
                    <h3 class="text-lg font-semibold text-slate-600 mb-2">SEO-Powered Web Photos</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        No need for additional post-processing. Utilise our edited images directly for your purpose.
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
                    <h3 class="text-lg font-semibold text-slate-600 mb-2">Experience Consistent Output</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Expertly crafted photos with unmatched depth - courtesy of our dedicated in-house retouchers.
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
                    <h3 class="text-lg font-semibold text-slate-600 mb-2">Supercharge Your Sales!</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Transform viewers into buyers and boost sales with our flawless mannequin effect.
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
                    PixClipping: Lifelike ghost mannequin photo editing. Quick and professional turnaround
                </p>
            </div>

            <!-- Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                <!-- Left Column: Illustration -->
                <!-- Ideally, place your isometric vector image here -->
                <div class="flex justify-center lg:justify-end">
                    <img src="{{ asset('/assets/images/images/ghost/execute.png') }}"
                        alt="Designer Workspace Illustration"
                        class="w-full max-w-lg object-contain drop-shadow-xl hover:scale-[1.02] transition-transform duration-500 rounded-lg">

                </div>

                <!-- Right Column: Text Content -->
                <div class="flex flex-col text-slate-500 text-[15px] leading-7 space-y-6 text-justify md:text-left">

                    <p>
                       Our expert team enhances your photos by removing dummies and adding neck-shot top and bottom. We apply 3D effects for an authentic look and retouch the image, removing dust and wrinkles while maintaining a natural appearance. With our ghost mannequin service, your garments will look freshly ironed in the photos.

                    </p>

                    <p>
                       We ensure symmetrical images, correct lengths for arms, sleeves, and legs, and position objects at the centre. You have the flexibility to adjust height, width, and DPI as needed. Additionally, we provide an Editable Photoshop Layer file for future use on-demand.
                    </p>
                    <p>
                        For flat lay photography, we offer realistic and web-ready apparel images, allowing you to capture clothes without mannequins worry-free.
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
                Ghost Mannequin: Affordable Solutions for Your Needs!
            </h2>
            <p class="text-slate-500 text-md">
                Boost sales dramatically with our cost-effective ghost mannequin photo editing. No hidden fees, just pay for services.
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
                    <span class="text-4xl font-extrabold text-slate-800">$0.79 - $1.49</span>
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
                        Remove dummy / mannequin
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        Add neck shot
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                       Natural 3D effect
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                       Create symmetrical
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                       Adjust Color Cast
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                       Web-ready output
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
                    <span class="text-4xl font-extrabold text-slate-800">$1.50 - $2.49</span>
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
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                       Create symmetrical
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                       Adjust Color Cast
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                       Web-ready output
                    </li>
                </ul>
            </div>

            <!-- Card 3: Enterprise -->
            <div
                class="bg-white rounded-2xl p-8 border border-slate-200 shadow-sm hover:shadow-lg transition-all duration-300">
                <h3 class="text-slate-800 text-xl font-bold">Enterprise</h3>
                <p class="text-slate-400 text-sm mt-2">High volume & custom needs.</p>

                <div class="my-6">
                    <span class="text-4xl font-extrabold text-slate-800">@lang('Talk to us')</span>
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
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                       Create symmetrical
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                       Adjust Color Cast
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rose-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                       Web-ready output
                    </li>
                </ul>
            </div>

        </div>


    </section>

{{-- portal --}}
@include('layouts.includes.portal')
@endsection
