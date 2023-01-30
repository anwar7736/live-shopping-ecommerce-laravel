<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class FlashSellController extends Controller
{
    public function index()
    {

        return view('flash_sell');
    }

    public function flashSellProduct()
    {
        $response = Http::get('https://advertbangladesh.com/testpos/api/flash_sell_product');
        $products = $response->json();
        $view = view('components.single_product', compact('products'))->render();
        
        return response()->json(['html'=> $view]);
    }
}
