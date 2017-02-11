<?php

require_once "database/Connection.php";
require_once "database/QueryBuilder.php";
require_once "config/database.php";

$connection = Connection::make($config);
$db = new QueryBuilder($connection);
$buku = $db->find('buku',$_GET['kode']);
    
    if(isset($_POST['submit'])){
        $kode = $_GET['kode'];
        try {
            $db->update('buku', [
                'kode' => $_POST['kode'],
                'judul' => $_POST['judul'],
                'pengarang' => $_POST['pengarang'],
                'penerbit' => $_POST['penerbit'],
                'tahunterbit' => $_POST['tahunterbit']
            ],$kode);
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
?>

 <!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
</head>
<body>
    <form action="edit.php" method="post" accept-charset="utf-8">
        <input type="hkodeden" name="kode" value="<?= $buku['kode']?>">
        <p>Judul
          <input type="text" name="judul" value="<?= $buku['judul']?>" placeholder="" >
        </p>
        <p>Pengarang
          <input type="text" name="pengarang" value="<?= $buku['pengarang']?>" placeholder="" >
        </p>
        <p>Penerbit
          <input type="text" name="penerbit" value="<?= $buku['penerbit']?>" placeholder="">
        </p>
        <p>Tahun Terbit
          <input type="text" name="tahunterbit" value="<?= $buku['tahunterbit']?>" placeholder="">
        </p>
        <input type="submit" name="submit" value="submit">
        <input type="reset" name="reset" value="reset"/>
        <br>
        <br>
    </table>
</body>
</html>
