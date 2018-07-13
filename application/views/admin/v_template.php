<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?=$title?> </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/dataTables/dataTables.bootstrap.min.css">
  <style>
    .footer {
       position: fixed;
       bottom: 12px;
       width: 100%;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?=base_url()?>">name app</a>
    </div>
    <!-- Collection of nav links and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
           <li <?php if($title=="Halaman Beranda"){ echo "class='active'"; }?>><a href="<?=base_url()?>c_admin">Home</a></li>
           <li <?php if($title=="Data Pendaki"){ echo "class='active'"; }?>><a href="<?=base_url()?>C_pendaki">Data Pendaki</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="onclick="return confirm('yakin Ingin Keluar?')" href="<?php echo base_url('c_login/keluar') ?>""><i class="glyphicon glyphicon-user"></i> Logout</a></li>
        </ul>
    </div>
</nav>
<div class="container">
  <?php if($content!=null){ include $content;}?>
</div>
</body>
  <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
</html>