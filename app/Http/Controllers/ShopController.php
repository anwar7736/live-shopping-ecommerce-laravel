<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $max = Http::get('https://advertbangladesh.com/testpos/api/max_product_price');
        $colors = Http::get('https://advertbangladesh.com/testpos/api/product_sizes_and_colors');
        $max_price = $max->json();
        $sizes_colors = $colors->json();
        return view('shop', compact('max_price', 'sizes_colors'));
    }
    public function shopProduct()
    {
        $response = Http::get('https://advertbangladesh.com/testpos/api/shop_product_list');
        $products = $response->json();

        $view = view('components.single_product', compact('products'))->render();

        return response()->json(['html'=> $view]);
    }
}
