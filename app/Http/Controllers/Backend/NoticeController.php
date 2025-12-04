<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->is_admin == 1) {
            $notices = Notice::get();
        } else {
            $notices = Notice::where('status', 1)->get();
        }
        return view('panel.notice.list', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('panel.notice.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'nullable|integer',
            'publish_date' => 'required'
        ]);

        Notice::create($data);

        return back()->with('success', 'Notice created successfully!');

    }

/**
 * Display the specified resource.
 */
    public function show(string $id)
    {
        //
    }

/**
 * Show the form for editing the specified resource.
 */
    public function edit(string $id)
    {
        //
    }

/**
 * Update the specified resource in storage.
 */
    public function update(Request $request, string $id)
    {
        //
    }

/**
 * Remove the specified resource from storage.
 */
    public function destroy(string $id)
    {
        //
    }
}
