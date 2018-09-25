<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 24/09/18
 * Time: 08.01
 */

namespace App\Rest;


use GuzzleHttp\Client;

abstract class RestClient
{
    protected $apiUrl;
    protected $client;

    public function __construct()
    {
        $this->apiUrl = env('API_URL');
        $this->client = new Client(['base_uri' => env('API_URL')]);
    }
}
