<?php require APPROOT . '/views/inc/header.php'; ?>

   
<!-- Open Content -->
<section class="bg-light">
<div class="container pb-5">
<div class="row">
<div class="col-lg-5 mt-5">
<div class="card pb-2 pt-2">
<img class="card-img img-fluid" src="<?= URLROOT. $data['product']->img ?>" alt="Card image cap" id="product-detail">
</div>

</div>
<!-- col end -->
<div class="col-lg-7">
<div class="card">
<div class="card-body">
<h1 class="h2"><?= $data['product']->brand . ' ' . $data['product']->model ?></h1>
<p class="h3 py-2">&#8358;<?= $data['product']->price ?>.00</p>

<h6>Description:</h6>
<p><?= $data['product']->description ?></p>
<ul class="list-inline">
<li class="list-inline-item">
<h6>Avaliable Color :</h6>
</li>
<li class="list-inline-item">
<p class="text-muted"><strong><?= $data['product']->color ?></strong></p>
</li>
</ul>

<form action="<?php echo URLROOT; ?>/products/addtocart" method="POST">
<input type="hidden" name="id" id="quantity" value="<?=$data['product']->id?>">
<input type="hidden" name="title" value="<?=$data['product']->brand?>">
<input type="hidden" name="title" value="<?=$data['product']->model?>">
<input type="hidden" name="desc" value="<?=$data['product']->description?>">
<input type="hidden" name="picture" value="<?=$data['product']->img?>">
<input type="hidden" name="price" value="<?=$data['product']->price?>">
<input type="hidden" name="color" value="<?=$data['product']->color?>">
<input type="hidden" name="condition" value="<?=$data['product']->cond_tion?>">
<div class="row">
<div class="col-auto">
<ul class="list-inline pb-3">
    <p>Choose Quantity</p> 
<li class="list-inline-item text-right">
Quantity
<input type="number" id="quantity" name="quantity" style="width: 16%; border: 3px solid grey;border-radius:25%;" value="1" min="1" class="">
</li>
</ul>
</div>
</div>
<div class="row pb-3">
<div class="col d-grid">
<button type="submit" class="btn btn-success btn-lg">Buy</button>
</div>
<div class="col d-grid">
<button type="submit" class="btn btn-success btn-lg">Add To Cart</button>
</div>
</div>
</form>

</div>
</div>
</div>
</div>
</div>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>
