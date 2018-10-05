<?php


namespace App\Http\Controllers;


use Corcel\Model\Page;

class ApplicationController extends Controller
{
    public function index()
    {
        $post = Page::slug('aplikasi')->first();
        return view('application.index', compact('post'));
    }
}
