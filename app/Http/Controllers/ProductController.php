<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 24/09/18
 * Time: 05.54
 */

namespace App\Http\Controllers;


use App\Rest\Media;
use App\Rest\Product;

class ProductController extends Controller
{
    protected $product;
    protected $media;

    public function __construct()
    {
        $this->product = new Product();
        $this->media = new Media();
    }

    public function law()
    {
        $products = $this->product->getByCategory('produk-hukum');
        $title = 'Produk Hukum';
        return view('product.table', compact('products', 'title'));
    }

    public function handbook()
    {
        $products = $this->product->getByCategory('buku-pedoman');
        $title = 'Buku Pedoman';
        return view('product.table', compact('products', 'title'));
    }

    public function guideline()
    {
        $products = $this->product->getByCategory('buku-panduan');
        $title = 'Buku Panduan';
        return view('product.table', compact('products', 'title'));
    }

    public function profile()
    {
        $products = $this->product->getByCategory('profil');
        $title = 'Profil';
        return view('product.table', compact('products', 'title'));
    }

    public function activity()
    {
        $products = $this->product->getByCategory('buku-kegiatan');
        $title = 'Buku Kegiatan';
        return view('product.table', compact('products', 'title'));
    }

    public function report()
    {
        $products = $this->product->getByCategory('laporan-kinerja');
        $title = 'Laporan Kinerja';
        return view('product.table', compact('products', 'title'));
    }
}
