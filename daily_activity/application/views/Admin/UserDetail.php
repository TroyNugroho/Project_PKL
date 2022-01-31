<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-12 grid-margin">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Detail User</h4>
						<?php foreach ($user as $us) : ?>
						<form class="form-sample">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Nama</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" value="<?= $us->nama ?>" readonly />
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Email</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" value="<?= $us->email ?>"
												readonly />
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Alamat</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" value="<?= $us->alamat ?>"
												readonly />
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">No Telepon</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" value="<?= $us->telepon ?>"
												readonly />
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Status</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" value="<?= $us->posisi ?>"
												readonly />
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Foto Profil</label>
										<div class="col-sm-9">
											<img src="<?= base_url() ?>./upload/image/<?= $us->foto_user ?>"
												class="rounded mx-auto d-block" heigt="200" width="200">
										</div>
									</div>
								</div>
							</div>
							<a class="btn btn-danger" href="<?= base_url('Admin/UserAdmin/index')?>">Kembali</a>
						</form>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
