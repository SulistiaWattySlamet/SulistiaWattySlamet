<?php
session_start();
include "../../../config/koneksi.php";
if (!isset($_SESSION["user"])) {
    header("Location: ../../../index.php");
    exit;
}
$id = $_POST['id'];
$level   = $_POST['level_user'];
$username       = $_POST['username'];
$gender = $_POST['gender'];
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$pass_awal = $_POST['pass_awal'];

if (!isset($_POST["password"])) {
    $mysqli->query("UPDATE users SET level_user='$level', username='$username',gender='$gender',nama='$nama',no_telp='$no_telp',alamat='$alamat'  WHERE idusers='$id'");
    echo "berhasil";
    header("Location: Data_User.php");
} else {
    $password = md5($_POST['password']);
    $mysqli->query("UPDATE users SET level_user='$level', username='$username', password='$password',gender='$gender',nama='$nama',no_telp='$no_telp',alamat='$alamat'  WHERE idusers='$id'");
    echo "Gagal";
    header("Location: Data_User.php");
}