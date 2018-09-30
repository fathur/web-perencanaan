<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 29/09/18
 * Time: 20.03
 */

namespace App\Http\Controllers;


use Corcel\Model\Page;

class ProfileController extends Controller
{

    public function organization()
    {
        $post = Page::slug('organisasi')->first();
        return view('profile.show', compact('post'));
    }

    public function tasks()
    {
        $post = Page::slug('tupoksi')->first();
        return view('profile.show', compact('post'));
    }
}
