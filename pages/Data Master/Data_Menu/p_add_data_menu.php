<?php
include "../../../config/koneksi.php";
session_start();
if (!isset($_SESSION["user"])) {
    $nilai = 0;
    header("Location: login.php");
    exit;
}
$nama_menu = $_POST['nama_menu'];
$ket       = $_POST['keterangan'];


$lokasi_file = $_FILES['gambar']['tmp_name'];
$nama_foto = $_FILES['gambar']['name'];
$tipe_file = $_FILES['gambar']['type'];
$ukuran_file = $_FILES['gambar']['size'];
$foto_file = str_replace(" ", "", $nama_foto);
$direktori = "../../../upload/menu/$foto_file";

$sql = null;
$MAX_FILE_SIZE = 1000000;
//100kb
if ($ukuran_file > $MAX_FILE_SIZE) {
    // header("Location:url?page=form_produk&status=1");
    exit();
}
$sql = null;
if ($ukuran_file > 0) {
    move_uploaded_file($lokasi_file, $direktori);
}
$data_id = 0;
$mysqli->query("INSERT INTO menu (id,nama_menu,gambar, ket) VALUES ('','$nama_menu','$foto_file','$ket') ");
$sql = mysqli_query($mysqli, "SELECT * FROM menu ORDER BY id DESC LIMIT 1");
while ($data    = mysqli_fetch_array($sql)) {
    $data_id = $data['id'];
}
$mysqli->query("INSERT INTO harga (id,id_menu,harga) VALUES ('','$data_id','0') ");
$mysqli->query("INSERT INTO stok (id,id_menu,stok,sisa) VALUES ('','$data_id','0','0') ");
header("Location: Data_Menu.php");
