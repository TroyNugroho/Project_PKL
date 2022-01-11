<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Hewan</h4>
                        <?php foreach ($hewan as $hw) : ?>
                        <form class="forms-sample" action=<?= base_url('Admin/HewanAdmin/simpan_edit'); ?> method="POST"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputName1">Nama</label>
                                <input type="hidden" name="id_penugasan" value="<?= $hw->id_penugasan ?>">
                                <input type="text" class="form-control" name="nama_hewan"
                                    value="<?= $hw->nama_hewan ?>">
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" class="form-control" name="harga_hewan"
                                    value="<?= $hw->harga_hewan ?>">
                            </div>
                            <div class="form-group">
                                <label>Berat</label>
                                <input type="text" class="form-control" name="berat" value="<?= $hw->berat ?>">
                            </div>
                            <div class="form-group">
                                <label>Kategori Hewan</label>
                                <select name="id_kategori" class="form-control">
                                    <option value="<?=$hw->id_kategori?>"><?=$hw->nama_kategori?></option>
                                    <?php foreach($kategori as $kg) : ?>
                                    <option value="<?= $kg->id_kategori?>"><?= $kg->nama_kategori ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="form-control" name="detail_hewan"
                                    rows="3"><?= $hw->detail_hewan?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Foto Hewan</label>
                                <input class="form-control form-control-sm" name="foto_hewan" type="file">
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Simpan</button>
                            <a class="btn btn-light" href="<?= base_url('Admin/HewanAdmin/index')?>">Batal</a>
                        </form>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>