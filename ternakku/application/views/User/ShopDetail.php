<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Shop Detail</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('User/HomeUser/index/')?>">Home</a></li>
                    <li class="breadcrumb-item active">Detail Hewan</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Shop Detail  -->
<div class="shop-detail-box-main">
    <div class="container">
        <div class="row">
            <?php foreach($hewan as $hw) : ?>
            <div class="col-xl-5 col-lg-5 col-md-6">
                <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active"> <img class="d-block w-100"
                                src="<?= base_url() ?>./upload/hewan/<?= $hw->foto_hewan ?>"> </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-7 col-lg-7 col-md-6">
                <div class="single-product-details">
                    <h2><?= $hw->nama_hewan?></h2>
                    <h5> Rp. <?= number_format($hw->harga_hewan),",","."?> </h5>
                    <p class="available-stock"><span> <b> Jenis Hewan : <?= $hw->nama_kategori?></b></span></p>
                    <p class="available-stock"><span> <b> Berat : <?= $hw->berat?> gr</b></span></p>
                    <h4>Keterangan Produk </h4>
                    <p> <?= $hw->detail_hewan?> </p>
                    <div class="price-box-bar">
                        <div class="row">
                            <?php
                                echo form_open('user/keranjang/add_cart');
                                echo form_hidden('id_hewan',$hw->id_hewan);
                                echo form_hidden('berat', $hw->berat);
                                echo form_hidden('price',$hw->harga_hewan);
                                echo form_hidden('name',$hw->nama_hewan);
                                echo form_hidden('foto_hewan',$hw->foto_hewan);
                                echo form_hidden('redirect_page',str_replace('index.php/','',current_url ()));
                            ?>
                            <ul>
                                <li>
                                    <div class="form-group quantity-box">
                                        <label class="control-label">Tambah</label>
                                        <button class="btn btn-outline-danger" type="submit">Tambah Keranjang</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group quantity-box">
                                        <label class="control-label">Quantity</label>
                                        <input class="form-control" name="qty" value="1" min="1" max="20" type="number">
                                    </div>
                                </li>
                            </ul>
                            <?= form_close()?>


                            <!-- <a class="btn hvr-hover" data-fancybox-close="" href="#">Beli</a> -->
                            <!-- <a class="btn hvr-hover" data-fancybox-close=""
                                href="<?=base_url('user/keranjang/add_to_cart/').$hw->id_hewan?>" .>Tambah
                                Keranjang</a> -->
                        </div>
                    </div>
                </div>
            </div>


            <?php endforeach; ?>
        </div>
    </div>
</div>