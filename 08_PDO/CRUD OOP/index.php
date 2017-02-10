<?php

require_once "database/Connection.php";
require_once "database/QueryBuilder.php";
require_once "config/database.php";

$connection = Connection::make($config);

$db = new QueryBuilder($connection);

// $buku = $db->select('buku');

// foreach ($buku as $buku) {
//     echo $buku->kode.'</br>';
//     echo $buku->judul.'</br>';
//     echo $buku->pengarang.'</br>';
//     echo $buku->penerbit.'</br>';
//     echo $buku->tahunterbit.'</br>';
//     echo "</br>";
// }


$db->insert('buku', [
        'kode' => '007',
        'judul' => 'Tuilet',
        'pengarang' => 'Oben Cedric Hirata',
        'penerbit' => ' Gradien Mediatama',
        'tahunterbit' => '2009'
    ]);
?>



