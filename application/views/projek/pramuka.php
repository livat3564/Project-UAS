<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Berita</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/csssendiri.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/cssfooter.css">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/projectuas/img/smkn13.png" type="image/x-icon">
  
    
</head>
<body>
<header><br>
    <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div  class="brand">
                        <img src="smkn13.png" alt="" height="100px" width="100px">
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
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation" align="right">
        <span class="navbar-toggler-icon" ></span>
    </button>
        <div id="my-nav" class=" collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a  class="nav-link active" href="websekolah.php">beranda<span class="sr-only">(current)</span></a>
            </li>
            <div class="dropdown">
                <a  href="" class=" nav-link dropdown-togler
                    " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
                    <li class="dropdown-menu">
                        <a class="dropdown-item"href="sejarah.php">Sejarah<hr style="margin-top: 0px;"></a>
                        <a class="dropdown-item"href="visimisi.php">Visi Misi<hr style="margin-top: 0px;"></a>
                        <a class="dropdown-item"href="petasekolah.php">Peta Sekolah</a>
                    </li>
            </div>
            
        <li class="nav-item  ">
            <a  class=" nav-link "href="berita.php"> Berita</a>
        </li>
        <li class="nav-item ">
            <a  class=" nav-link"href="ekstrakulikuler.php"> ekstrakulikuler</a>
        </li>
        <li class="nav-item ">
            <a  class=" nav-link"href="jurusan.php">Jurusan</a>
        </li>
            </ul>
        </div>
    </div>
</nav>

<?php
foreach($user as $b){ ?>
<div class="row">
   

    </div>
    <div class="col-md-12"><br>
    <center><h1><?= $b['judulberita']; ?></h1></center><br>

    <center><img src="<?= $b['gambar']; ?>" alt="" height="500px" width="600px"></center>
    <center><p><?= $b['isiberita']; ?></p></center>
    </div>
</div>



<?php } ?>    
        

    


    
   
    
    <script src="asset/js/jquery-3.3.1.slim.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/owl.carousel.min.js"></script>
    <script src="asset/js/main.js"></script>


    
</body>
</html>