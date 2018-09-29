<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 29/09/18
 * Time: 20.03
 */

namespace App\Http\Controllers;


class ProfileController extends Controller
{

    public function organization()
    {
        return view('profile.show');
    }

    public function tasks()
    {
        return view('profile.show');
    }
}
