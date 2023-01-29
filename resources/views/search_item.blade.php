@extends('layouts.app')
@section('css')
<style>
    .deal-day-row{
        border-left: 0;
    }
    .deal-day-row .product{
        border-right: 0 !important;
        border-bottom: 0 !important;
        border-top: 0 !important;
        height: auto !important;
    }
</style>
@endsection
@section('content')
<section>
    <h4 class="text-center mt-3">All Searching Products</h4>
    <hr>
    <div class="container mt-5 mb-5">
        <div class="row deal-day-row">
            @forelse($products as $product)
                @include('components.product_view', [
                    'class'=> 'col-lg-3 col-md-3 col-6 product p-2',
                    'product' => $product
                    ])
            @empty
            <h4 class="text-center mt-3 text-danger">No Product Found!</h4>
            @endforelse
        </div>
    </div>
</section>
@endsection