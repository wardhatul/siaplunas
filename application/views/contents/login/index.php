<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>PBB Desa Pucangsari - LOGIN PENGGUNA</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo pasuruan.png" />
    <!-- Fontfaces CSS-->
    <link href="<?= site_url() ?>assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= site_url() ?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= site_url() ?>assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= site_url() ?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= site_url() ?>assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= site_url() ?>assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= site_url() ?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= site_url() ?>assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= site_url() ?>assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= site_url() ?>assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= site_url() ?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= site_url() ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= site_url() ?>assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?= site_url() ?>assets/images/logo pasuruan.png" alt="CoolAdmin" style="width: 100px; height: auto;">

                                <marquee>Sistem Informasi dan Aplikasi Pencatatan dan Pelunasan PBB Desa pucangsari Kecamatan Purwosari </marquee>
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="<?= base_url() ?>login/login_validation" method="post">
                                <div class="form-group">
                                    <label>Nama Pengguna</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Masukan Nama Pengguna">
                                </div>
                                <div class="form-group">
                                    <label>Kata Sandi</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Masukan Kata Sandi">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Ingat Saya
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--blue2" type="submit">Masuk Sistem</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Dikembangkan Oleh
                                    <a href="https://aplikasidesafree.blogspot.com">Aplikasi Desa</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?= site_url() ?>assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?= site_url() ?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?= site_url() ?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?= site_url() ?>assets/vendor/slick/slick.min.js">
    </script>
    <script src="<?= site_url() ?>assets/vendor/wow/wow.min.js"></script>
    <script src="<?= site_url() ?>assets/vendor/animsition/animsition.min.js"></script>
    <script src="<?= site_url() ?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?= site_url() ?>assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?= site_url() ?>assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?= site_url() ?>assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?= site_url() ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= site_url() ?>assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?= site_url() ?>assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?= site_url() ?>assets/js/main.js"></script>

</body>

</html>
<!-- end document-->