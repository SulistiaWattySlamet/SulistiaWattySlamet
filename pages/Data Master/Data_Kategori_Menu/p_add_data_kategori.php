<?php
include "../../../config/koneksi.php";
session_start();
// if (!isset($_SESSION["user"])) {
//     $nilai = 0;
//     header("Location: login.php");
//     exit;
// }
$nama       = $_POST['nama'];
$ket       = $_POST['keterangan'];

echo "data: " . $nama . $ket;

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
// $fotobaru = date('dmYHis').$foto;

// Set path folder tempat menyimpan fotonya
// $path = "images/".$fotobaru;
// Proses upload
// if (move_uploaded_file($tmp, $path)) { // Cek apakah gambar berhasil diupload atau tidak
// Proses simpan ke Database
$query = "INSERT INTO kategori_menu(id,nama_kategori,ket_kategori)
                        VALUES('', '" . $nama . "', '" . $ket . "')";
$sql = mysqli_query($mysqli, $query); // Eksekusi/ Jalankan query dari variabel $query
if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("Location:Data_Kategori_Menu.php");
    // header("Location:formulir.php?nim=$nim");
} else {
    // Jika Gagal, Lakukan :
    // header("Location:add_data_kategori.php");
    echo "eror 1";
}
// } else {
//     // Jika gambar gagal diupload, Lakukan :
//     // header("Location:../../../index.php");
//     echo "eror 2 gagal uplod foto";
// }