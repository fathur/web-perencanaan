<?php


namespace App\Http\Controllers;


use App\Model\Product;

class RegulationController extends Controller
{
    public function index()
    {
        $posts = Product::category('peraturan')
            ->orderBy('post_date', 'desc')
            ->paginate(10);

        return view('product.index', compact('posts'))->with([
            'title' => 'Peraturan']);
    }
}
