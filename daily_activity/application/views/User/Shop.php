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

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Shop</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('User/HomeUser/index/')?>">Home</a></li>
                    <li class="breadcrumb-item active">Shop</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Shop Page  -->
<div class="shop-box-inner">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                <div class="product-categori">
                    <div class="search-product">
                        <form action="#">
                            <input class="form-control" placeholder="Search here..." type="text">
                            <button type="submit"> <i class="fa fa-search"></i> </button>
                        </form>
                    </div>
                    <div class="filter-sidebar-left">
                        <div class="title-left">
                            <h3>Categories</h3>
                        </div>
                        <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men"
                            data-children=".sub-men">

                            <?php foreach($select as $ss) :?>
                            <a href="<?= base_url('User/HomeUser/Produk/'). $ss->id_kategori_produk ?>" class="
                                list-group-item list-group-item-action"> <?= $ss->nama_kategori?> <small
                                    class="text-muted"></small></a>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                <div class="right-product-box">
                    <div class="product-item-filter row">
                        <div class="col-12 col-sm-8 text-center text-sm-left">
                        </div>
                        <div class="col-12 col-sm-4 text-center text-sm-right">
                            <ul class="nav nav-tabs ml-auto">
                                <li>
                                    <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i
                                            class="fa fa-th"></i> </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#list-view" data-toggle="tab"> <i
                                            class="fa fa-list-ul"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row product-categorie-box">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                <div class="row">

                                    <?php foreach($kategori as $kg) : ?>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <img src="<?= base_url() ?>./upload/hewan/<?= $kg->foto_hewan ?>"
                                                    class="img-fluid" alt="Image"
                                                    style="width: contain; height: 250px; object-fit: cover;">
                                                <div class="mask-icon">
                                                    <a class="cart"
                                                        href="<?= base_url('User/HomeUser/shop_detail/') . $kg->id_hewan?>">Detail
                                                        Hewan</a>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4> <?= $kg->nama_hewan?> </h4>
                                                <h5> Rp. <?= number_format($kg->harga_hewan),",","." ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="list-view">

                                <?php foreach($kategori as $kg) : ?>
                                <div class="list-view-box">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <img src="<?= base_url() ?>./upload/hewan/<?= $kg->foto_hewan ?>"
                                                        class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="<?= base_url('User/HomeUser/shop_detail/') . $kg->id_hewan?>"
                                                                    data-toggle="tooltip" data-placement="right"
                                                                    title="View"><i class="fas fa-eye"></i></a></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                            <div class="why-text full-width">
                                                <h4><?= $kg->nama_hewan?></h4>
                                                <h5> Rp. <?= $kg->harga_hewan?> </h5>
                                                <p><?= $kg->detail_hewan?></p>
                                                <a class="btn hvr-hover" href="#">Tambah Keranjang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Shop Page -->