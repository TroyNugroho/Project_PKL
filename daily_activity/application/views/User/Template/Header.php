<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Daily Activity</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/Logo-Polinema.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?= base_url() ?>assets/images/apple-touch-icon.png">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/megamenu.css" type="text/css" media="all" />
    <!-- <link href="assets/yamm/yamm.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="../../assets/js/plugins/sweetalert.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">


</head>

<body>
    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-sm navbar-dark navbar-default bootsnav" style="background-color: #000080;">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                        aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo-lib-polinema-light.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <a class="navbar-brand brand-logo" href="#"><img src="<?= base_url() ?>assets/images/logo-lib-polinema-light.png" alt="logo" height="42" width="180"></a>
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link"
                                href="<?= base_url('User/HomeUser/index')?>">Home</a></li>                
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('User/HomeUser/tentang')?>">Penugasan</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('User/HomeUser/log')?>">Log</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
                <!-- Start Atribute Navigation -->
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <!-- Edit Profile dan logout -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="dropdown megamenu-fw">
                        <a href="" class="nav-link dropdown-toggle arrow"
                            data-toggle="dropdown"><?= $user['nama']; ?></a>
                        <ul class="dropdown-menu megamenu-content col-lg-2" role="menu">
                            <div class="row">
                                <div class="col-menu"><br>
                                    <center>
                                        <img class="img-md rounded-circle"
                                            src="<?= base_url('./upload/image/'). $user['foto_user']; ?>" width="70"
                                            height="70" alt="Profile image">
                                        <br>
                                        <?= $user['nama']; ?>
                                        <br>
                                        <?= $user['email']; ?>
                                    </center>
                                    <br>
                                    <div class="content">
                                        <ul class="menu-col">
                                            <!-- <li><a href="<?= base_url('User/HomeUser/edit_profile')?>"> <b> Edit
                                                        Profile
                                                    </b></a></li> -->
                                            <li><a href="<?= base_url('User/HomeUser/logout')?>"> <b> Sign Out
                                                    </b></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end col-3 -->
                            </div>
                            <!-- end row -->
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->