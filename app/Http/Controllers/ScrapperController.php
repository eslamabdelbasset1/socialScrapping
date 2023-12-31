<?php

namespace App\Http\Controllers;

use App\Clients\GuzzleHttpClient;
use App\Clients\LaravelHttpClient;
use App\Services\FacebookService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Modules\Instagram\app\Services\InstagramService;

class ScrapperController extends Controller
{
    //Concrete Class
    //Dependency Injection DI
    //Service Pattern
    //Repositories Pattern

    protected InstagramService $instagramService;
    protected FacebookService $facebookService;

    public function __construct()
    {

        $this->instagramService = new InstagramService(new LaravelHttpClient());

        $this->facebookService = new FacebookService(new GuzzleHttpClient());

    }

    public function index()
    {
        return view('welcome');
    }

    public function search(Request $request)
    {
        if ($request->input('mode') == 'instagram') {
            $finalResult = $this->instagramService->getProfile($request->mode, $request->search);
            return view('welcome', compact('finalResult'));
        }
        elseif ($request->input('mode') == 'facebook')
        {
            $finalResult = $this->facebookService->getProfile($request->mode, $request->search);
            return view('welcome', compact('finalResult'));
        }
        else
            return "";
    }
}
