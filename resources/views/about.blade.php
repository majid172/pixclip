@extends('layouts.app')
@section('content')
    @include('layouts.includes.breadcumb')
    <section class="py-16 md:py-24 overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
                
                <!-- Image Side -->
                <div class="w-full lg:w-1/2 relative">
                    <!-- Decorative back square -->
                    <div class="absolute -top-4 -left-4 w-2/3 h-2/3 bg-rose-50 rounded-2xl -z-10"></div>
                    <div class="absolute -bottom-4 -right-4 w-2/3 h-2/3 bg-rose-100 rounded-2xl -z-10"></div>
                    
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&q=80&w=1000" 
                         alt="Our Team Working" 
                         class="rounded-xl shadow-2xl w-full object-cover h-[400px] md:h-[500px]">
                         
                    <!-- Experience Badge -->
                    <div class="absolute bottom-10 left-[-20px] md:left-[-30px] bg-rose-600 text-white p-6 rounded-lg shadow-xl hidden md:block">
                        <p class="text-4xl font-bold">12+</p>
                        <p class="text-sm opacity-90 uppercase tracking-wide">Years Experience</p>
                    </div>
                </div>

                <!-- Text Side -->
                <div class="w-full lg:w-1/2">
                    <h3 class="text-rose-600 font-bold uppercase tracking-wider text-sm mb-2">Who We Are</h3>
                    <h2 class="text-3xl md:text-3xl font-bold text-slate-800 mb-6 leading-tight">
                        We Provide High Quality <br> <span class="text-rose-600">Image Editing</span> Services.
                    </h2>
                    <p class="text-slate-500 text-md mb-6 leading-relaxed">
                        PixClipping began with a simple mission: to help e-commerce businesses and photographers shine through perfect imagery. We combine human creativity with cutting-edge technology to deliver results that exceed expectations.
                    </p>
                    <p class="text-slate-500 mb-8 leading-relaxed">
                        Our team of dedicated artists works around the clock to ensure your deadlines are met without compromising on quality. From simple background removal to complex high-end retouching, we do it all.
                    </p>

                    <!-- Feature List -->
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-rose-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="font-medium text-slate-700">100% Satisfaction Guarantee</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-rose-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="font-medium text-slate-700">24/7 Dedicated Support</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-rose-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="font-medium text-slate-700">Secure & Confidential</span>
                        </li>
                    </ul>

                    <a href="#" class="inline-block bg-rose-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-rose-700 transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                        Discover More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-20">
        <div class="container mx-auto px-4 max-w-7xl">


            <!-- Features Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-12 text-center">

                <!-- Item 1: Easy Dashboard -->
                <div class="flex flex-col items-center">
                    <div class="mb-3 text-rose-500"> <!-- Adjusted color to match specific blue -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="3" y1="9" x2="21" y2="9"></line>
                            <path d="M9 21V9"></path>
                            <path d="M14 15h3"></path>
                            <circle cx="18" cy="18" r="3"></circle>
                        </svg>
                    </div>
                    <h3 class="text-base md:text-lg font-bold text-slate-800">Company Overview</h3>
                    <p class="text-base text-md text-gray-600">
                        At Pix Clipping, we're your trusted global outsourcing partner. We bring efficiency and expertise to your business, allowing you to focus on your strengths while we handle the rest with dedicated, tailored solutions.
                    </p>

                </div>

                <!-- Item 2: Powerful Features -->
                <div class="flex flex-col items-center">
                    <div class="mb-3 text-rose-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                    <h3 class="text-base md:text-lg font-bold text-slate-800">Mission and Values</h3>
                    <p class="text-base text-md text-gray-600">
                        Our image editing experts excel in various techniques, from precise clipping to expert retouching. Rely on our seasoned skills to enhance your visuals to perfection. Choose us for standout image editing solutions.
                    </p>
                </div>

                <!-- Item 3: Excellent Design -->
                <div class="flex flex-col items-center">
                    <div class="mb-3 text-rose-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                            <path d="M15 8l-4 4-2-2"></path> <!-- Simple check/design mark inside -->
                        </svg>
                    </div>
                    <h3 class="text-base md:text-lg font-bold text-slate-800">Team and Expertise</h3>
                    <p class="text-base text-md text-gray-600">
                        At our image editing company, we're dedicated to enhancing your visuals with precision and creativity. Join us in this transformative journey where your success is our focus.
                    </p>
                </div>


            </div>
        </div>
    </section>

    <!-- 4. TEAM SECTION -->
    <section class="py-16 md:py-24 bg-amber-50">
        <div class="container mx-auto px-4">
            
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h3 class="text-rose-500 font-bold uppercase tracking-wider text-sm mb-2">Expert Team</h3>
                <h2 class="text-3xl md:text-3xl font-bold text-slate-800">Meet The Creatives</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <!-- Team Member 1 -->
                <div class="group bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=400" alt="Team Member" class="w-full h-64 object-cover object-top transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h4 class="text-xl font-bold text-slate-800">David Smith</h4>
                        <p class="text-[#2c4c7c] text-sm font-medium mb-4">Founder & CEO</p>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="group bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=400" alt="Team Member" class="w-full h-64 object-cover object-top transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h4 class="text-xl font-bold text-slate-800">Sarah Jones</h4>
                        <p class="text-[#2c4c7c] text-sm font-medium mb-4">Head of Design</p>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="group bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=400" alt="Team Member" class="w-full h-64 object-cover object-top transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h4 class="text-xl font-bold text-slate-800">Michael Brown</h4>
                        <p class="text-[#2c4c7c] text-sm font-medium mb-4">Quality Manager</p>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="group bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&q=80&w=400" alt="Team Member" class="w-full h-64 object-cover object-top transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h4 class="text-xl font-bold text-slate-800">Emily Wilson</h4>
                        <p class="text-[#2c4c7c] text-sm font-medium mb-4">Support Lead</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
