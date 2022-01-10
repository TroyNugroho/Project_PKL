<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Tambah User</h4>
						<form class="forms-sample" action=<?= base_url('Admin/UserAdmin/simpan_user'); ?> method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label >Nama</label>
								<input type="text" class="form-control" name="nama" placeholder="Nama">
							</div>
							<div class="form-group">
								<label >Email</label>
								<input type="email" class="form-control" name="email" placeholder="Email" required>
							</div>
							<div class="form-group">
								<label >Password</label>
								<input type="password" class="form-control" name="password" placeholder="Password"
									required>
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" class="form-control" name="alamat" placeholder="Alamat">
							</div>
							<div class="form-group">
								<label >No Telp</label>
								<input type="number" class="form-control" name="telepon" placeholder="No Telpon" required>
							</div>
							<div class="form-group">
								<label class="form-label">Foto Profil</label>
								<input class="form-control form-control-sm" id="foto_user" name="foto_user" type="file"/>
							</div>
							<div class="form-group">
								<label >Status</label>
								<select class="form-control" name="posisi" required>
									<option value=""> </option>
									<option value="admin">Admin</option>
									<option value="penjual">Penjual</option>
									<option value="pembeli">Pembeli</option>
								</select>
							</div>
							<button type="submit" class="btn btn-primary me-2">Simpan</button>
							<a class="btn btn-light" href="<?= base_url('Admin/UserAdmin/index')?>">Batal</a>
						</form>
					</div>
				</div>
			</div>
		</div>
