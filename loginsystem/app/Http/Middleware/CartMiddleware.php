<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CartMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            // Get the authenticated user
            $user = Auth::user();

            // Add the product to the user's cart
            $productId = $request->input('product_id');
            $user->cart()->attach($productId);
        }

        return $next($request);
    }
}

