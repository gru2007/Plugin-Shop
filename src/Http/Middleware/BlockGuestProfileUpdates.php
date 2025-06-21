<?php

namespace Azuriom\Plugin\Shop\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BlockGuestProfileUpdates
{
    /**
     * Запрещаем гостевым аккаунтам изменять личные данные.
     */
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();
        if ($user && preg_match('/^guest-.*@example\.com$/', $user->email ?? '')) {
            // Запрещаем любые POST/PUT/PATCH/DELETE запросы к профилю
            if ($request->routeIs('profile.*') && ! $request->isMethod('get')) {
                return abort(403);
            }
        }

        return $next($request);
    }
}

