<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/csssendiri.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/cssfooter.css">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/projectuas/img/smkn13.png" type="image/x-icon">
</head>
<body style="background-image: url('<?php echo base_url() ?>assets/projectuas/img/bglogin.png');">
<nav class="navbar navbar-expand-lg navbar-dark bg-biru fixed-top">
    <div class="container">
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="#my-nav" aria-expanded="false" aria-label="Toggle navigation" align="right">
        <span class="navbar-toggler-icon" ></span>
    </button>
        <div id="my-nav" class=" collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a  class="nav-link " href="<?=base_url('index.php/projekuas')?>"style="color:white;">beranda<span class="sr-only">(current)</span></a>
            </li>
            <div class="dropdown">
                <a  href="" class=" nav-link dropdown-togler
                    " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color:white;">Profil</a>
                    <li class="dropdown-menu">
                        <a class="dropdown-item"href="<?php echo base_url().'index.php/projekuas/profil'?>">Profil Sekolah<hr style="margin-top: 0px;"></a>
                        <a class="dropdown-item"href="<?php echo base_url().'index.php/projekuas/visimisi'?>">Visi Misi<hr style="margin-top: 0px;"></a>
                        <a class="dropdown-item"href="<?php echo base_url().'index.php/projekuas/sejarah'?>">Sejarah</a>
                    </li>
            </div>
            
        <li class="nav-item  ">
            <a  class=" nav-link "href="<?php echo base_url().'index.php/projekuas/berita'?>" style="color:white;"> Berita</a>
        </li>
        <li class="nav-item ">
            <a  class=" nav-link"href="<?php echo base_url().'index.php/projekuas/ekstrakulikuler'?>" style="color:white;"> ekstrakulikuler</a>
        </li>
        <li class="nav-item ">
            <a  class=" nav-link"href="<?php echo base_url().'index.php/projekuas/file'?>"style="color:white;">berkas</a>
        </li>
            </ul>
            
        </div>
        <a  href="<?=base_url('adminsekolah')?>" class="btn btn-utama" style="color:white;">Login</a>
    </div>
 
</nav>
<section class="vh-50" style=" margin-top: 40px; max-height: 400px;">
  <center><div class="container py-5 h-45">
    <div class="row d-flex justify-content-center align-items-center h-45">
      <div class="col col-md-8">
        <div class="card" style="border-radius: 1rem; max-width: 350px;  ">
          <div class="row g-0">
            
            <div class="col-md-4 col-lg-5 d-flex align-items-center">
              <div class="card-body p-4 p-lg-4 text-black">
              <?= $this->session->flashdata('pesan'); ?>
                <form class="ussername"action="<?=base_url('adminsekolah');?>" method="post">
                <?=  form_error('ussername'), form_error('password');?>

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <img src="<?php echo base_url() ?>assets/projectuas/img/admin.jpg" alt="" style="height: 50px; width: 50px; margin-left:65px">
                    <span class="h1 fw-bold mb-0">Admin</span>
                  </div>


                  <div class="form-outline mb-4">
                    <input type="text" id="ussername" class="form-control form-control-md" style="width:300px;" name="ussername" value="<?= set_value('ussername'); ?>" >
                    <label class="form-label" for="form2Example17" style="margin-right:220px;">Ussername</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control" style="width:300px;" name="password">
                    <label class="form-label" for="form2Example27" style="margin-right:230px;">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit" style="width:300px;">Login</button>
                  </div>
                </form>
              </center>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<script src="<?=base_url('assets/projectuas/js/jquery-3.3.1.slim.min.js')?>"></script>
    <script src="<?=base_url('assets/projectuas/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('assets/projectuas/js/owl.carousel.min.js')?>"></script>
    <script src="<?=base_url('assets/projectuas/js/main.js')?>"></script>


</body>
</html>