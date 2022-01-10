<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah User</h4>
                        <form class="forms-sample" action=<?= base_url('Admin/HewanAdmin/simpan_hewan'); ?>
                            method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Hewan</label>
                                <input type="text" class="form-control" name="nama_hewan" placeholder="Nama Hewan"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number" class="form-control" name="harga_hewan" placeholder="Harga"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Berat / Gr</label>
                                <input type="number" class="form-control" name="berat" placeholder="Berat" required>
                            </div>
                            <div class="form-group">
                                <label>Kategori Hewan</label>
                                <select name="id_kategori_produk" class="form-control">
                                    <option value="">--Pilih Kategori</option>
                                    <?php foreach($kategori as $kg) : ?>
                                    <option value="<?= $kg->id_kategori_produk?>"><?= $kg->nama_kategori ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="form-control" name="detail_hewan" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Foto Hewan</label>
                                <input class="form-control form-control-sm" id="foto_hewan" name="foto_hewan"
                                    type="file" />
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Simpan</button>
                            <a class="btn btn-light" href="<?= base_url('Admin/HewanAdmin/index')?>">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>