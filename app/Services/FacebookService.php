<?php

namespace App\Services;

use App\Contracts\HttpClientInterface;

class FacebookService
{
    /**
     * @var HttpClientInterface $httpClient
     */
    public HttpClientInterface $httpClient;
    public function __construct(HttpClientInterface $client)
    {
        $this->httpClient = $client;
    }


    public function getProfile($username)
    {

        $this->httpClient->get('');

    }






}
