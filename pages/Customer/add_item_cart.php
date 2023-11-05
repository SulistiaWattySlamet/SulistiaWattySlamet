<?php
include "../../config/koneksi.php";
session_start();
if (!isset($_SESSION["user"])) {
    $nilai = 0;
    header("Location: ../Login/login.php");
    exit;
} else {
    if ($_SESSION['level_user'] != 4) {
        header('location:../../index.php');
        die("Maaf, " .  $r['username'] . "Anda Sudah Login" .  $mysqli->connect_error);
    }
}

$idusers = $_SESSION['idusers'];
$idmenu = $_GET['idmenu'];
$jml = $_GET['datajml'];
$action = $_GET['action'];
// $jml = $_REQUEST['name'];
echo "data jml" . $jml . "id menu: " . $idmenu;
if ($jml != 0) {
    $jumlah_harga = 0;
    $harga = 0;
    $banyak_data = 0;
    $sql3 = "SELECT * FROM temp_transaksi_pemesanan WHERE id_user=$idusers AND id_menu=$idmenu";
    $hasil3 = mysqli_query($mysqli, $sql3);
    while ($bd = mysqli_fetch_array($hasil3)) {
        $banyak_data = $bd['jumlah'];
    }
    $sql1 = "SELECT * FROM harga WHERE id_menu=$idmenu";
    $hasil1 = mysqli_query($mysqli, $sql1);
    while ($g = mysqli_fetch_array($hasil1)) {
        $jumlah_harga = $g['harga'];
    }

    if ($banyak_data <= 0) {
        $harga = $jumlah_harga;
    } else {
        $harga = $banyak_data * $jumlah_harga;
    }
    if ($action == "add") {
        $sql = "UPDATE temp_transaksi_pemesanan SET jumlah=$jml+1, harga=$harga+$jumlah_harga WHERE id_user = $idusers AND id_menu=$idmenu";
        if (mysqli_query($mysqli, $sql)) {
            echo "berhasil add jumlah pesanana: " . $harga;
            header("Location: chart.php");
            // return "success!";
            // echo "seukse";
        } else {
            echo "gagal";
            // return "failed!";
        }
    } else if ($action == "kurangi") {
        $sql = "UPDATE temp_transaksi_pemesanan SET jumlah=$jml-1, harga=$harga-$jumlah_harga WHERE id_user = $idusers AND id_menu=$idmenu";
        if (mysqli_query($mysqli, $sql)) {
            header("Location: chart.php");
            // return "success!";
            // echo "seukse";
        } else {
            echo "gagal";
            // return "failed!";
        }
    } else if ($action == "delete") {
        $sql = "DELETE FROM temp_transaksi_pemesanan WHERE id_user = $idusers AND id_menu=$idmenu";
        if (mysqli_query($mysqli, $sql)) {
            header("Location: chart.php");
            // return "success!";
            // echo "seukse";
        } else {
            echo "gagal";
            // return "failed!";
        }
    } else if ($action == "addmenu") {
        $harga = $_GET['harga'];
        $idharga = $_GET['idharga'];
        $tgl = date('Y-m-d');
        echo "add menu: " .  date('Y-m-d');

        $sql1 = "SELECT * FROM temp_transaksi_pemesanan
        WHERE id_user=$idusers AND id_menu=$idmenu";
        $hasil = mysqli_query($mysqli, $sql1);
        $jumlah = mysqli_num_rows($hasil);
        if ($jumlah != 0) {
            echo "ada jumlah: " . $jumlah;
            $sql = "UPDATE temp_transaksi_pemesanan SET jumlah=$jumlah+1, harga=$harga+$jumlah_harga WHERE id_user = $idusers AND id_menu=$idmenu";
            if (mysqli_query($mysqli, $sql)) {
                header("Location: shop.php");
                // return "success!";
                // echo "seukse";
            }
        } else {
            $sql = "INSERT INTO temp_transaksi_pemesanan(id,tgl,id_menu,id_transaksi,id_user,jumlah,harga,status)  VALUES('','" . $tgl . "','" . $idmenu . "','0', '" . $idusers . "', '" . $jml . "', '" . $harga . "', '0')";
            if (mysqli_query($mysqli, $sql)) {
                header("Location: shop.php");
                // return "success!";
                echo "sukse tambahkan ke cart";
            } else {
                echo "gagal";
                // return "failed!";
            }
        }
    } else if ($action == "addpemesanan") {

        $sql = "UPDATE temp_transaksi_pemesanan SET jumlah=$jml-1 WHERE id_user = $idusers AND id_menu=$idmenu";
        if (mysqli_query($mysqli, $sql)) {
            header("Location: chart.php");
            // return "success!";
            // echo "seukse";
        }

        if (md5($_GET['password']) == $_SESSION['password']) {
            $harga = $_GET['harga'];
            $nomeja = $_GET['nomeja'];
            $tgl = date('Y-m-d');
            echo "add menu: " . $nomeja . $harga .  $tgl;
            $sql = "INSERT INTO transaksi_pemesanan(id,id_users,tgl,nomer_meja,total,status)  VALUES('', '" . $idusers . "', '" . $tgl . "', '" . $nomeja . "', '" . $harga . "', '0')";
            if (mysqli_query($mysqli, $sql)) {

                $id_transaksi = 0;
                $q = "SELECT*FROM transaksi_pemesanan ORDER BY id DESC LIMIT 1";
                $hasil = mysqli_query($mysqli, $q);
                while ($g = mysqli_fetch_array($hasil)) {
                    $id_transaksi = $g['id'];
                }


                $sql = "UPDATE temp_transaksi_pemesanan SET id_transaksi=$id_transaksi, status=1 WHERE id_user = $idusers AND status=0";
                if (mysqli_query($mysqli, $sql)) {
?>
<script type="text/javascript">
alert("Tunggu, Pesanan Sedang Diproses");
window.location.href = "chart.php";
</script>
<?php
                    // header("Location: chart.php");
                    // return "success!";
                    // echo "seukse";
                } else {
                    echo "gagal1";
                    // return "failed!";
                }
            } else {
                echo "gagal2";
                // return "failed!";
            }
        } else {
            ?>
<script type="text/javascript">
alert("Gagal, Password Salah");
window.location.href = "chart.php";
</script>
<?php
        }
    }
} else {
    // echo "error, jumlah: " . $jml;
}