<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 24/09/18
 * Time: 05.22
 */

namespace App\Http\Controllers;


use App\Rest\Media;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function index()
    {
        $client = new Client(['base_uri' => env('API_URL')]);
        $response = $client->get('posts?page=1&per_page=3&context=embed');

        $responseContent = $response->getBody()->getContents();
        $responseJson = \GuzzleHttp\json_decode($responseContent);

        $news = $responseJson;

        $media = [];
        foreach ($news as $item) {
            foreach ($item->_links->{'wp:featuredmedia'} as $mediaItem) {
                $m = new Media();

                foreach ($m->getByUrl($mediaItem->href) as $id => $value) {
                    $media[$mediaItem->href] = $m->getByUrl($mediaItem->href)[$id];
                }
            }
        }

        return view('home.index', compact('news', 'media'));
    }
}
