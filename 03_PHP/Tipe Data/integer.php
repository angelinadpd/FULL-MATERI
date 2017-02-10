<!DOCTYPE html>
<head>
<title>Belajar cara menampilkan Integer PHP</title>
</head>
<body>

<?php
   $umur=21;
   $harga=15000;
   $rugi=-50000;
 
   echo $umur; //21
   echo "<br />";
   echo $harga; //15000
   echo "<br />";
   echo $rugi; //-50000
?>

<?php
   $a=14;
   $b=16;
   $c= $a + $b;
   echo $c; // 30
 
   $d=$a * $b;
   echo $d; // 224
?>

<?php
print PHP_INT_MAX; // 2147483647
?>

</body>
</html>