@extends('layouts.app')
@section('css')
<style>
    .deal-day-row{
        border-left: 0;
    }
    .deal-day-row .product{
        border-right: 0 !important;
        border-bottom: 0 !important;
        border-top: 0 !important;
        height: auto !important;
    }
</style>
@endsection
@section('content')
<section>
            <h4 class="text-center mt-3">All Searching Products</h4>
            <hr>
            <div class="container mt-5 mb-5">
                <div class="row deal-day-row">
                    <div class="col-lg-3 col-md-4 col-6 product p-2">
                        <div class="options-pannel2">
                            <ul>
                                <li class="d-lg-block d-md-block d-none" title="compare">
                                    <a href="#" class="compare" >
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
                            <a href="#">
                                <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                            </a>
                        </div>
                        
                        <div class="product-details text-center pt-2">
                            <a href="#" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                            <div class="price">
                                <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                            </div>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                                <div class="button m-auto text-light">
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
                    <div class="col-lg-3 col-md-4 col-6 product p-2">
                        <div class="options-pannel2">
                            <ul>
                                <li class="d-lg-block d-md-block d-none" title="compare">
                                    <a href="#" class="compare" >
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
                            <a href="#">
                                <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                            </a>
                        </div>
                        
                        <div class="product-details text-center pt-2">
                            <a href="#" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                            <div class="price">
                                <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                            </div>
                            <a href="#">
                                <div class="button m-auto text-light">
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
                    <div class="col-lg-3 col-md-4 col-6 product p-2">
                        <div class="options-pannel2">
                            <ul>
                                <li class="d-lg-block d-md-block d-none" title="compare">
                                    <a href="#" class="compare" >
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
                            <a href="#">
                                <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                            </a>
                        </div>
                        
                        <div class="product-details text-center pt-2">
                            <a href="#" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                            <div class="price">
                                <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                            </div>
                            <a href="#">
                                <div class="button m-auto text-light">
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
        </section>
        @endsection