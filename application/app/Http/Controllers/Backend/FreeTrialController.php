<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FreeTrial;
use App\Models\Media;
use Illuminate\Http\Request;

class FreeTrialController extends Controller
{
    public function index()
    {
        $title = 'Free Trial Requests';
        $trials = FreeTrial::latest()->get();

        return view('panel.free_trial.list', compact('trials', 'title'));
    }

    public function destroy($id)
    {
        $trial = FreeTrial::findOrFail($id);
        
        // delete media if needed, but Media model usually handles files. 
        // For now just deleting the record.
        
        $trial->delete();

        return back()->with('success', 'Free trial request deleted successfully.');
    }
}
