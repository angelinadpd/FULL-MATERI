<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> Dasar PHP </title>
</head>
<body>
<?php
/* 
*HTML : bahasa program yang digunakan untuk membuat web.
* dibawah ini contoh pembuatan dasar html
*/
?>
<h4> 1. Server Side </h4>
<h5> yaitu code yang datanya dinputkan, data tersebut maasuk ke database web "cloud" yang di atur oleh dba.scrip php di eksekusi di server yang hsilnya akan dikirimkan ke browser dalam bentuk html yang mana kde php tak terlihat.</h5>
<h4> 2. HTML</h4>
<form name==”input data” action=”dta1.php” method=”post”>
<table border="1">
<tr>
<td>Nama</td>
<td>:</td>
<td><input type=”text” name=”nama” /></td>
</tr>
<td>NIM</td>
<td>:</td>
<td><input type=”text” name=”nim” /></td>
</tr>
<tr>
<td>Prodi</td>
<td>:</td>
<td><form method="post" action="#">
<input type="radio" name="tk" value="teknik"/>Teknik Komputer<br/>
<input type="radio" name="tk" value="manj"/>Manajemen Informatika<br/>
<br/>
</tr>
<tr>
<td>Jurusan</td>
<td>:</td>
<td><select id=”jurusan” name=”jurusan”>
<option value=”TE”>Teknik Elektro</option>
<option value=”TS”>Teknik Sipil</option>
<option value=”Ti”>Teknologi Informasi</option>
</select>
</td>
</tr>
<tr> 
<td> Alamat</td>
<td>:</td>
<td><textarea></textarea>
</table>
<table>
<tr>
<td><button type=”submit” name=”submit” value=”submit” /> Simpan </td>
<td></td>
<td><button type=”reset” name=”reset” value=”submit” /> Batal </td>
</tr>
</table>
</body>
</html>
