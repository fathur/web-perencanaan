<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 30/09/18
 * Time: 06.05
 */

namespace App\Http\Controllers;


use App\Model\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with(['author','thumbnail'])->published()
            ->orderBy('post_date','desc')
            ->take(3)->get();

        return view('news.index', compact('news'));
    }

    public function show($slug)
    {
        $news = News::slug($slug)->first();
        return view('news.show', compact('news'));

    }
}
