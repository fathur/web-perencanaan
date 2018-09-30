<?php

namespace App\Http\Controllers;


use App\Model\Agenda;
use App\Model\News;
use Carbon\Carbon;
use Corcel\Model\Post;

class HomeController extends Controller
{

    public function index()
    {


        $news = News::with(['author','thumbnail'])->published()
            ->orderBy('post_date','desc')
            ->take(3)->get();


        $agendas = Agenda::published()
            ->take(3)->get();

        return view('home.index', compact('news','agendas'));
    }
}
