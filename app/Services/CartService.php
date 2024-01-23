<?php

namespace App\Services;

use App\Models\Cart;
use App\Models\User;

class CartService
{
    public function index()
    {
        $user = User::findOrFail(auth()->id(), ['id', 'name']);

        return $user->cart;
    }

    public function store(int $product_id): void
    {
        Cart::create([
            'user_id' => auth()->id(),
            'product_id' => $product_id
        ]);
    }
}
