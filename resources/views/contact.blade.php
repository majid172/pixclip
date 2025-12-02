@extends('layouts.app')
@section('content')
    @include('layouts.includes.breadcumb')
    <section class="py-16 md:py-24">
        <div class="container mx-auto px-4">

            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-2xl md:text-3xl font-semibold text-slate-700 mb-5">
                    Get in Touch
                </h2>
                <p class="text-slate-500 text-sm md:text-base leading-relaxed max-w-2xl mx-auto">
                    Have a question or need a custom quote? We are here to help.<br class="hidden md:block" />
                    Send us a message and we will respond as soon as possible.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 max-w-6xl mx-auto items-start">

                <!-- Left Column: Contact Info (Kept Clean) -->
                <div class="flex flex-col justify-center space-y-10 py-4">

                    <!-- Address -->
                    <div class="flex items-start group">
                        <div
                            class="flex-shrink-0 flex items-center justify-center w-12 h-12 rounded-lg bg-rose-50 text-rose-600 group-hover:bg-rose-600 group-hover:text-white transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div class="ml-5">
                            <h3 class="text-xl font-bold text-slate-800">Our Office</h3>
                            <p class="text-slate-500 mt-2 leading-relaxed">
                                123 Creative Studio Rd,<br>
                                Design District, NY 10012
                            </p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start group">
                        <div
                            class="flex-shrink-0 flex items-center justify-center w-12 h-12 rounded-lg bg-rose-50 text-rose-600 group-hover:bg-rose-600 group-hover:text-white transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="ml-5">
                            <h3 class="text-xl font-bold text-slate-800">Email Us</h3>
                            <p class="text-slate-500 mt-2 leading-relaxed">
                                support@pixclipping.com<br>
                                info@pixclipping.com
                            </p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="flex items-start group">
                        <div
                            class="flex-shrink-0 flex items-center justify-center w-12 h-12 rounded-lg bg-rose-50 text-rose-600 group-hover:bg-rose-600 group-hover:text-white transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div class="ml-5">
                            <h3 class="text-xl font-bold text-slate-800">Call Us</h3>
                            <p class="text-slate-500 mt-2 leading-relaxed">
                                +1 (555) 123-4567<br>
                                Mon-Fri, 9am - 6pm
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Right Column: ATTRACTIVE FORM -->
                <div class="relative bg-white rounded-md overflow-hidden border border-gray-100">

                    <!-- Decorative Top Bar -->
                    <div class="absolute top-0 left-0 w-full h-2 bg-rose-600"></div>

                    <div class="p-8 md:p-10">
                        <h3 class="text-xl font-normal text-slate-800 mb-6">Send a Message</h3>

                        <form action="#" method="POST" class="space-y-6">

                            <!-- Name & Email Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Name Input with Icon -->
                                <div class="relative">
                                    <label for="name" class="block text-sm font-semibold text-slate-600 mb-2">Full
                                        Name</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <input type="text" id="name"
                                            class="w-full pl-10 pr-4 py-3 rounded-lg border border-gray-200 bg-gray-50 focus:bg-white focus:border-rose-600 focus:ring-4 focus:ring-rose-100 outline-none transition-all duration-300"
                                            placeholder="John Doe">
                                    </div>
                                </div>

                                <!-- Email Input with Icon -->
                                <div class="relative">
                                    <label for="email" class="block text-sm font-semibold text-slate-600 mb-2">Email
                                        Address</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                            </svg>
                                        </div>
                                        <input type="email" id="email"
                                            class="w-full pl-10 pr-4 py-3 rounded-lg border border-gray-200 bg-gray-50 focus:bg-white focus:border-rose-600 focus:ring-4 focus:ring-rose-100 outline-none transition-all duration-300"
                                            placeholder="john@example.com">
                                    </div>
                                </div>
                            </div>

                            <!-- Subject Input with Icon -->
                            <div class="relative">
                                <label for="subject"
                                    class="block text-sm font-semibold text-slate-600 mb-2">Subject</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input type="text" id="subject"
                                        class="w-full pl-10 pr-4 py-3 rounded-lg border border-gray-200 bg-gray-50 focus:bg-white focus:border-rose-600 focus:ring-4 focus:ring-rose-100 outline-none transition-all duration-300"
                                        placeholder="Project Inquiry">
                                </div>
                            </div>

                            <!-- Message Input with Icon -->
                            <div class="relative">
                                <label for="message"
                                    class="block text-sm font-semibold text-slate-600 mb-2">Message</label>
                                <div class="relative">
                                    <div class="absolute top-3 left-3 pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <textarea id="message" rows="4"
                                        class="w-full pl-10 pr-4 py-3 rounded-lg border border-gray-200 bg-gray-50 focus:bg-white focus:border-rose-600 focus:ring-4 focus:ring-rose-100 outline-none transition-all duration-300 resize-none"
                                        placeholder="Tell us about your project..."></textarea>
                                </div>
                            </div>

                            <!-- Attractive Button -->
                            <button type="button"
                                class="group w-full bg-rose-600 text-white font-bold py-4 rounded-lg hover:bg-[#1a365d] hover:-translate-y-1 hover:shadow-lg transition-all duration-300 flex justify-center items-center">
                                <span>Send Message</span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 ml-2 transform group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="w-full bg-amber-50 py-12">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold text-slate-700 mb-5 text-center">Our <span class="text-rose-600">Location</span> </h2>
            <p class="text-center text-base text-slate-600 mb-8">
                Find us easily with the interactive map below.
            </p>
            <div class="w-full h-64 md:h-96 rounded-lg overflow-hidden shadow-lg">
                <iframe class="w-full h-full"
                    src="https://www.google.com/maps?q=	23.797911,90.414391&hl=es;z=14&output=embed" allowfullscreen
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>

            </div>
        </div>
    </section>
@endsection
