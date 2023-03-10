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
        return view('shop.index', compact('max_price', 'sizes_colors'));
    }
    public function shopProduct()
    {
        $products = "";
        $category = request()->categories;
        $color = request()->colors;
        $size = request()->sizes;        
        $min = request()->from;        
        $max = request()->to;        
        if(!empty($category) || !empty($color) || !empty($size) || !empty($min && $max))
        {
            $response = Http::get('https://advertbangladesh.com/testpos/api/product_filter?category='.$category.'&color='.$color.'&size='.$size.'&min='.$min.'&max='.$max);
            $products = $response->json();
        }

        else{
            $response = Http::get('https://advertbangladesh.com/testpos/api/shop_product_list');
            $products = $response->json();
        }


        $view = view('components.single_product', compact('products'))->render();

        return response()->json(['html'=> $view]);
    }

    public function findStore()
    {
        $product = request()->product;
        $response = Http::get('https://advertbangladesh.com/testpos/api/location_wise_stock/'.$product);
        $data = $response->json();
        $product = $data['product'];
        $locations = $data['locations'];
        $view = view('components.find_modal', compact('product', 'locations'))->render();

        return response()->json(['success'=>true, 'html'=> $view, 'locations'=>$locations]);
    }
}
