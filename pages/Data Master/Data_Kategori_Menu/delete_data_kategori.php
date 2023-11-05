<?php
session_start();
require_once("../../../config/koneksi.php");
// date_default_timezone_set('Asia/Jayapura');
// $tanggal = date('Y-m-d H:i:s');
// $q = "UPDATE tlg SET tglup = '$tanggal' WHERE no=1
//     ";
// mysqli_query($conn, $q);
$id = $_GET['name'];
echo "ini id awal: " . $id;
$databaru = null;

?>
<!--
<table id="dataTable" class="display expandable-table" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Menu</th>
            <th>ID Kategori</th>
            <th>Nama Kategori</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // $tampil = $mysqli->query("SELECT a.*,b.*,a.id as id_menu FROM menu a INNER JOIN kategori_menu b on a.id_kategori=b.id order by a.id asc");
        // $no = 1;
        // $nama_kategori = "";
        // $data_id_menu = 0;
        // $data_id_kategori = 0;
        // while ($r = mysqli_fetch_array($tampil)) {
        ?>
        <tr>
            <td><?php echo "$no" ?></td>
            <td><?php $data_id_menu = $r["id_menu"];
                echo $data_id_menu; ?></td>
            <td><?php $data_id_kategori = $r["id_kategori"];
                echo $data_id_kategori ?></td>
            <td><?php $nama_kategori = $r["nama_kategori"];
                echo $nama_kategori; ?></td>
        </tr>
        <?php
        // if ($nama_kategori == $id) {
        //     $sql1 = "UPDATE  menu  SET  id_kategori='0'   WHERE   id = '$data_id_menu'";
        //     if (mysqli_query($mysqli, $sql1)) {
        //         echo "berhasil update data" . $id . " " . mysqli_error($mysqli);
        //     } else {
        //         echo "gagal update data" . $data_id_menu . $id . "" . mysqli_error($mysqli);
        //     }
        //     $no++;
        // }
        // } 
        ?>
    </tbody> -->
<?php

$sql = "delete from kategori_menu where nama_kategori='$id'";
echo "id" . $id;
// echo $id;
if (mysqli_query($mysqli, $sql)) {

?><script>
        document.location.href = "Data_Kategori_Menu.php";
    </script>
<?php
} else {
    echo "gagal hapus data" . $sql . "" . mysqli_error($mysqli);
}
?>