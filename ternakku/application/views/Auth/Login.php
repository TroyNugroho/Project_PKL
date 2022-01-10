<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <h4>Masuk Untuk Melanjutkan</h4>
                        <!-- <h6 class="fw-light">Masuk Untuk Melanjutkan.</h6> -->
                        <?= $this->session->flashdata('message'); ?>
                        <!-- <form class="pt-3" method="POST" action="<?= base_url('Auth'); ?>"> -->
                        <?= form_open("Login/cek_login"); ?>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg" id="email" name="email"
                                placeholder="Email" value="<?= set_value('email'); ?>">
                            <?= form_error('email','<small class="text-danger pl-3">','</small>');  ?>
                        </div>
                        <div class=" form-group">
                            <input type="password" class="form-control form-control-lg" id="password" name="password"
                                placeholder="Password">
                            <?= form_error('password','<small class="text-danger pl-3">','</small>');  ?>

                        </div>
                        <div class="mt-3">
                            <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                type="submit">MASUK</button>
                        </div>
                        <div class="mb-2">
                        </div>
                        <div class="text-center mt-4 fw-light"> Tidak Punya Akun ? <a
                                href="<?= base_url('Auth/register')?>" class="text-primary">Buat Akun</a>
                        </div>
                        <?= form_close(); ?>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>