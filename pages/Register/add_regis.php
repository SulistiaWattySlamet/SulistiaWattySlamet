<?php
// koneksi database
include "../../config/koneksi.php";

// menangkap data yang di kirim dari form

$username = $_POST['username'];
$password = md5($_POST["pass"]);
$nama = $_POST["name"];
$no_telp = $_POST["alamat"];
$alamat = $_POST["telp"];

// menginput data ke database
mysqli_query($mysqli, "insert into users values('','4','$username','$password','-','$nama','$no_telp','$alamat')");

// mengalihkan halaman kembali ke index.php
header("location:../Login/login.php");