<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Http::get('https://advertbangladesh.com/testpos/api/home_slider_image');
        $deliveries = Http::get('https://advertbangladesh.com/testpos/api/get_delivery_section');
        $winter = Http::get('https://advertbangladesh.com/testpos/api/category_image/WINTER');
        $best_cat = Http::get('https://advertbangladesh.com/testpos/api/category_image/BEST');
        $export = Http::get('https://advertbangladesh.com/testpos/api/category_image/EXPORT');
        
        $home_sliders = $sliders->json();
        $delivery_sections = $deliveries->json();
        $winter_category = $winter->json();
        $best_category = $best_cat->json();
        $export_category = $export->json();

        \Cache::put('delivery_sections', $delivery_sections);
        $response = Http::get('https://advertbangladesh.com/testpos/api/category_list');
        $categories = $response->json();
        \Cache::put('categories', $categories['categories']);
        return view('home.index', compact(
            'home_sliders', 
            'winter_category',
            'best_category',
            'export_category',
        ));
    }

    function summerTrendyProducts()
    {
        $summers = Http::get('https://advertbangladesh.com/testpos/api/summer_trendy_product');
        $products = $summers->json();
        $hot_products = $products['hot'];
        $new_arrival = $products['new'];
        $summer_hot = view('components.hot_slider', compact('hot_products'))->render();
        $summer_new = view('components.new_slider', compact('new_arrival'))->render();
        
        return response()->json(['summer_hot'=> $summer_hot, 'summer_new'=> $summer_new]);
    }  

    function bestDealProducts()
    {
        $best = Http::get('https://advertbangladesh.com/testpos/api/best_deal_product');
        $products = $best->json();
        $hot_products = $products['hot'];
        $new_arrival = $products['new'];
        $best_hot = view('components.hot_slider', compact('hot_products'))->render();
        $best_new = view('components.new_slider', compact('new_arrival'))->render();
        
        return response()->json(['best_hot'=> $best_hot, 'best_new'=> $best_new]);
    } 

    function exportQualityProducts()
    {
        $exports = Http::get('https://advertbangladesh.com/testpos/api/export_quality_product');
        $products = $exports->json();
        $hot_products = $products['hot'];
        $new_arrival = $products['new'];
        $export_hot = view('components.hot_slider', compact('hot_products'))->render();
        $export_new = view('components.new_slider', compact('new_arrival'))->render();
        
        return response()->json(['export_hot'=> $export_hot, 'export_new'=> $export_new]);
    }    
    
    function dealOfTheDayProducts()
    {
        $deals = Http::get('https://advertbangladesh.com/testpos/api/deal_oftheday_product');
        $products = $deals->json();
        $view = view('components.single_product', compact('products'))->render();
        
        return response()->json(['html'=> $view]);
    }
    
}
