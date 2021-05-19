<?php

namespace App\Http\Controllers;

use App\Models\board;
use App\Models\cable;
use App\Models\keycap;
use App\Models\User;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart.index');
    }
    public function addToCart(Request $request)
    {
        $product = board::where('id', $request->id)->first();

        if (!isset($_COOKIE['cart_id'])) setcookie('cart_id', uniqid());
        $cart_id = $_COOKIE['cart_id'];
        \Cart::session($cart_id);

        \Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => '1',
            'attributes' => [
                'img' => $product->name
            ]
        ]);
        return [view(cart.index), response()->json(\cart::getContent()), $cart_id];
    }
}
//['data' => $request->id, 'data' => $request->name]
