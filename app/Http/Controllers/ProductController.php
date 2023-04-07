<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController
{
    public function product(Product $product)
    {
        return view('product', [
            'product' => $product
        ]);
    }
}
