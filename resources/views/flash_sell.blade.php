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
        <div class="row deal-day-row product_data">
            
        </div>
    </div>
</section>
@endsection
@push('js')
<script>
    $(document).ready(function(){
        $.ajax({
            url: '{{ route("flash_sell_product") }}',
            method: "GET",
            success: function(res)
            {
                if(res.html)
                {
                    $('.product_data').html(res.html);
                }
                
            }
        });
    });
</script>
@endpush