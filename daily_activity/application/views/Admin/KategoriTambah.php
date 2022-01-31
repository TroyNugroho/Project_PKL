<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Tambah Kategori Tugas</h4>
						<form class="forms-sample" action=<?= base_url('Admin/KategoriAdmin/simpan_kategori'); ?> method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label >Nama Kategori</label>
								<input type="text" class="form-control" name="nama_kategori" placeholder="Nama">
							</div>
							<button type="submit" class="btn btn-primary me-2">Simpan</button>
							<a class="btn btn-light" href="<?= base_url('Admin/KategoriAdmin/index')?>">Batal</a>
						</form>
					</div>
				</div>
			</div>
		</div>
