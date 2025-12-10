<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verify Email - PixClipping</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="max-w-md w-full bg-white rounded-2xl shadow-xl p-8 text-center">

        <!-- Icon -->
        <div class="mx-auto flex items-center justify-center w-14 h-14 rounded-full bg-blue-50 text-rose-600 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-18 8h18a2 2 0 002-2V6a2 2 0 00-2-2H3a2 2 0 00-2 2v8a2 2 0 002 2z"/>
            </svg>
        </div>

        <h2 class="text-2xl font-bold text-slate-800 mb-2">
            Verify Your Email
        </h2>

        <p class="text-sm text-slate-600 mb-6">
            Thanks for signing up! Before continuing, please check your email and click
            the verification link we sent you.
        </p>

        <!-- Resend Verification -->
        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 text-sm text-green-600 font-semibold">
                A new verification link has been sent to your email address.
            </div>
        @endif

        <form method="POST" action="{{ route('verification.send') }}" class="mb-4">
            @csrf
            <button type="submit"
                class="w-full bg-rose-600 hover:bg-rose-500 text-white font-bold py-3 rounded-lg transition">
                Resend Verification Email
            </button>
        </form>

        <!-- Logout -->
       
       
            <a href="{{ route('logout') }}"
                class="text-sm text-slate-500 hover:text-slate-700 underline">
                Log out
            </a>
      

    </div>

</body>
</html>
