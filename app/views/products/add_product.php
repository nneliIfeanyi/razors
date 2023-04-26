<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light">
            <h2>Add Product</h2>
            <p class="text-success">Please fill out the form to uplaod your product for sell.</p>
           
            <form action="<?=URLROOT?>/products/add_product" method="POST" enctype="multipart/form-data">
            
            <div class="form-group mb-3">
            <label for="category">Product Category:</label>
            <select name="category" id="" class="form-control form-control-lg">
                <option value="SmartPhone">SmartPhone</option>
                <option value="Accessories">Accessories</option>
            </select>
            
            </div>
            <div class="form-group mb-3">
            <label for="brand">Brand:</label>
            <select name="brand" id="" class="form-control form-control-lg">
                <option value="Samsung">Samsung</option>
                <option value="Oppo">Oppo</option>
                <option value="Infinix">Infinix</option>
                <option value="Apple">Apple iPhone</option>
                <option value="Tecno">Tecno</option>
                <option value="Vivo">Vivo</option>
                <option value="Itel">Itel</option>
            </select>
            
            </div>
            <div class="form-group mb-3">
            <label for="model">Model:</label>
            <input type="text" name="model" value="<?=$data['model']?>" class="form-control form-control-lg">
            </div>
            
            <div class="form-group mb-3">
            <label for="name">Condition:</label>
            <select name="condition" id="" class="form-control form-control-lg">
                <option value="Brand New">Brand New</option>
                <option value="Used">Seconnd Hand</option>
            </select>
            </div>

            <div class="form-group mb-3">
            <label for="name">Product Description: <strong class="text-danger">*</strong></label>
            <input type="text" name="description" class="form-control form-control-lg <?= (!empty($data['descErr'])) ? 'is-invalid' :''; ?>" value="<?=$data['description']?>">
            <span class="invalid-feedback"><?=$data['descErr']?></span>    
            </div>

            <div class="form-group mb-3">
            <label for="color">Color:</label>
            <input type="text" name="color" class="form-control form-control-lg"  value="<?=$data['color']?>">    
            </div>

            <div class="form-group mb-3">
            <label for="name">Price: <strong class="text-danger">*</strong></label>
            <input type="number" name="price" class="form-control form-control-lg <?= (!empty($data['priceErr'])) ? 'is-invalid' :''; ?>" value="<?=$data['price']?>">
            <span class="invalid-feedback"><?=$data['priceErr']?></span>    
            </div>

            <div class="form-group mb-3">
            <label for="name">Product Picture: <strong class="text-danger">*</strong></label>
            <input type="file" name="picture" class="form-control form-control-lg <?= (!empty($data['imgErr'])) ? 'is-invalid' :''; ?>" value="<?=$data['image']?>">
            <span class="invalid-feedback"><?=$data['imgErr']?></span>    
            </div>

            <div class="mt-3">
                <input type="submit" value="Add Product" class="btn btn-success btn-block">
            </div>
            </form>
        </div>
    </div>


</div><?php require APPROOT . '/views/inc/footer.php';?>