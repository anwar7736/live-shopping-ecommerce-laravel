@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/cart.css')}}">
@endsection
@section('content')
<section>
    <link rel="stylesheet" href="assets/css/cart.css">
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12 cart-items">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="border border-dark border-end-0 border-top-0 border-start-0">
                            <tr>
                                <th scope="col">&nbsp;</th>
                                <th scope="col">&nbsp;</th>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                        @for($i = 0; $i < 2; $i++)
                            <tr class="border border-muted border-end-0 border-top-0 border-start-0">
                                <td>
                                        <div class="remove">
                                            <button class="btn">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                </td>
                                <td>
                                    <div class="thambnail">
                                        <img src="assets/images/products/1.jpg" alt="" width="80">
                                    </div>
                                </td>
                                <td>
                                    <div class="product-name">
                                        <a href="{{route('product.details', ['id'=>$id ?? 1])}}" class="text-decoration-none text-dark">
                                            China Luxury Polo Shirt
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="product-price" data-title="Price">
                                        <p class="text-muted"><del>999৳</del> <span>250৳</span></p>
                                    </div>
                                </td>
                                <td>
                                    <div class="cart-quantiy" data-title="Quantity">
                                        <div class="quantity-buy">
                                            <div class="quantity">
                                                <button class="cart-qty-minus" id="dec" type="button" value="-">-</button>
                                                <input type="text" name="qty" id="qty" class="qty" maxlength="12" value="0" class="input-text qty" />
                                                <button class="cart-qty-plus" type="button" id="inc" value="+">+</button>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="subtotal" title="subtotal">
                                        <p class="main-color">
                                            500 ৳
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
                
            </div>
            <div class="col-lg-4 col-md-12 col-12 proceed-checkout">
                <div class="border-bold card p-3">
                    <div class="text-center">
                        <h3><b>Your Cart</b></h3>   
                    </div>
                    <div class="table-responsive cart-form">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">PRODUCT</th>
                                    <th scope="col" class="text-end">SUB TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>China Luxury Polo Shirt  × 5</td>
                                    <td class="text-end">4,450.00৳</td>
                                </tr>
                                <tr>
                                    <td>Men's Stylish leather Crafting Shoe  × 1</td>
                                    <td class="text-end">4,450.00৳</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="#" class="btn text-center d-block" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
                            <button class="text-cap">Proceed to Checkout <span><i class="fas fa-arrow-right"></i></span></button>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection