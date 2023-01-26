<div>
                <!--modal start-->
                <div class="modal fade " id="find-store-modal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h4 class="text-center">Find in Store</h4>
                <div class="d-flex justify-content-end position-absolute top-0 end-0 p-2">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body product-popup">
                
                <div class="row" v-if="product">
                    <div class="modal-product-image col-5">
                        <div id="modal-product-image-inner" class="carousel slide" data-bs-ride="carousel"  data-bs-touch="true">
                            <div class="carousel-inner" role="listbox">                               
                                <div class="carousel-item active" v-for="image in product.images" :key="image.id">
                                    <img :src="image.image" @error="image.image='assets/images/products/default-image.jpg'" alt="" class="col-12"/> 
                                </div>  
                                <div v-if="product.images == ''">
                                    <div v-if="product.image_url">
                                        <a href="#" class="carousel-item active" v-for="image in 3" :key="image">
                                            <img :src="product.image_url" alt="Image" class="w-100 d-block"/>
                                        </a>
                                        </div>
                                    <div v-else>
                                        <a href="#" class="carousel-item active" v-for="image in 3" :key="image">
                                            <img src="assets/images/products/default-image.jpg" alt="Image" class="col-12"/>
                                        </a>
                                    </div>
                                </div>
                                <div class="carousel-item" v-if="product.video">
                                    <iframe width="100%" height="400" :src="product.video+'?autoplay=1'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                    </iframe>
                                </div>                           
                            </div>
                            <div class="row mt-2">
                                <div class="modal-product-details col-6 pt-3" v-if="product.variation">
                                <a href="#" class="text-decoration-none text-dark">
                                    <strong>{{product.product ?? product.default_name}}</strong>
                                </a>
                                <h6 class="price pt-3">
                                    <div class="price" v-if="product.regular_price > 0">
                                <del class="text-muted">{{ Number(product.variation.default_sell_price).toFixed(2)}}৳
                                </del>
                                <span class="ps-1" style="color: #ff7400; font-weight: bold;">{{Number(product.regular_price).toFixed(2)}}৳</span>
                                </div>                            
                                <div class="price" v-else>
                                    <span class="ps-1" style="color: #ff7400; font-weight: bold;">{{Number(product.variation.default_sell_price).toFixed(2)}}৳</span>
                                </div>
                                </h6>
                                <p class="text-sm" v-html="product.description">
                                </p>                        
                                <strong class="text-sm" v-if="product.type === 'variable'">
                                    <span>Variations:</span>                                   
                                    <div class="d-flex justify-content-between">
                                        <div class="" v-for="v in variations" :key="v.id" @click="changeSize(v.id)">
                                        <label>
                                            <input type="radio" :value="v.id" v-model="size" class="size"/> {{v.name}}
                                        </label>
                                        </div>

                                    </div>
                                </strong><br/>
                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-product-details outofstock col-7 pt-3" v-if="details.length > 0">
                        <div class="row" v-for="row in details" :key="row">
                            <strong>{{row.location.name}}</strong>
                            <p>{{row.location.landmark}}</p>
                            <strong class="bg-dark p-2 text-danger text-center" v-if="Number(row.qty_available) <=0 ">Out of stock</strong>
                            <p class="bg-dark p-2 text-white text-center" v-else>Only {{qtyCal(row.qty_available) }} pcs available</p>                            
                        </div>                        
                        
                    </div>                    
                    <div class="modal-product-details outofstock col-6 pt-3" v-else>
                        <div class="row" v-for="row in locations" :key="row">
                            <strong>{{row.location.name}}</strong>
                            <p>{{row.location.landmark}}</p>
                            <strong class="bg-dark p-2 text-danger text-center" v-if="Number(row.qty_available) <=0 ">Out of stock</strong>
                            <p class="bg-dark p-2 text-white text-center" v-else>Only {{qtyCal(row.qty_available)}} pcs available</p>       
                        </div>                        
                        
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</div>