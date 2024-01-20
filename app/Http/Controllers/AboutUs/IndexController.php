<?php

namespace App\Http\Controllers\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('about-us.index');
    }
}
