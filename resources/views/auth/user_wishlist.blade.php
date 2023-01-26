@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">
@endsection
@section('content')
<section>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-10 account-menu p-3 d-md-block d-lg-block" id="account-sidemenu">
                <div class="col-12 dismiss-box">
                    <button class="dismiss btn btn-light d-md-none d-lg-none d-block" id="account-dismiss">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="menu-box-inner">
                    <div class="profile-details">
                        <div class="profile-image m-2">
                            <img src="assets/images/products/1.jpg" alt="">
                        </div>
                        <p class="name mt-2 text-muted">
                            <b>
                                Sontos Sharma
                            </b>
                        </p>
                    </div>
                <div class="d-flex justify-content-between">
                    <h5 class="title">My Account</h5>
                    
                </div>
                <hr>
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#" class="nav-link"><b>Dashboard</b></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><b>My Profile</b></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><b>Orders</b></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><b>Wishlist</b></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><b>Logout</b></a></li>
                </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-12 p-3 text-muted menu-details">
                <button class="d-block d-md-none d-lg-none btn btn-secondary sidebar" id="account-sidebar">
                    <i class="fas fa-arrow-right"></i>
                </button>
                <style>
                    .deal-day-row{
                        max-height: 100vh;
                        overflow-y: auto;
                    }
                    .deal-day-row::-webkit-scrollbar{
                        background-color: transparent;
                        width: 0;
                    }
                </style>
                <h3 class="title"><b>My Wishlist Products</b></h3>
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

        </div>
    </div>
</section>
@endsection