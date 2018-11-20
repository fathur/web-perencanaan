<?php


namespace App\Http\Controllers;


use Corcel\Model\Post;

class PageController extends Controller
{
    public function sitemap()
    {
        // create sitemap
        $sitemap_posts = \App::make("sitemap");

        // add items
        $posts = Post::published()->get();

        foreach ($posts as $post)
        {
            $sitemap_posts->add(url($post->slug), $post->post_date, $post->ID, $post->freq);
        }

        // show sitemap
        return $sitemap_posts->render('xml');

    }

    public function privacyPolicy()
    {
        return view('page.privacy');
    }
}
