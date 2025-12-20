<?php
namespace App\Http\Controllers;

use App\Notifications\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function contact()
    {
        $title = 'Contact Us';
        return view('contact', compact('title'));
    }
    public function sendMessage(Request $request)
    {
        // Validate the request data
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Notification::route('mail', 'hello@example.com')
            ->notify(new Contact($data));

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }
}
