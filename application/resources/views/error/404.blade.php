<!-- resources/views/errors/404.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="max-w-md w-full text-center">
            <h1 class="text-9xl font-extrabold text-indigo-600 tracking-widest">404</h1>
            <div class="bg-indigo-600 px-2 text-sm rounded rotate-12 absolute transform translate-y-[-3.5rem] translate-x-[7rem] text-white inline-block">
                Page Not Found
            </div>
            
            <div class="mt-8">
                <p class="text-2xl font-semibold text-gray-800 md:text-3xl">Sorry, we couldn't find this page.</p>
                <p class="mt-4 mb-8 text-gray-500">But dont worry, you can find plenty of other things on our homepage.</p>
                
                <a href="{{ url('/') }}" class="px-8 py-3 font-semibold rounded-lg bg-indigo-600 text-white hover:bg-indigo-700 transition-colors duration-300 shadow-lg">
                    Back to Homepage
                </a>
            </div>
        </div>
    </div>
</body>
</html>