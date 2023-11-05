<?php
include "../../../config/koneksi.php";
session_start();
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../vendors/feather/feather.css">
    <link rel="stylesheet" href="../../../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../../../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../../js/select.dataTables.min.css" type="text/css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../../css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../../images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="../../../images/logo.svg" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../../../images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                                    <i class="icon-search"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="icon-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="../../../images/faces/face29.jpg" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="../../../pages/Login/log.php">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>

            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../../../index.php">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">Master Data</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="../../Data Master/Data_Kategori_Menu/Data_Kategori_Menu.php">Data
                                        Kategori Menu</a></li>
                                <li class="nav-item"> <a class="nav-link" href="../../Data Master/Data_Menu/Data_Menu.php">Data
                                        Menu</a></li>
                                <li class="nav-item"> <a class="nav-link" href="../../Data Master/Data_Harga/Data_Harga.php">Data
                                        Harga</a></li>
                                <li class="nav-item"> <a class="nav-link" href="../../Data Master/Data_Stok_Menu/Data_Stok_Menu.php">Data
                                        Stok Menu</a></li>
                                <li class="nav-item"> <a class="nav-link" href="../../Data Master/Data_User/Data_User.php">Data
                                        User</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                            <!-- <i class="icon-columns menu-icon"></i> -->
                            <i class="icon-clipboard menu-icon"></i>

                            <span class="menu-title">Data Transaksi</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="form-elements">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="../../Data Transaksi/Pemesanan/Transaksi_Pemesanan.php">Pemesanan
                                    </a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">

                                    <p class="card-title">
                                        <a class="btn btn-success" href="Transaksi_Pemesanan.php">Kembali</a>
                                        Detail Pemesanan
                                    </p>
                                    <!-- add_data_kategori.php -->

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <form action="POST">
                                                    <table id="dataTable" class="display expandable-table" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Menu</th>
                                                                <th>Harga</th>
                                                                <th>Jumlah</th>
                                                                <th>Delete</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $tampil = $mysqli->query("SELECT a.*, a.id as id_menu, b.*, b.id as id_temp, c.*, c.id as id_harga
                                                            FROM menu a 
                                                            INNER JOIN temp_transaksi_pemesanan b ON b.id_menu=a.id
                                                            INNER JOIN harga c ON c.id_menu=a.id
                                                            WHERE id_transaksi=$id");
                                                            $no = 1;
                                                            while ($r = mysqli_fetch_array($tampil)) {
                                                            ?>
                                                                <tr>
                                                                    <td><?php echo "$no" ?></td>
                                                                    <td><?php echo "$r[nama_menu]" ?></td>
                                                                    <td><?php echo "$r[harga]" ?></td>
                                                                    <td><?php echo "$r[jumlah]" ?></td>
                                                                    <td>
                                                                        <a class="btn btn-danger" href="delete_detail_pemesanan.php?id=<?php echo $r['id_temp']; ?>&idtransaksi=<?php echo $r['id_transaksi']; ?>" onclick="return confirm('Anda yakin hapus ?')">Delete</a>
                                                                    </td>
                                                                </tr>
                                                            <?php $no++;
                                                            } ?>
                                                        </tbody>
                                                    </table>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <?php echo $ket_supplier ?> <a rel="sponsored" href="<?php echo $link_supplier ?>" target="_blank"><?php echo $pemilik_supplier ?></a>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="../../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../../vendors/chart.js/Chart.min.js"></script>
    <script src="../../../vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="../../../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="../../../js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../../js/off-canvas.js"></script>
    <script src="../../../js/hoverable-collapse.js"></script>
    <script src="../../../js/template.js"></script>
    <script src="../../../js/settings.js"></script>
    <script src="../../../js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../../js/dashboard.js"></script>
    <script src="../../../js/Chart.roundedBarCharts.js"></script>
    <script src="../../../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../../../vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="../../../vendors/js/sb-admin-datatables.min.js"></script>

    <!-- End custom js for this page-->


</body>

</html>