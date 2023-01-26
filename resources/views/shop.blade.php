@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/shop.css')}}">
@endsection
@section('content')
<section>
            <div class="container-fluid">
                <div class="shop row">
                    <div class="col-lg-3 col-md-5 col-12 shop-filter-sidebar">
                        <div class="text-end d-block d-md-none d-lg-none position-fixed top-0 end-0">
                            <button class="btn filter-sidebar-dismiss"><i class="far fa-times-circle display-5"></i></button>
                        </div>
                        <div class="category mb-3 sidebar-box">
                            <h5 class="text-cap">Product Categories</h5>
                            <ul>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Blazer</a></li>
                                <li><a href="#">Fb set</a></li>
                                <li><a href="#">Flash Sale</a></li>
                                <li><a href="#">Panjabi</a></li>
                                <li><a href="#">Polo Shirt</a></li>
                                <li><a href="#">Shirt</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Sweat Shirt</a></li>
                                <li><a href="#">T-Shirt</a></li>
                                <li><a href="#">Vaucher Card</a></li>
                                <li><a href="#">Watches</a></li>
                            </ul>
                        </div>
                        <div class="price-range sidebar-box mb-4">
                            <div class="price-wrapper">
                                <fieldset class="filter-price">
                                 
                                  <div class="price-field">
                                    <input type="range"  min="0" max="2500" value="0" id="lower">
                                    <input type="range" min="0" max="2500" value="2500" id="upper">
                                  </div>
                                   <div class="price-wrap">
                                    <span class="price-title">FILTER</span>
                                    <div class="price-wrap-1">
                                      <input id="one" value="">
                                      <label for="one"><b>৳</b></label>
                                    </div>
                                    <div class="price-wrap_line">-</div>
                                    <div class="price-wrap-2">
                                      <input id="two" value="">
                                      <label for="two"><b>৳</b></label>
                                    </div>
                                  </div>
                                </fieldset> 
                              </div>
                        </div>

                        <div class="sidebar-box filter-by-color mb-4">
                            <h5 class="title text-cap">Filter By Color</h5>
                            <div class="color-box">
                                <a class="color d-flex justify-content-between text-decoration-none text-dark p-1">
                                    <div class="left d-flex">
                                        <div class="color-bg" style="background-color: white;"></div>
                                        <p>White</p>
                                    </div>
                                    <div class="product-items">
                                        <span>3</span>
                                    </div>
                                </a>
                                <a class="color d-flex justify-content-between text-decoration-none text-dark p-1">
                                    <div class="left d-flex">
                                        <div class="color-bg" style="background-color: red;"></div>
                                        <p>Red</p>
                                    </div>
                                    <div class="product-items">
                                        <span>5</span>
                                    </div>
                                </a>
                                <a class="color d-flex justify-content-between text-decoration-none text-dark p-1">
                                    <div class="left d-flex">
                                        <div class="color-bg" style="background-color: black;"></div>
                                        <p>Black</p>
                                    </div>
                                    <div class="product-items">
                                        <span>3</span>
                                    </div>
                                </a>
                                <a class="color d-flex justify-content-between text-decoration-none text-dark p-1">
                                    <div class="left d-flex">
                                        <div class="color-bg" style="background-color: gray;"></div>
                                        <p>Gray</p>
                                    </div>
                                    <div class="product-items">
                                        <span>3</span>
                                    </div>
                                </a>
                                <a class="color d-flex justify-content-between text-decoration-none text-dark p-1">
                                    <div class="left d-flex">
                                        <div class="color-bg" style="background-color: purple;"></div>
                                        <p>Purple</p>
                                    </div>
                                    <div class="product-items">
                                        <span>3</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mb-3 filter-by-size sidebar-box">
                            <h5 class="title text-cap">Filter By Size</h5>
                            <div class="size-box">
                                <a class="size d-flex justify-content-between text-decoration-none text-dark p-1">
                                    <div class="left">
                                        30
                                    </div>
                                    <div class="product-items">
                                        <span>3</span>
                                    </div>
                                </a>
                                <a class="size d-flex justify-content-between text-decoration-none text-dark p-1">
                                    <div class="left">
                                        32
                                    </div>
                                    <div class="product-items">
                                        <span>5</span>
                                    </div>
                                </a>
                                <a class="size d-flex justify-content-between text-decoration-none text-dark p-1">
                                    <div class="left">
                                        34
                                    </div>
                                    <div class="product-items">
                                        <span>1</span>
                                    </div>
                                </a>
                                <a class="size d-flex justify-content-between text-decoration-none text-dark p-1">
                                    <div class="left">
                                        36
                                    </div>
                                    <div class="product-items">
                                        <span>6</span>
                                    </div>
                                </a>
                                <a class="size d-flex justify-content-between text-decoration-none text-dark p-1">
                                    <div class="left">
                                        38
                                    </div>
                                    <div class="product-items">
                                        <span>2</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-12 all-products-widget">
                        <div class="filter-nav d-flex justify-content-between align-items-center border border-muted border-end-0 border-top-0 border-start-0">
                            <nav aria-label="breadcrumb" class="pt-2">
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Shop</li>
                                </ol>
                              </nav>
                            <nav class="navbar">
                                <a href="#" class="nav-link me-3 font-lg d-none d-md-none d-lg-block" id="product-12">
                                    <i class="fas fa-bars"></i> 
                                </a>
                                <a href="#" class="nav-link me-3 ms-3 font-lg d-none d-md-none d-lg-block" id="product-3">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="19px" height="19px" viewBox="0 0 19 19" enable-background="new 0 0 19 19" xml:space="preserve">
                                        <rect width="4" height="4"></rect>
                                        <rect x="5" width="4" height="4"></rect>
                                        <rect x="10" width="4" height="4"></rect>
                                        <rect x="15" width="4" height="4"></rect>
                                        <rect y="5" width="4" height="4"></rect>
                                        <rect x="5" y="5" width="4" height="4"></rect>
                                        <rect x="10" y="5" width="4" height="4"></rect>
                                        <rect x="15" y="5" width="4" height="4"></rect>
                                        <rect y="15" width="4" height="4"></rect>
                                        <rect x="5" y="15" width="4" height="4"></rect>
                                        <rect x="10" y="15" width="4" height="4"></rect>
                                        <rect x="15" y="15" width="4" height="4"></rect>
                                        <rect y="10" width="4" height="4"></rect>
                                        <rect x="5" y="10" width="4" height="4"></rect>
                                        <rect x="10" y="10" width="4" height="4"></rect>
                                        <rect x="15" y="10" width="4" height="4"></rect>
                                        </svg>
                                </a>
                                <a href="#" class="nav-link me-3 ms-3 font-lg" id="filter">
                                    <i class="fas fa-sliders-h"></i> Filter
                                </a>
                            </nav>
                        </div>
                        <div class="filter-dropdown">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12 sort-by pb-3">
                                    <h5>Sort By</h5>
                                    <a href="#" class="nav-link text-dark pt-2 active">
                                        Popularity
                                    </a>
                                    <a href="#" class="nav-link text-dark pt-2">
                                        Average rating
                                    </a>
                                    <a href="#" class="nav-link text-dark pt-2">
                                        Newness
                                    </a>
                                    <a href="#" class="nav-link text-dark pt-2">
                                        Price: Low to High
                                    </a>
                                    <a href="#" class="nav-link text-dark pt-2">
                                        Price: Hight to Low
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 price-filter pb-3">
                                    <h5>Price Filter</h5>
                                    <a href="#" class="nav-link text-dark pt-2 active">
                                        All
                                    </a>
                                    <a href="#" class="nav-link text-dark pt-2">
                                        0.00৳  - 6,250.00৳ 
                                    </a>
                                    <a href="#" class="nav-link text-dark pt-2">
                                        6,250.00৳  - 12,500.00৳ 
                                    </a>
                                    <a href="#" class="nav-link text-dark pt-2">
                                        12,500.00৳  - 18,750.00৳ 
                                    </a>
                                    <a href="#" class="nav-link text-dark pt-2">
                                        18,750.00৳  - 25,000.00৳ 
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 color-box">
                                    <a class="color d-flex justify-content-between text-decoration-none text-dark p-1">
                                        <div class="left d-flex">
                                            <div class="color-bg" style="background-color: white;"></div>
                                            <p>White</p>
                                        </div>
                                        <div class="product-items">
                                            <span>3</span>
                                        </div>
                                    </a>
                                    <a class="color d-flex justify-content-between text-decoration-none text-dark p-1">
                                        <div class="left d-flex">
                                            <div class="color-bg" style="background-color: red;"></div>
                                            <p>Red</p>
                                        </div>
                                        <div class="product-items">
                                            <span>5</span>
                                        </div>
                                    </a>
                                    <a class="color d-flex justify-content-between text-decoration-none text-dark p-1">
                                        <div class="left d-flex">
                                            <div class="color-bg" style="background-color: black;"></div>
                                            <p>Black</p>
                                        </div>
                                        <div class="product-items">
                                            <span>3</span>
                                        </div>
                                    </a>
                                    <a class="color d-flex justify-content-between text-decoration-none text-dark p-1">
                                        <div class="left d-flex">
                                            <div class="color-bg" style="background-color: gray;"></div>
                                            <p>Gray</p>
                                        </div>
                                        <div class="product-items">
                                            <span>3</span>
                                        </div>
                                    </a>
                                    <a class="color d-flex justify-content-between text-decoration-none text-dark p-1">
                                        <div class="left d-flex">
                                            <div class="color-bg" style="background-color: purple;"></div>
                                            <p>Purple</p>
                                        </div>
                                        <div class="product-items">
                                            <span>3</span>
                                        </div>
                                    </a>
                                    <a class="color d-flex justify-content-between text-decoration-none text-dark p-1">
                                        <div class="left d-flex">
                                            <div class="color-bg" style="background-color: purple;"></div>
                                            <p>Purple</p>
                                        </div>
                                        <div class="product-items">
                                            <span>3</span>
                                        </div>
                                    </a>
                                    <a class="color d-flex justify-content-between text-decoration-none text-dark p-1">
                                        <div class="left d-flex">
                                            <div class="color-bg" style="background-color: purple;"></div>
                                            <p>Purple</p>
                                        </div>
                                        <div class="product-items">
                                            <span>3</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="all-products row deal-day-row">
                        @foreach($products as $product)
                            @include('components.product_view', ['class'=>'col-lg-3 col-md-3 col-6 product p-2', 'product'=> $product])
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection