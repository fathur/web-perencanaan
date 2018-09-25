<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 24/09/18
 * Time: 08.34
 */

namespace App\Http\Controllers;


use App\Rest\Media;
use App\Rest\News;

class NewsController extends Controller
{
    protected $news;

    public function __construct()
    {
        $this->news = new News();
    }

    public function index()
    {
        $news = $this->news->get();

        $media = [];
        foreach ($news as $item) {
            if (isset($item->_links->{'wp:featuredmedia'})) {
                foreach ($item->_links->{'wp:featuredmedia'} as $mediaItem) {
                    $m = new Media();

                    foreach ($m->getByUrl($mediaItem->href) as $id => $value) {
                        $media[$mediaItem->href] = $m->getByUrl($mediaItem->href)[$id];
                    }
                }
            }
        }

        return view('news.index', compact('news', 'media'));
    }

    public function show($slug)
    {
        $news = $this->news->getBySlug($slug);
        return view('news.show', compact('news'));
    }
}
