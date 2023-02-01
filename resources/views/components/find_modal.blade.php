<div>
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header border-0">
    <h4 class="text-center">Find in Store</h4>
    <div class="d-flex justify-content-end position-absolute top-0 end-0 p-2">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    </div>
    <div class="modal-body product-popup">

    <div class="row">
        <div class="modal-product-image col-5">
            <div id="modal-product-image-inner" class="carousel slide" data-bs-ride="carousel"  data-bs-touch="true">
            <div class="carousel-inner" role="listbox">
                {{--@if($product['image_url'])
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
                @endif--}}
                </div>
                <div class="row mt-2">
                    <div class="modal-product-details col-6 pt-3" >
                    <a href="#" class="text-decoration-none text-dark">
                        <strong></strong>
                    </a>
                    <h6 class="price pt-3">
                        <div class="price" v-if="product.regular_price > 0">
                    <del class="text-muted">৳
                    </del>
                    <span class="ps-1" style="color: #ff7400; font-weight: bold;">৳</span>
                    </div>                            
                    <div class="price">
                        <span class="ps-1" style="color: #ff7400; font-weight: bold;">৳</span>
                    </div>
                    </h6>
                    <p class="text-sm">
                    </p>                        
                    <strong class="text-sm">
                        <span>Variations:</span>                                   
                        <div class="d-flex justify-content-between">
                            <div class="">
                            <label>
                                <input type="radio" class="size"/>
                            </label>
                            </div>

                        </div>
                    </strong><br/>
            
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-product-details outofstock col-7 pt-3">
            <div class="row">
                <strong></strong>
                <p></p>
                <strong class="bg-dark p-2 text-danger text-center">Out of stock</strong>
                <p class="bg-dark p-2 text-white text-center">Only pcs available</p>                            
            </div>                        
            
        </div>                    
        <div class="modal-product-details outofstock col-6 pt-3">
            <div class="row">
                <strong></strong>
                <p></p>
                <strong class="bg-dark p-2 text-danger text-center">Out of stock</strong>
                <p class="bg-dark p-2 text-white text-center">Only pcs available</p>       
            </div>                        
            
        </div>
    </div>


    </div>
    </div>
    </div>