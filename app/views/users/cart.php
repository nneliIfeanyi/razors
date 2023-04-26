<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row container text-center">
<div class="col-lg-9">
<div class="row">
<?php flash('cart_msg');?>
<?php flash('cart_success');?>
<h1 class="h2 text-success">My Cart</h1>
<?php 
foreach($data['products'] as $product) :
?>
<div class="col-md-4">
<div class="card mb-4 product-wap rounded-0">
<div class="card rounded-0">
<img class="card-img rounded-0 img-fluid" src="<?php echo URLROOT . $product->img; ?>">
<div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
<ul class="list-unstyled">
<li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
<li><a class="btn btn-success text-white mt-2" href="<?=URLROOT?>/products/view_p/<?=$product->id?>"><i class="far fa-eye"></i></a></li>
<li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
</ul>
</div>
</div>

<div class="card-body">
<a href="shop-single.html" class="h3 text-decoration-none"><?php echo $product->title; ?></a>
<ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
<li class="text-muted lead"><?php echo $product->description; ?></li>
<li class="pt-2">
<span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
<span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
<span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
<span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
<span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
</li>
</ul>

<p class="text-center mb-0">&#8358;<?php echo $product->price; ?>.00</p>
</div>

</div>
</div>
<?php 
endforeach; ?>
</div>
</div>

</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
