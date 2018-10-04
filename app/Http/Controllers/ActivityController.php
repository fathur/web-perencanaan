<?php


namespace App\Http\Controllers;


use App\Model\Activity;

class ActivityController extends Controller
{

    public function index()
    {
        $posts = Activity::with(['author','thumbnail'])->published()
            ->orderBy('post_date','desc')
            ->paginate(10);

        return view('post.index', compact('posts'))->with([
            'title' => 'Kegiatan',
            'base_more_link' => 'program-kegiatan/kegiatan/'

        ]);
    }

    public function show($slug)
    {
        $post = Activity::slug($slug)->first();
        return view('post.show', compact('post'));
    }
}
