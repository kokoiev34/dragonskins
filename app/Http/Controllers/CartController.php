<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class CartController extends Controller
{
    private CartService $cartService;


    public function carts()
    {
        $categories = Category::all();
        return view("cart", [
            "categories"=> $categories
        ]);
    }

    public function __construct(CartService $cartService)
    {
//        parent::__construct();
        $this->cartService = $cartService;
    }

    public function add(Product $product)
    {
        $this->cartService->addProduct($product);

        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }

    public function getCart()
    {
        $cart = session()->get('cart');

        return view('cart', [
            'products' => $cart ? Product::query()->whereIn('id', array_keys($cart))->get() : null,
            'cart' => $cart,
            'totalSum' => $this->cartService->getTotalCartSum()
        ]);
    }

    public function remove(Product $product)
    {
        $this->cartService->removeProduct($product);

        return redirect()->back();
    }
}
