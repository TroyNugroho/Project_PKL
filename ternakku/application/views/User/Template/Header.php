<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Ternakku</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.ico" type="image/x-icon">
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


</head>

<body>
    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                        aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link"
                                href="<?= base_url('User/HomeUser/index')?>">Home</a></li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Product</a>
                            <ul class="dropdown-menu megamenu-content col-lg-5" role="menu">
                                <div class="row">
                                    <div class="col-menu">
                                        <h6 class="title">Hewan Ternak</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <?php foreach($kategori as $kg) :?>
                                                <li><a
                                                        href="<?= base_url('User/HomeUser/Produk/'). $kg->id_kategori_produk ?>"><?= $kg->nama_kategori ?></a>
                                                </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end col-3 -->
                                </div>
                                <!-- end row -->
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('User/HomeUser/tentang')?>">Tentang
                                Kami</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('User/HomeUser/kontak')?>">Kontak
                                Kami</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <?php 
                $keranjang = $this->cart->contents();
                $jml_item = 0; 
                foreach ($keranjang as $key => $value) {
                    $jml_item = $jml_item + $value['qty'];
                }?>
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#">
                                <i class="fa fa-shopping-bag"></i>
                                <span class="badge">
                                    <?= $jml_item ?>
                                </span>
                            </a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <?php  $cart= $this->cart->contents();
                        if(empty($cart)) { ?>
                        <a class="list-group-item">Keranjang Belanja Kosong</a>
                        <?php
                        }else{
                            foreach($cart as $item){?>
                        <li>
                            <a href="#" class="photo"><img
                                    src="<?= base_url() ?>./upload/hewan/<?= $item['foto_hewan'] ?>" class="cart-thumb"
                                    alt="" /></a>
                            <h6><a href="#"><?= $item['name'];?> </a></h6>
                            <p><?= $item['qty']?> x <span
                                    class="price"><?= number_format($item['price']),",","." ?></span></p>
                            <p>Rp. <?php echo $this->cart->format_number($item['subtotal']); ?></p>
                        </li>
                        <?php } ?>
                        <?php } ?>

                        <li class="total">
                            <p> <strong>Total : </strong>
                                Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></p>
                            <a href="<?= base_url('User/Keranjang/index')?>"
                                class="btn btn-default hvr-hover btn-cart">Keranjang</a>

                        </li>
                    </ul>
                </li>
            </div>
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