<?php

namespace App\Clients;

use App\Contracts\HttpClientInterface;
use Illuminate\Support\Facades\Http;

class LaravelHttpClient implements HttpClientInterface
{


    public function get($url, $data): string
    {
        return Http::get($url, $data)->body();
    }

    public function post($url, $data): string
    {
        return Http::post($url, $data)->body();

    }
}
