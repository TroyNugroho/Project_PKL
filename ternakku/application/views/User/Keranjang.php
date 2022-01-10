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
                    <h2>Keranjang Belanja</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('User/HomeUser/index')?>">Home</a></li>
                        <li class="breadcrumb-item active">Keranjang</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <?= form_open('user/keranjang/update_cart/'); ?>
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Berat</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>

                                <?php foreach ($this->cart->contents() as $items){
                                    $berat = $items['berat'] * $items['qty'];
                                    ?>

                                <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
                                <tr>
                                    <td><img src="<?= base_url() ?>./upload/hewan/<?= $items['foto_hewan'] ?>"
                                            height="100" width="100">
                                    </td>
                                    <td><?= $items['name']?></td>
                                    <td>Rp. <?php echo $this->cart->format_number($items['price']); ?></td>
                                    <td class="quantity-box">
                                        <?php echo form_input(array('name' => $i.'[qty]', 
                                        'value' => $items['qty'], 
                                        'maxlength' => '3', 
                                        'min'=>'1', 
                                        'size' => '5', 
                                        'type'=>'number',
                                        'class' => 'c-input-text qty text')); ?>
                                    </td>
                                    <!-- <td class=" quantity-box"><input type="number" name="<?php $i['qty']?>"
                                            size="4" value="<?= $items['qty']?>" min="1" step="1"
                                            class="c-input-text qty text">
                                    </td> -->
                                    <td>
                                        <?= $berat?>
                                    </td>
                                    <td>
                                        Rp. <?php echo $this->cart->format_number($items['subtotal']); ?>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="<?= base_url('user/keranjang/delete_cart/'.  $items['rowid'])?>">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                                <?php  } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-5">
                    <!-- <button type="submit" class="btn btn-outline-warning"><b> Update Keranjang </b></button> -->
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="update-box">
                        <?php echo form_submit('', 'Update your Cart'); ?>

                        <!-- <input value="Update Cart" type="submit"> -->
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3>Detail Keranjang</h3>
                        <?php $cart = $this->cart->contents(); 
                            foreach ($cart as $item){
                                $grand_total = $item['price'] * $item['qty'];
                                ?>
                        <div class="d-flex">
                            <h4><?= $item['name']?></h4>
                            <div class="ml-auto font-weight-bold"><?= number_format($grand_total),",","."?></div>
                        </div>
                        <?php } ?>
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>Total Belanja</h5>
                            <div class="ml-auto h5">
                                <?= $this->cart->format_number($this->cart->total());?>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="col-12 d-flex shopping-box"><a href="<?= base_url('user/keranjang/checkout')?>"
                        class="ml-auto btn hvr-hover">Checkout</a> </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->
    <!-- <?= form_close()?> -->