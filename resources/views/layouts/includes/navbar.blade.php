
<!-- 2. MAIN NAVIGATION -->
<nav class="bg-white shadow-sm sticky top-0 z-50">
    <div class="container mx-auto px-4 md:px-8 py-4 flex justify-between items-center">

        <!-- Logo -->
        <a href="#" class="flex items-center gap-2">
            <div class="w-8 h-8 relative">
                <div class="absolute inset-0 bg-rose-600 transform rotate-45 opacity-20 rounded"></div>
                <div class="absolute inset-0 flex items-center justify-center text-rose-900 font-bold text-xl">P</div>
            </div>
            <div class="flex flex-col leading-none">
                <span class="text-rose-900 font-bold text-lg tracking-tight">Pix Clipping</span>
                <span class="text-[0.6rem] text-gray-400 uppercase tracking-widest">Exceeding Expectation</span>
            </div>
        </a>

        <!-- Desktop Menu Links -->
        <div class="hidden lg:flex items-center space-x-8 text-[15px] font-medium text-blue-900">
            <a href="#" class="hover:text-rose-600 transition">Home</a>
            <a href="#" class="hover:text-rose-600 transition">About Us</a>
            <a href="#" class="group flex items-center gap-1 hover:text-rose-600 transition">
                Services
                <svg class="w-3 h-3 group-hover:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </a>
            <a href="#" class="hover:text-rose-600 transition">Workflow</a>
            <a href="#" class="hover:text-rose-600 transition">Price</a>
            <a href="#" class="group flex items-center gap-1 hover:text-rose-600 transition">
                Resources
                <svg class="w-3 h-3 group-hover:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </a>
        </div>

        <!-- Right Actions: Socials + Order Button -->
        <div class="hidden md:flex items-center gap-6">
            <div class="flex items-center gap-4 text-blue-900">
                <a href="#" class="hover:text-rose-700"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></a>
                <a href="#" class="hover:text-rose-700"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5" stroke-width="2"></rect><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z" stroke-width="2"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5" stroke-width="2"></line></svg></a>
            </div>
            <a href="#" class="bg-rose-800 hover:bg-rose-700 text-white px-6 py-2.5 rounded font-bold text-sm flex items-center gap-2 transition shadow-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                ORDER NOW
            </a>
        </div>

        <!-- Mobile Menu Toggle -->
        <div class="lg:hidden">
            <button id="mobile-menu-btn" class="text-rose-900 hover:text-rose-600 p-2 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu (Hidden by default) -->
    <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-100">
        <div class="px-4 pt-2 pb-4 space-y-1">
            <a href="#" class="block py-2 text-blue-900 hover:text-blue-600 font-medium">Home</a>
            <a href="#" class="block py-2 text-blue-900 hover:text-blue-600 font-medium">About Us</a>
            <a href="#" class="block py-2 text-blue-900 hover:text-blue-600 font-medium">Services</a>
            <a href="#" class="block py-2 text-blue-900 hover:text-blue-600 font-medium">Workflow</a>
            <a href="#" class="block py-2 text-blue-900 hover:text-blue-600 font-medium">Price</a>
            <a href="#" class="block py-2 text-blue-900 hover:text-blue-600 font-medium">Resources</a>
            <a href="#" class="block mt-4 text-center bg-rose-800 text-white py-2 rounded font-bold">ORDER NOW</a>
        </div>
    </div>
</nav>
