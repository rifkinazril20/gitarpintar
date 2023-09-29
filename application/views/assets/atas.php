<!DOCTYPE html>
<html lang="en">


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->

<head>
    <base href="<?php echo base_url() ?>" target="">
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Gitar Pintar</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <script src="assets/js/app.min.js"></script>
    <script src="assets/bundles/datatables/datatables.min.js"></script>
    <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' /> -->
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky bg-primary">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify" class="text-light"></i></a></li>
                        <li><a class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize" class="text-light"></i>
                            </a></li>

                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">

                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/pria.png" class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <div class="dropdown-title">Hello <?php echo $this->session->userdata("nama") ?></div>

                            <div class="dropdown-divider"></div>
                            <a href="welcome/logout" onclick="return confirm('Apakah anda yakin ingin keluar?')" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="main"> <span class="logo-name">Gitar Pintar</span>
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Submenu</li>
                        <li class="dropdown">
                            <a href="main" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="main/sejarah" class="nav-link"><i data-feather="book"></i><span>Sejarah
                                    Gitar</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="main/bagian" class="nav-link"><i data-feather="book"></i><span>Bagian-bagian
                                    Gitar</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="main/tuning" class="nav-link"><i data-feather="book"></i><span>Tuning Senar
                                    Gitar</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="main/penjarian" class="nav-link"><i data-feather="book"></i><span>Penjarian</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="main/tangganada" class="nav-link"><i data-feather="book"></i><span>Tangga
                                    Nada</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="main/achord" class="nav-link"><i data-feather="book"></i><span>Achord Dasar
                                    Gitar</span></a>
                        </li>

                    </ul>
                </aside>
            </div>
            <!-- Main Content -->