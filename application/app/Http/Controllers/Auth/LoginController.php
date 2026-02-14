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

        if (! Auth::attempt(array_merge($credentials, ['status' => 1]))) {
            // return back()->withErrors([
            //     'email' => 'Invalid credentials or account is inactive.',
            // ]);
            return back()->with('error', 'Invalid credentials or account is inactive.');
        }

        $request->session()->regenerate();

        $user = auth()->user();

        if (! $user->hasVerifiedEmail()) {
            Auth::logout();
            return back()->with('error', 'Please verify your email before logging in.');
            // return back()->withErrors([
            //     'email' => 'Please verify your email before logging in.',
            // ]);
        }

        $user->userDetail()->updateOrCreate(
            ['user_id' => $user->id],
            [

                'ip'             => $request->ip(),
                'last_access_at' => now(),
            ]
        );

        return redirect()->intended('dashboard')->with('success', 'Login successfully!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('warning', 'Logged out successfully!');
    }
}
