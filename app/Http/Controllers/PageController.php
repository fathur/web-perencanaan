<?php


namespace App\Http\Controllers;


class PageController extends Controller
{
    public function privacyPolicy()
    {
        return view('page.privacy');
    }
}
