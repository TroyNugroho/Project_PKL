<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Edit Profile</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('User/HomeUser/index')?>">Home</a></li>
                    <li class="breadcrumb-item active"> Edit Profile </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Contact Us  -->
<div class="contact-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-sm-12">
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="contact-form-right">
                    <h2>Edit Profile</h2>
                    <p></p>

                    <form class="contactForm" action=<?= base_url('User/HomeUser/simpan_profile'); ?> method="POST"
                        enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="hidden" name="id_user" value="<?= $user['id_user']?>">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Name"
                                value="<?= $user['nama']?>" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                value="<?= $user['email']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat"
                                value="<?= $user['alamat']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="number" class="form-control" id="telepon" placeholder="telepon"
                                value="<?= $user['telepon']?>" required>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" class="form-control" id="posisi" placeholder="Status"
                                value="<?= $user['posisi']?>" readonly>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" id="foto_user" name="foto_user"
                                placeholder="Foto Profile">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="submit-button text-center">
                            <button class="btn btn-danger" type="submit"> Simpan </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Cart -->