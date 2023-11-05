<?php
session_start();
include "../../../config/koneksi.php";
if (!isset($_SESSION["user"])) {
    header("Location: ../../../index.php");
    exit;
}
$id_menu = $_POST['id_menu'];
$nama   = $_POST['nama_menu'];
// $gambar  = $_POST['gambar'];
$ket       = $_POST['keterangan'];
echo "buton: " . $_POST['update'];
$d = mysqli_fetch_array($mysqli->query("SELECT * FROM menu WHERE id=$id_menu"));
if (isset($_POST['update'])) {

    //  jika foto ganti
    $lokasi_file = $_FILES['gambar']['tmp_name'];
    $nama_foto = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $foto_file = str_replace(" ", "", $nama_foto);
    $direktori = "../../../upload/menu/$foto_file";
    echo "foto baru: " . $fotobaru;
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

    if ($foto_file) {
        $mysqli->query("UPDATE menu SET nama_menu='$_POST[nama_menu]', ket='$_POST[keterangan]',gambar='$foto_file'  WHERE id='$_POST[id_menu]'");
        header("Location: Data_Menu.php");
    } else {
        $mysqli->query("UPDATE menu SET nama_menu='$_POST[nama_menu]', ket='$_POST[keterangan]'    WHERE id='$_POST[id_menu]'");
        header("Location: Data_Menu.php");
    }
}
