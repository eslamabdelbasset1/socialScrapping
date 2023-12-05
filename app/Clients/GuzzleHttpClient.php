<?php

namespace App\Clients;

use App\Contracts\HttpClientInterface;
use \GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\GuzzleException;

class GuzzleHttpClient implements HttpClientInterface
{
    /**
     * @var Guzzle $client
     */
    protected Guzzle $client;

    public function __construct()
    {
        $this->client = new Guzzle();
    }


    public function get($url, $data): string
    {
        $request = $this->client->get($url, ['query' => $data]);
        return $request->getBody();

    }

    public function post($url, $data): string
    {
        $request = $this->client->post($url,
            ['form_params' => $data]

        );
        return $request->getBody();
    }
}
