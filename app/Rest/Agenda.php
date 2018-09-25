<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 24/09/18
 * Time: 07.22
 */

namespace App\Rest;


class Agenda extends RestClient
{
    public function get()
    {
        $response = $this->client->get('agendas?per_page=9');
        $content = $response->getBody()->getContents();
        return \GuzzleHttp\json_decode($content);

    }

    public function getBySlug($slug)
    {
        $response = $this->client->get('agendas?slug='.$slug);
        $content = $response->getBody()->getContents();
        return \GuzzleHttp\json_decode($content)[0];
    }
}
