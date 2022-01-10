<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-sm-12">
				<div class="home-tab">
					<div class="col-lg-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Tabel User</h4>
								<a type="button" class="btn btn-outline-primary btn-fw"
									href="<?= base_url('Admin/UserAdmin/tambah_user')?>">Tambah User</a>
								<div class="table-responsive">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>No</th>
												<th>Nama</th>
												<th>Email</th>
												<th>Foto</th>
												<th>Status</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$no=1;
											foreach($user as $us) : ?>
											<tr>
												<td> <?= $no++?> </td>
												<td> <?= $us->nama?> </td>
												<td> <?= $us->email?> </td>
												<td><img src="<?= base_url() ?>./upload/image/<?= $us->foto_user ?>"> </td>
												<td> <?= $us->posisi?> </td>
												<td>
													<a type="button" class="btn btn-outline-info btn-fw" href="<?= base_url('Admin/UserAdmin/edit_user/') . $us->id_user ?>">Edit</a>
													<a type="button" class="btn btn-outline-warning btn-fw" href="<?= base_url('Admin/UserAdmin/detail_user/') . $us->id_user ?>">Detail</a>
													<a type="button" class="btn btn-outline-danger btn-fw" href="<?= base_url('Admin/UserAdmin/hapus/') . $us->id_user ?>">Hapus</a>
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
