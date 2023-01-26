<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashSellController extends Controller
{
    public function __invoke()
    {
        return view('flash_sell');
    }
}
