<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Edit User</h4>
						<?php foreach ($user as $us) : ?>
						<form class="forms-sample" action=<?= base_url('Admin/UserAdmin/simpan_edit'); ?> method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label for="exampleInputName1">Nama</label>
								<input type="hidden" name="id_user" value="<?= $us->id_user ?>">
								<input type="text" class="form-control" name="nama" value="<?= $us->nama ?>">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail3">Email</label>
								<input type="email" class="form-control" name="email" value="<?= $us->email ?>">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword4">Password</label>
								<input type="password" class="form-control" name="password" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="exampleInputCity1">Alamat</label>
								<input type="text" class="form-control" name="alamat" value="<?= $us->alamat ?>">
							</div>
							<div class="form-group">
								<label for="exampleInputName1">No Telp</label>
								<input type="number" class="form-control" name="telepon" value="<?= $us->telepon ?>">
							</div>
							<div class="form-group">
								<label for="" class="form-label">Foto Profil</label>
								<input class="form-control form-control-sm" name="foto_user" type="file">
							</div>
							<div class="form-group">
								<label for="exampleSelectGender">Status</label>
								<select class="form-control" name="posisi">
									<option value="<?= $us->posisi ?>"><?= $us->posisi ?></option>
									<option value="admin">Admin</option>
									<option value="pustakawan">Pustakawan</option>
									<option value="administrasi">Administrasi</option>
								</select>
							</div>
							<button type="submit" class="btn btn-primary me-2">Simpan</button>
							<a class="btn btn-light" href="<?= base_url('Admin/UserAdmin/index')?>">Batal</a>
						</form>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
