<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Tambah Tugas</h4>
						<form class="forms-sample" action=<?= base_url('Admin/TugasAdmin/simpan_tugas'); ?> method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label >Nama Tugas</label>
								<input type="text" class="form-control" name="nama_tugas" placeholder="Nama">
							</div>
							<button type="submit" class="btn btn-primary me-2">Simpan</button>
							<a class="btn btn-light" href="<?= base_url('Admin/TugasAdmin/index')?>">Batal</a>
						</form>
					</div>
				</div>
			</div>
		</div>
