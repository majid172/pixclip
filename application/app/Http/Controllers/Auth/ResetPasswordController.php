<?php



namespace App\Http\Controllers\Auth;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

use App\Models\User;



class ResetPasswordController extends Controller

{

    public function show(Request $request, $token)

    {

        return view('auth.reset-password', [

            'token' => $token,

            'email' => $request->email

        ]);

    }



    public function store(Request $request)

    {

        $request->validate([

            'token' => 'required',

            'email' => 'required|email|exists:users,email',

            'password' => 'required|min:6|confirmed',

        ]);



        // Verify token exists and is not expired (60 minutes)

        $passwordReset = DB::table('password_reset_tokens')

            ->where('email', $request->email)

            ->where('token', $request->token)

            ->first();



        if (!$passwordReset) {

            return back()->withErrors(['email' => 'Invalid or expired reset token.']);

        }



        // Check if token is expired (60 minutes)

        if (now()->diffInMinutes($passwordReset->created_at) > 60) {

            DB::table('password_reset_tokens')->where('email', $request->email)->delete();

            return back()->withErrors(['email' => 'Reset token has expired.']);

        }



        // Update user password

        $user = User::where('email', $request->email)->first();

        $user->password = Hash::make($request->password);

        $user->save();



        // Delete the token

        DB::table('password_reset_tokens')->where('email', $request->email)->delete();



        return redirect()->route('login')->with('success', 'Your password has been reset successfully!');

    }

}

