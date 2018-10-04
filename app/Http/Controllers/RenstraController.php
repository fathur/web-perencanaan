<?php


namespace App\Http\Controllers;


use App\Model\Product;
use App\Model\Renstra;

class RenstraController extends Controller
{
    public function index()
    {
        $posts  = Product::category('renstra')
            ->orderBy('post_date','desc')
            ->paginate(10);

        return view('product.index', compact('posts'))->with([
            'title' => 'Renstra']);
    }
}
