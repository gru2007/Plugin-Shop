<?php

namespace Azuriom\Plugin\Shop\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Azuriom\Models\User;

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

        $name = $request->session()->get('shop_guest_name');

        if ($name === null) {
            return redirect()->route('shop.guest');
        }

        Auth::setUser(new User(['name' => $name]));

        return $next($request);
    }
}
