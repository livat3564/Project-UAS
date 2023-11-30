<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/csssendiri.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/cssfooter.css">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/projectuas/img/smkn13.png" type="image/x-icon">
</head>
<body>
<header>
    <div class="container" style="margin-top: 16px;">
            <div class="row">
                <div class="col-md-8">
                    <div  class="brand">
                        <img src="<?php echo base_url() ?>assets/projectuas/img/smkn13.png" alt="" height="100px" width="100px">
                        <div class="brand-name" style="margin-top: 20px;">
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
                <a  class="nav-link active" href="<?=base_url('index.php/projekuas')?>"style="color:white;">beranda<span class="sr-only">(current)</span></a>
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


    <section id="hero-area" style="margin-top: 0px; margin-bottom: 0px;">
        <div id="slider-hero-nav"></div>
        <div class="owl-carousel" id="slider-hero">
            <div class="slider-item" >
                <div class="slider-item-img">
                    <img src="<?php echo base_url() ?>assets/projectuas/img/banner-siswa.jpg" alt=""height="500px" width="auto">
                </div>
                <div class="slider-item-content">
                    <h2>daftar Seminar Wajib</h2>
                    <p>daftar seminar untuk kelas 11 dan 12</p>
                    <a href="daftar.php"><button class="btn btn-utama">Daftar Seminar</button></a>
                </div>
            </div> <!--,slider-item-->
            <div class="slider-item" >
                <div class="slider-item-img">
                    <img src="<?php echo base_url() ?>assets/projectuas/img/bu-susi-p.jpg"  alt=""height="500px" width="auto">
                </div>
                <div class="slider-item-content">
                    <h2>wisuda</h2>
                    <p>Tahun angkatan 2023</p>
                    <button class="btn btn-utama">selengkapnya</button>
                </div>
            </div>
            <div class="slider-item">
                <div class="slider-item-img">
                    <img src="gambar/beranda3.jpg" alt=""height="500px" width="auto">
                </div>
                <div class="slider-item-content">
                    <h2>title 2</h2>
                    <p>Substitle here</p>
                    <button class="btn btn-utama">CTA Button</button>
                </div>
            </div>
            <div class="slider-item">
                <div class="slider-item-img">
                    <img src="gambar/sekolah.jpg" alt=""height="500px" width="auto">
                </div>
                <div class="slider-item-content">
                    <h2>title 2</h2>
                    <p>Substitle here</p>
                    <button class="btn btn-utama">CTA Button</button>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section id="Sambutan">
    <div class="container" width="560px" height="315px" >
        <center><h2>Beranda SMKN 13 jAKARTA</h2></center><br>
        <div class="row">
            <div class="col-md-6">
                <div class="video-wrapper">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/nB8vLMMNi0Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>    
            <div class="col-md-6" style="background-color: bisque;">
                <center><img src="berita/kepala sekolah.png" alt="" height="150px" width="110px" style="padding-top: 30px;">
                <h3>Sambutan Kepala Sekolah</h3>
                <p>Assalamu’alaikum wr.wb. Puji dan syukur kami panjatkan kepada Allah SWT, Tuhan Yang Maha Esa atas diluncurkannya web SMK Negeri 13 Jakarta dengan domain www.smkn13jkt.net ini, web merupakan kebutuhan dalam mendukung komunikasi baik dengan dunia internal maupun eksternal SMK Negeri 13 Jakarta. Kebutuhan akan web ini merupakan salah satu tuntutan dunia global dan mengikuti perkembangan IPTEK khususnya dibidang komunikasi.</p>
                </center>
            </div>
        </div>
    </div>
    </section> <!--#sambutan-->
