<div class="product p-2">
    <div class="images">
        @if(calculateDiscount($product) > 0)
            <div class="discount-tag">
                - {{calculateDiscount($product)}}%
            </div>
        @endif
        <a href="{{route('product.details', ['id'=>$product['id']])}}">
            <img src="{{$product['image_url']}}" alt="Image" class="main-image">
        </a>
    </div>
    <div class="options-pannel">
        <ul>
            <li class="d-lg-block d-md-block d-none" title="Compare">
                <a href="#" class="compare" >
                    <i class="fas fa-random"></i>
                </a>
            </li>
            <li class="d-lg-block d-md-block d-none" title="Quick View">
                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal">
                    <i class="fas fa-search"></i>
                </a>
            </li>
            <li title="Add To Wishlist">
                <a href="compare.html" class="compare">
                    <i class="far fa-heart"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="product-details text-center pt-2">
        <a href="{{route('product.details', ['id'=>$product['id']])}}" class="text-dark" style="text-decoration: none; font-weight: 600;">{{$product['product'] ?? $product['default_name']}}</a>
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
            <div class="button m-auto text-light" >
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