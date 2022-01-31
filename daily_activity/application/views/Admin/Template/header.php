<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Daily Activity</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url() ?>./assets/Admin/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url() ?>./assets/Admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>./assets/Admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>./assets/Admin/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="<?= base_url() ?>./assets/Admin/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>./assets/Admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>./assets/Admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css"> -->
    <link rel="stylesheet" href="<?= base_url() ?>./assets/Admin/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url() ?>./assets/Admin/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url() ?>./assets/Admin/images/favicon.png" />
    <!-- <link rel="shortcut icon" href="<?= base_url() ?>./assets/Admin/jquery/jquery.min.js" /> -->
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <div class="me-3">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-bs-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                </div>
                <div>
                    <a class="navbar-brand brand-logo" href="">
                        <img src="<?= base_url() ?>./assets/Admin/images/logogas.png" alt="logo" />
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="">
                        <img src="<?= base_url() ?>./assets/Admin/images/logo-mini.svg" alt="logo" />
                    </a>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-top">
                <ul class="navbar-nav">
                    <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                        <h1 class="welcome-text">Hello, <span class="text-black fw-bold">
                                <?= $user['nama']; ?>
                            </span></h1>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                        <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="img-xs rounded-circle"
                                src="<?= base_url('./upload/image/'). $user['foto_user']; ?>" alt="Profile image"> </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <div class="dropdown-header text-center">
                                <img class="img-md rounded-circle"
                                    src="<?= base_url('./upload/image/'). $user['foto_user']; ?>" width="70" height="70"
                                    alt="Profile image">
                                <p class="mb-1 mt-3 font-weight-semibold"><?= $user['nama']; ?></p>
                                <p class="fw-light text-muted mb-0"><?= $user['email']; ?></p>
                            </div>
                            <a class="dropdown-item"><i
                                    class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile
                                <a class="dropdown-item" href="<?= base_url('Admin/HomeAdmin/logout') ?>"><i
                                        class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-bs-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Admin/HomeAdmin/index')?>">
                            <i class="mdi mdi-grid-large menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Admin/HomeAdmin/setting')?>">
                            <i class="mdi mdi-settings menu-icon"></i>
                            <span class="menu-title">Setting</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">Kategori</li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Admin/UserAdmin/index')?>">
                            <i class=" mdi mdi-account-circle menu-icon"></i>
                            <span class="menu-title">User</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Admin/HewanAdmin/index')?>">
                            <i class="menu-icon mdi mdi-briefcase"></i>
                            <span class="menu-title">Penugasan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Admin/KategoriAdmin/index')?>">
                            <i class="menu-icon mdi mdi-clipboard"></i>
                            <span class="menu-title">Kategori Tugas</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Admin/TugasAdmin/index')?>">
                            <i class="menu-icon mdi mdi-note"></i>
                            <span class="menu-title">Tugas</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">Dokumentasi</li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Admin/DocAdmin/index')?>">
                            <i class="menu-icon mdi mdi-basket-unfill"></i>
                            <span class="menu-title">Tugas Berjalan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="menu-icon mdi mdi-basket-fill"></i>
                            <span class="menu-title">Tugas Selesai</span>
                        </a>
                    </li>
                </ul>
            </nav>