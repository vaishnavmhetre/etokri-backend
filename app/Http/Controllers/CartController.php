<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function test(){
        $cart = Cart::all()[0];
        $product = Product::all()[0];

        $product->cart()->associate($cart);
    }
}
