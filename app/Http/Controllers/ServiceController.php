<?php
namespace App\Http\Controllers;

use App\Models\Service;
use App\Service\ServiceClass;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public $service;
    public function __construct(ServiceClass $service)
    {
        $this->service = $service;
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service, $slug)
    {
        $title = ucwords(preg_replace("/[^a-zA-Z0-9]+/", " ", $slug));
        return $this->service->show($title, $slug);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
