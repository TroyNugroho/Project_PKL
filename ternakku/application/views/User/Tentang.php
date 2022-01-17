    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Form Penugasan</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('User/HomeUser/index')?>">Home</a></li>
                        <li class="breadcrumb-item active">Penugasan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start About Page  -->
    <div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Penugasan</h4>
                        <form class="forms-sample" action=<?= base_url('User/HomeUser/simpan_penugasan'); ?>
                            method="POST" enctype="multipart/form-data">
                            
                            <div class="form-group">
                                <label>Petugas</label>
                                <select name="id_user" class="form-control">
                                    <option value="<?= $user['id_user']; ?>"><?= $user['nama']; ?></option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Kategori Tugas</label>
                                <select name="id_kategori" class="form-control">
                                    <option value="">--Pilih Kategori</option>
                                    <?php foreach($kategori as $kg) : ?>
                                    <option value="<?= $kg->id_kategori?>"><?= $kg->nama_kategori ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Tugas</label>
                                <select name="id_tugas" class="form-control">
                                    <option value="">--Pilih Tugas</option>
                                    <?php foreach($tugas as $tu) : ?>
                                    <option value="<?= $tu->id_tugas?>"><?= $tu->nama_tugas ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="form-control" name="detail_hewan" rows="4"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Simpan</button>
                            <a class="btn btn-light" href="<?= base_url('User/index')?>">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- End About Page -->