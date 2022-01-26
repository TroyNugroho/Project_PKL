<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-sm-12">
				<div class="home-tab">
					<div class="col-lg-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Tabel Tugas</h4>
								<a type="button" class="btn btn-outline-primary btn-fw"
									href="<?= base_url('Admin/TugasAdmin/tambah_tugas')?>">Tambah Tugas</a>
								<div class="table-responsive">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>No</th>
												<th>Nama Tugas</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$no=1;
											foreach($tugas as $tg) : ?>
											<tr>
												<td> <?= $no++?> </td>
												<td> <?= $tg->nama_tugas?> </td>
												<td>
													<a type="button" class="btn btn-outline-info btn-fw" href="<?= base_url('Admin/TugasAdmin/edit_tugas/') . $tg->id_tugas ?>">Edit</a>
													<a type="button" class="btn btn-outline-danger btn-fw" href="<?= base_url('Admin/TugasAdmin/hapus/') . $tg->id_tugas ?>">Hapus</a>
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
