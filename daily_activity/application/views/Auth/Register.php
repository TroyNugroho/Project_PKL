<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-7 mx-auto">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Register </h4>
                                <form class="forms-sample" method="POST"
                                    action="<?= base_url('Login/simpan_register')?>">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Name</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            placeholder=" Name" value="<?= set_value('nama'); ?>">
                                        <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">NIP</label>
                                        <input type="text" class="form-control" id="nip" name="nip"
                                            placeholder="NIP" value="<?= set_value('nip'); ?>">
                                        <?= form_error('nip','<small class="text-danger pl-3">','</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Email</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            placeholder="Email" value="<?= set_value('email'); ?>">
                                        <?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Password" value="<?= set_value('password'); ?>">
                                        <?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="posisi" required>
                                            <option value=""> </option>
                                            <option value="Administrasi">Administrasi</option>
                                            <option value="Pustakawan">Pustakawan</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <a href="<?= base_url('Auth')?>" class="btn btn-light">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>