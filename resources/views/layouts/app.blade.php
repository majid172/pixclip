<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PixClipping Clone Structure</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
@vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen bg-gray-50">

    @include('layouts.includes.topnav')
    @include('layouts.includes.navbar')

    <!-- 3. BODY CONTENT -->
    <main class="flex-grow  py-10">
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
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</body>
</html>
