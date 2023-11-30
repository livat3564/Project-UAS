<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <P>SAYA ADALAH PEMAIN BOLA </P>
    <div class="container" style="background-color:red; width:200px; height:300px;"></div>
    <?php
$age = array("Peter"=>"35 98" , "Ben"=>"37", "Joe"=>"43");
$b = array("Peter"=>"35" , "Ben"=>"37", "Joe"=>"43");


?>
<table style="color:black;">
<tr>
    <?php foreach($age as $x => $val){
  echo "<td>$x = $val</td>";
}?>
</tr>
<tr>
<?php foreach($b as $x => $val){
  echo "<td>$x = $val</td>";
}?>
</tr>
</table>
  
</body>
</html>