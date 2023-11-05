<?php
session_start();
require_once("../../../config/koneksi.php");
// date_default_timezone_set('Asia/Jayapura');
// $tanggal = date('Y-m-d H:i:s');
// $q = "UPDATE tlg SET tglup = '$tanggal' WHERE no=1
//     ";
// mysqli_query($conn, $q);
$id = $_GET['name'];
$sql = "delete from menu where id='$id'";
echo "id" . $id;
// echo $id;
if (mysqli_query($mysqli, $sql)) {
    // echo "berhasil hapus data" . $sql . "" . mysqli_error($mysqli);

?><script>
        document.location.href = "Data_Menu.php";
    </script>
<?php
} else {
    echo "gagal hapus data" . $sql . "" . mysqli_error($mysqli);
}
?>