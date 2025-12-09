<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\UserDetails;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(array_merge($credentials, ['status' => 1]))) {
            $request->session()->regenerate();
            $userDetail = UserDetails::where('user_id', auth()->user()->id)->first();
            $userDetail->ip = $request->ip();
            $userDetail->last_access_at = now();
            $userDetail->save();

            return redirect('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials or account is inactive.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        return redirect('/');
    }
}
