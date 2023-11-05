<?php
include "../../../config/koneksi.php";
session_start();
if (!isset($_SESSION["user"])) {
    $nilai = 0;
    header("Location: login.php");
    exit;
}
$nama = $_POST['nama'];
$level_user = $_POST['level_user'];
$username       = $_POST['username'];
$password       = md5($_POST['password']);
$query = $mysqli->query("INSERT INTO users (idusers,level_user,username,password, nama) VALUES ('','$level_user','$username','$password','$nama') ");
header("Location: Data_User.php");
