<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 30/09/18
 * Time: 06.06
 */

namespace App\Http\Controllers;


use App\Model\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::published()->get();

        return view('faq.index', compact('faqs'));
    }
}
