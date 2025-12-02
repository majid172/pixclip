<!-- Note the 'bg-fixed' class below -->
<section class="relative py-16 md:py-24 bg-fixed bg-cover bg-center bg-no-repeat" 
    style="background-image: url('https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format&fit=crop&q=80&w=1600');">
    
    <!-- Dark Black Overlay for Maximum Contrast -->
    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative z-10 container mx-auto px-4 text-center">
        
        <!-- Small Tag -->
        <span class="inline-block py-1 px-3 rounded bg-rose-600 text-white text-xs font-bold tracking-wider mb-4 uppercase">
            Start Your Journey
        </span>

        <h1 class="text-3xl md:text-4xl font-bold text-white mb-6">
            {{ $title ?? 'Page Title' }}
        </h1>

        <!-- Breadcrumb (Simple Text) -->
        <nav class="flex justify-center text-slate-300 text-sm md:text-md font-medium">
            <a href="{{ url('/') }}" class="hover:text-white transition-colors">Home</a>
            <span class="mx-3">•</span>
            <span class="text-white">{{ $title ?? 'Current Page' }}</span>
        </nav>

    </div>
</section>