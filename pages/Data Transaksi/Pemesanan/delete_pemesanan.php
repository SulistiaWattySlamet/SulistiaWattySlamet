<?php
session_start();
require_once("../../../config/koneksi.php");
$id = $_GET['id'];
$sql = "DELETE FROM transaksi_pemesanan WHERE id='$id'";
if (mysqli_query($mysqli, $sql)) {
    $sql = "DELETE FROM temp_transaksi_pemesanan WHERE id_transaksi='$id'";
    if (mysqli_query($mysqli, $sql)) {

?><script>
            document.location.href = "Transaksi_Pemesanan.php";
        </script>
<?php
    }
} else {
    echo "gagal hapus data" . $sql . "" . mysqli_error($mysqli);
}
?>