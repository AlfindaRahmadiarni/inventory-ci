<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sistem Informasi Inventory</title>
  <!-- Bootstrap core CSS-->
  <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- Custom fonts for this template-->
  <!-- <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
  <!-- Custom styles for this template-->
  <!-- <link href="css/sb-admin.css" rel="stylesheet"> -->

  <link rel="stylesheet" href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/vendor/font-awesome/css/font-awesome.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/sb-admin.css'?>">
</head>


<?php echo form_open( 'admin/login', array('class' => 'needs-validation', 'novalidate' => '') ); ?>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input class="form-control" name="username" type="text" aria-describedby="emailHelp" placeholder="Enter Username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" name="password" type="password" placeholder="Password">
          </div>
          <!-- <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div> -->

          <div style="margin-top: 10px">
          <?php if($this->session->flashdata('user_registered')): ?>
            <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
          <?php endif; ?>

          <?php if($this->session->flashdata('login_failed')): ?>
            <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('login_failed').'</div>'; ?>
          <?php endif; ?>

          <?php if($this->session->flashdata('user_loggedin')): ?>
            <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</div>'; ?>
          <?php endif; ?>

          <?php if($this->session->flashdata('user_loggedout')): ?>
            <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</div>'; ?>
          <?php endif; ?>
          </div>

          <!-- <a class="btn btn-primary btn-block" href="<?php //echo site_url().'Admin/login/' ?>">Login</a> -->

          <button type="submit" class="btn btn-primary btn-block">Login</button>
        <!-- </form> -->
        <!-- <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div> -->
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
  <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <!-- Core plugin JavaScript-->
  <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->


    <script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/jquery-easing/jquery.easing.min.js'?>"></script>


  <?php echo form_close(); ?>
</body>

</html>
