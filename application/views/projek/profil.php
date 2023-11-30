<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="<?php echo base_url() ?>assets/projectuas/img/smkn13.png" type="image/x-icon">
    <title>Profil</title>
    <style>
     

        .figure-img{
            border: 5px solid #fff;
            position: flex;
            margin:2px;


        }
     
        .figure-caption{
            color:black;
            font-size:15px;
            font-family: "AvantGarde"; 
        }
        table{
            margin-left:20px;
            font-size:20px;
            font-family: Arial, sans-serif;  
        }
       
 
    </style>
</head>
<body>
</section>
<header><br>
    <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div  class="brand">
                        <img src="<?php echo base_url() ?>assets/projectuas/img/smkn13.png" alt="" height="100px" width="100px">
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
            <div class="dropdown active">
                <a  href="" class=" nav-link dropdown-togler
                    " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color:white;">Profil</a>
                    <li class="dropdown-menu">
                        <a class="dropdown-item"href="<?php echo base_url().'index.php/projekuas/profil'?>">Profil Sekolah<hr style="margin-top: 0px;"></a>
                        <a class="dropdown-item"href="<?php echo base_url().'index.php/projekuas/visimisi'?>">Visi Misi<hr style="margin-top: 0px;"></a>
                        <a class="dropdown-item"href="<?php echo base_url().'index.php/projekuas/sejarah'?>">Sejarah</a>
                    </li>
            </div>
            
        <li class="nav-item  ">
            <a  class=" nav-link  "href="<?php echo base_url().'index.php/projekuas/berita'?>" style="color:white;"> Berita</a>
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
    <div class="container" style="margin-left: 0%; margin-bottom:0%; padding-right:0%; width:auto;">
        
            <div class="col-lg-12"style="">
            <div class="section-title">
                <br>
            <h2>Profil </h2>
            </div>  <center>
                <img src="<?php echo base_url() ?>upload/galeri-2.jpeg" alt="">
                <br><br>
                <table border="1">
                    <tr>
                        <td>NPSN   </td>
                        <td>: 20013041</td>
                    </tr>
                    <tr>
                        <td>NSS   </td>
                        <td>: -</td>
                    </tr>
                    <tr>
                        <td>Nama Sekolah </td>
                        <td>: Smkn 13 Jakarta</td>
                    </tr>
                    <tr>
                        <td>Akreditasi </td>
                        <td>: Akreditasi A </td>
                    </tr>
                    <tr>
                        <td>Alamat </td>
                        <td>: Jl.Taman Sari Tamansari Jakarta Barat</td>
                    </tr>
                    <tr>
                        <td>Kodepos </td>
                        <td>: 14420</td>
                    </tr>
                    <tr>
                        <td>Nomor Telpon </td>
                        <td>: 021577115460</td>
                    </tr>
                    <tr>
                        <td>Nomor Faks </td>
                        <td>: -</td>
                    </tr>
                    <tr>
                        <td>Jenjang </td>
                        <td>: SMK</td>
                    </tr>
                    <tr>
                        <td>Status </td>
                        <td>: Negeri</td>
                    </tr>
                    <tr>
                        <td>Situs </td>
                        <td>: www.smkn13.sch.id </td>
                    </tr>
                    <tr>
                        <td>Lintang </td>
                        <td>: -6.189025 </td>
                    </tr>
                    <tr>
                        <td>Bujur </td>
                        <td>: 106.85474399999998 </td>
                    </tr>
                    <tr>
                        <td>Ketinggian </td>
                        <td>: 8 </td>
                    </tr>
                    <tr>
                        <td>Waktu Belajar </td>
                        <td>: Sekolah Pagi </td>
                    </tr>
                </table>
                <br>
            </div></Center>
            </div>
        </div>
    </div>

       


    
   

    
</body>
</html>