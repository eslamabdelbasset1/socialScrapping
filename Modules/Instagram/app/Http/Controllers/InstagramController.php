<?php

namespace Modules\Instagram\app\Http\Controllers;

use App\Clients\GuzzleHttpClient;
use App\Clients\LaravelHttpClient;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Modules\Instagram\app\Resources\InstagramResource;
use Modules\Instagram\app\Services\InstagramService;

class InstagramController extends Controller
{
    protected InstagramService $instagramService;
    public function __construct()
    {
        $this->instagramService = new InstagramService(new LaravelHttpClient());
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('instagram::index');
    }
    public function search(Request $request,$slug)
    {
        $finalResult = $this->instagramService->getProfile($slug);
        return new InstagramResource($finalResult);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('instagram::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('instagram::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('instagram::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
