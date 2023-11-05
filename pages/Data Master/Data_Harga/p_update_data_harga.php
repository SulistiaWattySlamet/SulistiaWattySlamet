<?php
session_start();
include "../../../config/koneksi.php";
if (!isset($_SESSION["user"])) {
    header("Location: ../../../index.php");
    exit;
}
$id = $_POST['id_harga'];
$harga   = $_POST['harga'];
$sql = "UPDATE harga SET harga='$harga' WHERE id='$id'";
if (mysqli_query($mysqli, $sql)) {
    echo "Berhasil update data ke database ";
    header("Location: Data_Harga.php");
} else {
    echo "Error:" . $sql . "" . mysqli_error($mysqli);
    echo "data: " . $id . $harga;
}
