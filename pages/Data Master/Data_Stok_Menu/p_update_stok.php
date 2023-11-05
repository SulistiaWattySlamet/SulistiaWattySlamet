<?php
session_start();
include "../../../config/koneksi.php";
if (!isset($_SESSION["user"])) {
    header("Location: ../../../index.php");
    exit;
}
$id = $_POST['id_stok'];
$stok   = $_POST['stok'];
$sisa   = $_POST['sisa'];
$sql = "UPDATE stok SET stok='$stok', sisa='$sisa' WHERE id='$id'";
if (mysqli_query($mysqli, $sql)) {
    header("Location: Data_Stok_Menu.php");
} else {
    echo "Error:" . $sql . "" . mysqli_error($mysqli);
}
