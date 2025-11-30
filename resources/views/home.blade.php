<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PixClipping Clone Structure</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="flex flex-col min-h-screen bg-gray-50">

    @include('layouts.includes.topnav')
    @include('layouts.includes.navbar')

    <!-- 3. BODY CONTENT -->
    <main class="flex-grow container mx-auto px-4 md:px-8 py-10">
       @yield('content')
    </main>

    <!-- 4. FOOTER -->
    @include('layouts.includes.footer')
    <!-- Simple Script to Toggle Mobile Menu -->
    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
