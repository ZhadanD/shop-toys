<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Services\CartService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected CartService $service;

    public function __construct(CartService $service)
    {
        $this->service = $service;
    }
}
