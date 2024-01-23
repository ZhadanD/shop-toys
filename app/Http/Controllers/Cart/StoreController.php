<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cart\StoreRequest;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data['productId']);

        return redirect()->route('products.index');
    }
}
