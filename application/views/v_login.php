<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <!-- <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
  <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>css/signin.css" rel="stylesheet"> -->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/css/main.css">
</head>
<body >
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(<?php echo base_url(); ?>assets/images/bg-01.jpg);">
          <span class="login100-form-title-1">
            Sign In
          </span>
        </div>

        <form class="login100-form validate-form" action="<?php echo base_url('C_login/user_login') ?>" method="post">
          <?php if ($error = $this->session->flashdata('pesan')): ?>
            <div class="form-group">
              <div class="col-md-13">
                <div class="alert alert-dismissible alert-primary">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <?php echo $error; ?>
                </div>
              </div>
            </div>
          <?php endif ?>
          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">Username</span>
            <input type="text" name="username" class="input100" placeholder="Enter username" value="<?php echo set_value('username') ?>">
            <span class="focus-input100"></span>
            <?php echo form_error('username','<span class"text-danger">','</span>') ?>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
            <span class="label-input100">Password</span>
            <input type="password" name="pass" class="input100" placeholder="Enter password" value="<?php echo set_value('passs') ?>">
            <span class="focus-input100"></span>
            <?php echo form_error('pass','<span class"text-danger">','</span>') ?>
          </div>

          <div class="flex-sb-m w-full p-b-30">
            <div>
              Do you have account? <a href="#" class="txt1">Create account?</a>
            </div>
          </div>

          <div class="container-login100-form-btn">
            <input type="submit" value="LOGIN" class="login100-form-btn">
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->

  <!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets/vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/popper.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets/vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets/vendor/daterangepicker/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets/vendor/countdowntime/countdowntime.js"></script>
  <!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets/vendorjs/main.js"></script>

</body>
</html>
