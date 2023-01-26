<div class="{{$class ?? 'col-lg-3 col-md-4 col-6 product p-2'}}">
    <div class="options-pannel2">
        <ul>
            <li class="d-lg-block d-md-block d-none" title="compare">
                <a href="#" class="compare" >
                    <i class="fas fa-random"></i>
                </a>
            </li>
            <li title="Quick View" class="d-lg-block d-md-block d-none">
                <a href="#" class="compare" data-bs-toggle="modal" data-bs-target="#product-modal" >
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
        <div class="discount-tag {{ calculateDiscount($product) <= 0 ? 'd-none' : ''}}">
            - {{calculateDiscount($product)}}%
        </div>
        <a href="{{route('product.details', ['id'=>$product['id']])}}">
            <img src="{{$product['image_url']}}" alt="" class="main-image">
        </a>
    </div>
    
    <div class="product-details text-center pt-2">
        <a href="{{route('product.details', ['id'=>$id ?? 1])}}" class="text-dark" style="text-decoration: none; font-weight: 600;">{{$product['product'] ?? $product['default_name']}}</a>
        <div class="price {{$product['regular_price'] > 0 && $product['regular_price'] != $product['variation']['default_sell_price'] ? '' : 'd-none'}}">
            <del class="text-muted">{{ number_format($product['variation']['default_sell_price'], 2) }}৳
            </del>
            <span class="ps-1" style="color: #ff7400; font-weight: bold;">{{ number_format($product['regular_price'], 2) }}৳</span>
            </div>                            
        <div class="price {{$product['regular_price'] <= 0 || $product['regular_price'] == $product['variation']['default_sell_price'] ? '' : 'd-none'}}">
        <span class="ps-1" style="color: #ff7400; font-weight: bold;">{{(number_format($product['variation']['default_sell_price'], 2))}}৳</span>
        </div>
        <a href="#" data-bs-toggle="modal" data-bs-target="#buy-to-cart">
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