<?php require APPROOT . '/views/inc/header.php'; ?>
    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Categories</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            SmartPhone
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">iPhones</a></li>
                            <li><a class="text-decoration-none" href="#">Samsung</a></li>
                            <li><a class="text-decoration-none" href="#">Infinix</a></li>
                            <li><a class="text-decoration-none" href="#">Tecno</a></li>
                            <li><a class="text-decoration-none" href="#">Oppo</a></li>
                            <li><a class="text-decoration-none" href="#">itel</a></li>
                            <li><a class="text-decoration-none" href="#">Second Hand Phones</a></li>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Accessories
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Oraimo</a></li>
                            <li><a class="text-decoration-none" href="#">New Age</a></li>
                        </ul>
                    </li>
                   
                </ul>
            </div>
            
            <div class="col-lg-9">
                <div class="row">
                <?php flash('success');?>
                    <h1 class="h2 text-success">All Products</h1>
                    <?php foreach($data['products'] as $product) : ?>
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo URLROOT . $product->img; ?>">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white mt-2" href="<?=URLROOT?>/products/view_p/<?=$product->id?>"><i class="fa fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                           
                            <div class="card-body">
                                <a href="<?=URLROOT?>/products/view_p/<?=$product->id?>" class="h3 text-decoration-none"><?php echo $product->brand . ' ' . $product->model; ?>
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