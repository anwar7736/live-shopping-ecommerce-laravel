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
                <div class="discount-tag">
                    -48%
                </div>
                <div class="owl-carousel slider-for-product">
                    <div data-hash="slide1">
                        <a data-fancybox="gallery" data-src="assets/images/products/1.jpg">
                            <img src="assets/images/products/1.jpg" class="w-100 d-block" alt="Third slide">
                        </a>
                    </div>
                    <div data-hash="slide2">
                        <a data-fancybox="gallery" data-src="assets/images/products/2.jpg">
                            <img src="assets/images/products/2.jpg" class="w-100 d-block" alt="Third slide">
                        </a>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-3">
                    <a href="#slide1">
                        <img src="assets/images/products/1.jpg" alt="" class="col-12">
                    </a>
                </div>
                <div class="col-3">
                    <a href="#slide2">
                        <img src="assets/images/products/1.jpg" alt="" class="col-12">
                    </a>
                </div>
            </div>
        </div>
        <div class="modal-product-details col-lg-6 col-md-6 col-12 pt-2">
            <nav aria-label="breadcrumb" class="pt-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="shop.html">Category Name</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product Name</li>
                </ol>
                </nav>
            <a href="product.html" class="text-decoration-none text-dark">
                <h3>Fashionable Men’s Polo Shirt</h3>
            </a>
            <h6 class="price pt-3">
                <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
            </h6>
            <p class="text-sm">
                Live Shopping is one of the fastest-growing trendy fashion lifestyle brands in Bangladesh. We have just started! We aimed to serve our customers with international products at a competitive price range. We deliver premium quality and 100% QC pass products. Live Shopping means Exact Shopping
            </p>
            <div class="quantity-buy d-flex">
                <div class="quantity">
                    <button class="cart-qty-minus" id="dec" type="button" value="-">-</button>
                    <input type="text" name="qty" id="qty" class="qty" maxlength="12" value="0" class="input-text qty" />
                    <button class="cart-qty-plus" type="button" id="inc" value="+">+</button>
                    
                </div>
                <button class="btn">Buy</button>
            </div>
            <div class="products-options mt-4 d-flex">
                <a href="#" class="text-decoration-none text-dark me-3">
                    <b><i class="fas fa-random"></i> <span class="sm-none">Compare</span></b>
                </a>
                <a href="#" class="text-decoration-none text-dark me-3">
                    <b><i class="far fa-heart"></i> <span class="sm-none">Add to Wishlist</span></b>
                </a>
            </div>
            <hr>
            <p><b>SKU:</b> 0613</p>
            <p><b>Category: </b> Polo Shirt</p>
  
            
        </div>
        <div class="col-lg-3 col-12 pt-2">
            <iframe class="col-12" height="315" src="https://www.youtube.com/embed/SUPexG8CAis" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
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
    <!-- for mobile view  -->
    

    
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