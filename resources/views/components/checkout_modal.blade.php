<div class="modal fade" id="buy-to-cart" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Cart</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="cart-items">
            <div class="cart-item cart1 d-flex justify-content-between">
                <img src="assets/images/products/1.jpg" alt="Product Image" width="80">
                <div class="align-item-center ps-3 quantity-buy" >
                    <p><b>
                        China Stylish Men's T-Shirt
                    </b></p>
                    <div class="quantity">
                        <button class="cart-qty-minus btn" id="dec" type="button" value="-">-</button>
                        <input type="text" name="qty" id="qty" class="qty" maxlength="12" value="0" class="input-text qty" />
                        <button class="cart-qty-plus btn" type="button" id="inc" value="+">+</button>
                        
                    </div>
                </div>
                <p class="price text-end">
                    <span class="ps-1" style="color: #ff7400; font-weight: bold;">750.00৳</span>
                    <br><del class="text-muted">850.00৳</del> <br>
                    <button class="btn"><i class="fas fa-trash-alt"></i></button>
                </p>
            </div>
        </div>
        <hr>
        <form action="" class="cart-form">
            <div class="mb-3 col-12">
                <label for="name">Your Name <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3 col-12">
                <label for="address">Your Address <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="mb-3 col-12">
                <label for="phone">Your Phone <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <button>Place Order <span><i class="fas fa-arrow-right"></i></span></button>
        </form>
      </div>
    </div>
  </div>
</div>