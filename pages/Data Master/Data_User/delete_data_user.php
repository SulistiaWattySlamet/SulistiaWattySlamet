<?php
session_start();
require_once("../../../config/koneksi.php");
$id = $_GET['iduser'];
$sql = "DELETE FROM users WHERE idusers='$id'";
if (mysqli_query($mysqli, $sql)) {
    // echo "berhasil hapus data" . $sql . "" . mysqli_error($mysqli);

?><script>
document.location.href = "Data_User.php";
</script>
<?php
} else {
    echo "gagal hapus data" . $sql . "" . mysqli_error($mysqli);
}
?>