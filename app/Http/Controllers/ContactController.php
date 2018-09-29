<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 30/09/18
 * Time: 06.06
 */

namespace App\Http\Controllers;


class ContactController extends Controller
{
    public function show()
    {
        return view('contact.show');

    }
}
