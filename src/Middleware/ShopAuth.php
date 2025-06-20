<?php

namespace Azuriom\Plugin\Shop\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Middleware проверки авторизации для магазина.
 * Если пользователь не вошёл и разрешены гостевые покупки,
 * перенаправляет его на ввод ника.
 */
class ShopAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            return $next($request);
        }

        if (! shop_allow_guests()) {
            return redirect()->guest(route('login'));
        }

        $guestId = $request->session()->get('shop_guest_id');

        if ($guestId === null) {
            return redirect()->route('shop.guest');
        }

        Auth::loginUsingId($guestId);

        return $next($request);
    }
}
