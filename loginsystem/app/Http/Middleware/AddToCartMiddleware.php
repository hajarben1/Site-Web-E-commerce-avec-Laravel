<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class AddToCartMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
{
    if (Auth::check()) {
        $user = Auth::user();
        $productId = $request->route('productId');
        $cart = $user->cart()->firstOrCreate(['user_id' => $user->id]);

        if (!$cart->products->contains($productId)) {
            $cart->products()->attach($productId, ['quantity' => 1]);
        }
    }

    return $next($request);
}
}
