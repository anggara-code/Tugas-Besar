<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MOUNEWS - the information of mountain</title>

  <!-- Bootstrap core CSS -->
  <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?=base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?=base_url()?>assets/css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="#">MOUNEWS</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>c_login">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Page Header -->
  <header class="masthead" style="background-image: url(<?php echo base_url(); ?>assets/images/bg-03.jpg)">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Mountain News</h1>
            <span class="subheading">The various information about the mountains</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  
  <?php
  $baca = $this->db->where('id',$this->uri->segment(3))->get('tb_berita')->row_array();
  ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 portfolio-item">
          <div class="card">
            <?php if ($baca['foto']) : ?>
              <a href="#"><img class="card-img-top" src="<?php echo base_url() .'assets/images/upload/berita/'. $baca['foto']?>" alt="Card image cap"></a>
              <?php ; else : ?>
                <a href="#"><img class="card-img-top" src="http://via.placeholder.com/256x180" alt="Card image cap" style="height: 180px; width: 100%;"></a>
              <?php endif; ?>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $baca['judul']; ?></a>
                </h4>
                <p class="card-text"><?php echo ($baca['isi']); ?></p>
              </div>
            </div>
            <br>
          </div>
      </div>
    </div>
    <div class="text-center">
    <a style="margin-bottom: 10px;" href="" class="btn btn-primary" data-toggle="modal" data-target="#AddModal">PENGUNJUNG YANG BAIK SELALU MENINGGALKAN JEJAK</a>
    </div>
    <div id="AddModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <div class="modal-title text-center col-md-12">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 align="center">ISI BUKU TAMU</h3>
          </div>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('c_pendaki/insertPendaki') ?>" method="post" accept-charset="utf-8">
            <div class="form-group">
              <Label1>NO. Identitas</Label1>
              <input class="form-control" type="number" name="noktp" placeholder="Masukkan Nomor KTP Atau Tanda Pengenal Anda Yang Lain" required="">
            </div>
            <div class="col-md-12">
              <?php echo form_error('noktp','<span class="text-danger>','</span>')?>
            </div>
            <div class="form-group">
              <Label1>NAMA</Label1>
              <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama Anda Sesuai Kartu Identitas Yang Digunakan" required="">
            </div>
            <div class="col-md-12">
              <?php echo form_error('nama','<span class="text-danger>','</span>')?>
            </div>
            <div class="form-group">
              <Label1>ALAMAT</Label1>
              <input class="form-control" type="text" name="alamat" placeholder="Masukkan Alamat Anda Sesuai Dengan Yang Tertera Pada Kartu Tanda Pengenal Anda" required="">
            </div>
            <div class="col-md-12">
              <?php echo form_error('alamat','<span class="text-danger>','</span>')?>
            </div>
            <div class="form-group">
              <Label1>NO. HP</Label1>
              <input class="form-control" type="number" name="nohp" placeholder="Masukkan No. HP Anda Yang Bisa Dihubungi" required="">
            </div>
            <div class="col-md-12">
              <?php echo form_error('nohp','<span class="text-danger>','</span>')?>
            </div>
            <div class="form-group">
              <Label1></Label1>
              <input type="button" value="Batal" data-dismiss="modal">
              <input type="submit" name="" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?=base_url()?>assets/js/clean-blog.min.js"></script>

  </body>

  </html>
