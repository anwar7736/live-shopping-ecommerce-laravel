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
    <div class="loading">
        @include('components.loading')
    </div>
    <div class="container mt-5 mb-5 home-product-d-d">
        <div class="row deal-day-row product_data">
            
        </div>
    </div>
</section>
@endsection
@push('js')
<script>
    $(document).ready(function(){
        $(document).find('div.loading').removeClass('d-none');
        $.ajax({
            url: '{{ route("flash_sell_product") }}',
            method: "GET",
            success: function(res)
            {
                if(res.html)
                {
                    $(document).find('div.loading').addClass('d-none');
                    $('.product_data').html(res.html);
                }
                
            }
        });
    });
</script>
@endpush