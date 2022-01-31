<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Penugasan</h4>
                        <form class="forms-sample" action=<?= base_url('Admin/HewanAdmin/simpan_hewan'); ?>
                            method="POST" enctype="multipart/form-data">
                            
                            <div class="form-group">
                                <label>Nama Petugas</label>
                                <select name="id_user" class="form-control">
                                    <option value="">--Pilih Petugas</option>
                                    <?php foreach($user as $us) : ?>
                                    <option value="<?= $us->id_user?>"><?= $us->nama ?></option>
                                    <?php endforeach; ?>
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
                                    <?php foreach($tugas as $tg) : ?>
                                    <option value="<?= $tg->id_tugas?>"><?= $tg->nama_tugas ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="form-control" name="detail_hewan" rows="4"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Simpan</button>
                            <a class="btn btn-light" href="<?= base_url('Admin/HewanAdmin/index')?>">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>