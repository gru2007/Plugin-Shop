<?php

return [
    'title' => 'Магазин',
    'welcome' => 'Добро пожаловать в магазин!',

    'buy' => 'Купить',

    'free' => 'Free',

    'periods' => [
        'hours' => 'hours',
        'days' => 'days',
        'weeks' => 'weeks',
        'months' => 'months',
        'years' => 'years',
    ],

    'fields' => [
        'balance' => 'Баланс',
        'category' => 'Категория',
        'code' => 'Код',
        'commands' => 'Команды',
        'currency' => 'Валюта',
        'discount' => 'Скидка',
        'expire_date' => 'Дата окончания',
        'gateways' => 'Платёжные системы',
        'global_limit' => 'Глобальный лимит покупок',
        'original_balance' => 'Начальный баланс',
        'package' => 'Товар',
        'packages' => 'Товары',
        'payment_id' => 'ID платежа',
        'payments' => 'Платежи',
        'price' => 'Цена',
        'quantity' => 'Количество',
        'renewal_date' => 'Дата продления',
        'required' => 'Обязательно',
        'required_packages' => 'Необходимые товары',
        'required_roles' => 'Необходимая роль',
        'role' => 'Роль после покупки',
        'start_date' => 'Start date',
        'subscription' => 'Subscription',
        'subscription_id' => 'Subscription ID',
        'total' => 'Total',
        'user_id' => 'User ID',
        'user_limit' => 'Лимит покупок пользователя',
        'nickname' => 'Никнейм',
    ],

    'actions' => [
        'subscribe' => 'Subscribe',
        'manage' => 'Manage subscription',
        'move' => 'Move',
    ],

    'goal' => [
        'title' => 'Goal of the month',
        'progress' => ':count% completed',
    ],

    'recent' => [
        'title' => 'Recent Payments',
        'empty' => 'No recent payments',
    ],

    'top' => [
        'title' => 'Top customer',
    ],

    'cart' => [
        'title' => 'Корзина',
        'success' => 'Покупка успешно завершена.',
        'guest' => 'Необходимо войти на сайт для совершения покупки.',
        'ask_nickname' => 'Введите ник для покупки без регистрации.',
        'empty' => 'Ваша корзина пуста.',
        'checkout' => 'Перейти к оплате',
        'clear' => 'Очистить корзину',
        'pay' => 'Оплатить',
        'back' => 'Назад в магазин',
        'total' => 'Итого: :total',
        'payable_total' => 'К оплате: :total',
        'credit' => 'Пополнить',

        'confirm' => [
            'title' => 'Pay?',
            'price' => 'Are you sure you want to buy this cart for :price.',
        ],

        'errors' => [
            'money' => 'You don\'t have enough money to make this purchase.',
            'execute' => 'An unexpected error occurred during payment, your purchase got refund.',
        ],
    ],

    'coupons' => [
        'title' => 'Coupons',
        'add' => 'Add a coupon',
        'error' => 'This coupon does not exist, has expired or can no longer be used.',
        'cumulate' => 'You cannot use this coupon with an other coupon.',
    ],

    'payment' => [
        'title' => 'Payment',
        'manual' => 'Manual payment',

        'empty' => 'No payment methods currently available.',

        'info' => 'Purchase #:id on :website: :items',
        'subscription' => ':package - Subscription (User #:user)',
        'error' => 'The payment could not be completed, please try again later.',
        'giftcards' => 'Giftcards',

        'success' => 'Payment completed, you\'ll receive your purchase in-game in less than a minute.',
        'pending' => 'Payment pending, you\'ll receive your purchase in-game once the payment is confirmed.',

        'webhook' => 'New payment on the shop',
        'webhook_info' => 'Total: :total, ID: :id (:gateway)',
        'webhook_chargeback' => 'Payment chargeback on the shop',
        'webhook_refund' => 'Payment refund on the shop',
    ],

    'categories' => [
        'empty' => 'This category is empty.',
    ],

    'packages' => [
        'limit' => 'You have purchased the maximum possible for this packages.',
        'requirements' => 'You don\'t have the requirements to purchase this package.',
        'cumulate' => 'You cannot buy this package with an other from the same category in the same purchase.',
        'file' => 'Click here to download the file :file',
    ],

    'offers' => [
        'gateway' => 'Payment type',
        'amount' => 'Amount',

        'empty' => 'No offers are currently available.',
    ],

    'profile' => [
        'payments' => 'Your payments',
        'subscriptions' => 'Your subscriptions',
        'money' => 'Money: :balance',
    ],

    'giftcards' => [
        'title' => 'Giftcards',
        'error' => 'This gift card does not exist, has expired or can no longer be used.',
        'add' => 'Add a gift card',
        'notification' => 'You received a giftcard, the code is :code (:balance).',
        'pending' => 'A payment has already started for this giftcard. Complete the payment or wait a few minutes.',
    ],

    'nickname_login' => [
        'title' => 'Покупка без регистрации',
        'button' => 'Перейти в магазин',
    ],
];
