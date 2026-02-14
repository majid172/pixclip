<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        if (auth()->user()->is_admin != 1) {
            abort(403, 'Unauthorized action.');
        }
        return view('panel.notice.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (auth()->user()->is_admin != 1) {
            abort(403, 'Unauthorized action.');
        }

        $validator = Validator::make($request->all(), [
            'title'        => 'required|string|max:255',
            'description'  => 'required|string',
            'status'       => 'nullable|integer',
            'publish_date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Validation failed!');
        }

        $data = $validator->validated();

        Notice::create($data);

        return back()->with('success', 'Notice created successfully!');

    }

/**
 * Display the specified resource.
 */
    public function show(string $id)
    {
        $notice = Notice::findOrFail($id);
        return view('panel.notice.show', compact('notice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $notice = Notice::findOrFail($id);
        return view('panel.notice.edit', compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $notice = Notice::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'title'        => 'required|string|max:255',
            'description'  => 'required|string',
            'status'       => 'nullable|integer',
            'publish_date' => 'required|date',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Validation failed. Please check the fields.');
        }

        $notice->update($validator->validated());
        return redirect()->route('notice.index')->with('success', 'Notice updated successfully!','Notice Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $notice = Notice::findOrFail($id);
        $notice->delete();
        return back()->with('warning', 'Notice deleted successfully!','Deleted');
    }
}
