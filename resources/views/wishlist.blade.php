@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/wishlist.css')}}">
@endsection
@section('content')
<section>
            <div class="container mt-5 mb-5">
                <h3 class="title"><b>Wishlist Items</b></h3>
                <div class="row deal-day-row">
                    <div class="col-lg-12 col-md-6 col-12 product wishlist-product p-2 d-lg-flex">
                        <div class="discount-tag">
                            -48%
                        </div>
                        
                        <div class="images">
                            <a href="product.html">
                                <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                            </a>
                            <div class="options-pannel2 d-lg-block d-md-block d-none" style="height: 6rem;">
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
                                </ul>
                            </div>
                        </div>
                        
                        <div class="product-details text-start pt-2 ps-4">
    
                            <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                            <div class="price">
                                <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                            </div>
                            <p class="product-details-p">
                                Live Shopping is one of the fastest-growing trendy fashion lifestyle brands in Bangladesh. We have just started! We aimed to serve our customers with international products at a competitive price range. We deliver premium quality and 100% QC pass products. Live Shopping means Exact Shopping
                            </p>
                            <a href="#">
                                <div class="button text-light">
                                    <p><b>
                                        BUY NOW
                                    </b></p>
                                    <span>
                                        <i class="fas fa-shopping-cart"></i>
                                    </span>
                                
                                </div>
                            </a>
                            <button class="btn btn-sm m-2"><i class="fas fa-times"></i> Remove</button>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-12 product wishlist-product p-2 d-lg-flex">
                        <div class="discount-tag">
                            -48%
                        </div>
                        
                        <div class="images">
                            <a href="product.html">
                                <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                            </a>
                            <div class="options-pannel2 d-lg-block d-md-block d-none" style="height: 6rem;">
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
                                </ul>
                            </div>
                        </div>
                        
                        <div class="product-details text-start pt-2 ps-4">
    
                            <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                            <div class="price">
                                <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                            </div>
                            <p class="product-details-p">
                                Live Shopping is one of the fastest-growing trendy fashion lifestyle brands in Bangladesh. We have just started! We aimed to serve our customers with international products at a competitive price range. We deliver premium quality and 100% QC pass products. Live Shopping means Exact Shopping
                            </p>
                            <a href="#">
                                <div class="button text-light">
                                    <p><b>
                                        BUY NOW
                                    </b></p>
                                    <span>
                                        <i class="fas fa-shopping-cart"></i>
                                    </span>
                                
                                </div>
                            </a>
                            <button class="btn btn-sm m-2"><i class="fas fa-times"></i> Remove</button>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-12 product wishlist-product p-2 d-lg-flex">
                        <div class="discount-tag">
                            -48%
                        </div>
                        
                        <div class="images">
                            <a href="product.html">
                                <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                            </a>
                            <div class="options-pannel2 d-lg-block d-md-block d-none" style="height: 6rem;">
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
                                </ul>
                            </div>
                        </div>
                        
                        <div class="product-details text-start pt-2 ps-4">
    
                            <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                            <div class="price">
                                <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                            </div>
                            <p class="product-details-p">
                                Live Shopping is one of the fastest-growing trendy fashion lifestyle brands in Bangladesh. We have just started! We aimed to serve our customers with international products at a competitive price range. We deliver premium quality and 100% QC pass products. Live Shopping means Exact Shopping
                            </p>
                            <a href="#">
                                <div class="button text-light">
                                    <p><b>
                                        BUY NOW
                                    </b></p>
                                    <span>
                                        <i class="fas fa-shopping-cart"></i>
                                    </span>
                                
                                </div>
                            </a>
                            <button class="btn btn-sm m-2"><i class="fas fa-times"></i> Remove</button>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-12 product wishlist-product p-2 d-lg-flex">
                        <div class="discount-tag">
                            -48%
                        </div>
                        
                        <div class="images">
                            <a href="product.html">
                                <img src="assets/images/products/2.jpg" alt="Image" class="main-image">
                            </a>
                            <div class="options-pannel2 d-lg-block d-md-block d-none" style="height: 6rem;">
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
                                </ul>
                            </div>
                        </div>
                        
                        <div class="product-details text-start pt-2 ps-4">
    
                            <a href="product.html" class="text-dark" style="text-decoration: none; font-weight: 600;">Exclusive Mens Polo Shirts</a>
                            <div class="price">
                                <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                            </div>
                            <p class="product-details-p">
                                Live Shopping is one of the fastest-growing trendy fashion lifestyle brands in Bangladesh. We have just started! We aimed to serve our customers with international products at a competitive price range. We deliver premium quality and 100% QC pass products. Live Shopping means Exact Shopping
                            </p>
                            <a href="#">
                                <div class="button text-light">
                                    <p><b>
                                        BUY NOW
                                    </b></p>
                                    <span>
                                        <i class="fas fa-shopping-cart"></i>
                                    </span>
                                
                                </div>
                            </a>
                            <button class="btn btn-sm m-2"><i class="fas fa-times"></i> Remove</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection