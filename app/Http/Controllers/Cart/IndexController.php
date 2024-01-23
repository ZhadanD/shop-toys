<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $products = $this->service->index();

        return view('cart.index', compact('products'));
    }
}
