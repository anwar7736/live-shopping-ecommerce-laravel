@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
@endsection
@section('content')
<!-- Main content start  -->
<div class="loading">
    @include('components.loading')
</div>
<div class="home-section d-none">
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
                       
                    </div>
                    <div class="tab-container" id="tab2con" style="display:none">
                       
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

                    </div>
                    <div class="tab-container" id="tab4con" style="display:none">

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

                    </div>
                    <div class="tab-container" id="tab6con" style="display:none">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-md-fluid container-lg">
        <div class="liner-continer">
            <h4 class="title">DEALS OF THE DAY</h4> 
        </div>
        <div class="all-products product_data home-product-d-d">
           
        </div>
    </div>
</section>
<!-- All Products Grid Section end  -->
<br><br>
</div>
@endsection
@push('js')
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/slick/slick.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            summerTrendyProducts();

            function dealOfTheDayProducts(){
                $.ajax({
                url: '{{ route("dealOfTheDay") }}',
                method: "GET",
                success: function(res)
                {
                    if(res.html)
                    {
                        $('.product_data').html(res.html);
                    }
                    
                }
            });
            }            
            
            function summerTrendyProducts(){
                $.ajax({
                url: '{{ route("summerTrendy") }}',
                method: "GET",
                success: function(res){
                    bestDealProducts();
                    if(res.summer_hot){
                        $(document).find('div#tab1con').html(res.summer_hot);
                    }                    
                    if(res.summer_new)
                    {
                        $(document).find('div#tab2con').html(res.summer_new);
                    }

                    $(document).find('div.loading').addClass('d-none');
                    $(document).find('div.home-section').removeClass('d-none');

                    $(".cat-carousel").owlCarousel({
                            loop: true,
                            margin: 0,
                            responsiveClass: true,
                            dots: false,
                            nav: true,
                            autoplay: true,
                            responsive: {
                            0: {
                                items: 2,
                                nav: false,
                                dots: false,
                            },
                            450: {
                                items: 2,
                            },
                            600: {
                                items: 3,
                            },
                            1000: {
                                items: 5,
                            },
                            },
                        });
                    
                }
            });  
            }
            
            function bestDealProducts(){
                $.ajax({
                url: '{{ route("bestDeal") }}',
                method: "GET",
                success: function(res){
                    exportQualityProducts();
                    if(res.best_hot){
                        $(document).find('div#tab3con').html(res.best_hot);
                    }                    
                    if(res.best_new)
                    {
                        $(document).find('div#tab4con').html(res.best_new);
                    }

                    $(".cat-carousel").owlCarousel({
                            loop: true,
                            margin: 0,
                            responsiveClass: true,
                            dots: false,
                            nav: true,
                            autoplay: true,
                            responsive: {
                            0: {
                                items: 2,
                                nav: false,
                                dots: false,
                            },
                            450: {
                                items: 2,
                            },
                            600: {
                                items: 3,
                            },
                            1000: {
                                items: 5,
                            },
                            },
                        });
                    
                    }
                });  
            }
            
          function exportQualityProducts(){
            $.ajax({
                url: '{{ route("exportQuality") }}',
                method: "GET",
                success: function(res){
                    dealOfTheDayProducts();
                    if(res.export_hot){
                        $(document).find('div#tab5con').html(res.export_hot);
                    }                    
                    if(res.export_new)
                    {
                        $(document).find('div#tab6con').html(res.export_new);
                    }

                    $(".cat-carousel").owlCarousel({
                            loop: true,
                            margin: 0,
                            responsiveClass: true,
                            dots: false,
                            nav: true,
                            autoplay: true,
                            responsive: {
                            0: {
                                items: 2,
                                nav: false,
                                dots: false,
                            },
                            450: {
                                items: 2,
                            },
                            600: {
                                items: 3,
                            },
                            1000: {
                                items: 5,
                            },
                            },
                        });
                    
                }
            });   
          }  
        
        });
    </script>
@endpush