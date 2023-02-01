
  <div class="modal-dialog modal-dialog-centered checkout_final">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Cart</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      @foreach($cart_items as $key=> $item)
        <div class="cart-items mt-2">
            <div class="cart-item cart1 d-flex justify-content-between">
                <img src="{{ $item['image'] }}" alt="" width="80">
                <div class="align-item-center ps-3 quantity-buy" >
                    <p><b>
                        {{ $item['name']}}
                    </b></p>
                    <div class="quantity">
                        <button class="cart-qty-minus btn" type="button">-</button>
                        <input type="number" name="qty" min="1" max="10" value="{{ $item['quantity'] }}" class="input-text qty cart_qty" />
                        <input type="hidden" name="cart_id" value="{{ $key }}"/>
                        <button class="cart-qty-plus btn" type="button" >+</button>
                    </div>
                    @if(!empty($item['sizes']))
                    <strong class="text-sm variation-section_{{$key}}">
                      <span>Variations:</span>
                      <div class="d-flex justify-content-between">
                          @foreach($item['sizes'] as $k=> $s)
                            <div class="">
                              <label>
                                <input type="radio" {{$item['size'] == $s['id'] ? 'checked' : ''}} value="{{ $s['id'] }}" data-product="{{ $key }}" name="size[{{$key}}]" class="variation"/> {{$s['name']}}
                               
                              </label>
                            </div>
                          @endforeach 
                         
                      </div> 
                      @if(empty($item['size']))
                        <span class="text-danger size-validation">Size is required!</span>
                      @endif  
                      <br/>                    
                        <span class="text-danger stock-alert d-none"></span>
                    </strong>
                    @endif
                </div>
                <!-- <p class="price text-end">
                    <span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                    <br><del class="text-muted">850.00৳</del> <br>
                    <button class="btn"><i class="fas fa-trash-alt"></i></button>
                </p> -->

                  <div class="product-price" data-title="Price">
                      <span class="ps-1" style="color: #ff7400; font-weight: bold;">{{ number_format($item['regular_price'] ?? $item['default_price'], 2) }}৳</span>
                      <form action="{{ route('cart.destroy', $key) }}" method="POST" id="cartRemoveForm2">
                        @csrf
                        @method('DELETE')
                        <button class="btn"><i class="fas fa-trash-alt fa-sm text-danger"></i></button>
                      </form>

                  </div>
            </div>
        </div>
        @endforeach
        <hr>
        <form action="{{ route('checkout') }}" class="cart-form" method="POST" id="checkoutForm">
          @csrf
            <div class="mb-3 col-12">
                <label for="name">Your Name <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control" id="name" name="name" value="Abu bakkar" required>
            </div>
            <div class="mb-3 col-12">
                <label for="address">Your Address <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control" id="address" name="address" value="Y=15 momhadpur" required >
            </div>
            <div class="mb-3 col-12">
                <label for="phone">Your Phone <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control" id="phone" name="phone" value="01859544510" required >
            </div>
            <button class="submitBtn">Place Order <span><i class="fas fa-arrow-right"></i></span></button>
        </form>
      </div>
    </div>
  </div>
