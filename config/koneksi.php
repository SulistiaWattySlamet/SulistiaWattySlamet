<?php
// include "function.php";
// include_once("function.php");

$server = "localhost";
$username = "root";
$password = "";
$database = "db_warung";

$mysqli = new mysqli($server, $username, $password, $database);

if ($mysqli === false) {
    die("Maaf, Gagal Konek ke Database" .  $mysqli->connect_error);
}
// else{
//     die("berhasil konek" .  $mysqli->connect_error);
// }
$q = "SELECT * FROM supplier ORDER BY id DESC LIMIT 1";
$h = mysqli_query($mysqli, $q);
while ($g = mysqli_fetch_array($h)) {
    $nama_supplier = $g['nama'];
    $alamat_supplier = $g['alamat'];
    $email_supplier = $g['email'];
    $kontak_supplier = $g['kontak'];
    $ket_supplier = $g['ket'];
    $link_supplier = $g['link'];
    $pemilik_supplier = $g['pemilik'];
}

return $mysqli;