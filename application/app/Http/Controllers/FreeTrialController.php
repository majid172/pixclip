<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreeTrialController extends Controller
{
    public function index()
    {
        $title = "Free Trial";
        return view('free_trial',compact('title'));
    }
}
