<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 24/09/18
 * Time: 07.22
 */

namespace App\Rest;


class News extends RestClient
{
    public function get()
    {
        $response = $this->client->get('posts?per_page=9');
        $content = $response->getBody()->getContents();
        return \GuzzleHttp\json_decode($content);

    }

    public function getBySlug($slug)
    {
        $response = $this->client->get('posts?slug='.$slug);
        $content = $response->getBody()->getContents();
        return \GuzzleHttp\json_decode($content)[0];
    }
}
