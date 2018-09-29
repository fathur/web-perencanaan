<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 30/09/18
 * Time: 06.05
 */

namespace App\Http\Controllers;


class NewsController extends Controller
{
    public function index()
    {
        return view('news.index');
    }

    public function show($slug)
    {
        return view('news.show');

    }
}
