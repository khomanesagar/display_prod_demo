<div class="modal-header">
                <h3 class="modal-title"><?php print $productInfo['name'];?></h3>
                <a href="#" data-dismiss="modal" class="class pull-right"><i class="fa fa-times"></i></a>
                
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img src="<?php print HTTP_CATALOG_IMAGE_PATH.$productInfo['image'];?>" class="img-responsive">
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>SKU: <span><?php print $productInfo['sku'];?></span></h4>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star disable"></li>
                            (10 reviews)

                        </ul>
                        <p><?php print $productInfo['description'];?></p>
                        <h3 class="cost">$</span> <?php print $productInfo['price'];?><small class="pre-cost">$<?php print $productInfo['price'];?></small></h3>

                        <div class="space-ten"></div>
                        <div class="btn-ground">
                            <button type="button" class="btn btn-primary item-add-to-cart item-quick-add-on-cart" id="AddToCartText" data-productid="<?php print $productInfo['product_id'];?>"><i class="fa fa-shopping-cart"></i> Add To Cart</button>
                            <button type="button" class="btn btn-primary"><i class="fa fa-heart"></i> Add To Wishlist</button>
                        </div>
                    </div>
                </div>
            </div>