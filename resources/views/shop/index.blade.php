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
                    @foreach(\Cache::get('categories') as $category)
                        <li class="category_item">
                            <a href="" data-id="{{ $category['id'] }}" class="category_id">{{ $category['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="price-range sidebar-box mb-4">
                <div class="price-wrapper">
                    <fieldset class="filter-price">
                        
                        <div class="price-field">
                        <input type="range" min="0" value="0" max="{{ $max_price }}" name="rangeFrom" id="lower">
                        <input type="range" min="0" value="100" max="{{ $max_price }}" name="rangeTo" id="upper">
                        </div>
                        <div class="price-wrap">
                        <span class="price-title">FILTER</span>
                        <div class="price-wrap-1">
                            <input id="one" value="0">
                            <label for="one"><b>৳</b></label>
                        </div>
                        <div class="price-wrap_line">-</div>
                        <div class="price-wrap-2">
                            <input id="two" value="100">
                            <label for="two"><b>৳</b></label>
                        </div>
                        </div>
                    </fieldset> 
                    </div>
            </div>

            <div class="sidebar-box filter-by-color mb-4">
                <h5 class="title text-cap">Filter By Color</h5>
                <div class="color-box row">
                    @foreach($sizes_colors['colors'] as $color)
                        <a href="" data-id="{{ $color['id'] }}" class="color d-flex justify-content-between text-decoration-none text-dark p-1 col-md-4" name="color[]">
                            <div class="left d-flex">
                                <div class="color-bg"></div>
                                <p>{{$color['name']}}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="mb-3 filter-by-size sidebar-box">
                <h5 class="title text-cap">Filter By Size</h5>
                <div class="size-box ml-3">
                <div class="product-items row">
                    <span>T-SHIRT</span>
                    @foreach($sizes_colors['shirt_sizes'] as $shirt)
                        <a href="" data-id="{{ $shirt['id'] }}" class="size d-flex justify-content-between text-decoration-none text-dark p-1 col-md-3">
                            <div class="product-items m-2">
                                {{$shirt['name']}}
                            </div>
                        </a>
                    @endforeach
                </div>  
                <hr/>   
                <div class="product-items row">
                    <span>PANT</span>
                    @foreach($sizes_colors['pant_sizes'] as $pant)
                        <a href="" data-id="{{ $pant['id'] }}" class="size d-flex justify-content-between text-decoration-none text-dark p-1 col-md-3">
                            <div class="product-items m-2">
                                {{$pant['name']}}
                            </div>
                        </a>
                    @endforeach
                </div>   
                <hr/>  
                <div class="product-items row">
                    <span>BLAZER</span>
                    @foreach($sizes_colors['blazer_sizes'] as $blazer)
                        <a href="" data-id="{{ $blazer['id'] }}" class="size d-flex justify-content-between text-decoration-none text-dark p-1 col-md-3">
                            <div class="product-items m-2">
                                {{$blazer['name']}}
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-12 col-12 all-products-widget">
            <div class="filter-nav d-flex justify-content-between align-items-center border border-muted border-end-0 border-top-0 border-start-0">
                <nav aria-label="breadcrumb" class="pt-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
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
                <div class="mb-3 filter-by-size sidebar-box">
                <h5 class="title text-cap">Filter By Size</h5>
                <div class="size-box ml-3">
                    <div class="product-items row">
                            <span>T-SHIRT</span>
                            @foreach($sizes_colors['shirt_sizes'] as $shirt)
                                <a href="" data-id="{{ $shirt['id'] }}" class="size d-flex justify-content-between text-decoration-none text-dark p-1 col-md-3">
                                    <div class="product-items m-2">
                                        {{$shirt['name']}}
                                    </div>
                                </a>
                            @endforeach
                        </div>  
                        <hr/>             
                        <div class="product-items row">
                            <span>PANT</span>
                            @foreach($sizes_colors['pant_sizes'] as $pant)
                                <a href="" data-id="{{ $pant['id'] }}" class="size d-flex justify-content-between text-decoration-none text-dark p-1 col-md-3">
                                    <div class="product-items m-2">
                                        {{$pant['name']}}
                                    </div>
                                </a>
                            @endforeach
                        </div>   
                        <hr/>                                      
                        <div class="product-items row">
                            <span>BLAZER</span>
                            @foreach($sizes_colors['blazer_sizes'] as $blazer)
                                <a href="" data-id="{{ $blazer['id'] }}" class="size d-flex justify-content-between text-decoration-none text-dark p-1 col-md-3">
                                    <div class="product-items m-2">
                                        {{$blazer['name']}}
                                    </div>
                                </a>
                            @endforeach
                        </div>
                </div>
                </div>
        
                </div>
                    <div class="col-lg-4 col-md-4 col-12 price-filter pb-3">
                        <h5>Price Filter</h5>
                        <div class="price-wrapper">
                    <fieldset class="filter-price">
                        
                        <div class="price-field">
                        <input type="range" min="0" value="0" max="{{ $max_price }}" name="rangeFrom" id="lower">
                        <input type="range" min="0" value="100" max="{{ $max_price }}" name="rangeTo" id="upper">
                            
                        </div>
                        <div class="price-wrap">
                        <span class="price-title">FILTER</span>
                        <div class="price-wrap-1">
                            <input id="one" value="0">
                            <label for="one"><b>৳</b></label>
                        </div>
                        <div class="price-wrap_line">-</div>
                        <div class="price-wrap-2">
                            <input id="two" value="100">
                            <label for="two"><b>৳</b></label>
                        </div>
                        </div>
                    </fieldset> 
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-4 filter-by-color col-12 color-box pb-3">
                        <h5 class="title text-cap m-2">Filter By Color</h5>
                        @foreach($sizes_colors['colors'] as $color)
                            <a href="" data-id="{{ $color['id'] }}" class="color d-flex justify-content-between text-decoration-none text-dark p-1 col-md-4">
                                <div class="left d-flex">
                                    <div class="color-bg"></div>
                                    <p>{{$color['name']}}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="loading-section">
                @include('components.loading')
            </div>
            <div class="all-products shop-page-products row deal-day-row product_data d-none">
            
            </div>
        </div>
    </div>
</div>
</section>
@endsection
@push('js')
<script>
    $(document).ready(function(){
        $.ajax({
            url: '{{ route("shopProduct") }}',
            method: "GET",
            success: function(res)
            {
                if(res.html)
                {
                    $(document).find('div.loading-section').addClass('d-none');
                    $(document).find('div.product_data').removeClass('d-none');
                    $('.product_data').html(res.html);
                }
                
            }
        });
    });
</script>
@endpush