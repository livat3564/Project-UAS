<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
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
<center><h2><?=$judul;?></h2></center>
<?= $this->session->flashdata('pesan'); ?>
<?=  form_error('judulberita'), form_error('inputberita'), form_error('tanggal');?>

<div class="mb-3">
<form action="<?php echo base_url(); ?>home/berhasilupload" enctype="multipart/form-data" method="post">
    <input type="hidden" class="form-control" id="idfile"  value="<?php echo count($user)+1;?>" name="idfile">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">nama file</label>
  <input type="text" name="namafile"class="form-control" id="namafile" placeholder="nama file">
</div>
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">File</label>
  <input class="form-control" type="file" id="file" name="file"  Accept="Image/*"><br>
  <input  class="btn btn-utama"type="submit"alue="Upload">
  </form>
</div>
</div>
</body>
</html>


