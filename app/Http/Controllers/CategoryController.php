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

        if ($categoryId) {
            $products = Product::where("category_id", $categoryId);
        } else {
            $products = Product::latest();
        }

        return view ("homepage", [
            "products" => $products->paginate(7),
            "categoryId" => $categoryId
        ]);
    }
}
