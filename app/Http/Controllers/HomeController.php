<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $sliders = Http::get('https://advertbangladesh.com/testpos/api/home_slider_image');
        $deliveries = Http::get('https://advertbangladesh.com/testpos/api/get_delivery_section');
        $deals = Http::get('https://advertbangladesh.com/testpos/api/deal_oftheday_product');
        $summers = Http::get('https://advertbangladesh.com/testpos/api/summer_trendy_product');
        $best = Http::get('https://advertbangladesh.com/testpos/api/best_deal_product');
        $exports = Http::get('https://advertbangladesh.com/testpos/api/export_quality_product');
        $winter = Http::get('https://advertbangladesh.com/testpos/api/category_image/WINTER');
        $best_cat = Http::get('https://advertbangladesh.com/testpos/api/category_image/BEST');
        $export = Http::get('https://advertbangladesh.com/testpos/api/category_image/EXPORT');
        
        $home_sliders = $sliders->json();
        $delivery_sections = $deliveries->json();
        $deal_days = $deals->json();
        $summer_trendy = $summers->json();
        $best_deal = $best->json();
        $export_quality = $exports->json();
        $winter_category = $winter->json();
        $best_category = $best_cat->json();
        $export_category = $export->json();
        \Cache::put('delivery_sections', $delivery_sections);
        $response = Http::get('https://advertbangladesh.com/testpos/api/category_list');
        $categories = $response->json();
        \Cache::put('categories', $categories['categories']);
        return view('home', compact(
            'home_sliders', 
            'deal_days', 
            'summer_trendy',
            'best_deal',
            'export_quality',
            'winter_category',
            'best_category',
            'export_category',
        ));
    }
}
