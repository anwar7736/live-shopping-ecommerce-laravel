@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/about.css')}}">
@endsection
@section('content')
<section>
            <div class="container about mt-5 mb-5">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <img src="assets/images/others/about-us-3-image-1.jpg" alt="About Us" class="col-12">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 about-det">
                        <h6 class="sub-title pb-4">KNOW MORE</h6>
                        <h3 class="title pb-4">About Live Shopping</h3>
                        <p class="border border-top-0 border-end-0 border-start-0 border-muted pb-4 about-dec">
                            Hi, we have just started. Live Shopping is one of the fastest-growing trendy fashion lifestyle brands in Bangladesh. We aimed to serve our customers with international products and at the best price.
                        </p>
                        <div class="social-icons text-end">
                            <a href="#" class="m-1 btn btn-circle btn-secondary text-light facebook">
                                <span>
                                    <i class="fab fa-facebook-f"></i>
                                </span>
                            </a>
                            <a href="#" class="m-1 btn btn-circle btn-secondary text-light twitter">
                                <span>
                                    <i class="fab fa-twitter"></i>
                                </span>
                            </a>
                            <a href="#" class="m-1 btn btn-circle btn-secondary text-light pinterest">
                                <span>
                                    <i class="fab fa-pinterest-p"></i>
                                </span>
                            </a>
                            <a href="#" class="m-1 btn btn-circle btn-secondary text-light linkedin">
                                <span>
                                    <i class="fab fa-linkedin-in"></i>
                                </span>
                            </a>
                            <a href="#" class="m-1 btn btn-circle btn-secondary text-light telegram">
                                <span>
                                    <i class="fab fa-telegram-plane"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection