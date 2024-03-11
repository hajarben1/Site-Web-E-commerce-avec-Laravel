<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AddToCartMiddleware;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use App\Models\User;

class CartController extends Controller
{
    public function addToCart(Request $request, $productId)
{
    try {
        $product = Product::findOrFail($productId);
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Product not found.');
    }

    return redirect()->route('cart.show')->with('success', 'The product has been added to the cart.');
}

    public function showCart()
    {
        $user = auth()->user();
        $cart = $user->cart ?? Cart::create(['user_id' => $user->id]);
        $cartProducts = $cart->products;
    
        if ($cartProducts->isNotEmpty()) {
            return view('cart.show', compact('cartProducts'));
        } else {
            return view('cart.empty');
        }
    }
    public function removeFromCart($productId)
{
    $user = auth()->user();
    $cart = $user->cart;

    if ($cart) {
        $cart->products()->detach($productId);
        return redirect()->route('cart.show')->with('success', 'Product removed from cart.');
    }

    return redirect()->route('cart.show')->with('error', 'Cart not found.');
}


}

