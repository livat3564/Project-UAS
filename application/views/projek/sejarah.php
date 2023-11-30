<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah</title>
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/projectuas/img/smkn13.png" type="image/x-icon">
    
    <style type="text/css">
      .quote{
        display:flex;
      }
      .quote p{
        margin-left:10px;
        margin-top:20px;
        font-family: "Times New Roman", Times, serif;

      }
      .total{
        display:flex;
      }

    </style>
</head>
<body>
</section>
<br><br>
<header>
    <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div  class="brand">
                        <img src="<?php echo base_url() ?>assets/projectuas/img/smkn13.png" height="100px" width="100px">
                        <div class="brand-name">
                            <h1>SMKN 13 JAKARTA </h1>
                            <h3>Sekolah berprestasi dan berintegritas tinggi </h3>
                        </div>
                    </div>
                </div>

               
                   
            </div>
        </div>  
        
    </div>
</header>
<div id="topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <ul class="top-contact">
                    <li><a href="https://api.whatsapp.com/send/?phone=6285722222746&text&type=phone_number&app_absent=0"><i class="fas fa-phone"></i>0821-54321</a></li>
                    <li><a href="aaaa"><i class="fas fa-envelope"></i>smkn13@sch.id</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <ul class="sosmed">
                    <li><a href="https://www.facebook.com/smkn13jkt/"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://r.search.yahoo.com/_ylt=Awr.z4K9tpZk4kkYRQFXNyoA;_ylu=Y29sbwNncTEEcG9zAzEEdnRpZANDQVEyNTUyM0FfMQRzZWMDc3I-/RV=2/RE=1687627581/RO=10/RU=https%3a%2f%2fwww.instagram.com%2fsmkn13_jkt%2f/RK=2/RS=n.o0q5CLlF8d7vFdZPAuU.6qD2k-"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCZhZCSCnx7SY4zLluxD-F7g/featured"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>

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
        <div class="container" style="margin-left: 0%; margin-bottom:0%; padding-right:0%;">
                <div class="row">
                    <div class="col-md-3"style="border-right: 1px dashed black; background-color:grey; margin-bottom:0px;">
                        <br>
                        <div class="container" height="30px" width="30px" style="background-color:#FFF8DC; color:black; border-radius:20px; padding:10px;">
                            <div class="quote"><img src="<?php echo base_url() ?>assets/projectuas/img/smkn13.png" alt="" height="100px" width="75px"> <p>Tell a lie loud enough and long enough and people will believe it</p></div>
                        </div>
                        <br>
                        <div class="container" height="30px" width="30px" style="background-color:#FFF8DC; color:black; border-radius:20px; padding:10px;">
                            <div class="quote"><img src="gambar/stalin.jpg" alt="" height="100px" width="75px"> <p>“A single death is a tragedy; a million deaths is a statistic.”</p></div>
                        </div>
                        <br>
                        <div class="container" height="30px" width="30px" style="background-color:#FFF8DC; color:black; border-radius:20px; padding:10px;">
                            <div class="quote"><img src="gambar/sukarno.jpg" alt="" height="100px" width="75px" style="margin-top:40px;"> <p>Reach your ambition as high as the skies! Dream it as high as the skies! Because if you're fell, you're gonna fall among of the stars!!</p></div>
                        </div>
                        <br>
                        <div class="container" height="30px" width="30px" style="background-color:#FFF8DC; color:black; border-radius:20px; padding:10px;">
                            <div class="quote"><img src="gambar/ito.jpg" alt="" height="100px" width="75px"> <p>“The fruits of victory are tumbling into our mouths too quickly.” </p></div>
                        </div>
                        <br>
                        <div class="container" height="30px" width="30px" style="background-color:#FFF8DC; color:black; border-radius:20px; padding:10px;">
                            <div class="quote"><img src="gambar/chill.jpg" alt="" height="100px" width="75px" style="margin-top:20px;"> <p>“Success is not final, failure is not fatal: it is the courage to continue that counts.” </p></div>
                        </div>
                        <br>
                    </div>
                    <div class="col-md-9">
                        <br>
                        <div class="section-title">
                    <h2>Sejarah Sekolah</h2>
                        </div>  <center>
                        <img src="gambar/sejarah.jpg" alt="" height="400px" width="600px"></Center>
                        <br>
                        <p>Pada mulanya SMK Negeri 13 Jakarta bernama SMEA Negeri Pembina 1 yang didirikan pada bulan
                            Juli 1951 dan mendapat status negeri pada tahun 1954 berdasarkan Surat Keputusan Depdikbud
                            No.3707/BII/54 tertanggal 03 Juli 1954. Kemudian nama SMEA Negeri Pembina 1 berubah menjadi Sekolah Menengah 
                            Kejuruan ( SMK ) Negeri 13 Jakarta berdasarkan SK Mendikbud No. 0032/O/1997 tertanggal, 07 Maret 1997 
                            Kelompok Bisnis dan Manajemen.</p>
                        <p>     Sebuah kelompok kemudian berubah menjadi Bidang Keahlian pada tahun 1999. 
                            Pada bulan Juli 2008 SMKN 13 Jakarta membuka kompetensi Multimedia berdasarkan tuntutan dan 
                            kebutuhana akan tenaga yang kompeten pada bidang multimedia dan pada bulan Juli 2011 membuka 
                            Kompetensi Rekayasa Perangkat Lunak (RPL) Bidang Keahlian Teknologi Informasi Dan Komunikasi.

                        </p>


                    
                    </div>
                   

                
            </div>
        </div>


    
   
    
    <script src="asset/js/jquery-3.3.1.slim.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/owl.carousel.min.js"></script>
    <script src="asset/js/main.js"></script>


    
</body>
</html>