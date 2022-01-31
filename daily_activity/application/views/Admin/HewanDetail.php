<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Detail Hewan</h4>
                        <?php foreach ($penugasan as $tw) : ?>
                        <form class="form-sample">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $tw->id_penugasan?>"
                                                readonly />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pegawai</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $tw->id_user ?>"
                                                readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jenis Tugas</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?= $tw->id_tugas?>"
                                                readonly />
                                        </div>
                                    </div>
                                </div>
                            <a class="btn btn-danger" href="<?= base_url('Admin/HewanAdmin/index')?>">Kembali</a>
                        </form>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>