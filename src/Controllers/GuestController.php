<?php

namespace Azuriom\Plugin\Shop\Controllers;

use Azuriom\Http\Controllers\Controller;
use Azuriom\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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

        $user = User::create([
            'name' => $data['name'],
            'password' => bcrypt(Str::random(10)),
        ]);

        $request->session()->put('shop_guest_id', $user->id);
        Auth::login($user);

        return redirect()->intended(route('shop.home'));
    }
}
