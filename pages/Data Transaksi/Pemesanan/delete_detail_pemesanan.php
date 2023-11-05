<?php
session_start();
require_once("../../../config/koneksi.php");
$id = $_GET['id'];
$idtransaksi = $_GET['idtransaksi'];
$sql = "DELETE FROM temp_transaksi_pemesanan where id='$id'";
if (mysqli_query($mysqli, $sql)) {
?><script>
document.location.href = "Detail_Transaksi_Pemesanan.php?id=<?php echo $idtransaksi; ?>";
</script>
<?php
} else {
    echo "gagal hapus data" . $sql . "" . mysqli_error($mysqli);
}
?>