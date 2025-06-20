<?php

namespace Azuriom\Plugin\Shop\Controllers;

use Azuriom\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Azuriom\Models\User;

/**
 * Контроллер ввода ника для гостевых покупок.
 */
class GuestController extends Controller
{
    public function create()
    {
        abort_unless(shop_allow_guests(), 404);

        return view('shop::guest.form');
    }

    public function store(Request $request)
    {
        abort_unless(shop_allow_guests(), 404);

        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        // Сохраняем ник в сессии и считаем пользователя гостем
        $request->session()->put('shop_guest_name', $data['name']);

        // Помещаем временного пользователя в Auth только на текущий запрос
        Auth::setUser(new User(['name' => $data['name']]));

        return redirect()->intended(route('shop.home'));
    }
}
