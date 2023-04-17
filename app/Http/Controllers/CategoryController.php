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

        $banners = Banner::where("is_active",1)->get();
        $blogs = Blog::all();

        if ($categoryId) {
            $products = Product::where("category_id", $categoryId);
        } else {
            $products = Product::latest();
        }

        return view ("homepage", [
            "products" => $products->paginate(7),
            "categories" => $categories,
            "banners" => $banners,
            "blogs"=> $blogs,
            "categoryId" => $categoryId
        ]);
    }
}
