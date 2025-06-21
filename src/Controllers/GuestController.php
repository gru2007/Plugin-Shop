<?php

namespace Azuriom\Plugin\Shop\Controllers;

use Azuriom\Http\Controllers\Controller;
use Azuriom\Models\Role;
use Azuriom\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GuestController extends Controller
{
    /**
     * Показать форму ввода никнейма для гостевой покупки.
     */
    public function showForm()
    {
        // Если пользователь уже вошёл, перенаправляем его в магазин
        if (auth()->check()) {
            return redirect()->route('shop.home');
        }

        return view('shop::nickname_login');
    }

    /**
     * Авторизовать гостя по нику и перейти в магазин.
     */
    public function login(Request $request)
    {
        // Уже авторизованных пользователей сразу отправляем в магазин
        if (auth()->check()) {
            return redirect()->route('shop.home');
        }

        $this->validate($request, [
            'nickname' => ['required', 'string', 'max:255'],
        ]);

        $user = $this->getGuestUser($request->input('nickname'));

        auth()->login($user);

        return redirect()->route('shop.home');
    }

    /**
     * Получить или создать гостевого пользователя.
     */
    private function getGuestUser(string $nickname): User
    {
        $slug = Str::slug(mb_strtolower($nickname));
        $email = 'guest-' . $slug . '@example.com';

        return User::firstOrCreate(
            ['email' => $email],
            [
                'name' => $nickname,
                'password' => Hash::make(Str::random(16)),
                'email_verified_at' => now(),
                'avatar' => 'https://www.gravatar.com/avatar/?d=mp',
                'role_id' => Role::defaultRoleId(),
            ]
        );
    }
}
