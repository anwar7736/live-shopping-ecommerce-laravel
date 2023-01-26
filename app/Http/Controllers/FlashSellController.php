<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class FlashSellController extends Controller
{
    public function __invoke()
    {
        $response = Http::get('https://advertbangladesh.com/testpos/api/flash_sell_product');
        $sales = $response->json();
        return view('flash_sell', compact('sales'));
    }
}
