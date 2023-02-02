<div class="{{$class ?? 'col-lg-3 col-md-4 col-6 product p-2'}}">
    <div class="options-pannel2">
        <ul>
            <li class="d-lg-block d-md-block d-none" title="compare">
                <a href="#" class="compare" >
                    <i class="fas fa-random"></i>
                </a>
            </li>
            <li title="Quick View" class="d-lg-block d-md-block d-none">
                <a href="{{ route('product_by_id', $product['id']) }}" class="compare quick-view">
                    <i class="fas fa-search"></i>
                </a>
            </li>
            <li title="Add To Wishlist">
                <a href="#" class="compare">
                    <i class="far fa-heart"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="images">
        @if(calculateDiscount($product) > 0)
            <div class="discount-tag">
                - {{calculateDiscount($product)}}%
            </div>
        @endif
        <a href="{{route('product.details', ['id'=>$product['id']])}}">
            <img src="{{$product['image_url']}}" alt="" class="main-image">
        </a>
    </div>
    
    <div class="product-details text-center pt-2">
        <div class="slider-product-title">
        <a href="{{route('product.details', ['id'=>$product['id']])}}" class="text-dark" style="text-decoration: none; font-weight: 600;">{{$product['product'] ?? $product['default_name']}}</a>
        </div>
        @if($product['regular_price'] > 0 && $product['regular_price'] != $product['variation']['default_sell_price'])
            <div class="price pt-3">
            <del class="text-muted">{{ number_format($product['variation']['default_sell_price'], 2) }}৳
            </del>
            <span class="ps-1" style="color: #ff7400; font-weight: bold;">{{ number_format($product['regular_price'], 2) }}৳</span>
            </div> 
        @else
            <div class="price pt-3">
            <span class="ps-1" style="color: #ff7400; font-weight: bold;">{{(number_format($product['variation']['default_sell_price'], 2))}}৳</span>
            </div>
        @endif
            <a href="" class="add_to_cart">
                <input type="hidden" name="product" value="{{ $product['id'] }}">
                <div class="button m-auto text-light">
                    <p><b>
                        BUY NOW
                    </b></p>
                    <span>
                        <i class="fas fa-shopping-cart"></i>
                    </span>
                
                </div>
            </a>

    </div>
</div>
<div class="modal fade " id="product-modal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
</div>
