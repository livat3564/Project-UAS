<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/csssendiri.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/cssfooter.css">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/projectuas/img/smkn13.png" type="image/x-icon">

</head>
<style>
    .thumbnail:hover{
        
        background-color: #ffffcc;
    }
   
</style>
<body style="background-color:#f5f5f5;">
  

    
    </div>
        </div>
            </div>
    <!-- section menu-->
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
            <a  class=" nav-link active "href="<?php echo base_url().'index.php/projekuas/berita'?>" style="color:white;"> Berita</a>
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
    <!--untuk berita-->
    <section id="berita"><br>


            <div class="section-title" style="margin-bottom: -40px"><br><br>
                <center><br><h2>Berita Terbaru</h2></center>
            </div><br><br>
<div style="padding: 25px;">

          
<div class="x_panel"> 



    <div class="x_content"> 

        <!-- Tampilkan semua produk --> 

        <div class="row"> 

       


            <!-- looping products --> 

            <?php foreach ($user as $b) { ?> 
              

                <div class="col-md-3 col-md-3" align="center"> 
                <br><br>  

                    <div class="thumbnail" style="height: 480px; width:302px;box-shadow:  5px 10px 10px 5px rgba(0, 0, 0, 0.2);"> 
                        
                            <img src="<?= $b['gambar']; ?>" style="width:302px; height:245px; "> 

                        <div class="caption" > 
                        <div class="container" style="width: 300px;height: 150px">
                            <h5 style="min-height:10px;"></h5> 
                            <a href="<?= base_url('index.php/projekuas/lihatberita/' . $b['idberita']) ?>">
                            <h5><?= $b['judulberita']; ?></a>
                        </h5> 
                        <p><?= substr($b['isiberita'], 0, 100); ?> <a  href="<?= base_url('index.php/projekuas/lihatberita/' . $b['idberita']) ?>">[..]</a></p>

                        </div>
                             

                                  <a class="btn btn-utama" href="<?= base_url('index.php/projekuas/lihatberita/' . $b['idberita']) ?>"> Selengkapnya</a>

                                        </div> 

                                       </div> 

                                   </div> <?php } ?> 

                                   <!-- end looping --> 

                                 </div> 

                             </div> 

                            </div> 

                        </div>
                        <br>
    
    </section><!--row berita-->

    
    
    <script src="asset/js/jquery-3.3.1.slim.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/owl.carousel.min.js"></script>
    <script src="asset/js/main.js"></script>


    
</body>
</html>