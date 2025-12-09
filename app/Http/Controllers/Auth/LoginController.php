<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(array_merge($credentials, ['status' => 1]))) {

            $user = auth()->user();


            if (!$user->hasVerifiedEmail()) {
dd('29');
                Auth::logout();
                return back()->withErrors([
                    'email' => 'Please verify your email before logging in.',
                ]);
            }
dd(35);
            $request->session()->regenerate();

            // Update last access
            if ($user->userDetails) {
                $user->userDetails->update([
                    'ip' => $request->ip(),
                    'last_access_at' => now(),
                ]);
            } else {
                $user->userDetails()->create([
                    'ip' => $request->ip(),
                    'last_access_at' => now(),
                ]);
            }

            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials or account is inactive.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
