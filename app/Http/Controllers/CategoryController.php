<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index($categoryId = 0) {

        $products = Product::where("category_id", $categoryId);
        return view ("homepage", [
            "products" => $products->paginate(28),
            "categoryId" => $categoryId,
        ]);
    }
}
