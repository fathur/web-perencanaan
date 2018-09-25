<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 24/09/18
 * Time: 05.55
 */

namespace App\Http\Controllers;


class ContactController extends Controller
{

    public function index()
    {
        return view('contact.index');
    }
}
