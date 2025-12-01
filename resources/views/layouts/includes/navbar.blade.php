<!-- 2. MAIN NAVIGATION -->
<nav class="bg-white shadow-sm sticky top-0 z-50 font-sans">
    <div class="container mx-auto px-4 md:px-8 py-4 flex justify-between items-center">

        <!-- Logo -->
        <a href="#" class="flex items-center gap-2">
            <div class="w-8 h-8 relative">
                <div class="absolute inset-0 bg-rose-600 transform rotate-45 opacity-20 rounded"></div>
                <div class="absolute inset-0 flex items-center justify-center text-rose-600 font-bold text-xl">P</div>
            </div>
            <div class="flex flex-col leading-none">
                <span class="text-rose-600 font-bold text-lg tracking-tight">Pix Clipping</span>
                <span class="text-[0.6rem] text-gray-400 uppercase tracking-widest">Exceeding Expectation</span>
            </div>
        </a>

        <!-- Desktop Menu Links -->
        <div class="hidden lg:flex items-center space-x-8 text-[15px] font-medium text-blue-900">

            <a href="#" class="hover:text-rose-600 transition">Home</a>
            <!--<a href="#" class="hover:text-rose-600 transition">About Us</a>-->

            <!-- DROPDOWN: Services -->
            <div class="relative group h-full flex items-center">
                <button class="flex items-center gap-1 hover:text-rose-600 transition focus:outline-none">
                    Services
                    <svg class="w-3 h-3 transform group-hover:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <!-- Dropdown Menu -->
                <div class="absolute top-full left-0 pt-6 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2 w-56">
                    <div class="bg-white rounded-lg shadow-xl border-t-4 border-rose-600 py-2 px-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-rose-50 hover:text-rose-600 rounded transition">Clipping Path</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-rose-50 hover:text-rose-600 rounded transition">Image Masking</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-rose-50 hover:text-rose-600 rounded transition">Photo Retouching</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-rose-50 hover:text-rose-600 rounded transition">Ghost Mannequin</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-rose-50 hover:text-rose-600 rounded transition">Color Correction</a>
                    </div>
                </div>
            </div>

            <a href="#" class="hover:text-rose-600 transition">Workflow</a>
            <a href="#" class="hover:text-rose-600 transition">Price</a>

            <!-- DROPDOWN: Resources -->
            <div class="relative group h-full flex items-center">
                <button class="flex items-center gap-1 hover:text-rose-600 transition focus:outline-none">
                    Resources
                    <svg class="w-3 h-3 transform group-hover:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="absolute top-full -left-4 pt-6 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2 w-48">
                    <div class="bg-white rounded-lg shadow-xl border-t-4 border-rose-600 py-2 px-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-rose-50 hover:text-rose-600 rounded transition">Blog</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-rose-50 hover:text-rose-600 rounded transition">Case Studies</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-rose-50 hover:text-rose-600 rounded transition">Help Center</a>
                    </div>
                </div>
            </div>

            <!-- DROPDOWN: Company -->
            <div class="relative group h-full flex items-center">
                <button class="flex items-center gap-1 hover:text-rose-600 transition focus:outline-none">
                    Company
                    <svg class="w-3 h-3 transform group-hover:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="absolute top-full right-0 pt-6 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2 w-48">
                    <div class="bg-white rounded-lg shadow-xl border-t-4 border-rose-600 py-2 px-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-rose-50 hover:text-rose-600 rounded transition">About Company</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-rose-50 hover:text-rose-600 rounded transition">Career</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-rose-50 hover:text-rose-600 rounded transition">Our Team</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-rose-50 hover:text-rose-600 rounded transition">Contact Us</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Right Actions: Socials + Order Button -->
        <div class="hidden md:flex items-center gap-6">
            <div class="flex items-center gap-4 text-blue-900">
                <a href="#" class="hover:text-rose-700 hover:scale-110 transition-transform"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></a>
                <a href="#" class="hover:text-rose-700 hover:scale-110 transition-transform"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5" stroke-width="2"></rect><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z" stroke-width="2"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5" stroke-width="2"></line></svg></a>
            </div>
            <a href="#" class="bg-gradient-to-r from-rose-700 to-pink-600 hover:from-rose-800 hover:to-pink-700 text-white px-6 py-2.5 rounded shadow-lg shadow-rose-200 font-bold text-sm flex items-center gap-2 transition transform hover:-translate-y-0.5">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                ORDER NOW
            </a>
        </div>

        <!-- Mobile Menu Toggle -->
        <div class="lg:hidden">
            <button id="mobile-menu-btn" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="text-rose-900 hover:text-rose-600 p-2 focus:outline-none">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu (Updated structure) -->
    <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-100 overflow-y-auto max-h-[80vh]">
        <div class="px-6 pt-4 pb-6 space-y-3">
            <a href="#" class="block font-bold text-blue-900 hover:text-rose-600">Home</a>
            <!--<a href="#" class="block font-bold text-blue-900 hover:text-rose-600">About Us</a>-->

            <!-- Mobile Services -->
            <div class="border-l-2 border-gray-100 pl-4 space-y-2">
                <span class="block font-bold text-rose-500 text-sm uppercase tracking-wider mb-2">Services</span>
                <a href="#" class="block text-gray-600 hover:text-rose-600 text-sm">Clipping Path</a>
                <a href="#" class="block text-gray-600 hover:text-rose-600 text-sm">Image Masking</a>
                <a href="#" class="block text-gray-600 hover:text-rose-600 text-sm">Ghost Mannequin</a>
            </div>

            <a href="#" class="block font-bold text-blue-900 hover:text-rose-600">Workflow</a>
            <a href="#" class="block font-bold text-blue-900 hover:text-rose-600">Price</a>

            <!-- Mobile Company -->
            <div class="border-l-2 border-gray-100 pl-4 space-y-2">
                <span class="block font-bold text-rose-500 text-sm uppercase tracking-wider mb-2">Company</span>
                <a href="#" class="block text-gray-600 hover:text-rose-600 text-sm">Career</a>
                <a href="#" class="block text-gray-600 hover:text-rose-600 text-sm">Our Team</a>
            </div>

            <a href="#" class="block mt-6 text-center bg-rose-800 text-white py-3 rounded font-bold shadow-md">ORDER NOW</a>
        </div>
    </div>
</nav>
