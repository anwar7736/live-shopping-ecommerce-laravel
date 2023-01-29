<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;


Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');
Route::get('/return', \App\Http\Controllers\ReturnController::class)->name('return');
Route::get('/terms', \App\Http\Controllers\TermsController::class)->name('terms');
Route::get('/privacy_policy', \App\Http\Controllers\TermsController::class)->name('privacy.policy');
Route::get('/faq', \App\Http\Controllers\FAQController::class)->name('faq');
Route::controller(\App\Http\Controllers\ShopController::class)->group(function(){
    Route::get('/shop', 'index')->name('shop');
    Route::get('/shop-product-list', 'shopProduct')->name('shopProduct');
});
Route::get('/flash_sell', \App\Http\Controllers\FlashSellController::class)->name('flash.sell');
Route::get('/about_us', \App\Http\Controllers\AboutUsController::class)->name('about.us');
Route::get('/contact_us', \App\Http\Controllers\ContactUsController::class)->name('contact.us');
Route::get('/compare', \App\Http\Controllers\CompareController::class)->name('compare');
Route::get('/wishlist', \App\Http\Controllers\WishlistController::class)->name('wishlist');
Route::get('/cartlist', \App\Http\Controllers\CartController::class)->name('cartlist');
Route::controller(\App\Http\Controllers\ProductController::class)->group(function(){
    Route::get('/product_by_id/{id}','edit')->name('product_by_id');
    Route::get('/product_details', 'show')->name('product.details');
    Route::get('/category_wise_product','productByCategory')->name('product.category');
    Route::get('/product_search','searchProduct')->name('product.search');
});


Route::get('/flash-sell-product', [\App\Http\Controllers\FlashSellController::class, 'flashSellProduct'])->name('flash_sell_product');



