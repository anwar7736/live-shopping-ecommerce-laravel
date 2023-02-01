<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReturnController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\FlashSellController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;

Route::controller(HomeController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::get('/summer-trendy','summerTrendyProducts')->name('summerTrendy');
    Route::get('/best-deal','bestDealProducts')->name('bestDeal');
    Route::get('/export-quality','exportQualityProducts')->name('exportQuality');
    Route::get('/deal-of-the-day','dealOfTheDayProducts')->name('dealOfTheDay');
});

Route::controller(ShopController::class)->group(function(){
    Route::get('/shop', 'index')->name('shop');
    Route::get('/shop-product-list', 'shopProduct')->name('shopProduct');
    Route::get('/find-store', 'findStore');
});

Route::controller(FlashSellController::class)->group(function(){
    Route::get('/flash_sell', 'index')->name('flash.sell');
    Route::get('/flash-sell-product', 'flashSellProduct')->name('flash_sell_product');
});


Route::controller(ProductController::class)->group(function(){
    Route::get('/product_by_id/{id}','edit')->name('product_by_id');
    Route::get('/product_details', 'show')->name('product.details');
    Route::get('/category_wise_product','productByCategory')->name('product.category');
    Route::get('/product_search','searchProduct')->name('product.search');
});


Route::resource('cart', CartController::class);
Route::controller(CartController::class)->group(function(){
    Route::get('cart-items','getCartList')->name('getCartList');
    Route::get('/update-size','updateItemSize')->name('updateItemSize');
    Route::post('checkout','checkout')->name('checkout');
});


Route::get('/about_us', AboutUsController::class)->name('about.us');
Route::resource('contact_us', ContactUsController::class);
Route::get('/compare', CompareController::class)->name('compare');
Route::get('/wishlist', WishlistController::class)->name('wishlist');
Route::get('/return', ReturnController::class)->name('return');
Route::get('/terms', TermsController::class)->name('terms');
Route::get('/privacy_policy', TermsController::class)->name('privacy.policy');
Route::get('/faq', FAQController::class)->name('faq');






