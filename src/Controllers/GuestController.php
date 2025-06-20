<?php

namespace Azuriom\Plugin\Shop\Controllers;

use Azuriom\Http\Controllers\Controller;
use Azuriom\Models\Role;
use Azuriom\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * Контроллер для покупки без регистрации.
 */
class GuestController extends Controller
{
    /**
     * Сохранение ника и создание гостевого пользователя.
     */
    public function login(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $name = $data['name'];
        $email = 'guest+'.Str::slug($name).'@example.local';

        $user = User::firstOrCreate(
            ['email' => $email],
            [
                'name' => $name,
                'password' => Hash::make(Str::random(12)),
                'role_id' => Role::defaultRoleId(),
                'game_id' => game()->getUserUniqueId($name),
                'email_verified_at' => now(),
            ]
        );

        $request->session()->put('shop.guest_user_id', $user->id);

        return redirect()->back();
    }

    /**
     * Очистка гостевого ника из сессии.
     */
    public function logout(Request $request)
    {
        $request->session()->forget('shop.guest_user_id');

        return redirect()->back();
    }
}
