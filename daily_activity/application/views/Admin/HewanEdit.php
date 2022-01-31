<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Penugasan</h4>
                        <?php foreach ($penugasan as $tw) : ?>
                        <form class="forms-sample" action=<?= base_url('Admin/HewanAdmin/simpan_edit'); ?> method="POST"
                            enctype="multipart/form-data">
                            
                            <div class="form-group">
                                <label for="exampleInputName1">Nama</label>
                                <input type="hidden" name="id_penugasan" value="<?= $tw->id_penugasan ?>">
                                <input type="text" class="form-control" name="nama"
                                    value="<?= $tw->id_user ?>">
                            </div>
                            
                            <div class="form-group">
                                <label>Tugas</label>
                                <select name="id_tugas" class="form-control">
                                    
                                    <?php foreach($tugas as $tg) : ?>
                                    <option value="<?= $tg->id_tugas?>"><?=$tg->nama_tugas?></option>
                                    <?php endforeach; ?>
                                </select>
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