<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 24/09/18
 * Time: 21.02
 */

namespace App\Rest;


class Page extends RestClient
{
    public function get()
    {
        $response = $this->client->get('pages?per_page=10');
        $content = $response->getBody()->getContents();
        return \GuzzleHttp\json_decode($content);

    }

    public function getBySlug($slug)
    {
        $response = $this->client->get('pages?slug='.$slug);

        $content = $response->getBody()->getContents();
        $contentJson = \GuzzleHttp\json_decode($content);

        if (count($contentJson) == 0) {
            abort(404);
        }

        return $contentJson[0];
    }
}
