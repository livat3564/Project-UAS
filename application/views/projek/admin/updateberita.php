<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/csssendiri.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/projectuas/css/cssfooter.css">
   
</head>
<body>
  
<div class="container" style="width:900px;">
<div class="mb-3">

</div>
<?=  form_error('judulberita'), form_error('inputberita'), form_error('tanggal');?>
<div class="container" style="width:900px;">
<div class="mb-3">
<center><h2><?=$judul;?></h2></center>
</div>

<?=  form_error('judulberita'), form_error('inputberita'), form_error('tanggal');?>
<?php foreach ($user as $b){ ?>
<div class="mb-3">
  <form action="<?php echo base_url(); ?>home/updateberitacek" enctype="multipart/form-data" method="post">
    <input type="hidden" class="form-control" id="idberita" placeholder="name@example.com" value="<?php echo $b['idberita'];?>" name="idberita" >
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Judul Berita</label>
  <input type="text" name="judulberita"class="form-control" id="judulberita" placeholder="judul berita" value="<?php echo $b['judulberita'];?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
  <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="masukan tanggal" value="<?php echo $b['tanggal'];?>" >
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">isi berita</label>
  <textarea class="form-control" name="inputberita" id="inputberita" rows="3" maxlength="1200"><?php echo $b['isiberita'];?></textarea>
<?php } ?>
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Gambar</label>
  <input class="form-control" type="file" id="gambar" name="gambar"  Accept="Image/*" value="<?php echo $b['gambar']; ?>"minlength="3"><br>
  <input  class="btn btn-utama"type="submit" value="Upload">
  </form>
</div>
</div>
</body>
</html>