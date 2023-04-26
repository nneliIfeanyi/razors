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

        <!-- Start Categories of The Month -->
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
    <!-- End Categories of The Month -->












<?php require APPROOT . '/views/inc/footer.php'; ?>
