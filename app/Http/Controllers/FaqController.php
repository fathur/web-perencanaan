<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 24/09/18
 * Time: 05.55
 */

namespace App\Http\Controllers;


use App\Rest\Faq;

class FaqController extends Controller
{

    public function index()
    {
        $faqs = (new Faq())->get();

//        dd($faqs[0]);
        return view('faq.index', compact('faqs'));
    }
}
