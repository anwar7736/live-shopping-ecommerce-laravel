<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');
Route::get('/return', \App\Http\Controllers\ReturnController::class)->name('return');
Route::get('/terms', \App\Http\Controllers\TermsController::class)->name('terms');
Route::get('/privacy_policy', \App\Http\Controllers\TermsController::class)->name('privacy.policy');
Route::get('/faq', \App\Http\Controllers\FAQController::class)->name('faq');
Route::get('/shop', \App\Http\Controllers\ShopController::class)->name('shop');
Route::get('/flash_sell', \App\Http\Controllers\FlashSellController::class)->name('flash.sell');
Route::get('/about_us', \App\Http\Controllers\AboutUsController::class)->name('about.us');
Route::get('/contact_us', \App\Http\Controllers\ContactUsController::class)->name('contact.us');
Route::get('/compare', \App\Http\Controllers\CompareController::class)->name('compare');
Route::get('/wishlist', \App\Http\Controllers\WishlistController::class)->name('wishlist');
Route::get('/cartlist', \App\Http\Controllers\CartController::class)->name('cartlist');
Route::get('/product_details', [\App\Http\Controllers\ProductController::class, 'show'])->name('product.details');
Route::get('/category_wise_product', [\App\Http\Controllers\ProductController::class, 'productByCategory'])->name('product.category');
Route::get('/product_search', [\App\Http\Controllers\ProductController::class, 'search'])->name('product.search');

Route::get('/connect_database', function(){
    // $records = \DB::connection('server_mysql')
    // ->table('products')
    // ->get()
    // ->toArray();
    // dd($records);

    $response = Http::get('https://advertbangladesh.com/testpos/api/product_sizes_and_colors');
    dd($response->json());

});
