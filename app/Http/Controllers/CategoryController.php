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
        $categories = Category::get();
        $products = Product::latest();
        $banners = Banner::where("is_active",1)->get();
        $blogs = Blog::all();

        if ($categoryId) {
            $products -> where("category_id", $categoryId);
        }

        return view ("homepage", [
            "products" => $products->get(),
            "categories" => $categories,
            "banners" => $banners,
            "blogs"=> $blogs,
            "categoryId" => $categoryId
        ]);
    }
}
