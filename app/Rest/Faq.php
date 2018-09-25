<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 25/09/18
 * Time: 07.09
 */

namespace App\Rest;


class Faq extends RestClient
{
    public function get()
    {
        $response = $this->client->get('faqs');
        $content = $response->getBody()->getContents();
        return \GuzzleHttp\json_decode($content);
    }
}
