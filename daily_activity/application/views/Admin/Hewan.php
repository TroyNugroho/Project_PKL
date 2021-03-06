<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tabel Penugasan</h4>
                                <a type="button" class="btn btn-outline-primary btn-fw"
                                    href="<?= base_url('Admin/HewanAdmin/tambah_hewan')?>">Tambah Penugasan</a>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Petugas</th>
                                                <th>Tugas</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
											$no=1;
											foreach($penugasan as $tw) : ?>
                                            <tr>
                                                <td> <?= $no++?> </td>
                                                <td> <?= $tw->id_user?></td>
                                                
                                                <td> <?= $tw->id_tugas?></td>
                                                <td>
                                                    <a type="button" class="btn btn-outline-info btn-fw"
                                                        href="<?= base_url('Admin/HewanAdmin/edit_hewan/') . $tw->id_penugasan ?>">Edit</a>
                                                    <a type="button" class="btn btn-outline-warning btn-fw"
                                                        href="<?= base_url('Admin/HewanAdmin/detail_hewan/') . $tw->id_penugasan ?>">Detail</a>
                                                    <a type="button" class="btn btn-outline-danger btn-fw"
                                                        href="<?= base_url('Admin/HewanAdmin/hapus/') . $tw->id_penugasan ?>">Hapus</a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->