<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PixClipping</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans text-slate-600 h-screen flex items-center justify-center bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]">

    <div class="w-full max-w-md p-6">

        <!-- Main Card -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">

            <!-- Decorative Top Strip -->
            <div class="h-2 bg-rose-600 w-full"></div>

            <div class="p-8">
                <!-- Logo Area -->
                <div class="text-center mb-8">
                    <!-- Replace with actual logo img -->
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-lg bg-blue-50 text-rose-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-slate-800">PixClipping</h2>
                    <p class="text-sm text-slate-400 mt-1">Sign in to your dashboard</p>
                </div>

                <form action="{{route('login.store')}}" method="POST" class="space-y-5">
                    @csrf
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-1">Email Address</label>
                        <input type="email" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-rose-600 focus:ring-2 focus:ring-blue-100 outline-none transition-all" name="email" placeholder="you@example.com">
                    </div>

                    <div>
                        <div class="flex justify-between mb-1">
                            <label class="block text-sm font-bold text-slate-700">Password</label>
                            <a href="#" class="text-xs font-bold text-rose-600 hover:underline">Forgot?</a>
                        </div>
                        <input type="password" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-rose-600 focus:ring-2 focus:ring-blue-100 outline-none transition-all" name="password" placeholder="••••••••">
                    </div>

                    <button class="w-full bg-rose-600 hover:bg-rose-500 text-white font-bold py-3 rounded-lg transition-all duration-300 shadow-lg shadow-blue-900/20 transform hover:-translate-y-0.5">
                        Log In
                    </button>
                </form>

                <div class="mt-8 text-center border-t border-gray-100 pt-6">
                    <p class="text-sm text-slate-500">
                        New to PixClipping?
                        <a href="{{url('register')}}" class="font-bold text-rose-600 hover:underline">Create Account</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Footer Links -->
        <div class="text-center mt-6 text-xs text-gray-400 space-x-4">
            <a href="#" class="hover:text-gray-600">Privacy Policy</a>
            <span>•</span>
            <a href="#" class="hover:text-gray-600">Terms of Service</a>
        </div>

    </div>

</body>
</html>
