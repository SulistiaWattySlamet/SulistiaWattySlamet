<?php
include "../../../config/koneksi.php";
session_start();
// if (!isset($_SESSION["user"])) {
//     $nilai = 0;
//     header("Location: login.php");
//     exit;
// }
$id = $_GET['iduser'];
$leveluser = 0;
$gender = "";
$hasil = $mysqli->query("SELECT * FROM users WHERE idusers = $id");
while ($row = mysqli_fetch_array($hasil)) {
    $id = $row['idusers'];
    $leveluser = $row['level_user'];
    $username = $row['username'];
    $pass = $row['password'];
    $gender = $row['gender'];
    $nama = $row['nama'];
    $no_telp = $row['no_telp'];
    $alamat = $row['alamat'];
}
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
    <link rel="stylesheet" href="../../../vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../../css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../../images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="../../../index.html"><img src="../../../images/logo.svg"
                        class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="../../../index.html"><img
                        src="../../../images/logo-mini.svg" alt="logo" /></a>
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
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
                                aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-toggle="dropdown">
                            <i class="icon-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="../../../images/faces/face29.jpg" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <a onclick="return confirm('Yakin Ingin Keluar ?')" class="dropdown-item" href="../../../pages/Login/log.php">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_settings-panel.html -->
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
            <!-- partial:../../partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../../../index.php">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">Master Data</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="../Data_Menu/Data_Menu.php">Data
                                        Menu</a></li>
                                <li class="nav-item"> <a class="nav-link" href="../Data_Harga/Data_Harga.php">Data
                                        Harga</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="../Data_Stok_Menu/Data_Stok_Menu.php">Data
                                        Stok Menu</a></li>
                                <li class="nav-item"> <a class="nav-link" href="#">Data
                                        User</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                            aria-controls="form-elements">
                            <!-- <i class="icon-columns menu-icon"></i> -->
                            <i class="icon-clipboard menu-icon"></i>

                            <span class="menu-title">Data Transaksi</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="form-elements">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link"
                                        href="../../Data Transaksi/Pemesanan/Transaksi_Pemesanan.php">Pemesanan
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
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Update Data User</h4>
                                    <!-- <p class="card-description">
                                        Basic form layout
                                    </p> -->

                                    <form class="forms-sample" method="post" action="p_update_data_user.php"
                                        enctype="multipart/form-data">
                                        <div><input type="hidden" name="id" value="<?php echo $id; ?>"></div>
                                        <div><input type="hidden" name="pass_awal" value="<?php echo $pass; ?>"></div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Username</label>
                                                <input type="text" class="form-control" placeholder="Username"
                                                    name="username" value="<?php echo $username; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Password</label>
                                                <div class="row">
                                                    <div class="col-md-11">
                                                        <input type="password" class="form-control"
                                                            placeholder="Password" disabled="disabled" id="sendNewSms"
                                                            name="password" value="<?php echo $pass; ?>">
                                                    </div>
                                                    <input type="checkbox" id="checkme" />

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Hak Akses</label>
                                                <select id='level_user' name='level_user' class="form-control select2"
                                                    data-validation="[NOTEMPTY]">
                                                    <option value="">-- Silahkan Pilih Hak Akses User --</option>
                                                    <?php
                                                    $result = $mysqli->query("SELECT * from users WHERE idusers=$id");
                                                    while ($r = mysqli_fetch_array($result)) {
                                                        if (1 == $r['level_user']) {
                                                            echo "<option value='1' selected>" . "admin" . "</option>";
                                                            echo "<option value='2'>" . "pimpinan" . "</option>";
                                                            echo "<option value='3'>" . "kasir" . "</option>";
                                                            echo "<option value='4'>" . "customer" . "</option>";
                                                        } else if (2 == $r['level_user']) {
                                                            echo "<option value='1'>" . "admin" . "</option>";
                                                            echo "<option value='2' selected>" . "pimpinan" . "</option>";
                                                            echo "<option value='3'>" . "kasir" . "</option>";
                                                            echo "<option value='4'>" . "customer" . "</option>";
                                                        } else if (3 == $r['level_user']) {
                                                            echo "<option value='1'>" . "admin" . "</option>";
                                                            echo "<option value='2'>" . "pimpinan" . "</option>";
                                                            echo "<option value='3' selected>" . "kasir" . "</option>";
                                                            echo "<option value='4'>" . "customer" . "</option>";
                                                        } else if (4 == $r['level_user']) {
                                                            echo "<option value='1'>" . "admin" . "</option>";
                                                            echo "<option value='2'>" . "pimpinan" . "</option>";
                                                            echo "<option value='3'>" . "kasir" . "</option>";
                                                            echo "<option value='4' selected>" . "customer" . "</option>";
                                                        } else {
                                                            echo "<option value='1'>" . "admin" . "</option>";
                                                            echo "<option value='2'>" . "pimpinan" . "</option>";
                                                            echo "<option value='3'>" . "kasir" . "</option>";
                                                            echo "<option value='4'>" . "customer" . "</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Nama</label>
                                                <input type="text" class="form-control" placeholder="Nama" name="nama"
                                                    value="<?php echo $nama; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">No Telp</label>
                                                <input type="text" class="form-control" name="no_telp"
                                                    placeholder="081234567890" value="<?php echo $no_telp; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Alamat</label>
                                                <input type="text" class="form-control" name="alamat"
                                                    placeholder="jl.Trans seram, Kelapa Dua"
                                                    value="<?php echo $alamat; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Gender</label>
                                                <select id='gender' name='gender' class="form-control select2"
                                                    data-validation="[NOTEMPTY]">
                                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                                    <?php
                                                    $resul = $mysqli->query("SELECT * from users WHERE idusers=$id");
                                                    while ($re = mysqli_fetch_array($resul)) {
                                                        if ("P" == $re['gender']) {
                                                            echo "<option value='P' selected>" . "Perempuan" . "</option>";
                                                            echo "<option value='L'>" . "Laki-laki" . "</option>";
                                                        } else if ("L" == $re['gender']) {
                                                            echo "<option value='L' selected>" . "Laki-laki" . "</option>";
                                                            echo "<option value='P'>" . "Perempuan" . "</option>";
                                                        } else {
                                                            echo "<option value='L'>" . "Laki-laki" . "</option>";
                                                            echo "<option value='P'>" . "Perempuan" . "</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2" name="update"
                                                value=1>Submit</button>
                                            <a href="Data_User.php" class="btn btn-light" hr>Cancel</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <?php echo $ket_supplier ?> <a rel="sponsored" href="<?php echo $link_supplier ?>"
                            target="_blank"><?php echo $pemilik_supplier ?></a>
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
    <!-- upload gambar dengan preview -->
    <script type="text/javascript">
    function PreviewImage(no) {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage" + no).files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("uploadPreview" + no).src = oFREvent.target.result;
        };
    }
    </script>
    <script type="text/javascript">
    var checker = document.getElementById('checkme');
    var sendbtn = document.getElementById('sendNewSms');
    // when unchecked or checked, run the function
    checker.onchange = function() {
        if (this.checked) {
            sendbtn.disabled = false;
        } else {
            sendbtn.disabled = true;
        }

    }
    </script>

    <script src="../../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="../../../vendors/select2/select2.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../../js/off-canvas.js"></script>
    <script src="../../../js/hoverable-collapse.js"></script>
    <script src="../../../js/template.js"></script>
    <script src="../../../js/settings.js"></script>
    <script src="../../../js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../../js/file-upload.js"></script>
    <script src="../../../js/typeahead.js"></script>
    <script src="../../../js/select2.js"></script>
    <!-- End custom js for this page-->
</body>

</html>