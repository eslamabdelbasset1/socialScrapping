<?php

namespace App\Services;

use App\Contracts\HttpClientInterface;

class InstagramService
{

    /**
     * @var HttpClientInterface $httpClient
     */
    protected HttpClientInterface $httpClient;

    public function __construct(HttpClientInterface $client)
    {
        $this->httpClient = $client;
    }


    public function getProfile($username): array
    {
        $content = $this->httpClient->get("https://www.instagram.com/{$username}",[]);
        preg_match('/meta content="([^"]+)"/', $content, $results);
        return (explode(', ', $results[1]));

    }
}
