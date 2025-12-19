<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        // For now, just getting all users except current auth user for the contact list
        // In a real app, this might be filtered by who the user has chatted with
        $contacts = User::where('id', '!=', auth()->id())->get();
        return view('panel.chat.index', compact('contacts'));
    }
}
