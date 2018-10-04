<?php

namespace App\Http\Controllers;


use App\Model\Agenda;
use App\Model\News;
use App\Model\Slider;
use Carbon\Carbon;
use Corcel\Model\Post;

class HomeController extends Controller
{

    public function index()
    {


        $news = News::with(['author', 'thumbnail'])->published()
            ->orderBy('post_date', 'desc')
            ->take(3)->get();


        $agendas = Agenda::published()
            ->take(3)->get();

        $sliders = Slider::published()->get();

//        dd($sliders[0]->toArray());

        return view('home.index', compact('news', 'agendas', 'sliders'));
    }
}
