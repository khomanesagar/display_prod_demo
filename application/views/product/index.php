<?php $this->load->view('templates/primary_header'); ?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background-color: white;">
		<li class="breadcrumb-item"><a href="#">Product List</a></li>
  </ol>
</nav>

<div class="container">
    <div class="row">
<?php if(!empty($products)) { ?>
    <?php foreach($products as $key=>$element) {?>

        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="<?php print HTTP_IMAGES_PATH;?>product/<?php print $element['image'];?>">
                        <img class="pic-2" src="<?php print HTTP_IMAGES_PATH;?>product/<?php print $element['image'];?>">
                    </a>
                </div>
                <div class="product-content" style="bottom: 15px;">
                    <h3 class="title"><a href="#"><?php print $element['name'];?></a></h3>
                    <div class="price">₹<?php print $element['price'];?></div>
                </div>
            </div>
             </div>

<?php } ?>
<?php } ?>
       </div>
    </div>

<?php $this->load->view('templates/primary_footer'); ?>
