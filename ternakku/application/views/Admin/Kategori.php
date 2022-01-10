<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-sm-12">
				<div class="home-tab">
					<div class="col-lg-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Tabel Kategori Tugas</h4>
								<a type="button" class="btn btn-outline-primary btn-fw"
									href="<?= base_url('Admin/KategoriAdmin/tambah_kategori')?>">Tambah Kategori Tugas</a>
								<div class="table-responsive">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>No</th>
												<th>Nama Kategori</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$no=1;
											foreach($kategori as $kg) : ?>
											<tr>
												<td> <?= $no++?> </td>
												<td> <?= $kg->nama_kategori?> </td>
												<td>
													<a type="button" class="btn btn-outline-info btn-fw" href="<?= base_url('Admin/KategoriAdmin/edit_kategori/') . $kg->id_kategori_produk ?>">Edit</a>
													<a type="button" class="btn btn-outline-danger btn-fw" href="<?= base_url('Admin/KategoriAdmin/hapus/') . $kg->id_kategori_produk ?>">Hapus</a>
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
