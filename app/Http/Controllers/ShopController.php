<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __invoke()
    {
        $response = Http::get('https://advertbangladesh.com/testpos/api/shop_product_list');
        $products = $response->json();
        return view('shop', compact('products'));
    }
}
