<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function show()
    {
        return view('auth.forgot-password');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        // Delete old tokens for this email
        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        // Generate new token
        $token = Str::random(64);

        // Store token in database
        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => now(),
        ]);

        // Send email with reset link
        $resetLink = url('/reset-password/' . $token . '?email=' . urlencode($request->email));
        
        Mail::send('emails.reset-password', ['resetLink' => $resetLink], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password Notification');
        });

        return back()->with('success', 'We have emailed your password reset link!');
    }
}
