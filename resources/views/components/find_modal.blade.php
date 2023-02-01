<div>
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header border-0">
    <h4 class="text-center">Find In Store</h4>
    <div class="d-flex justify-content-end position-absolute top-0 end-0 p-2">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    </div>
    <div class="modal-body product-popup">

    <div class="row">
        <div class="modal-product-image col-5">
            <div id="modal-product-image-inner" class="carousel slide" data-bs-ride="carousel"  data-bs-touch="true">
            <div class="carousel-inner" role="listbox">
            @if($product['image_url'])
                <div>
                    <a data-src="#">
                        <img src="{{$product['image_url']}}" class="w-100 d-block" alt="">
                    </a>
                </div>
            @else
                <div>
                    <a data-src="#">
                        <img src="assets/images/products/default-image.jpg" class="w-100 d-block" alt="">
                    </a>
                </div>
            @endif
                </div>
                <div class="mt-2">
                    <div class="modal-product-details col-8" >
                    <p class="text-decoration-none text-dark">
                        <strong>{{ $product['name_for_ecom'] ?? $product['name'] }}</strong>
                    </p>                    
                    @if($product['ecommerce_price'] > 0 && $product['ecommerce_price'] != $product['variation']['default_sell_price'])
                        <div class="price">
                        <del class="text-muted">{{ number_format($product['variation']['default_sell_price'], 2) }}৳
                        </del>
                        <span class="ps-1" style="color: #ff7400; font-weight: bold;">{{ number_format($product['ecommerce_price'], 2) }}৳</span>
                        </div> 
                    @else
                        <div class="price">
                        <span class="ps-1" style="color: #ff7400; font-weight: bold;">{{(number_format($product['variation']['default_sell_price'], 2))}}৳</span>
                        </div>
                    @endif  
                    @if($product['sku'])
                    <p class="text-decoration-none text-dark">
                        <strong>SKU: </strong> <span>{{ $product['sku']}}</span>
                    </p>
                    @endif                  
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-product-details outofstock col-7 pt-3">
            @forelse($locations as $key => $location)
            <div class="row">
                <strong>{{ $location['name'] }}</strong>
                <p>{{ $location['landmark'] ?? '' }}</p>
                <p class="bg-dark p-2 text-white text-center">Stock {{ number_format($location['total_qty'], 0) }} pcs available</p>                            
            </div>
            @empty
            <div class="row">
                <strong class="bg-dark p-2 text-danger text-center">No Location Found!</strong>                            
            </div>
            @endforelse
        </div>                    
    </div>


    </div>
    </div>
    </div>