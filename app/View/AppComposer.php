<?php

namespace App\View;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;

class AppComposer
{

    public function compose(View $view, $categoryId = 0)
    {
        $categories = Category::all();
        $banners = Banner::where("is_active",1)->get();
        $blogs = Blog::all();

        $view->with([
            "categories" => $categories,
            "banners" => $banners,
            "blogs"=> $blogs,
            "categoryId" => $categoryId,
        ]);
    }
}
