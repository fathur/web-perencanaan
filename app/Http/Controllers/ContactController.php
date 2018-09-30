<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 30/09/18
 * Time: 06.06
 */

namespace App\Http\Controllers;


use Corcel\Model\Page;

class ContactController extends Controller
{
    public function show()
    {
        $contact = Page::slug('kontak')->first();
        return view('contact.show', compact('contact'));

    }
}
