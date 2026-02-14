<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Show registration form
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Handle registration
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => 0,
        ]);

        $user->userDetail()->create([
            'uuid' => 'PIXU-'.date('ym').'-'.sprintf('%04d', $user->id),
        ]);

        event(new Registered($user));

        $admins = \App\Models\User::where('is_admin', 1)->get();
        try {
            // Wait 2 seconds to avoid Mailtrap rate limit (550 Too many emails per second)
            sleep(2);
            \Illuminate\Support\Facades\Notification::send($admins, new \App\Notifications\NewUserRegistered($user));
        } catch (\Exception $e) {
            // Log error or ignore to prevent crashing registration on rate limit
            \Illuminate\Support\Facades\Log::error('Admin notification failed: ' . $e->getMessage());
        }

        Auth::login($user);

        return redirect()->route('verification.notice')->with('status', 'Registration successful!');
    }
}
