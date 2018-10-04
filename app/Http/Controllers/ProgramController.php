<?php


namespace App\Http\Controllers;


use App\Model\Program;

class ProgramController extends Controller
{

    public function index()
    {
        $posts = Program::with(['author','thumbnail'])->published()
            ->orderBy('post_date','desc')
            ->paginate(10);

        return view('post.index', compact('posts'))->with([
            'title' => 'Program',
            'base_more_link' => 'program-kegiatan/program/'
        ]);
    }

    public function show($slug)
    {
        $post = Program::slug($slug)->first();
        return view('post.show', compact('post'));
    }
}
