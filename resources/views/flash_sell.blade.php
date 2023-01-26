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
            <div class="container mt-5 mb-5">
                <div class="row deal-day-row">
                    @foreach($sales as $sale)
                        @include('components.product_view', ['product'=>$sale])
                    @endforeach
                </div>
            </div>
        </section>
        @endsection