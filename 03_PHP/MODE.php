<!DOCTYPE html>
<head>
<title>Belajar cara memasukkan kode PHP menggunakan berbagai MODE</title>
</head>
<body>

   <p>Kalimat ini dibuat menggunakan HTML saja </p>
   <?php 
      echo "<p>Kalimat ini dibuat menggunakan mode PHP style</p>"; 
   ?>

   <? 
      echo "<p>Kalimat ini dibuat menggunakan mode SMGL style.</br> Akan error untuk merubahnya lakukan di php.ini pada xampp carilah short_open_tag=Off tukar menjadi On</p>"; 
   ?>

   <%
      echo "<p>Kalimat ini dibuat menggunakan mode ASP Style.</br> Akan error untuk merubahnya lakukan di php.ini pada xampp carilah asp_tags=Of tukar menjadi On </p>"; 
   %>

   <script language="php">
      echo "<p>Kalimat ini dibuat menggunakan mode Script Style </p>"; 
   </script>

   <?=" <p>Kalimat ini dibuat menggunakan mode Instan style </p>"; ?>

</body>
</html>