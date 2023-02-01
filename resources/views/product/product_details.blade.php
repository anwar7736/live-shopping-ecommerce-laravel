@php $product = $product['product']; @endphp
@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('assets/lightbox/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/product.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
@endsection
@section('content')
<section>
<div class="container product-details-row mt-4">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-12 pe-0 product-image-col pt-2">
            <div class="image single-product-images mb-3">
                @if(calculateDiscount($product) > 0)
                    <div class="discount-tag">
                        - {{calculateDiscount($product)}}%
                    </div>
                @endif
                
                <div class="owl-carousel slider-for-product">
                    @if($product['image_url'])
                        <div data-hash="slide1">
                            <a data-fancybox="gallery" data-src="{{$product['image_url']}}">
                                <img src="{{$product['image_url']}}" class="w-100 d-block" alt="">
                            </a>
                        </div>
                    @else
                        <div data-hash="slide2">
                            <a data-fancybox="gallery" data-src="assets/images/products/default-image.jpg">
                                <img src="assets/images/products/default-image.jpg" class="w-100 d-block" alt="">
                            </a>
                        </div>
                    @endif
                </div>
                
            </div>
            <div class="row">
                @if($product['image_url'])
                    <div class="col-3">
                        <a href="#slide1">
                            <img src="{{$product['image_url']}}" alt="" class="col-12">
                        </a>
                    </div>
                @else
                    <div class="col-3">
                        <a href="#slide2">
                            <img src="assets/images/products/default-image.jpg" alt="" class="col-12">
                        </a>
                    </div>
                @endif
            </div>
        </div>
        <div class="modal-product-details col-lg-6 col-md-6 col-12 pt-2">
            <nav aria-label="breadcrumb" class="pt-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('product.category', ['id'=>$product['category']]) }}">{{ $product['category'] ?? '' }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product['product'] ?? $product['default_name'] }}</li>
                </ol>
                </nav>
            <a href="#" class="text-decoration-none text-dark">
                <h3>{{ $product['product'] ?? $product['default_name'] }}</h3>
            </a>
            @if($product['regular_price'] > 0 && $product['regular_price'] != $product['variation']['default_sell_price'])
                <div class="price pt-3">
                <del class="text-muted">{{ number_format($product['variation']['default_sell_price'], 2) }}৳
                </del>
                <span class="ps-1" style="color: #ff7400; font-weight: bold;">{{ number_format($product['regular_price'], 2) }}৳</span>
                </div> 
            @else
                <div class="price pt-3">
                <span class="ps-1" style="color: #ff7400; font-weight: bold;">{{(number_format($product['variation']['default_sell_price'], 2))}}৳</span>
                </div>
            @endif
            
            <div class="quantity-buy d-flex">
                <div class="quantity">
                    <button id="cart-qty-minus" class="dec" type="button">-</button>
                    <input type="number" name="qty" min="1" max="10"  value="1" class="input-text qty" />
                    <button id="cart-qty-plus" type="button" class="inc">+</button>
                    
                </div>
                <a href="" class="add_to_cart">
                    <input type="hidden" name="product" value="{{ $product['id'] }}">
                    <button class="btn px-4 pt-3 pb-2">
                        BUY
                    </button>                    

                </a>                    
            <button class="btn px-2 pt-3 pb-2 bg-dark findStore" style="margin-left:10px">
                Find Store
            </button>
            </div>
            <div class="products-options mt-4 d-flex d-none">
                <a href="#" class="text-decoration-none text-dark me-3">
                    <b><i class="fas fa-random"></i> <span class="sm-none">Compare</span></b>
                </a>
                <a href="#" class="text-decoration-none text-dark me-3">
                    <b><i class="far fa-heart"></i> <span class="sm-none">Add to Wishlist</span></b>
                </a>
            </div>
            <hr>
            <p><b>SKU:</b> {{ $product['sku'] ?? '' }}</p>
            <p><b>Category: </b> {{ $product['category'] ?? '' }}</p>
            <p class="text-sm">
                {!! $product['description'] !!}
            </p>
        </div>
            @if($product['video'])
            <div class="col-lg-3 col-12 pt-2">
            <iframe class="col-12" height="315" src="https://www.youtube.com/embed/{{$product['video']}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            @endif
          <hr>
    </div>
</div>
</section>
<section class="product-des">
        <div class="container accordion discription m-auto">
            <div id="acmtab4" class="tab-content2 text-start ps-3">
                <div class="row justify-content-center align-items-center g-2">
                    <div class="col-lg-6 col-12">
                        <h5 class="title"><b>
                            DELIVERY & SHIPPING PROCESS
                        </b></h5>
                        <p>We deliver via REDX and SUNDARBAN Courier for the cash-on-delivery process. Here the system is pretty easier as follows -</p>
                        <ul>
                            <li>-Choose your product first</li>
                            <li>-Click on "Buy Now."</li>
                            <li>-Fill up your name, phone number, and delivery address,</li>
                            <li>-Click on place order, That's all!</li>
                        </ul>
                        <p>
                            Now wait for the call from our end. In short, one of our telesales executives will call you to confirm the order for shipping. Meanwhile, you must pay the delivery charge via Live Shopping's only bkash merchant number 01911111566.
                        </p>
                        <p>
                            NOTE: DO NOT PAY ANYWHERE ELSE.
                        </p>
                        <p>
                            After the shipment of your order, our telesales executive will call you again, text you, mail you, or messenger you with your invoice number, including shipping details.
                        </p>
                        <p>
                            We know you don't like to wait, right? Don't worry, you don't need to wait more than 48 hours for Dhaka and 72 hours across the country.
                        </p>
                    </div>
                    <div class="col-lg-3 col-12">
                        <img src="assets/images/others/redx_courier_logo-400x195.png" alt="" class="col-12">
                    </div>
                    <div class="col-lg-3 col-12">
                        <img src="assets/images/others/sundarban_courier_logo-300x300.png" alt="" class="col-12">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--modal start-->
<div class="modal fade " id="find-store-modal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true"></div>
</div>
</section>
<!-- Recently view  -->
<hr>
@endsection
@push('js')
    <script src="{{asset('assets/lightbox/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script>
      // Customization example
      Fancybox.bind('[data-fancybox="gallery"]', {
        infinite: false
      });
    </script>
@endpush