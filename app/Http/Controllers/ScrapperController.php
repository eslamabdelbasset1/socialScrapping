<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ScrapperController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function search(Request $request)
    {
        $content = Http::get("https://www.instagram.com/{$request->search}")->body();
        $content2 = preg_match('/meta content="([^"]+)"/', $content, $results);
        $finalResult = (explode(', ',$results[1]));
        return view('welcome', compact('finalResult'));
//         dd($results[1] , explode(', ',$results[1]));


    }
}
