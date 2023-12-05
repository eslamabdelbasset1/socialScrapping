<?php

namespace App\Http\Controllers;

use App\Clients\GuzzleHttpClient;
use App\Clients\LaravelHttpClient;
use App\Services\FacebookService;
use App\Services\InstagramService;
use App\Services\TiktokService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ScrapperController extends Controller
{
    protected InstagramService $instagramService;

    public function __construct()
    {

        $this->instagramService = new InstagramService(new LaravelHttpClient());

    }

    public function index()
    {
        return view('welcome');
    }

    public function search(Request $request)
    {
        //Concrete Class
        //Dependency Injection DI
        //Service Pattern
        //Repositories Pattern

        $finalResult = $this->instagramService->getProfile($request->search);
        return view('welcome', compact('finalResult'));
    }
}
