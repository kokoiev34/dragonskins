<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use http\Env\Request;

class ProductController
{
    public function product(Product $product)
    {
        return view('product', [
            'product' => $product,
        ]);
    }

    public function products()
    {
        return view("products");
    }
}
