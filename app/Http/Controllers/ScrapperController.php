<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ScrapperController extends Controller
{
    public function index(Request $request, $username)
    {

        $content = Http::get("https://www.instagram.com/{$username}")->body();

        $content2 = preg_match('/meta content="([^"]+)"/', $content, $results);

         dd($results[1] , explode(', ',$results[1]));


    }
}
