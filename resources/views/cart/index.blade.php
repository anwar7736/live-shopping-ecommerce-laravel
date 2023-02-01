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
            <table class="table cart_table">
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
                    
                @forelse($cart as $key=> $item)
                    <tr class="border border-muted border-end-0 border-top-0 border-start-0 cart-row">
                        <td>
                                <form action="{{ route('cart.destroy', $key) }}" method="POST" id="cartRemoveForm">
                                    @csrf
                                    @method('DELETE')
                                    <div class="remove">
                                        <button class="btn">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </form>
                        </td>
                        <td>
                            <div class="thambnail">
                                <img src="{{ $item['image'] }}" alt="" width="80">
                            </div>
                        </td>
                        <td>
                            <div class="product-name">
                                <a href="{{route('product.details', ['id'=>$key ?? 1])}}" class="text-decoration-none text-dark">
                                    {{ $item['name'] }}
                                </a>
                            </div>
                        </td>
                        <td>
                            @if($item['regular_price'] && $item['regular_price'] != $item['default_price'])
                            <div class="product-price" data-title="Price">
                                <p class="text-muted"><del>{{ number_format($item['default_price'], 2) }}৳</del> <span>{{ number_format($item['regular_price'], 2) }}৳</span></p>
                            </div>
                            @else
                            <div class="product-price" data-title="Price">
                                <span>{{ number_format($item['default_price'], 2) }}৳</span>
                            </div>
                            @endif
                        </td>
                        <td>
                            <div class="cart-quantiy" data-title="Quantity">
                                <div class="quantity-buy">
                                    <div class="quantity">
                                        <button class="cart-qty-minus" type="button">-</button>
                                        <input type="number" name="qty[]" min="1" max="10" value="{{ $item['quantity'] }}" class="input-text qty cart_qty" />
                                        <input type="hidden" name="cart_id" value="{{ $key }}"/> 
                                        <button class="cart-qty-plus" type="button">+</button>
                                        
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="subtotal" title="subtotal">
                                <p class="main-color total">
                                {{ $item['quantity'] * $item['regular_price'] ?? $item['default_price'] }}৳
                                </p>
                            </div>
                        </td>
                    </tr>
                @empty
                <tr>
                    <td colspan="6">
                        <div class="mt-5">
                            <center>
                                <h4 class="text-danger"><i class="fa fa-shopping-cart"></i> No item found in your cart list</h4>
                                <a href="{{ route('shop') }}" class="btn text-light mt-3" style="background-color:#ed6c00;">
                                    RETURN TO SHOP
                                </a>
                            </center>
                        </div>
                    </td>
                </tr>
                @endforelse
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
                <table class="table cart_summary">
                    <thead>
                        <tr>
                            <th scope="col">PRODUCT</th>
                            <th scope="col" class="text-end">SUB TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $key=> $item)
                            <tr>
                                <td>{{ $item['name'] }}  × {{ $item['quantity'] }}</td>
                                <td class="text-end">{{ $item['quantity'] * $item['regular_price'] ?? $item['default_price'] }}৳</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="" class="btn text-center d-block checkOutBtn">
                    <button class="text-cap">Proceed to Checkout <span><i class="fas fa-arrow-right"></i></span></button>
                </a>
            </div>
            
        </div>
    </div>
</div>
</div>
</section>
@endsection