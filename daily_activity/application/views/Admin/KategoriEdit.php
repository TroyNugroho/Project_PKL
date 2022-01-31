<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Edit Kategori Tugas</h4>
						<?php foreach ($kategori as $kg) : ?>
						<form class="forms-sample" action=<?= base_url('Admin/KategoriAdmin/simpan_edit'); ?> method="POST"
							enctype="multipart/form-data">
							<div class="form-group">
								<label for="exampleInputName1">Nama</label>
								<input type="hidden" name="id_kategori" value="<?= $kg->id_kategori ?>">
								<input type="text" class="form-control" name="nama_kategori"
									value="<?= $kg->nama_kategori?>">
							</div>
							<button type="submit" class="btn btn-primary me-2">Simpan</button>
							<a class="btn btn-light" href="<?= base_url('Admin/KategoriAdmin/index')?>">Batal</a>
						</form>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
