<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 25/09/18
 * Time: 05.09
 */

namespace App\Rest;


class Product extends RestClient
{
    public function get()
    {
        $response = $this->client->get('products?per_page=10');
        $content = $response->getBody()->getContents();
        return \GuzzleHttp\json_decode($content);

    }

    public function getBySlug($slug)
    {
        $response = $this->client->get('products?slug=' . $slug);

        $content = $response->getBody()->getContents();
        $contentJson = \GuzzleHttp\json_decode($content);

        if (count($contentJson) == 0) {
            abort(404);
        }

        return $contentJson[0];
    }

    public function getByCategory($slug)
    {
//        $respTaxonomy = $this->client->get('taxonomies/category_products');

        $respCategory = $this->client->get('category_products?slug=' . $slug);
        $contentCategory = $respCategory->getBody()->getContents();
        $jsonContentCategory = \GuzzleHttp\json_decode($contentCategory);

        if (count($jsonContentCategory) > 0) {
            $category = $jsonContentCategory[0];
            $response = $this->client->get('products?category_products=' . $category->id);
            $content = $response->getBody()->getContents();
            return \GuzzleHttp\json_decode($content);
        }

        return [];

    }
}
