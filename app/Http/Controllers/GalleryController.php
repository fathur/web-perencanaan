<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 30/09/18
 * Time: 06.05
 */

namespace App\Http\Controllers;


class GalleryController extends Controller
{
    public function photos()
    {
        return view('gallery.photo.index');
    }

    public function showPhoto($slug)
    {
        return view('gallery.photo.show');

    }

    public function videos()
    {
        return view('gallery.video.index');

    }

    public function showVideo($slug)
    {
        return view('gallery.video.show');

    }

    public function posters()
    {
        return view('gallery.photo.index');

    }

    public function showPoster($slug)
    {
        return view('gallery.photo.show');

    }
}
