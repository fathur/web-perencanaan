<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 29/09/18
 * Time: 10.59
 */

namespace App\Http\Controllers;


class HomeController extends Controller
{

    public function index()
    {
        return view('home.index');
    }
}
