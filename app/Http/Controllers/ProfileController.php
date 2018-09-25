<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 24/09/18
 * Time: 05.54
 */

namespace App\Http\Controllers;


use App\Rest\Media;
use App\Rest\Page;

class ProfileController extends Controller
{
    protected $page;

    public function __construct()
    {
        $this->page = new Page();
    }

    public function organization()
    {
        $page = $this->page->getBySlug('organisasi');
        $media = new Media();
        $media = $page->featured_media == 0 ? null : $media->find($page->featured_media);

        return view('profile.show', compact('page', 'media'));
    }

    public function task()
    {
        $page = $this->page->getBySlug('tupoksi');
        $media = new Media();

        if ($page->featured_media != 0) {
            $media = $media->find($page->featured_media);
        } else {
            $media = null;
        }

        return view('profile.show', compact('page', 'media'));
    }

    public function history()
    {
        $page = $this->page->getBySlug('sejarah');

        $media = new Media();

        if ($page->featured_media != 0) {
            $media = $media->find($page->featured_media);
        } else {
            $media = null;
        }

        return view('profile.show', compact('page', 'media'));
    }
}
