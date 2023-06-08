<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container">
<div class="row">
    <div class="col-md-6 mb-5 mx-auto">
      <div class="card card-body bg-light mt-5">
        <?php flash('register_success'); ?>
        <?php flash('reset_success'); ?>
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo URLROOT; ?>/users/login" method="post">
          <div class="form-group">
              <label>Phone:<sup>*</sup></label>
              <input type="number" name="phone" class="form-control form-control-lg <?php echo (!empty($data['phone_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['phone']; ?>">
              <span class="invalid-feedback"><?php echo $data['phone_err']; ?></span>
          </div>    
          <div class="form-group mb-2">
              <label>Password:<sup>*</sup></label>
              <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
              <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
          </div>
          <div class="form-row">
            <div class="col-6 mb-2">
              <input type="submit" class="btn btn-success btn-block" value="Login">
            </div>
           
            <!--<div class="col-12">
              <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-light btn-block">No account? Register</a>
            </div>-->
              <div class="col-12 mb-2">
             <a href="<?php echo URLROOT; ?>/users/pwd_reset" class="btn btn-block">Forgot password?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
