<?php

namespace Azuriom\Plugin\Shop\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Middleware для разрешения доступа гостевым покупателям.
 */
class GuestUser
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() || $request->session()->has('shop.guest_user_id')) {
            return $next($request);
        }

        return redirect()->route('login');
    }
}
