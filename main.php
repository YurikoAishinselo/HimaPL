<?php
include "Koneksi.php";
session_start();
if (!isset($_SESSION['NIM'])) {
    echo "<script language='JavaScript'>
    confirm('Login Terlebih Dahulu');
    document.location='pages/Login/login.php'</script>";
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="..//assets/img/UIS.png">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="Global/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<style>
    .bg-dark {
        --bs-bg-opacity: 1;
        background-color: #0c528c !important;
    }
</style>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->

        <a class="navbar-brand ps-3" href="">HIMAPL</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-9 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>Welcome</a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <style>
        .sb-sidenav-dark {
            background-color: #00203a;
        }
    </style>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">File and Document</div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Proker & kegiatan
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div c lass="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="main.php?page=newProject">Projek Baru</a>
                                <a class="nav-link" href="main.php?page=daftarProjek">Daftar Projek</a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Divisi
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="main.php?page=minatbakat">Minat & Bakat</a>
                                <a class="nav-link" href="main.php?page=PTI">Pengembangan Teknologi & Informasi</a>
                                <a class="nav-link" href="main.php?page=kominfo">Komunikasi & Informasi</a>
                            </nav>   
                        </div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseDokumen" aria-expanded="false" aria-controls="collapseDokumen">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Dokumen Himpunan
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseDokumen" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="main.php?page=daftarProposal">Daftar Proposal </a>
                            </nav>   
                        </div>
                        
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h3 class="mt-4"></h3>
                    <?php
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                        switch ($page) {
                            case 'newProject':
                                include "pages/proker/projekBaru.php";
                                break;
                            case 'minatbakat':
                                include "pages/divisi/minat&bakat.php";
                                break;
                            case 'PTI':
                                include "pages/divisi/PTI.php";
                                break;
                            case 'kominfo':
                                include "pages/divisi/kominfo.php";
                                break;
                            case 'daftarProjek':
                                include "pages/proker/daftarProjek.php";
                                break;
                            case 'actionDaftarProject':
                                include "pages/proker/actionProjekBaru.php";
                                break;
                            case 'editProjekBaru':
                                include "pages/proker/editProjekBaru.php";
                                break;
                            case 'update':
                                include "pages/proker/update.php";
                                break;
                            case 'delete':
                                include "pages/proker/deleteProjek.php";
                                break;
                            case 'daftarProposal':
                                include "pages/proker/daftarProposal.php";
                                break;
                            default:
                                echo "Maaf, Halaman Tidak Ditemukan";
                        }
                    } else {
                        echo "Hello";
                    }
                    ?>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="Global/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="Global/js/datatables-simple-demo.js"></script>
</body>

</html>