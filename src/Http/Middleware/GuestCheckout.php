<?php

namespace Azuriom\Plugin\Shop\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestCheckout
{
    /**
     * Пропускаем проверку авторизации, если включена гостевая покупка.
     */
    public function handle(Request $request, Closure $next)
    {
        if (!setting('shop.guest_checkout', false) && !Auth::check()) {
            return redirect()->guest(route('login'));
        }

        return $next($request);
    }
}
