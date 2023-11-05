<?php
session_start();
include "../../../config/koneksi.php";
if (!isset($_SESSION["user"])) {
    header("Location: ../../../index.php");
    exit;
}
$id = $_GET['id'];
$bayar = $_GET['bayar'];
$total = $_GET['total'];
$nilai = 0;
if ($_GET['status'] == 0) {
    $nilai = 1;
} else {
    $nilai = 0;
}
echo "nilai: " . $nilai;
$sql = "UPDATE transaksi_pemesanan SET status='$nilai',bayar=$bayar,kembali=$bayar-$total WHERE id='$id'";
if (mysqli_query($mysqli, $sql)) {
    echo "Berhasil update data ke database ";
    header("Location: Transaksi_Pemesanan.php");
} else {
    echo "Error: " . $bayar . $sql . "" . mysqli_error($mysqli);
}