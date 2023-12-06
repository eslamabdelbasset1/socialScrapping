<?php

namespace App\Contracts;
interface HttpClientInterface
{
    public function get($url, $data);

    public function post($url, $data);


}