<div class="pencarian">
    <section id="prestasi">
    <div class="container">
        <div class="section-title"><br><br>
            <h2>Prestasi Terbaru</h2>
        </div>
        <div class="section-item">
            <div class="row">
                <div class="col-md-6">
                    <img class="section-item-thumbnail" src="gambar/juara1.jpg" alt="">
                </div>
                <div class="col-md-6 col-item-kanan">
                    <div class="section-item-title">
                        <h3>Siswa SMKN 13 Jakarta meraih juara 1 lomba pidato</h3>
                        <div class="section-item-meta">
                            <span><i class="far fa-calendar-alt"></i>  11 Agustus, 2022</span>
                            <span><i class="fas fa-map-marked-alt"></i> Menteng,Jakarta Pusat</span>
                        </div>
                    </div>
                    <div class="section-item-body">
                        <p>Juara lomba pidato yang dilaksanakan di SMKN 12 jakarta dalam rangka hari pendidikan nasional</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-item">
            <div class="row">
                <div class="col-md-6">
                    <img class="section-item-thumbnail" src="gambar/juara02sn.jpg" alt="">
                </div>
                <div class="col-md-6 col-item-kanan">
                    <div class="section-item-title">
                        <h3>Juara 2 O2SN</h3>
                        <div class="section-item-meta">
                            <span><i class="far fa-calendar-alt"></i> 25 Juni 2021</span>
                            <span><i class="fas fa-map-marked-alt"></i> Kalideres, Jakarta</span>
                        </div>
                    </div>
                    <div class="section-item-body">
                        <p>Juara 2 Lomba 02sn dari 70 Peserta tingkat provinsi DKI Jakarta dan ini merupakan suatu kebanggan bagi sekolah</p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="mid" id="HiddenDiv" style="display: none;">
            <div class="section-item">
                <div class="row">
                    <div class="col-md-6">
                        <img class="section-item-thumbnail" src="gambar/juara2.jpg" alt="">
                    </div>
                    <div class="col-md-6 col-item-kanan">
                        <div class="section-item-title">
                            <h3>Medali Perak Dalam Olypiad in Informatics/IOI di Azerbaijan</h3>
                            <div class="section-item-meta">
                                <span><i class="far fa-calendar-alt"></i> 20 Agustus, 2019 - 22 Agustus, 2019</span>
                                <span><i class="fas fa-map-marked-alt"></i> Baku, Azerbaijan</span>
                            </div>
                        </div>
                        <div class="section-item-body">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae suscipit eligendi, architecto natus neque alias debitis harum expedita necessitatibus saepe doloremque voluptatem cupiditate itaque a. Quam qui labore sit nostrum?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-item">
                <div class="row">
                    <div class="col-md-6">
                        <img class="section-item-thumbnail" src="gambar/juarapaskibra.jpeg" alt="">
                    </div>
                    <div class="col-md-6 col-item-kanan">
                        <div class="section-item-title">
                            <h3>Juara Umum Lomba Paskibra Tingkat DKI Jakarta 2023</h3>
                            <div class="section-item-meta">
                                <span><i class="far fa-calendar-alt"></i> 20 Agustus, 2019 - 22 Agustus, 2019</span>
                                <span><i class="fas fa-map-marked-alt"></i> Baku, Azerbaijan</span>
                            </div>
                        </div>
                        <div class="section-item-body">
                            <p>Selamat dan Sukses untuk Tim Paskibraka SMK 13 Jakarta menjadi Juara Umum Lomba Paskibra Tingkat DKI Jakarta 2023</p>
                    </div>
                </div>
            </div>
            <div class="section-item">
                <div class="row">
                    <div class="col-md-6">
                        <img class="section-item-thumbnail" src="assets/image/juara-olimpiade.jpeg" alt="">
                    </div>
                    <div class="col-md-6 col-item-kanan">
                        <div class="section-item-title">
                            <h3>Medali Perak Dalam Olypiad in Informatics/IOI di Azerbaijan</h3>
                            <div class="section-item-meta">
                                <span><i class="far fa-calendar-alt"></i> 20 Agustus, 2019 - 22 Agustus, 2019</span>
                                <span><i class="fas fa-map-marked-alt"></i> Baku, Azerbaijan</span>
                            </div>
                        </div>
                        <div class="section-item-body">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae suscipit eligendi, architecto natus neque alias debitis harum expedita necessitatibus saepe doloremque voluptatem cupiditate itaque a. Quam qui labore sit nostrum?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tombol-selengkapnya">
            <a id="selengkapnya" onclick="javascript:ShowHide('HiddenDiv')" class="btn btn-more"><p id="a"></p></a>
        </div>
    </section>
    <br>

    <section id="tenaga pendidik">
    <div class="container">
        <div class="section-title">
            <h2>Tenaga Pendidik</h2>
        </div>
        <div class="section-body">
         <div id="slider-tools-1"></div>
                <div class="owl-carousel" id="tenaga-pendidik-slider">

                            <div class="section-item-slider" style="background-color:white; border: 10px solid  #f2c808;" height="400px" width="150px">
                                <img src="<?php echo base_url() ?>assets/projectuas/img/bu-susi-p.jpg" alt=""  height="400px" width="150px"><center><b><font style="font-family:Monstsrrat, Segoe UI, Segoe UI, Tahoma, Geneva, Verdana, sans-serif;color:black; font-size:25px;">Andika Syakh Rohman</font></b></center>
                            </div>
                            <div class="section-item-slider"  style="background-color:White;">
                                    <img src="asset/img/foto-guru-1.jpg" alt="" height="400px" width="150px">
                                    <center><h3 style="color:black;">Dr. Achmad  Ubaydillah </h3></center>
                            </div>
                            <div class="section-item-slider"  style="background-color:White;">
                                <img src="asset/img/foto-guru-2.jpg" alt="" height="400px" width="150px">
                                <center><h3 style="color:black;">Dr. Ditto </h3></center>
                        </div><div class="section-item-slider">
                            <img src="asset/img/foto-guru-3.jpg" alt="" height="400px" width="150px">
                        <h3>nama saya </h3>
                    </div><div class="section-item-slider">
                        <img src="asset/img/bu-susi-p.jpg" alt="" height="400px" width="150px">
                    <h3>nama saya </h3>
                    <P>NIP:1345678</P>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <section id="alumni">
        <div class="container">
            <div class="section-title">
                <h2>Profil Alumni</h2>
            </div>
            <div class="section-body">
                <div id="slider-tools-2"></div>
                <div class="owl-carousel" id="alumni-slider">
                    <div class="section-item-slider">
                        <div class="row">
                            <div class="col-md-5">
                              <img class="foto-alumni" src="gambar/bb.jpg" alt="">
                            </div>
                            <div class="col-md-7">
                              <div class="section-item-content">
                                <a href="">
                                  <h3>Friedrich Paulus</h3>
                                </a>
                                <p>Göring merupakan orang yang mengesahkan program Solusi Terakhir Untuk Masalah Yahudi. 
                                  Ia memberi memo kepada SS Obergruppenführer Reinhard Heydrich yang berisi perintah untuk membuat rancangan program tersebut.
                                  Pada tanggal 23 April 1945, Göring yang saat itu berada di Berchtesgaden di Jerman Selatan, 
                                  mengirimkan telegram ke Hitler yang meminta Hitler untuk menunjuk dirinya sebagai pengganti Hitler dan memberikan batas waktu penyerahan kekuasaan. 
                                  Sebenarnya, tujuannya itu adalah untuk menyelidiki apakah Berlin telah jatuh dan bertanya apakah ia harus mengambil alih kekuasaan Angkatan Bersenjata Jerman untuk melanjutkan pertempuran.
                                </p>
                                <a href="" class="more">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-item-slider">
                      <div class="row">
                          <div class="col-md-5">
                            <img class="foto-alumni" src="gambar/12.jpeg" alt="">
                          </div>
                          <div class="col-md-7">
                            <div class="section-item-content">
                              <a href="">
                                <h3>Hermann Wilhelm Göring</h3>
                              </a>
                              <p>Göring merupakan orang yang mengesahkan program Solusi Terakhir Untuk Masalah Yahudi. 
                                 Ia memberi memo kepada SS Obergruppenführer Reinhard Heydrich yang berisi perintah untuk membuat rancangan program tersebut.
                                 Pada tanggal 23 April 1945, Göring yang saat itu berada di Berchtesgaden di Jerman Selatan, 
                                 mengirimkan telegram ke Hitler yang meminta Hitler untuk menunjuk dirinya sebagai pengganti Hitler dan memberikan batas waktu penyerahan kekuasaan. 
                                 Sebenarnya, tujuannya itu adalah untuk menyelidiki apakah Berlin telah jatuh dan bertanya apakah ia harus mengambil alih kekuasaan Angkatan Bersenjata Jerman untuk melanjutkan pertempuran.
                              </p>
                              <a href="" class="more">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                            </div>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
     </section>


    

        <section id="ekstrakulikuler">
        <div class="container">
                <div class="section-title">
                <h2>Jurusan</h2>
                </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="section-body-item">
                            <center><div class="col-md-3"></center>
                                <center><i class="far fa-user"></i></center>
                            <h4>Teknik Jaringan dan Komputer</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                            <div class="section-body-item">
                                <center><div class="col-md-3"></center>
                                    <center><i class="far fa-user"></i></center>
                                <h4>Rekayasa Perangkat Lunak</h4>
                            </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section-body-item">
                            <center><div class="col-md-3"></center>
                                <center><i class="far fa-user"></i></center>
                            <h4>Multimedia</h4>
                        </div>
                    </div>        
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="section-body-item">
                            <center><div class="col-md-3"></center>
                                <center><i class="far fa-user"></i></center>
                            <h4>Administrasi Perkantoran</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                            <div class="section-body-item">
                                <center><div class="col-md-3"></center>
                                    <center><i class="far fa-user"></i></center>
                                <h4>Pemasaran</h4>
                            </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section-body-item">
                            <center><div class="col-md-3"></center>
                                <center><i class="far fa-user"></i></center>
                            <h4>Akutansi</h4>
                        </div>
                    </div>        
                </div>
                </div>
                </div>
                </div>
            </div>
            <br><br>
            
    </section>
  


</div>   
    

<script type="text/javascript">// <![CDATA[
document.getElementById("a").innerHTML = "Selengkapnya"
function ShowHide(divId)
{
if(document.getElementById(divId).style.display == 'none')
{
document.getElementById(divId).style.display='block';
document.getElementById("a").innerHTML = "sembunyikan";

}
else
{
document.getElementById(divId).style.display = 'none';
document.getElementById("a").innerHTML = "Selengkapnya"
}
}
// ]]>
function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");

  // Loop through all list items, and hide those who don't match the search query
 
    for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
      myMenu.style.display="inline";
    } else {
      li[i].style.display = "none";
    }
  }
  }

</script>

    
    
</body>
</html>

    
        

    


    
   


