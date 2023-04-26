<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Stripe\StripeClient;

class OrderController extends Controller
{
    public function createOrder(Request $request)
    {
        $cart = session()->get("cart");

        $productsItems = [];

        foreach ($cart as $key => $item) {
            $productsItems[$key]['quantity'] = $item['quantity'];
        }


        $order = Order::query()->create([
            'user_id' => Auth::user()?->id,
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'address' => $request->input('address')
        ]);

        $order->products()->sync($productsItems);
//        session()->flash('success', 'Successfully created');
//        return redirect()->back();

    }

    public function createPayment(Order $order)
    {
//        $successPayment = $order->payments()->where("status", "complete")->get();
//
////        dd($successPayment);
//
//        if ($successPayment){
////            return redirect()->route("homepage");
//            dd($successPayment);
//        }

        $items = [];
        $products = $order->products;
        foreach ($products as $product) {
            $items[] = [
                "price_data" => [
                    "currency" => $product->currency,
                    "unit_amount" => $product->price * 100,
                    "product_data" => [
                        "name" => $product->weapons,
                        "description" => $product->rarity,
                    ]
                ],
                'quantity' => 2,
            ];
        }
        $hash = Str::random(40);
        $stripe = new StripeClient(config("services.stripe.secret_key"));
        $result = $stripe->checkout->sessions->create([
            'success_url' => route("payment.callback", ["hash" => $hash]),
            'line_items' => $items,
            'mode' => 'payment',
        ]);

        Payment::query()->create([
          "status" => $result->status,
          "order_id" => $order->id,
          "session_id" => $result->id,
          "hash" => $hash,
        ]);

        return redirect( $result->url);
    }

    public function callback(string $hash)
    {
        $payment = Payment::query()->where("hash", $hash)->first();
        $stripe = new StripeClient(config("services.stripe.secret_key"));
        $result = $stripe->checkout->sessions->retrieve(
            $payment->session_id
        );
        $status = $result->status;
        $payment->status = $status;
        $payment->save();

        return redirect()->route("homepage");
    }
}
