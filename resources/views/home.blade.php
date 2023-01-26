@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
@endsection
@section('content')
<!-- Main content start  -->
<section>
    <div class="container-fluid">
        <div id="cover-slide" class="carousel slide carousel-fade " data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#cover-slide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"><div></div></button>
                <button type="button" data-bs-target="#cover-slide" data-bs-slide-to="1" aria-label="Slide 2">
                    <div></div>
                </button>
                </div>
            <div class="carousel-inner carousel-main">
                <div class="carousel-item active slide">
                <div class="slide-img-1 slide-img" style="background-image: url(assets/images/others/slider1_polo.png);">
                    <img src="assets/images/others/MENS-POLO-COLLECTION.png" alt="Slider">
                    <button>Buy Now</button>
                </div>
                </div>
                <div class="carousel-item slide">
                <div class="slide-img-2 slide-img row" style="background-image: url(assets/images/others/slider2_polo_womens.png);">
                    <div class="col-lg-5 col-md-8 col-12 text-center">
                        <img src="assets/images/others/make-statement.png" alt="Slider" class="2">
                        <button>Click Here</button>
                    </div>
                </div>
                </div>
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#cover-slide" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#cover-slide" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
            </div>
    </div>
    @include('layouts.delivery_section2')
</section>
<!-- Main content end  -->
<!-- SUMMER TRENDY section start  -->
<section>
    <div class="container-md-fluid container-lg">
        <div class="summery-trendy global-cat-sec">
            <div class="section-cat-title">
                <h2>Summer Trendy</h2>
            </div>
            <div class="row global-cat-row mt-5">
                <div class="col-lg-3 col-md-12 col-12 global-single-col">
                        <div class="global-single-item" >
                            <div class="global-single-sec-text col-lg-7 col-md-12">
                                <h2>
                                    Discount On Summer Collection
                                </h2>
                                <a href="#">Read More</a>
                            </div>
                            <div class="img" style="background-image: url(assets/images/categories-img/Summer-Trendy-300x450.jpg);">

                            </div>
                        
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-12 global-carousel-owl-col">
                    
                    <div class="owl-tab-type d-flex tabs">
                        <div class="btn " id="tab1">
                            <i class="fas fa-fire"></i> Hot
                        </div>
                        <div class="btn" id="tab2">
                            NEW ARRIVAL
                        </div>
                    </div>
                    <div class="tab-container" id="tab1con">
                            <div class="owl-carousel cat-carousel product-items">
                                <div class="product p-2">
                                    <div class="images">
                                        <div class="discount-tag">
                                            -48%
                                        </div>
                                        <a href="product.html">
                                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                                        </a>
                                    </div>
                                    <div class="options-pannel">
                                        <ul>
                                            <li class="d-lg-block d-md-block d-none" title="Compare">
                                                <a href="#" class="compare" >
                                                    <i class="fas fa-random"></i>
                                                </a>
                                            </li>
                                            <li class="d-lg-block d-md-block d-none" title="Quick View">
                                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </li>
                                            <li title="Add To Wishlist">
                                                <a href="compare.html" class="compare">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-details text-center pt-2">
                                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                                        <div class="price">
                                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                                        </div>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                                            <div class="button m-auto text-light" >
                                                <p><b>
                                                    BUY NOW
                                                </b></p>
                                                <span>
                                                    <i class="fas fa-shopping-cart"></i>
                                                </span>
                                            
                                        </div>
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="product p-2">
                                    <div class="images">
                                        <div class="discount-tag">
                                            -48%
                                        </div>
                                        <a href="product.html">
                                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                                        </a>
                                    </div>
                                    <div class="options-pannel">
                                        <ul>
                                            <li class="d-lg-block d-md-block d-none" title="Compare">
                                                <a href="#" class="compare" >
                                                    <i class="fas fa-random"></i>
                                                </a>
                                            </li>
                                            <li class="d-lg-block d-md-block d-none" title="Quick View">
                                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </li>
                                            <li title="Add To Wishlist">
                                                <a href="compare.html" class="compare">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-details text-center pt-2">
                                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                                        <div class="price">
                                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                                        </div>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                                            <div class="button m-auto text-light" >
                                                <p><b>
                                                    BUY NOW
                                                </b></p>
                                                <span>
                                                    <i class="fas fa-shopping-cart"></i>
                                                </span>
                                            
                                        </div>
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="product p-2">
                                    <div class="images">
                                        <div class="discount-tag">
                                            -48%
                                        </div>
                                        <a href="product.html">
                                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                                        </a>
                                    </div>
                                    <div class="options-pannel">
                                        <ul>
                                            <li class="d-lg-block d-md-block d-none" title="Compare">
                                                <a href="#" class="compare" >
                                                    <i class="fas fa-random"></i>
                                                </a>
                                            </li>
                                            <li class="d-lg-block d-md-block d-none" title="Quick View">
                                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </li>
                                            <li title="Add To Wishlist">
                                                <a href="compare.html" class="compare">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-details text-center pt-2">
                                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                                        <div class="price">
                                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                                        </div>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                                            <div class="button m-auto text-light" >
                                                <p><b>
                                                    BUY NOW
                                                </b></p>
                                                <span>
                                                    <i class="fas fa-shopping-cart"></i>
                                                </span>
                                            
                                        </div>
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="product p-2">
                                    <div class="images">
                                        <div class="discount-tag">
                                            -48%
                                        </div>
                                        <a href="product.html">
                                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                                        </a>
                                    </div>
                                    <div class="options-pannel">
                                        <ul>
                                            <li class="d-lg-block d-md-block d-none" title="Compare">
                                                <a href="#" class="compare" >
                                                    <i class="fas fa-random"></i>
                                                </a>
                                            </li>
                                            <li class="d-lg-block d-md-block d-none" title="Quick View">
                                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </li>
                                            <li title="Add To Wishlist">
                                                <a href="compare.html" class="compare">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-details text-center pt-2">
                                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                                        <div class="price">
                                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                                        </div>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                                            <div class="button m-auto text-light" >
                                                <p><b>
                                                    BUY NOW
                                                </b></p>
                                                <span>
                                                    <i class="fas fa-shopping-cart"></i>
                                                </span>
                                            
                                        </div>
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="product p-2">
                                    <div class="images">
                                        <div class="discount-tag">
                                            -48%
                                        </div>
                                        <a href="product.html">
                                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                                        </a>
                                    </div>
                                    <div class="options-pannel">
                                        <ul>
                                            <li class="d-lg-block d-md-block d-none" title="Compare">
                                                <a href="#" class="compare" >
                                                    <i class="fas fa-random"></i>
                                                </a>
                                            </li>
                                            <li class="d-lg-block d-md-block d-none" title="Quick View">
                                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </li>
                                            <li title="Add To Wishlist">
                                                <a href="compare.html" class="compare">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-details text-center pt-2">
                                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                                        <div class="price">
                                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                                        </div>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                                            <div class="button m-auto text-light" >
                                                <p><b>
                                                    BUY NOW
                                                </b></p>
                                                <span>
                                                    <i class="fas fa-shopping-cart"></i>
                                                </span>
                                            
                                        </div>
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="product p-2">
                                    <div class="images">
                                        <div class="discount-tag">
                                            -48%
                                        </div>
                                        <a href="product.html">
                                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                                        </a>
                                    </div>
                                    <div class="options-pannel">
                                        <ul>
                                            <li class="d-lg-block d-md-block d-none" title="Compare">
                                                <a href="#" class="compare" >
                                                    <i class="fas fa-random"></i>
                                                </a>
                                            </li>
                                            <li class="d-lg-block d-md-block d-none" title="Quick View">
                                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </li>
                                            <li title="Add To Wishlist">
                                                <a href="compare.html" class="compare">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-details text-center pt-2">
                                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                                        <div class="price">
                                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                                        </div>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                                            <div class="button m-auto text-light" >
                                                <p><b>
                                                    BUY NOW
                                                </b></p>
                                                <span>
                                                    <i class="fas fa-shopping-cart"></i>
                                                </span>
                                            
                                        </div>
                                        </a>
                                    </div>
                                    
                                </div>
                                
                                
                                
                                
                            </div>
                    </div>
                    <div class="tab-container" id="tab2con">
                            <div class="owl-carousel cat-carousel product-items">
                                <div class="product p-2">
                                    <div class="images">
                                        <div class="discount-tag">
                                            -48%
                                        </div>
                                        <a href="product.html">
                                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                                        </a>
                                    </div>
                                    <div class="options-pannel">
                                        <ul>
                                            <li class="d-lg-block d-md-block d-none" title="Compare">
                                                <a href="#" class="compare" >
                                                    <i class="fas fa-random"></i>
                                                </a>
                                            </li>
                                            <li class="d-lg-block d-md-block d-none" title="Quick View">
                                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </li>
                                            <li title="Add To Wishlist">
                                                <a href="compare.html" class="compare">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-details text-center pt-2">
                                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                                        <div class="price">
                                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                                        </div>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                                            <div class="button m-auto text-light" >
                                                <p><b>
                                                    BUY NOW
                                                </b></p>
                                                <span>
                                                    <i class="fas fa-shopping-cart"></i>
                                                </span>
                                            
                                        </div>
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="product p-2">
                                    <div class="images">
                                        <div class="discount-tag">
                                            -48%
                                        </div>
                                        <a href="product.html">
                                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                                        </a>
                                    </div>
                                    <div class="options-pannel">
                                        <ul>
                                            <li class="d-lg-block d-md-block d-none" title="Compare">
                                                <a href="#" class="compare" >
                                                    <i class="fas fa-random"></i>
                                                </a>
                                            </li>
                                            <li class="d-lg-block d-md-block d-none" title="Quick View">
                                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </li>
                                            <li title="Add To Wishlist">
                                                <a href="compare.html" class="compare">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-details text-center pt-2">
                                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                                        <div class="price">
                                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                                        </div>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                                            <div class="button m-auto text-light" >
                                                <p><b>
                                                    BUY NOW
                                                </b></p>
                                                <span>
                                                    <i class="fas fa-shopping-cart"></i>
                                                </span>
                                            
                                        </div>
                                        </a>
                                    </div>
                                    
                                </div>
                                
                                
                                
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SUMMER TRENDY section end  -->
<!-- Best Deal section start  -->
<section>
    <div class="container-md-fluid container-lg mt-5">
        <div class="best-deal global-cat-sec">
            <div class="section-cat-title">
                <h2>Best Deal</h2>
            </div>
            <div class="row global-cat-row mt-5">
                <div class="col-lg-3 col-md-12 col-12 global-single-col">
                        <div class="global-single-item" >
                            <div class="global-single-sec-text col-lg-7 col-md-12">
                                <h2>
                                    Best Price Best Offer
                                </h2>
                                <a href="#">Read More</a>
                            </div>
                            <div class="img" style="background-image: url(assets/images/categories-img/BEST-DEALS-300x450.jpg);">

                            </div>
                        
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-12 global-carousel-owl-col">
                    
                    <div class="owl-tab-type d-flex tabs">
                        <div class="btn " id="tab3">
                            <i class="fas fa-fire"></i> Hot
                        </div>
                        <div class="btn" id="tab4">
                            NEW ARRIVAL
                        </div>
                    </div>
                    <div class="tab-container" id="tab3con">
                            <div class="owl-carousel cat-carousel product-items">
                                <div class="product p-2">
                                    <div class="images">
                                        <div class="discount-tag">
                                            -48%
                                        </div>
                                        <a href="product.html">
                                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                                        </a>
                                    </div>
                                    <div class="options-pannel">
                                        <ul>
                                            <li class="d-lg-block d-md-block d-none" title="Compare">
                                                <a href="#" class="compare" >
                                                    <i class="fas fa-random"></i>
                                                </a>
                                            </li>
                                            <li class="d-lg-block d-md-block d-none" title="Quick View">
                                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </li>
                                            <li title="Add To Wishlist">
                                                <a href="compare.html" class="compare">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-details text-center pt-2">
                                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                                        <div class="price">
                                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                                        </div>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                                            <div class="button m-auto text-light" >
                                                <p><b>
                                                    BUY NOW
                                                </b></p>
                                                <span>
                                                    <i class="fas fa-shopping-cart"></i>
                                                </span>
                                            
                                        </div>
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="product p-2">
                                    <div class="images">
                                        <div class="discount-tag">
                                            -48%
                                        </div>
                                        <a href="product.html">
                                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                                        </a>
                                    </div>
                                    <div class="options-pannel">
                                        <ul>
                                            <li class="d-lg-block d-md-block d-none" title="Compare">
                                                <a href="#" class="compare" >
                                                    <i class="fas fa-random"></i>
                                                </a>
                                            </li>
                                            <li class="d-lg-block d-md-block d-none" title="Quick View">
                                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </li>
                                            <li title="Add To Wishlist">
                                                <a href="compare.html" class="compare">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-details text-center pt-2">
                                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                                        <div class="price">
                                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                                        </div>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                                            <div class="button m-auto text-light" >
                                                <p><b>
                                                    BUY NOW
                                                </b></p>
                                                <span>
                                                    <i class="fas fa-shopping-cart"></i>
                                                </span>
                                            
                                        </div>
                                        </a>
                                    </div>
                                    
                                </div>
                                
                            </div>
                    </div>
                    <div class="tab-container" id="tab4con">
                            <div class="owl-carousel cat-carousel product-items">
                                <div class="product p-2">
                                    <div class="images">
                                        <div class="discount-tag">
                                            -48%
                                        </div>
                                        <a href="product.html">
                                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                                        </a>
                                    </div>
                                    <div class="options-pannel">
                                        <ul>
                                            <li class="d-lg-block d-md-block d-none" title="Compare">
                                                <a href="#" class="compare" >
                                                    <i class="fas fa-random"></i>
                                                </a>
                                            </li>
                                            <li class="d-lg-block d-md-block d-none" title="Quick View">
                                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </li>
                                            <li title="Add To Wishlist">
                                                <a href="compare.html" class="compare">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-details text-center pt-2">
                                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                                        <div class="price">
                                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                                        </div>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                                            <div class="button m-auto text-light" >
                                                <p><b>
                                                    BUY NOW
                                                </b></p>
                                                <span>
                                                    <i class="fas fa-shopping-cart"></i>
                                                </span>
                                            
                                        </div>
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="product p-2">
                                    <div class="images">
                                        <div class="discount-tag">
                                            -48%
                                        </div>
                                        <a href="product.html">
                                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                                        </a>
                                    </div>
                                    <div class="options-pannel">
                                        <ul>
                                            <li class="d-lg-block d-md-block d-none" title="Compare">
                                                <a href="#" class="compare" >
                                                    <i class="fas fa-random"></i>
                                                </a>
                                            </li>
                                            <li class="d-lg-block d-md-block d-none" title="Quick View">
                                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </li>
                                            <li title="Add To Wishlist">
                                                <a href="compare.html" class="compare">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-details text-center pt-2">
                                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                                        <div class="price">
                                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                                        </div>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                                            <div class="button m-auto text-light" >
                                                <p><b>
                                                    BUY NOW
                                                </b></p>
                                                <span>
                                                    <i class="fas fa-shopping-cart"></i>
                                                </span>
                                            
                                        </div>
                                        </a>
                                    </div>
                                    
                                </div>
                                
                                
                                
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Best Deal section end  -->
<!-- Export Quality section start  -->
<section>
    <div class="container-md-fluid container-lg mt-5">
        <div class="export-quality global-cat-sec">
            <div class="section-cat-title">
                <h2>Best Deal</h2>
            </div>
            <div class="row global-cat-row mt-5">
                <div class="col-lg-3 col-md-12 col-12 global-single-col">
                        <div class="global-single-item" >
                            <div class="global-single-sec-text col-lg-7 col-md-12">
                                <h2>
                                    Export Quality
                                </h2>
                                <a href="#">Read More</a>
                            </div>
                            <div class="img" style="background-image: url(assets/images/categories-img/PREMIUM-EXPORTS-300x450.jpg);">

                            </div>
                        
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-12 global-carousel-owl-col">
                    
                    <div class="owl-tab-type d-flex tabs">
                        <div class="btn " id="tab5">
                            <i class="fas fa-fire"></i> Hot
                        </div>
                        <div class="btn" id="tab6">
                            NEW ARRIVAL
                        </div>
                    </div>
                    <div class="tab-container" id="tab5con">
                            <div class="owl-carousel cat-carousel product-items">
                                <div class="product p-2">
                                    <div class="images">
                                        <div class="discount-tag">
                                            -48%
                                        </div>
                                        <a href="product.html">
                                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                                        </a>
                                    </div>
                                    <div class="options-pannel">
                                        <ul>
                                            <li class="d-lg-block d-md-block d-none" title="Compare">
                                                <a href="#" class="compare" >
                                                    <i class="fas fa-random"></i>
                                                </a>
                                            </li>
                                            <li class="d-lg-block d-md-block d-none" title="Quick View">
                                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </li>
                                            <li title="Add To Wishlist">
                                                <a href="compare.html" class="compare">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-details text-center pt-2">
                                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                                        <div class="price">
                                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                                        </div>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                                            <div class="button m-auto text-light" >
                                                <p><b>
                                                    BUY NOW
                                                </b></p>
                                                <span>
                                                    <i class="fas fa-shopping-cart"></i>
                                                </span>
                                            
                                        </div>
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="product p-2">
                                    <div class="images">
                                        <div class="discount-tag">
                                            -48%
                                        </div>
                                        <a href="product.html">
                                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                                        </a>
                                    </div>
                                    <div class="options-pannel">
                                        <ul>
                                            <li class="d-lg-block d-md-block d-none" title="Compare">
                                                <a href="#" class="compare" >
                                                    <i class="fas fa-random"></i>
                                                </a>
                                            </li>
                                            <li class="d-lg-block d-md-block d-none" title="Quick View">
                                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </li>
                                            <li title="Add To Wishlist">
                                                <a href="compare.html" class="compare">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-details text-center pt-2">
                                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                                        <div class="price">
                                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                                        </div>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                                            <div class="button m-auto text-light" >
                                                <p><b>
                                                    BUY NOW
                                                </b></p>
                                                <span>
                                                    <i class="fas fa-shopping-cart"></i>
                                                </span>
                                            
                                        </div>
                                        </a>
                                    </div>
                                    
                                </div>
                                
                                
                                
                            </div>
                    </div>
                    <div class="tab-container" id="tab6con">
                            <div class="owl-carousel cat-carousel product-items">
                                <div class="product p-2">
                                    <div class="images">
                                        <div class="discount-tag">
                                            -48%
                                        </div>
                                        <a href="product.html">
                                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                                        </a>
                                    </div>
                                    <div class="options-pannel">
                                        <ul>
                                            <li class="d-lg-block d-md-block d-none" title="Compare">
                                                <a href="#" class="compare" >
                                                    <i class="fas fa-random"></i>
                                                </a>
                                            </li>
                                            <li class="d-lg-block d-md-block d-none" title="Quick View">
                                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </li>
                                            <li title="Add To Wishlist">
                                                <a href="compare.html" class="compare">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-details text-center pt-2">
                                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                                        <div class="price">
                                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                                        </div>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                                            <div class="button m-auto text-light" >
                                                <p><b>
                                                    BUY NOW
                                                </b></p>
                                                <span>
                                                    <i class="fas fa-shopping-cart"></i>
                                                </span>
                                            
                                        </div>
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="product p-2">
                                    <div class="images">
                                        <div class="discount-tag">
                                            -48%
                                        </div>
                                        <a href="product.html">
                                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                                        </a>
                                    </div>
                                    <div class="options-pannel">
                                        <ul>
                                            <li class="d-lg-block d-md-block d-none" title="Compare">
                                                <a href="#" class="compare" >
                                                    <i class="fas fa-random"></i>
                                                </a>
                                            </li>
                                            <li class="d-lg-block d-md-block d-none" title="Quick View">
                                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </li>
                                            <li title="Add To Wishlist">
                                                <a href="compare.html" class="compare">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-details text-center pt-2">
                                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                                        <div class="price">
                                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                                        </div>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                                            <div class="button m-auto text-light" >
                                                <p><b>
                                                    BUY NOW
                                                </b></p>
                                                <span>
                                                    <i class="fas fa-shopping-cart"></i>
                                                </span>
                                            
                                        </div>
                                        </a>
                                    </div>
                                    
                                </div>
                                
                                
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Export Quality section end  -->
<!-- gift card section start  -->
<section>
    <div class="container-md-fluid container-lg">
        <div class="gift-card global-cat-sec">
            <div class="section-cat-title">
                <h2>PREMIUM EXPORTS</h2>
            </div>
            
        </div>
        <div class="owl-carousel gift-card-owl mt-4 mb-5">
            <div>
                <div class="image">
                    <img src="assets/images/gift-card/200tk.jpg" alt="200taka gift card" class="gift-card-img col-12">
                </div>
            </div>
            <div>
                <div class="image">
                    <img src="assets/images/gift-card/500tk.jpg" alt="200taka gift card" class="gift-card-img col-12">
                </div>
            </div>
            <div>
                <div class="image">
                    <img src="assets/images/gift-card/1000tk.jpg" alt="200taka gift card" class="gift-card-img col-12">
                </div>
            </div>
            <div>
                <div class="image">
                    <img src="assets/images/gift-card/2000tk.jpg" alt="200taka gift card" class="gift-card-img col-12">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- gift card section end  -->

