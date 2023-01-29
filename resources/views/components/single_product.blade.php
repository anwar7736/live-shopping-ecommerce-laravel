<div class="row deal-day-row">
    @foreach($products as $product)
        @include('components.product_view', ['product'=>$product])
    @endforeach
</div>