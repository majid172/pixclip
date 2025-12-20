<?php
namespace App\Http\Controllers;

use App\Models\FreeTrial;
use App\Models\Media;
use App\Models\PathService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class FreeTrialController extends Controller
{
    public function index()
    {
        $title       = 'Free Trial';
        $pathService = PathService::where('status', 1)->get();
        return view('free_trial', compact('pathService', 'title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name'     => 'required|string',
            'last_name'      => 'required|string',
            'email'          => 'required|email',
            'phone'          => 'required|string',
            'service'        => 'required|string',
            'instruction'    => 'required|string',
            'upload_files.*' => 'nullable|file|max:30720', // 30MB max
        ]);

        try {
            DB::beginTransaction();

            $media_ids = [];

            if ($request->hasFile('upload_files')) {
                $files = $request->file('upload_files');

                foreach ($files as $file) {
                    $destinationPath = base_path('../assets/free-trials/' . $request->phone);
                    // $destinationPath = public_path('../assets/free-trials/'.$request->first_name.'/');
                    if (! File::exists($destinationPath)) {
                        File::makeDirectory($destinationPath, 0755, true);
                    }
                    $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                    $file->move($destinationPath, $fileName);
                   
                    $media_create = Media::create([
                        'user_id'   => 0, 
                        'file_name' => $file->getClientOriginalName(),
                        'file'      => $destinationPath . '/' . $fileName,
                        'extension' => $file->getClientOriginalExtension(),
                        // 'type'      => $file->getMimeType(),
                        // 'file_size' => $file->getSize(),
                    ]);

                    if ($media_create) {
                        $media_ids[] = $media_create->id;
                    }
                }
            }

            FreeTrial::create([
                'name'         => $request->first_name . ' ' . $request->last_name,
                'email'        => $request->email,
                'phone'        => $request->phone,
                'company_name' => $request->company_name,
                'website'      => $request->website,
                'quantity'     => count($media_ids) > 0 ? count($media_ids) : 1, // Default to 1 if no files or based on input? Using count for now.
                'service_name' => $request->service,
                'instruction'  => $request->instruction,
                'media_id'     => json_encode($media_ids),
                // 'file' => ... (Leaving file column logic for now as we are using Media model effectively)
            ]);

            DB::commit();

            return back()->with('success', 'Your free trial request has been submitted successfully!');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }
}
