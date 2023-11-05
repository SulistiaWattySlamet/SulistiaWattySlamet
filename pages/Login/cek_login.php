<?php
error_reporting(0);

include "../../config/koneksi.php";
$pass = md5($_POST['pass']);

$login = $mysqli->query("SELECT * FROM users WHERE username='$_POST[username]' AND password='$pass'");
// if (mysqli_num_rows($login) == 0) {
//   $login = $mysqli->query("SELECT * FROM customers WHERE username='$_POST[username]' AND password='$pass'");
// }
$ketemu = mysqli_num_rows($login);
$r = mysqli_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0) {




  // inisialisasi session /////////

  ("username");
  ("password");
  // ("status");
  ("level_user");
  session_start();
  $_SESSION['user'] = true;
  $_SESSION['idusers'] = $r['idusers'];
  $_SESSION['username']     = $r['username'];
  $_SESSION['password']     = $r['password'];
  // $_SESSION['status']       = $r['status'];
  $_SESSION['level_user']     = $r['level_user'];

  if ($_SESSION['level_user'] == 4) {
    header('location:../Customer');
    die("Maaf, Gagal Login" .  $mysqli->connect_error);
  } else {
    header('location:../../index.php');
    die("Berhasl login" .  $mysqli->connect_error);
  }
} else {
  echo "<SCRIPT language=Javascript>
  alert('Login Anda Gagal,  username dan password tidak valid. Silahkan Hubungi Admin')
  </script>";
  echo "
  <meta http-equiv='refresh' content='0; url=login.php'/>";
}
