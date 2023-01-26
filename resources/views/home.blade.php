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
                @foreach($home_sliders as $slider)
                <div class="carousel-item active slide">
                    <div class="slide-img-1 slide-img" style="background-image: url({{$slider['background_image']}});">
                        <img src="{{$slider['image']}}" alt="">
                        <button>Buy Now</button>
                    </div>
                </div>
                @endforeach
                <!-- <div class="carousel-item slide">
                <div class="slide-img-2 slide-img row" style="background-image: url(assets/images/others/slider2_polo_womens.png);">
                    <div class="col-lg-5 col-md-8 col-12 text-center">
                        <img src="assets/images/others/make-statement.png" alt="Slider" class="2">
                        <button>Click Here</button>
                    </div>
                </div>
                </div> -->
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
    @include('layouts.delivery_section', ['data'=> \Cache::get('delivery_sections')])
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
                                    {{ $winter_category['title']}}
                                </h2>
                                <a href="{{route('shop')}}">Read More</a>
                            </div>
                            <div class="img" style="background-image: url({{ $winter_category['image']}});">

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
                            @foreach($summer_trendy['hot'] as $summer_hot)
                                @include('components.carousel_slider', ['product'=>$summer_hot])
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-container" id="tab2con">
                        <div class="owl-carousel cat-carousel product-items">
                            @foreach($summer_trendy['new'] as $summer_new)
                                @include('components.carousel_slider', ['product'=>$summer_new])
                            @endforeach
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
                                {{ $best_category['title']}}
                                </h2>
                                <a href="{{route('shop')}}">Read More</a>
                            </div>
                            <div class="img" style="background-image: url(  {{ $best_category['image']}});">

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
                            @foreach($best_deal['hot'] as $best_hot)
                                @include('components.carousel_slider', ['product'=>$best_hot])
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-container" id="tab4con">
                        <div class="owl-carousel cat-carousel product-items">
                           @foreach($best_deal['new'] as $best_new)
                                @include('components.carousel_slider', ['product'=>$best_new])
                            @endforeach
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
                <h2>EXPORT QUALITY</h2>
            </div>
            <div class="row global-cat-row mt-5">
                <div class="col-lg-3 col-md-12 col-12 global-single-col">
                        <div class="global-single-item" >
                            <div class="global-single-sec-text col-lg-7 col-md-12">
                                <h2>
                                {{ $export_category['title']}}
                                </h2>
                                <a href="{{route('shop')}}">Read More</a>
                            </div>
                            <div class="img" style="background-image: url(  {{ $export_category['image']}});">

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
                           @foreach($export_quality['hot'] as $export_hot)
                                @include('components.carousel_slider', ['product'=>$export_hot])
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-container" id="tab6con">
                        <div class="owl-carousel cat-carousel product-items">
                            @foreach($export_quality['new'] as $export_new)
                                @include('components.carousel_slider', ['product'=>$export_new])
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Export Quality section end  -->
<!-- gift card section start  -->
<!-- <section class="d-none">
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
</section> -->
<!-- gift card section end  -->

<!-- All Products Grid Section start  -->
<section>
    <div class="container-md-fluid container-lg">
        <div class="liner-continer">
            <h4 class="title">DEALS OF THE DAY</h4> 
        </div>
        <div class="all-products">
            <div class="row deal-day-row">
            @foreach($deal_days as $row)
                @include('components.product_view', 
                [
                    'class'=> 'col-lg-3 col-md-3 col-6 product p-2',
                    'product'=> $row
                ])
            @endforeach
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