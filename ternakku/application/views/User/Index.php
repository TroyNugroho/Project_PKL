<!-- Start Slider -->
<div id="slides-shop" class="cover-slides">
    <ul class="slides-container">
        <li class="text-left">
            <img src="<?= base_url() ?>assets/images/background2.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> Ternakku</strong></h1>
                        <p class="m-b-40">Menyediakan Berbagai Ternak yang anda butuhkan</p>
                        <!-- <p><a class="btn hvr-hover" href="#">Shop New</a></p> -->
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="<?= base_url() ?>assets/images/background3.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> Ternakku</strong></h1>
                        <p class="m-b-40">Menyediakan Berbagai Ternak yang anda butuhkan</p>
                        <!-- <p><a class="btn hvr-hover" href="#">Shop New</a></p> -->
                    </div>
                </div>
            </div>
        </li>
        <li class="text-right">
            <img src="<?= base_url() ?>assets/images/background1.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> Ternakku</strong></h1>
                        <p class="m-b-40">Menyediakan Berbagai Ternak yang anda butuhkan</p>
                        <!-- <p><a class="btn hvr-hover" href="#">Shop New</a></p> -->
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End Slider -->

<!-- Start Products  -->
<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Produk</h1>
                    <p>Menyediakan Berbagai Jenis Hewan Ternak</p>
                </div>
            </div>
        </div>
        <div class="row special-list">
            <?php foreach($hewan as $hw) : ?>
            <div class="col-lg-3 col-md-6 special-grid best-seller">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <img src="<?= base_url() ?>./upload/hewan/<?= $hw->foto_hewan ?>" class="img-fluid" alt="Image"
                            style="width: contain; height: 250px; object-fit: cover;">
                        <div class="mask-icon">
                            <a class="cart" href="<?= base_url('User/HomeUser/shop_detail/') . $hw->id_penugasan?>">Detail
                                Hewan</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4><?= $hw->nama_hewan?></h4>
                        <h5> Rp. <?= number_format($hw->harga_hewan),",","."?> </h5>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- End Products  -->