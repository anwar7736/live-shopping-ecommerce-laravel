<div class="owl-carousel cat-carousel product-items">
    @foreach($new_arrival as $new)
        @include('components.carousel_slider', ['product'=>$new])
    @endforeach
</div>