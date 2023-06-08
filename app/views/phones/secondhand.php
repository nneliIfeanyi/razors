<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="mx-auto"><?php flash('login_success'); ?></div>

<!-- Start Banner Hero -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
<ol class="carousel-indicators">
<li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
<!--<li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>-->
<li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<div class="container">
<div class="row p-5">
<div class="mx-auto col-md-8 col-lg-6 order-lg-last">
<img class="img-fluid" src="<?php echo URLROOT; ?>/img/hui.png" alt="">
</div>
<div class="col-lg-6 mb-0 d-flex align-items-center">
<div class="text-align-left align-self-center">
<h1 class="h1 text-success"><?=$data['title']?></h1>
<h3 class="h2">All about SmartPhones..</h3>
<p>
Buy Phones online, Phone Accessories & Phone Reapairs.  
</p>
</div>
</div>
</div>
</div>
</div>
<!--<div class="carousel-item">
<div class="container">
<div class="row p-5">
<div class="mx-auto col-md-8 col-lg-6 order-lg-last">
<img class="img-fluid" src="./assets/img/banner_img_02.jpg" alt="">
</div>
<div class="col-lg-6 mb-0 d-flex align-items-center">
<div class="text-align-left">
<h1 class="h1">Proident occaecat</h1>
<h3 class="h2">Aliquip ex ea commodo consequat</h3>
<p>
You are permitted to use this Zay CSS template for your commercial websites. 
You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of template collection websites.
</p>
</div>
</div>
</div>
</div>
</div>-->
<div class="carousel-item">
<div class="container">
<div class="row p-5">
<div class="mx-auto col-md-8 col-lg-6 order-lg-last">
<img class="img-fluid" src="<?php echo URLROOT; ?>/img/img1.jpeg" alt="">
</div>
<div class="col-lg-6 mb-0 d-flex align-items-center">
<div class="text-align-left">
<h1 class="h2"><?=$data['title']?></h1>
<h3 class="h1 text-success">Phone Repairs</h3>
<p>
Meet Professional SmartPhone Technicians For To Resolve Your Maintenance Issues. 
</p>
</div>
</div>
</div>
</div>
</div>
</div>
<a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
<i class="fa fa-chevron-left"></i>
</a>
<a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
<i class="fa fa-chevron-right"></i>
</a>
</div>
<!-- End Banner Hero -->

<!-- Start Categories of The Month 
<section class="container py-5">
<div class="row text-center pt-3">
<div class="col-lg-6 m-auto">
<h1 class="h1">Service Categories</h1>
<p>

</p>
</div>
</div>
<div class="row">
<div class="col-12 col-md-4 p-5 mt-3">
<a href="#"><img src="<?php echo URLROOT; ?>/img/spk10pro.png" class="img-fluid"></a>
<h5 class="text-center mt-3 mb-3">SmartPhones</h5>
<p class="text-center"><a href="<?=URLROOT?>/pages/shop" class="btn btn-success">Go Shop</a></p>
</div>
<div class="col-12 col-md-4 p-5 mt-3">
<a href="#"><img src="<?php echo URLROOT; ?>/img/img2.jpeg" class="img-fluid"></a>
<h2 class="h5 text-center mt-3 mb-3">Accessories</h2>
<p class="text-center"><a href="<?=URLROOT?>/pages/shop" class="btn btn-success">Go Shop</a></p>
</div>
<div class="col-12 col-md-4 p-5 mt-3">
<a href="#"><img src="<?php echo URLROOT; ?>/img/lcd.jpg" class="img-fluid"></a>
<h2 class="h5 text-center mt-3 mb-3">Reapairs</h2>
<p class="text-center"><a href="<?=URLROOT?>/pages/shop" class="btn btn-success">Go Shop</a></p>
</div>
</div>
</section>
End Categories of The Month -->
    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-3">Categories</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-2">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            SmartPhones
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="<?=URLROOT?>/phones/new">Brand New</a></li>
                            <li><a class="text-decoration-none" href="<?=URLROOT?>/phones/secondhand">2ndHand</a></li>
                            <li><a class="text-decoration-none" href="<?=URLROOT?>/phones/londonused">London Used</a></li>
                        </ul>
                    </li>
                    <li class="pb-2">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Accessories
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Chargers</a></li>
                            <li><a class="text-decoration-none" href="#">Bluetooth Devices</a></li>
                            <li><a class="text-decoration-none" href="#">Power Bank</a></li>
                            <li><a class="text-decoration-none" href="#">Tripods</a></li>
                            <li><a class="text-decoration-none" href="#">Memory Card</a></li>
                        </ul>
                    </li>
                    <li class="pb-2">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Repair Parts
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">LCD</a></li>
                            <li><a class="text-decoration-none" href="#">Batteries</a></li>
                            <li><a class="text-decoration-none" href="#">Working Panels</a></li>
                            <li><a class="text-decoration-none" href="#">Cameras</a></li>
                            <li><a class="text-decoration-none" href="#">Sim Tray</a></li>
                            <li><a class="text-decoration-none" href="#">Back Cover</a></li>
                            <li><a class="text-decoration-none" href="#">Power Switch</a></li>
                            <li><a class="text-decoration-none" href="#">Down Boards</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="col-lg-9">
                <div class="row">
                	<h2><?=$data['title']?></h2>
                    <div class="mt-2 text-center"><?= flash('success')?></div>
                    <div class="col-md-6">
                        <!--<ul class="list-inline shop-top-menu pb-3 pt-1">
                         <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">All Brand New</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">Men's</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none" href="#">Women's</a>
                            </li>
                        </ul>-->
                    </div>
                    <div class="col-md-6 pb-4">
                        <div class="d-flex">
                            <select class="form-control">
                                <option>Search</option>
                                <option>A to Z</option>
                                <option>Item</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                <?php foreach($data['products'] as $product) : ?>
                    <div class="col-6 col-md-3">
                        <div class="card mb-3 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo URLROOT . '/' . $product->img; ?>" >
                            </div>
                            <div class="card-body lh-1 fs-6">
                            <a href="<?=URLROOT?>/users/view_p/<?=$product->id?>" class="h3 text-decoration-none">
                                 <p class="text-center mb-0">&#8358;<?php echo $product->price; ?>.00</p>
                                <?php echo $product->brand . ' ' . $product->model; ?>
                                <!--<ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li>M/L/X/XL</li>
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>-->
                               
                            </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>



<?php require APPROOT . '/views/inc/footer.php'; ?>
