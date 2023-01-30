<div class="owl-carousel cat-carousel product-items">
    @foreach($hot_products as $hot)
        @include('components.carousel_slider', ['product'=>$hot])
    @endforeach
</div>