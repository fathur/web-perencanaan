<?php


namespace App\Http\Controllers;


use App\Model\Product;

class GuidelineController extends Controller
{
    public function index()
    {
        $posts  = Product::category('pedoman')
            ->orderBy('post_date','desc')
            ->paginate(10);

        return view('product.index', compact('posts'))->with([
            'title' => 'Buku Pedoma/Panduan']);
    }
}
