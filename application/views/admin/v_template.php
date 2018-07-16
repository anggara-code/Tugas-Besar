<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/vendor/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Light Bootstrap Dashboard by Creative Tim</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <!-- Bootstrap core CSS     -->
  <link href="<?php echo base_url(); ?>assets/vendor/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Animation library for notifications   -->
  <link href="<?php echo base_url(); ?>assets/vendor/css/animate.min.css" rel="stylesheet"/>

  <!--  Light Bootstrap Table core CSS    -->
  <link href="<?php echo base_url(); ?>assets/vendor/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


  <!--  CSS for Demo Purpose, don't include it in your project     -->
  <link href="<?php echo base_url(); ?>assets/vendor/css/demo.css" rel="stylesheet" />


  <!--     Fonts and icons     -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link href="<?php echo base_url(); ?>assets/vendor/css/pe-icon-7-stroke.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
  <div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="<?php echo base_url(); ?>assets/vendor/img/sidebar-5.jpg">
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="http://www.creative-tim.com" class="simple-text">
            MOUNEWS | Admin
          </a>
        </div>
        <ul class="nav">
          <li class="active">
            <a href="<?=base_url()?>C_admin">
              <i class="pe-7s-graph"></i>
              <p>Beranda</p>
            </a>
          </li>
          <li>
            <a href="<?=base_url()?>C_pendaki">
              <i class="pe-7s-user"></i>
              <p>Pendaki</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url()?>C_berita">
              <i class="pe-7s-note2"></i>
              <p>List Berita</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="main-panel">
      <!-- navbar -->
      <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo $title ?></a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
              <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-dashboard"></i>
                  <p class="hidden-lg hidden-md">Dashboard</p>
                </a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-globe"></i>
                  <b class="caret hidden-lg hidden-md"></b>
                  <p class="hidden-lg hidden-md">
                    5 Notifications
                    <b class="caret"></b>
                  </p>
                </a>
              </li>
              <li>
                <a href="">
                  <i class="fa fa-search"></i>
                  <p class="hidden-lg hidden-md">Search</p>
                </a>
              </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="">
                  <p>Account</p>
                </a>
              </li>
              <li>
                <li><a onclick="return confirm('yakin Ingin Keluar?')" href="<?php echo base_url('c_login/keluar') ?>"><i class="fa fa-user"></i> Logout</a></li>
              </li>
              <li class="separator hidden-lg"></li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- content -->
    


<div class="content">
        <div class="container-fluid">
          <?php
          if ($content!=null) {
            include $content;
          }
          ?>
        </div>
      <!-- footer -->
      <footer class="footer">
        <div class="container-fluid">
          <nav class="pull-left">
            <ul>
              <!-- <li>
                <a href="#">
                  Home
                </a>
              </li>
              <li>
                <a href="#">
                  Company
                </a>
              </li>
              <li>
                <a href="#">
                  Portfolio
                </a>
              </li>
              <li>
                <a href="#">
                  Blog
                </a>
              </li>
                          </ul> -->
          </nav>
          <p class="copyright pull-right">
            &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
          </p>
        </div>
      </footer>

    </div>
  </div>


</body>

<!--   Core JS Files   -->
<!-- <script src="<?php echo base_url(); ?>assets/vendor/js/jquery.3.2.1.min.js" type="text/javascript"></script> -->
<script src="<?php echo base_url(); ?>assets/vendor/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="<?php echo base_url(); ?>assets/vendor/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo base_url(); ?>assets/vendor/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="<?php echo base_url(); ?>assets/vendor/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url(); ?>assets/vendor/js/demo.js"></script>

<script type="text/javascript">
$(document).ready(function(){

  demo.initChartist();

});
</script>

</html>

<style type="text/css">
  .carousel-inner > .item > img{
    width: 140px;
    height: 440px;
  }

</style>