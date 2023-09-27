<?php

namespace App\Http\Controllers;

use App\Models\Product;

class CartController extends Controller
{
    private CartService $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function carts()
    {
        $cart = session()->get('cart');

        return view("cart", [
            'cart' => $cart,
            'products' => $cart ? Product::query()->whereIn('id', array_keys($cart))->get() : [],
        ]);
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
            'cartProducts' => $cart ? Product::query()->whereIn('id', array_keys($cart))->get() : null,
            'cart' => $cart,
            'totalSum' => $this->cartService->getTotalCartSum()
        ]);
    }

    public function remove(Product $product)
    {
        $this->cartService->removeProduct($product);

        return redirect()->back();
    }

    public function clear()
    {
        session()->forget('cart');

        return redirect()->route("homepage");
    }
}
