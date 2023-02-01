@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/compare.css')}}">
@endsection
@section('content')
<section>
            <div class="container mt-5 mb-5">
                <h4><b>Compare Products</b></h4>
                <div class="row compare-row">
                    @for($i = 0; $i < 2; $i++)
                        <div class="col-lg-6 col-md-6 compare-item">
                            <div class="text-center m-2">
                                <button class="text-center btn btn-sm"><i class="fas fa-times"></i> Remove</button>
                            </div>
                            <a href="{{route('product.details', ['id'=>$id ?? 1])}}" class="text-decoration-none">
                                <img src="assets/images/products/1.jpg" alt="" >
                                <div class="nav-link text-dark p-1">
                                    <b>China Style Men's T-Shirt</b>
                                </div>
                            </a>
                                <div class="price">
                                    <del class="text-muted">850.00৳</del><span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                                </div>
                                <div class="quantity-buy p-1 ps-0">
                                    
                                    <button class="btn">Buy</button>
                                </div>
                                <p>
                                    Live Shopping is one of the fastest-growing trendy fashion lifestyle brands in Bangladesh. We have just started! We aimed to serve our customers with international products at a competitive price range. We deliver premium quality and 100% QC pass products. Live Shopping means Exact Shopping
                                </p>
                                <p>SKU: 0630</p>
                                <p>In Stock</p>
                        </div>
                    @endfor
                </div>
                
            </div>
        </section>
@endsection