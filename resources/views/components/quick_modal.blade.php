    @php 
        $variations = $product['variations'];
        $product = $product['product'];
    @endphp
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <div class="d-flex justify-content-end position-absolute top-0 end-0 p-2">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body product-popup">
                <div class="row">
                    <div class="modal-product-image col-6">
                        <div id="modal-product-image-inner" class="carousel slide" data-bs-ride="carousel"  data-bs-touch="true">
                            <div class="carousel-inner" role="listbox">
                            @if($product['image_url'])
                                <div data-hash="slide1">
                                    <a data-fancybox="gallery" data-src="{{$product['image_url']}}">
                                        <img src="{{$product['image_url']}}" class="w-100 d-block" alt="">
                                    </a>
                                </div>
                            @else
                                <div data-hash="slide2">
                                    <a data-fancybox="gallery" data-src="assets/images/products/default-image.jpg">
                                        <img src="assets/images/products/default-image.jpg" class="w-100 d-block" alt="">
                                    </a>
                                </div>
                            @endif
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#modal-product-image-inner" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#modal-product-image-inner" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <a href="{{route('product.details', ['id'=>$product['id'] ?? 1])}}" class="btn col-12 view_details">View Details</a>
                    </div>
                    <div class="modal-product-details col-6 pt-3">
                        <a href="{{route('product.details', ['id'=>$product['id'] ?? 1])}}" class="text-decoration-none text-dark">
                            <h3 class="product_name">{{$product['product'] ?? $product['default_name']}}</h3>
                        </a>
                        <div class="price {{$product['regular_price'] > 0 && $product['regular_price'] != $product['variation']['default_sell_price'] ? '' : 'd-none'}}">
                            <del class="text-muted">{{ number_format($product['variation']['default_sell_price'], 2) }}৳
                            </del>
                            <span class="ps-1" style="color: #ff7400; font-weight: bold;">{{ number_format($product['regular_price'], 2) }}৳</span>
                            </div>                            
                        <div class="price {{$product['regular_price'] <= 0 || $product['regular_price'] == $product['variation']['default_sell_price'] ? '' : 'd-none'}}">
                        <span class="ps-1" style="color: #ff7400; font-weight: bold;">{{(number_format($product['variation']['default_sell_price'], 2))}}৳</span>
                        </div>
                        <p class="text-sm description">
                            {!! $product['description'] !!}
                        </p>
                        <form method="POST" action="{{ route('cart.store') }}" id="cartForm">
                            @csrf
                        @if($product['type'] == 'variable')
                            <strong class="text-sm">
                                <span>Variations:</span>
                                <div class="d-flex justify-content-between">
                                    @foreach($variations as $v)
                                        <div class="">
                                            <label><input type="radio" value="{{$v['id']}}" name="variation" class="variation"/> {{$v['name']}}</label>
                                        </div>
                                    @endforeach
                                </div>

                            </strong><br/>
                        @endif
                        <div class="quantity-buy d-flex">
                            <div class="quantity">
                                <button class="cart-qty-minus" class="dec" type="button">-</button>
                                <input type="text" name="qty" max="10" value="1" class="input-text qty" />
                                <button class="cart-qty-plus" type="button" class="inc">+</button>
                                
                            </div>
                            <input type="hidden" name="product" value="{{$product['id']}}">
                            <button type="submit" class="btn cart_btn">Add To Cart</button>
                        </form>
                        </div>
                        <hr>
                        <p><b>SKU:</b> {{ $product['sku'] ?? '' }}</p>
                        <p><b>Category: </b> {{ $product['category'] ?? '' }}</p>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
