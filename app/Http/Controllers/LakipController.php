<?php


namespace App\Http\Controllers;


use App\Model\Product;

class LakipController extends Controller
{
    public function index()
    {
        $posts  = Product::category('lakip')
            ->orderBy('post_date','desc')
            ->paginate(10);

        return view('product.index', compact('posts'))->with([
            'title' => 'LAKIP']);
    }
}
