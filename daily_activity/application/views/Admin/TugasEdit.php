<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Edit Tugas</h4>
						<?php foreach ($tugas as $tg) : ?>
						<form class="forms-sample" action=<?= base_url('Admin/TugasAdmin/simpan_edit'); ?> method="POST"
							enctype="multipart/form-data">
							<div class="form-group">
								<label for="exampleInputName1">Nama</label>
								<input type="hidden" name="id_tugas" value="<?= $tg->id_tugas ?>">
								<input type="text" class="form-control" name="nama_kategori"
									value="<?= $tg->nama_tugas?>">
							</div>
							<button type="submit" class="btn btn-primary me-2">Simpan</button>
							<a class="btn btn-light" href="<?= base_url('Admin/TugasAdmin/index')?>">Batal</a>
						</form>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
