<?php

namespace App\View;

use App\Http\Controllers\CartService;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;

class AppComposer
{
    private CartService $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function compose(View $view, $categoryId = 0)
    {
        $cart = session()->get('cart');
        $categories = Category::all();
        $banners = Banner::where("is_active",1)->get();
        $blogs = Blog::all();

        $view->with([
            "categories" => $categories,
            "banners" => $banners,
            "blogs"=> $blogs,
            "categoryId" => $categoryId,
            'carts' => $cart ? Product::query()->whereIn('id', array_keys($cart))->get() : null,
            'cart' => $cart,
            'totalSum' => $this->cartService->getTotalCartSum()
        ]);
    }
}
