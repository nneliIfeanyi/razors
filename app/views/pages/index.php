<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="mx-auto text-center pt-2">
<p class="h5 lh-1">Welcome to <span class="text-success fw-bold"><?=SITENAME?></span> Gadget Home</p>
</div>
<?php include APPROOT . '/views/inc/showcase.php'; ?>

    <!-- Start Content -->
<div class="container py-3">
    <div class="row">
<?php include APPROOT . '/views/inc/nav.php'; ?>
        <div class="col-lg-9">
             <h4 class="text-success"><?=$data['title']?></h4>
             <div class="mx-auto mt-2 container text-center"><?php flash('success'); ?></div>

            <?php include APPROOT . '/views/inc/sample.php'; ?>
           
        </div>
    </div>
</div>



<?php require APPROOT . '/views/inc/footer.php'; ?>
