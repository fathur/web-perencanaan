<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 30/09/18
 * Time: 06.05
 */

namespace App\Http\Controllers;


use App\Model\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $taxonomyName = 'category_products';

    public function laws(Request $request)
    {
        $products = $this->getProductByCategory('produk-hukum', $request);

        return view('product.index', compact('products'))->with([
            'title' => 'Produk Hukum'
        ]);
    }

    public function showLaw($slug)
    {
        return view('product.show');
    }

    public function handBooks(Request $request)
    {
        $products = $this->getProductByCategory('buku-pedoman', $request);

        return view('product.index', compact('products'))->with([
            'title' => 'Buku Pedoman'
        ]);
    }

    public function showHandBook($slug)
    {
        return view('product.show');

    }

    public function guidelines(Request $request)
    {
        $products = $this->getProductByCategory('buku-panduan', $request);

        return view('product.index', compact('products'))->with([
            'title' => 'Buku Panduan'
        ]);
    }

    public function showGuideline($slug)
    {
        return view('product.show');
    }

    public function profiles(Request $request)
    {
        $products = $this->getProductByCategory('profil', $request);

        return view('product.index', compact('products'))->with([
            'title' => 'Profil'
        ]);
    }

    public function showProfile($slug)
    {
        return view('product.show');
    }

    public function activities(Request $request)
    {
        $products = $this->getProductByCategory('buku-kegiatan', $request);

        return view('product.index', compact('products'))->with([
            'title' => 'Buku Kegiatan'
        ]);
    }

    public function showActivity($slug)
    {
        return view('product.show');

    }

    public function bulletins(Request $request)
    {
        $products = $this->getProductByCategory('buletin', $request);

        return view('product.index', compact('products'))->with([
            'title' => 'Buletin'
        ]);
    }

    public function showBulletin($slug)
    {
        return view('product.show');
    }

    public function reports(Request $request)
    {
        $products = $this->getProductByCategory('laporan-kinerja', $request);

        return view('product.index', compact('products'))->with([
            'title' => 'Laporan Kinerja'
        ]);
    }

    public function showReport($slug)
    {

    }

    /**
     * @param string $category
     * @param $request
     * @return mixed
     */
    private function getProductByCategory($category, Request $request)
    {
        $products = Product::published()->taxonomy($this->taxonomyName, $category)
            ->orderBy('post_date', 'desc')
            ->take(10)->get();

        return $products;
    }
}
