<?php $this->load->view('templates/primary_header'); ?>
<?php
$cart_check = $this->cart->contents();
?>
   <?php if(!empty($breadcrumbs) && count($breadcrumbs)>0) {?>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <?php foreach($breadcrumbs as $key=>$element) {?>
                <li class="breadcrumb-item"><a href="<?php print $element;?>"><?php print $key;?></a></li>
            <?php } ?>
          </ol>
        </nav>
        <?php } ?>
    
<div class="wrapper">

        <main>
            <div id="shopify-section-product-template" class="shopify-section">
                <div class="single-product-area mt-80 mb-80">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="product-details-large" id="ProductPhoto">
                                    <img id="ProductPhotoImg" class="product-zoom" alt="<?php print $productInfo['name']; ?>" data-zoom-image="<?php print HTTP_CATALOG_IMAGE_PATH.$productInfo['image'];?>" src="<?php print HTTP_CATALOG_IMAGE_PATH.$productInfo['image'];?>">
          
                                </div>
                                <div id="ProductThumbs" class="product-thumbnail owl-carousel">
                                    <a href="javascript:void();" data-image="<?php print HTTP_CATALOG_IMAGE_PATH.$productInfo['image'];?>" data-zoom-image="<?php print HTTP_CATALOG_IMAGE_PATH.$productInfo['image'];?>">
                                    <img src="<?php print HTTP_CATALOG_IMAGE_PATH.$productInfo['image'];?>" alt="<?php print $productInfo['name']; ?>"></a>
                                    <?php foreach($productImage as $value) { ?>
                                        <a href="javascript:void();" data-image="<?php print HTTP_CATALOG_IMAGE_PATH.$value['image'];?>" data-zoom-image="<?php print HTTP_CATALOG_IMAGE_PATH.$value['image'];?>">
                                    <img src="<?php print HTTP_CATALOG_IMAGE_PATH.$value['image'];?>" alt="<?php print $productInfo['name']; ?>"></a>
                                    <?php } ?>
                                    
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="single-product-content">
                                    <form method="post" id="AddToCartForm" accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data">
                                        <input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" />
                                        <div class="product-details">
                                            <h1 class="single-product-name"><?php print $productInfo['name']; ?></h1>
                                            <div class="single-product-reviews">
                                                <span class="shopify-product-reviews-badge" data-id="1912078270534"></span>
                                            </div>
                                            <div class="product-sku">SKU: <span class="variant-sku"><?php print $productInfo['sku']; ?></span></div>
                                            <div class="single-product-price">
                                                <div class="product-discount"><span  class="price" id="ProductPrice"><span class=money>$<?php print $productInfo['price']; ?></span></span></div>
                                            </div>
                                            <div class="product-info"><?php print $productInfo['description']; ?></div>
                          
                                            <div class="single-product-action">
                                                
                                                
                                                <div class="product-add-to-cart">
                                                    <span class="control-label">Quantity</span>
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" id="add-cart-qty" type="number" min="1" name="quantity" value="1">
                                                    </div>
                                                    <div class="add">
                                                        <button type="button" class="add-to-cart ajax-spin-cart" id="AddToCart">
                                                            <i class="ion-bag"></i>
                                                            <span class="list-cart-title cart-title item-add-to-cart" id="AddToCartText" data-productid="<?php print $productInfo['product_id'];?>">Add to cart</span>
                                                        </button>
                                                        

                                                        <div class="single-product-wishlist">                    
                                                            <a class="add-to-cart action-wishlist wishlist" href="#" title="Wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="secure-payment"></div>                                                                  
                                            </div>                                                        
                                        </div>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </main>
    </div>
   


<?php $this->load->view('templates/primary_footer'); ?>
