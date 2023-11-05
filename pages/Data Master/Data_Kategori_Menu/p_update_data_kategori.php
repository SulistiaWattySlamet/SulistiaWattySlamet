<?php
session_start();
include "../../../config/koneksi.php";
// date_default_timezone_set('Asia/Jayapura');
//     $tanggal = date('Y-m-d H:i:s');
//     $q="UPDATE tlg SET tglup = '$tanggal' WHERE no=1
//     "; mysqli_query($conn,$q);
// require_once("../auth.php");
if (!isset($_SESSION["user"])) {
    header("Location: ../../../index.php");
    exit;
}
$id = $_POST['id'];
$nama   = $_POST['nama'];
$ket       = $_POST['keterangan'];
$sql = "update kategori_menu set
nama_kategori='$nama',ket='$ket' where id='$id'";
if (mysqli_query($mysqli, $sql)) {
    echo "Berhasil update data ke database ";
    header("Location: Data_Kategori_Menu.php");
} else {
    echo "Error:" . $sql . "" . mysqli_error($mysqli);
}