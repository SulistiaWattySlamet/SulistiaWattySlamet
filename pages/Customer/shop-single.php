<?php
$nama_supplier  = "";
$alamat_supplier = "";
$email_supplier = "";
$kontak_supplier = "";
$ket_supplier   = "";
$link_supplier   = "";
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
$no_toli = 0;
$sql = "SELECT a.*,a.id as id_trans ,c.id as id_menu ,c.nama_menu as nama_menu,c.gambar as gambar_menu, d.*
FROM temp_transaksi_pemesanan a 
INNER JOIN menu c ON a.id_menu=c.id INNER JOIN harga d ON d.id_menu=c.id
WHERE id_user=$_SESSION[idusers] AND status=0";
$hasil = mysqli_query($mysqli, $sql);
$jumlah = mysqli_num_rows($hasil);
while ($g = mysqli_fetch_array($hasil)) {
    $no_toli++;
    // echo $g['nama_menu'];
}

$id_kategori = $_GET['id_kategori'];
// echo "id kategori: " . $id_kategori;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $nama_supplier ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
    <!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="<?php echo $email_supplier ?>"><?php echo $email_supplier ?></a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="<?php echo $link_supplier ?>"><?php echo $kontak_supplier ?></a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
                <?php echo $nama_supplier ?>
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-1justify-content-between mx-lg-5">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">Shop</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <a class="nav-icon d-none d-lg-inline" href="#">
                        <i class="fas fa-bell"></i>

                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="chart.php">
                        <i class="fas fa-fw fa-cart-arrow-down mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">
                            <?php echo $jumlah ?>



                            <!-- ================================================================sampe sini -->
                        </span>
                    </a>
                    <a onclick="return confirm('Yakin Ingin Keluar ?')" class="nav-icon position-relative text-decoration-none" data-toggle="modal" data-target="#exampleModal" href="../Login/log.php">
                        <i class="fa fa-fw fa-user mr-3"></i>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">

                <?php
                // $tampil = $mysqli->query("SELECT a.*,a.id as id_menu, b.*,c.*,c.id as id_harga, d.* FROM menu a 
                //             INNER JOIN kategori_menu b on a.id_kategori=b.id JOIN harga c ON a.id=c.id_menu INNER JOIN stok d ON a.id=d.id_menu
                //             WHERE a.id=$id_kategori");
                $tampil = $mysqli->query("SELECT a.id as menu_id,a.nama_menu,a.gambar,a.ket, b.*, b.id as harga_id  FROM menu a
                            INNER JOIN harga b ON a.id=b.id_menu WHERE a.id=$id_kategori");
                while ($r = mysqli_fetch_array($tampil)) {

                ?>

                    <div class="col-lg-5 mt-5">
                        <div class="card mb-3">
                            <img class="card-img img-fluid" src="<?php echo "../../upload/menu/" . $r['gambar'] . " "; ?>" id="product-detail">
                        </div>
                    </div>
                    <!-- col end -->
                    <div class="col-lg-7 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="h2">
                                    <?php echo "$r[nama_menu]" ?>
                                </h1>
                                <p class="h3 py-2">
                                <p class="h4">
                                    <?php echo "Rp. " . number_format("$r[harga]", '0', '.', '.') . " " ?>
                                </p>
                                </p>
                                <h6>Description:</h6>
                                <p><?php echo "$r[ket]" ?></p>
                                <form action="add_item_cart.php" method="GET">
                                    <input type="hidden" name="idmenu" value="<?php echo $r['id_menu'] ?>">
                                    <input type="hidden" name="datajml" value="<?php echo "1" ?>">
                                    <input type="hidden" name="harga" value="<?php echo $r['harga'] ?>">
                                    <input type="hidden" name="idharga" value="<?php echo $r['harga_id'] ?>">
                                    <div class="row pb-3">
                                        <!-- onclick="return confirm('Berhasil, Silahkan Cek Pesanan')"  -->
                                        <div class="col d-grid">
                                            <button type="submit" class="btn btn-success btn-lg" name="action" value="addmenu">Add To
                                                Cart</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div> <?php
                        } ?>
            </div>
        </div>
    </section>
    <!-- Close Content -->

    <!-- Start Article -->

    <!-- End Article -->


    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo"><?php echo $nama_supplier ?></h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            <?php echo $alamat_supplier ?>
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340"><?php echo $kontak_supplier ?></a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="<?php echo $link_supplier ?>"><?php echo $email_supplier ?></a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                </div>

                <div class="col-md-4 pt-5">
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                </div>
                <div class="col-auto">
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            <?php echo $ket_supplier ?> By. <a rel="sponsored" href="<?php echo $link_supplier ?>" target="_blank"><?php echo $pemilik_supplier ?></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="assets/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->

</body>

</html>