<!-- All Products Grid Section start  -->
<section>
    <div class="container-md-fluid container-lg">
        <div class="liner-continer">
            <h4 class="title">DEALS OF THE DAY</h4> 
        </div>
        <div class="all-products">
            <div class="row deal-day-row">
                <div class="col-lg-2 col-md-3 col-6 product p-2">
                    
                    <div class="options-pannel2">
                        <ul>
                            <li class="d-lg-block d-md-block d-none" title="compare">
                                <a href="compare.html" class="compare" >
                                    <i class="fas fa-random"></i>
                                </a>
                            </li>
                            <li title="Quick View" class="d-lg-block d-md-block d-none">
                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal" >
                                    <i class="fas fa-search"></i>
                                </a>
                            </li>
                            <li title="Add To Wishlist">
                                <a href="#" class="compare">
                                    <i class="far fa-heart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="images">
                        <div class="discount-tag">
                            -48%
                        </div>
                        <a href="product.html">
                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                        </a>
                    </div>
                    
                    <div class="product-details text-center pt-2">
                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                        <div class="price">
                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                        </div>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                            <button class="btn p-0 button m-auto text-light">
                                <p><b>
                                    BUY NOW
                                </b></p>
                                <span>
                                    <i class="fas fa-shopping-cart"></i>
                                </span>
                            
                        </button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 product p-2">
                    
                    <div class="options-pannel2">
                        <ul>
                            <li class="d-lg-block d-md-block d-none" title="compare">
                                <a href="compare.html" class="compare" >
                                    <i class="fas fa-random"></i>
                                </a>
                            </li>
                            <li title="Quick View" class="d-lg-block d-md-block d-none">
                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal" >
                                    <i class="fas fa-search"></i>
                                </a>
                            </li>
                            <li title="Add To Wishlist">
                                <a href="#" class="compare">
                                    <i class="far fa-heart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="images">
                        <div class="discount-tag">
                            -48%
                        </div>
                        <a href="product.html">
                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                        </a>
                    </div>
                    
                    <div class="product-details text-center pt-2">
                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                        <div class="price">
                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                        </div>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                            <button class="btn p-0 button m-auto text-light">
                                <p><b>
                                    BUY NOW
                                </b></p>
                                <span>
                                    <i class="fas fa-shopping-cart"></i>
                                </span>
                            
                        </button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 product p-2">
                    
                    <div class="options-pannel2">
                        <ul>
                            <li class="d-lg-block d-md-block d-none" title="compare">
                                <a href="compare.html" class="compare" >
                                    <i class="fas fa-random"></i>
                                </a>
                            </li>
                            <li title="Quick View" class="d-lg-block d-md-block d-none">
                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal" >
                                    <i class="fas fa-search"></i>
                                </a>
                            </li>
                            <li title="Add To Wishlist">
                                <a href="#" class="compare">
                                    <i class="far fa-heart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="images">
                        <div class="discount-tag">
                            -48%
                        </div>
                        <a href="product.html">
                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                        </a>
                    </div>
                    
                    <div class="product-details text-center pt-2">
                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                        <div class="price">
                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                        </div>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                            <button class="btn p-0 button m-auto text-light">
                                <p><b>
                                    BUY NOW
                                </b></p>
                                <span>
                                    <i class="fas fa-shopping-cart"></i>
                                </span>
                            
                        </button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 product p-2">
                    
                    <div class="options-pannel2">
                        <ul>
                            <li class="d-lg-block d-md-block d-none" title="compare">
                                <a href="compare.html" class="compare" >
                                    <i class="fas fa-random"></i>
                                </a>
                            </li>
                            <li title="Quick View" class="d-lg-block d-md-block d-none">
                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal" >
                                    <i class="fas fa-search"></i>
                                </a>
                            </li>
                            <li title="Add To Wishlist">
                                <a href="#" class="compare">
                                    <i class="far fa-heart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="images">
                        <div class="discount-tag">
                            -48%
                        </div>
                        <a href="product.html">
                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                        </a>
                    </div>
                    
                    <div class="product-details text-center pt-2">
                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                        <div class="price">
                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                        </div>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                            <button class="btn p-0 button m-auto text-light">
                                <p><b>
                                    BUY NOW
                                </b></p>
                                <span>
                                    <i class="fas fa-shopping-cart"></i>
                                </span>
                            
                        </button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 product p-2">
                    
                    <div class="options-pannel2">
                        <ul>
                            <li class="d-lg-block d-md-block d-none" title="compare">
                                <a href="compare.html" class="compare" >
                                    <i class="fas fa-random"></i>
                                </a>
                            </li>
                            <li title="Quick View" class="d-lg-block d-md-block d-none">
                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal" >
                                    <i class="fas fa-search"></i>
                                </a>
                            </li>
                            <li title="Add To Wishlist">
                                <a href="#" class="compare">
                                    <i class="far fa-heart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="images">
                        <div class="discount-tag">
                            -48%
                        </div>
                        <a href="product.html">
                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                        </a>
                    </div>
                    
                    <div class="product-details text-center pt-2">
                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                        <div class="price">
                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                        </div>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                            <button class="btn p-0 button m-auto text-light">
                                <p><b>
                                    BUY NOW
                                </b></p>
                                <span>
                                    <i class="fas fa-shopping-cart"></i>
                                </span>
                            
                        </button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 product p-2">
                    
                    <div class="options-pannel2">
                        <ul>
                            <li class="d-lg-block d-md-block d-none" title="compare">
                                <a href="compare.html" class="compare" >
                                    <i class="fas fa-random"></i>
                                </a>
                            </li>
                            <li title="Quick View" class="d-lg-block d-md-block d-none">
                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal" >
                                    <i class="fas fa-search"></i>
                                </a>
                            </li>
                            <li title="Add To Wishlist">
                                <a href="#" class="compare">
                                    <i class="far fa-heart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="images">
                        <div class="discount-tag">
                            -48%
                        </div>
                        <a href="product.html">
                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                        </a>
                    </div>
                    
                    <div class="product-details text-center pt-2">
                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                        <div class="price">
                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                        </div>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                            <button class="btn p-0 button m-auto text-light">
                                <p><b>
                                    BUY NOW
                                </b></p>
                                <span>
                                    <i class="fas fa-shopping-cart"></i>
                                </span>
                            
                        </button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 product p-2">
                    
                    <div class="options-pannel2">
                        <ul>
                            <li class="d-lg-block d-md-block d-none" title="compare">
                                <a href="compare.html" class="compare" >
                                    <i class="fas fa-random"></i>
                                </a>
                            </li>
                            <li title="Quick View" class="d-lg-block d-md-block d-none">
                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal" >
                                    <i class="fas fa-search"></i>
                                </a>
                            </li>
                            <li title="Add To Wishlist">
                                <a href="#" class="compare">
                                    <i class="far fa-heart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="images">
                        <div class="discount-tag">
                            -48%
                        </div>
                        <a href="product.html">
                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                        </a>
                    </div>
                    
                    <div class="product-details text-center pt-2">
                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                        <div class="price">
                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                        </div>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                            <button class="btn p-0 button m-auto text-light">
                                <p><b>
                                    BUY NOW
                                </b></p>
                                <span>
                                    <i class="fas fa-shopping-cart"></i>
                                </span>
                            
                        </button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 product p-2">
                    
                    <div class="options-pannel2">
                        <ul>
                            <li class="d-lg-block d-md-block d-none" title="compare">
                                <a href="compare.html" class="compare" >
                                    <i class="fas fa-random"></i>
                                </a>
                            </li>
                            <li title="Quick View" class="d-lg-block d-md-block d-none">
                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal" >
                                    <i class="fas fa-search"></i>
                                </a>
                            </li>
                            <li title="Add To Wishlist">
                                <a href="#" class="compare">
                                    <i class="far fa-heart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="images">
                        <div class="discount-tag">
                            -48%
                        </div>
                        <a href="product.html">
                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                        </a>
                    </div>
                    
                    <div class="product-details text-center pt-2">
                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                        <div class="price">
                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                        </div>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                            <button class="btn p-0 button m-auto text-light">
                                <p><b>
                                    BUY NOW
                                </b></p>
                                <span>
                                    <i class="fas fa-shopping-cart"></i>
                                </span>
                            
                        </button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 product p-2">
                    
                    <div class="options-pannel2">
                        <ul>
                            <li class="d-lg-block d-md-block d-none" title="compare">
                                <a href="compare.html" class="compare" >
                                    <i class="fas fa-random"></i>
                                </a>
                            </li>
                            <li title="Quick View" class="d-lg-block d-md-block d-none">
                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal" >
                                    <i class="fas fa-search"></i>
                                </a>
                            </li>
                            <li title="Add To Wishlist">
                                <a href="#" class="compare">
                                    <i class="far fa-heart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="images">
                        <div class="discount-tag">
                            -48%
                        </div>
                        <a href="product.html">
                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                        </a>
                    </div>
                    
                    <div class="product-details text-center pt-2">
                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                        <div class="price">
                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                        </div>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                            <button class="btn p-0 button m-auto text-light">
                                <p><b>
                                    BUY NOW
                                </b></p>
                                <span>
                                    <i class="fas fa-shopping-cart"></i>
                                </span>
                            
                        </button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 product p-2">
                    
                    <div class="options-pannel2">
                        <ul>
                            <li class="d-lg-block d-md-block d-none" title="compare">
                                <a href="compare.html" class="compare" >
                                    <i class="fas fa-random"></i>
                                </a>
                            </li>
                            <li title="Quick View" class="d-lg-block d-md-block d-none">
                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal" >
                                    <i class="fas fa-search"></i>
                                </a>
                            </li>
                            <li title="Add To Wishlist">
                                <a href="#" class="compare">
                                    <i class="far fa-heart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="images">
                        <div class="discount-tag">
                            -48%
                        </div>
                        <a href="product.html">
                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                        </a>
                    </div>
                    
                    <div class="product-details text-center pt-2">
                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                        <div class="price">
                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                        </div>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                            <button class="btn p-0 button m-auto text-light">
                                <p><b>
                                    BUY NOW
                                </b></p>
                                <span>
                                    <i class="fas fa-shopping-cart"></i>
                                </span>
                            
                        </button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 product p-2">
                    
                    <div class="options-pannel2">
                        <ul>
                            <li class="d-lg-block d-md-block d-none" title="compare">
                                <a href="compare.html" class="compare" >
                                    <i class="fas fa-random"></i>
                                </a>
                            </li>
                            <li title="Quick View" class="d-lg-block d-md-block d-none">
                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal" >
                                    <i class="fas fa-search"></i>
                                </a>
                            </li>
                            <li title="Add To Wishlist">
                                <a href="#" class="compare">
                                    <i class="far fa-heart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="images">
                        <div class="discount-tag">
                            -48%
                        </div>
                        <a href="product.html">
                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                        </a>
                    </div>
                    
                    <div class="product-details text-center pt-2">
                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                        <div class="price">
                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                        </div>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                            <button class="btn p-0 button m-auto text-light">
                                <p><b>
                                    BUY NOW
                                </b></p>
                                <span>
                                    <i class="fas fa-shopping-cart"></i>
                                </span>
                            
                        </button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 product p-2">
                    
                    <div class="options-pannel2">
                        <ul>
                            <li class="d-lg-block d-md-block d-none" title="compare">
                                <a href="compare.html" class="compare" >
                                    <i class="fas fa-random"></i>
                                </a>
                            </li>
                            <li title="Quick View" class="d-lg-block d-md-block d-none">
                                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal" >
                                    <i class="fas fa-search"></i>
                                </a>
                            </li>
                            <li title="Add To Wishlist">
                                <a href="#" class="compare">
                                    <i class="far fa-heart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="images">
                        <div class="discount-tag">
                            -48%
                        </div>
                        <a href="product.html">
                            <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                        </a>
                    </div>
                    
                    <div class="product-details text-center pt-2">
                        <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                        <div class="price">
                            <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                        </div>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                            <button class="btn p-0 button m-auto text-light">
                                <p><b>
                                    BUY NOW
                                </b></p>
                                <span>
                                    <i class="fas fa-shopping-cart"></i>
                                </span>
                            
                        </button>
                        </a>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</section>
<!-- All Products Grid Section end  -->
<br><br>
@endsection
@push('js')
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/slick/slick.min.js')}}"></script>
@endpush