<?php


namespace App\Model;


use Corcel\Model\Post;

class Product extends Post
{
    protected $postType = 'product';

    /**
     * @param $query
     * @param string $category
     * @return mixed
     */
    public function scopeCategory($query, $category)
    {
       return $query->published()->taxonomy('category_products', $category);
//            ->orderBy('post_date', 'desc')
//            ->paginate(10);
    }
}
