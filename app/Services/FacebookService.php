<?php

namespace App\Services;

use App\Contracts\HttpClientInterface;
use Ramsey\Uuid\Type\Integer;

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


    public function getProfile($username): array
    {
        $content = $this->httpClient->get("https://www.facebook.com/{$username} ",[]);
        preg_match('/content="([^"]+)"/', $content, $results);
        return (explode(', ', $results[1]));
    }






}
