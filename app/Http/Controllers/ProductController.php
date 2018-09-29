<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 30/09/18
 * Time: 06.05
 */

namespace App\Http\Controllers;


class ProductController extends Controller
{

    public function laws()
    {
        return view('product.index');
    }

    public function showLaw($slug)
    {
        return view('product.show');

    }

    public function handBooks()
    {
        return view('product.index');

    }

    public function showHandBook($slug)
    {
        return view('product.show');

    }

    public function guidelines()
    {
        return view('product.index');

    }

    public function showGuideline($slug)
    {
        return view('product.show');

    }

    public function profiles()
    {
        return view('product.index');

    }

    public function showProfile($slug)
    {
        return view('product.show');

    }

    public function activities()
    {
        return view('product.index');

    }

    public function showActivity($slug)
    {
        return view('product.show');

    }

    public function bulletins()
    {
        return view('product.index');

    }

    public function showBulletin($slug)
    {
        return view('product.show');

    }
}
