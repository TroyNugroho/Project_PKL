<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>CHECKOUT</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('User/Keranjang')?>">Keranjang</a></li>
                    <li class="breadcrumb-item active"> checkout </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Contact Us  -->
<div class="cart-box-main">
    <div class="container">
        <div class="row new-account-login">
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="title-left">
                    <h3>Pembeli</h3>
                </div>
                <h5><a data-toggle="collapse" href="#formLogin" role="button" aria-expanded="false">Klik Untuk Melihat
                        Penerima</a>
                </h5>

                <form class="mt-3 collapse review-form-box" id="formLogin">
                
                     <h3> Nama :<?= $user['nama']; ?></h3>
                     <h3> Alamat :<?= $user['alamat']; ?></h3>
                     <h3> No. Telp :<?= $user['telepon']; ?></h3>
                    <!-- <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="InputEmail" class="mb-0">Email Address</label>
                            <input type="email" class="form-control" id="InputEmail" placeholder="Enter Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="InputPassword" class="mb-0">Password</label>
                            <input type="password" class="form-control" id="InputPassword" placeholder="Password">
                        </div>
                    </div>
                    <button type="submit" class="btn hvr-hover">Login</button> -->
                </form>
            </div>
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="title-left">
                    <h3>Pengiriman</h3>
                </div>
                <h5><a data-toggle="collapse" href="#formRegister" role="button" aria-expanded="false">Klik Untuk Ongkos
                        Kirim
                    </a>
                </h5>
                <form class="mt-3 collapse review-form-box" id="formRegister">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="mb-0">Provinsi</label>
                            <select class="form-control" name="provinsi" placeholder="Provinsi"></select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="mb-0">Kota</label>
                            <select class="form-control" name="kota" placeholder="Kota"></select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="mb-0">Ekspedisi</label>
                            <select class="form-control" name="expedisi" placeholder="Expedisi"></select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="mb-0">Paket</label>
                            <select class="form-control" name="paket" placeholder="Kota"></select>
                        </div>
                    </div>
                    <!-- <button type="submit" class="btn hvr-hover">Register</button> -->
                </form>
            </div>
            <div class="col-md-12 col-lg-12 mb-3">
                <div class="col-md-12 col-lg-12">
                    <div class="odr-box">
                        <div class="title-left">
                            <h3>Daftar Keranjang</h3>
                        </div>
                        <?php
                            $tot_berat = 0; 
                            foreach ($this->cart->contents() as $items){
                            $berat = $items['qty'] * $items['berat'];
                            $tot_berat = $tot_berat + $berat;
                        ?>
                        <div class="rounded p-2 bg-light">
                            <div class="media mb-2 border-bottom">
                                <div class="media-body"> <a href=""> <?= $items['name']?></a>
                                    <div class="large text-muted">Harga: Rp.
                                        <?php echo $this->cart->format_number($items['price']); ?>
                                        <span class="mx-3">|</span> Qty: <?= $items['qty']?>
                                        <span class="mx-3">|</span> Berat: <?= $berat?> Gr
                                        <span class="mx-3">|</span> Subtotal: Rp.
                                        <?php echo $this->cart->format_number($items['subtotal']); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="checkout-address">
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="row">

                    <div class="col-md-12 col-lg-12">
                        <div class="order-box">
                            <div class="title-left">
                                <h3>Pemesanan</h3>
                            </div>
                            <div class="d-flex">
                                <div class="font-weight-bold">Produk</div>
                                <div class="ml-auto font-weight-bold">Total</div>
                            </div>
                            <hr class="my-1">
                            <div class="d-flex">
                                <h4>Sub Total Keranjang</h4>
                                <div class="ml-auto font-weight-bold">
                                    Rp. <?= $this->cart->format_number($this->cart->total());?></div>
                            </div>

                            <div class="d-flex">
                                <h4>Total Berat</h4>
                                <div class="ml-auto font-weight-bold">
                                    <?= $tot_berat ?> Gr
                                </div>
                            </div>

                            <!-- <div class="d-flex">
                                <h4>Ongkos Kirim</h4>
                                <div class="ml-auto font-weight-bold"> $ 40 </div>
                            </div> -->
                            <hr class="my-1">
                            <div class="d-flex gr-total">
                                <h5>Total Harga</h5>
                                <div class="ml-auto h5"> Rp. <?= $this->cart->format_number($this->cart->total());?> </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="col-12 d-flex shopping-box"> <a  class="ml-auto btn hvr-hover">checkout</a> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
$(document).ready(function() {
    // input Provinsi
    $.ajax({
        type: "POST",
        url: "<?= base_url('./user/rajaongkir/provinsi')?>",
        success: function(hasil_provinsi) {
            // console.log(hasil_provinsi);
            $("select[name=provinsi]").html(hasil_provinsi);
        }
    });

    // input Kota
    $("select[name=provinsi]").on("change", function() {
        var select_id_provinsi = $("option:selected", this).attr("id_provinsi");

        $.ajax({
            type: "POST",
            url: "<?= base_url('./user/rajaongkir/kota')?>",
            data: 'id_provinsi=' + select_id_provinsi,
            success: function(hasil_kota) {
                // console.log(hasil_kota);
                $("select[name=kota]").html(hasil_kota);
            }
        });
    });

    $("select[name=kota]").on("change", function() {
        $.ajax({
            type: "POST",
            url: "<?= base_url('./user/rajaongkir/expedisi')?>",
            success: function(hasil_expedisi) {
                // console.log(hasil_kota);
                $("select[name=expedisi]").html(hasil_expedisi);
            }
        });
    });

    $("select[name=expedisi]").on("change", function() {
        var exspedisi_terpilih = $("select[name=expedisi]").val()
        var id_kota_tujuan_terpilih = $("option:selected", "select[name=kota]").attr("id_kota");
        var total_berat = <?= $tot_berat ?>;
        // alert(total_berat);
        $.ajax({
            type: "POST",
            url: "<?= base_url('./user/rajaongkir/paket')?>",
            data: 'expedisi =' + exspedisi_terpilih + '&id_kota =' + id_kota_tujuan_terpilih +
                '&totber =' + total_berat,
            success: function(hasil_paket) {
                // console.log(hasil_kota);
                $("select[name=paket]").html(hasil_paket);
            }
        });
    });
});
</script>