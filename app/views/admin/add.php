<?php require APPROOT . '/views/inc/header.php';  ?>
        <div class="container pt-3">
        <div class="row">
        <?php include APPROOT . '/views/admin/inc.php' ?>
        <div class="col-md-9 mb-5 mx-auto">
         <div class="mx-auto mt-2 container text-center"><?php flash('msg'); ?></div>
            <div class="mx-auto mt-2 container text-center"><?php flash('upload_msg'); ?></div>
        <h2 class="text-center mt-2">Add Phone</h2>
        <div class="card card-body bg-light mt-3">
      <p>Please use the form below to add product for sell</p>
      <form action="<?php echo URLROOT; ?>/admin/add" method="post" enctype="multipart/form-data">
        
        <div class="form-group mb-2">
            <label>Category</label><br>
            <select class="custom-select" name="sub_category">
                <option value="ios device">iPhone</option>
                <option value="android device">Android</option>
        </div>
        
        <div class="form-group">
            <label>Brand name</label>
            <input type="text" name="brand" class="form-control form-control-lg <?php echo (!empty($data['brand_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['brand']; ?>">
            <span class="invalid-feedback"><?php echo $data['brand_err']; ?></span>
        </div> 
        <div class="form-group">
            <label>Model</label>
            <input type="text" name="model" class="form-control form-control-lg <?php echo (!empty($data['model_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['model']; ?>">
            <span class="invalid-feedback"><?php echo $data['model_err']; ?></span>
        </div> 
        <div class="form-group">
            <label>description</label>
            <input type="text" name="description" class="form-control form-control-lg <?php echo (!empty($data['desc_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['description']; ?>">
            <span class="invalid-feedback"><?php echo $data['desc_err']; ?></span>
        </div>
        <div class="form-group">
            <label>Condition:</label><br>
            <select name="condition">
                <option value="brandnew">Brand New</option>
                <option value="UKused">London Used</option>
                <option value="secondhand">2nd Hand</option>
            </select>
        </div>
        <div class="form-group">
            <label>Color:</label>
            <input type="text" name="color" class="form-control form-control-lg" value="<?php echo $data['color']; ?>">
        </div>     
        
        <div class="form-group mb-2">
            <label>Price</label>
            <input type="number" name="price" class="form-control form-control-lg <?php echo (!empty($data['price_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['price']; ?>">
            <span class="invalid-feedback"><?php echo $data['price_err']; ?></span>
        </div>

        <div class="form-group mb-2">
            <label>Product Pic 1</label>
            <input type="file" name="picture" class="form-control form-control-lg" >
        </div>   
        <div class="form-group mb-2">
            <label>Product Pic 2</label>
            <input type="file" name="picture2" class="form-control form-control-lg" >
        </div> 
        <div class="form-group mb-2">
            <label>Product Pic 3</label>
            <input type="file" name="picture3" class="form-control form-control-lg" >
        </div> 
        <div class="form-row text-center">
          <div class="col mt-2">
            <input type="submit" class="btn btn-success btn-block" value="Proceed">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>