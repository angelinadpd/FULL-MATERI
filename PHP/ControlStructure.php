<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<h4> Control Structure</h4>
<h5>1. IF</h5>
if disini hanya akan dijalankan jika kondisi nya true
<?php
/** Code:
if(condisi) {
    #code...
}
*/
    $a=2;
    if($a>0) {
      //code yang akan dijalankan
    }
?>
<h5> 2. IF Else </h5>
<?php
/**
*if else : jika kondisi pada if benar maka akan di eksekusi dan jika kondisi if salah maka akan mengeksekusi yang ada di dalam else
* Code :
if(kondisi){
    #code...
}else{
    #code..
}
*/
$a=7;
if($a<3){
    //dijalankan bila kondisi nya benar
    echo "\$a kurang dari lima";
}else{
    //dijalan kan jika kondisi if salah
    echo "\$a lebih dari 5";
}
?>
<h5>3. Switch</h5>
<?php
/**
* Structur Switch
* switch berfungsi  untuk mencocokan variable dengan septiap case yang tertulis jika case cocok dengan variable, maka akan menjalan kan code di dalam case fungsi code break di dalam case adaah untuk menghentikan pengecekan
* Code :
    switch(var){
        case kondisi1:
            #code di eksekusi jika var=kondisi1;
            break;
        case kondisi2:
            #code di eksekusi jika var=kondisi2;
            break;
        default:
            code di eksekusi jika tidak ada yang sama dengan case;
    }
*/
$a=2;
switch ($a) {
    case 2:
        //di eksekusi jika a = 2
        echo " a = 2 ";
        break;
    case 4:
        //di eksekusi jika a = 4
        echo "a = 4";
        break;
		   default:
        //dieksekusi jika tidk sama dengan semua case
        echo "bukan 4 dan bukan 2";
        break;
}
?>
<h5>4. While</h5>
<?php
/**
* Perulangan While
* Code :
while(kondisi){
    # kode yang akan di ulangi
}
* kode didalam while akan di ulangi jika kondisi nya benar
*/
$a=1;
while ($a <= 10) {
    echo $a;
    $a++; //akan menambah nilai value dan operator ++ bisa diganti sesuai keinginan
}
?>
<h5> Do . . . While</h5>
perintah perulangan yang terus di eksekusi hingga nilai yang di minta telah didapatkan.
<?php
// Code :
$bil =3;
do {
echo “$bil”;
echo ” “;
$bil=$bil+3; // Hasil 3 6 9
} while ($bil<10)
?>
<h5> 6. FOR</h5>
code : <br/>
for (start; condition; increment) { <br/>
   statement;<br/>
}<br/>
<?php
for ($i=1;$i<=5;$i++) {
echo "Belajar PHP perulangan for";
echo "<br/>"; }
?>
<h4> Basic Syntax </h4>
1. < ?php   ?>  <br />
2. < html> <br/>
3. < bodey> <br/>
4. < title> <br/>
5. < border> <br/>
6. < div> <br/>
7. < tr> <br/>
8. /*. . . */
<h5> 7. ForEach </h5>
perulangan ini digunakan untuk perulangan pada array,sehingga tidak perlu mengetahui berapa kali melakukan perulangan.
<?php
$nama[0]=”Agnes”;
$nama[1]=”Angel”;
$nama[2]=”Fidiatus”;
foreach($nama as $value)
{
echo “<br>”;
echo “Nama Mahasiswa $value”;
}
?>
</body>
</html>
