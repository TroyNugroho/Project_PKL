 <!-- Start All Title Box -->
 <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Daily Activities Log</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('User/HomeUser/index')?>">Home</a></li>
                        <li class="breadcrumb-item active">Log</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
    <div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-sm-12">
				<div class="home-tab">
					<div class="col-lg-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Tabel Log <?= $user['nama']; ?></h4>
								<div class="table-responsive">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>No</th>
												<th>Nama</th>
												<th>Tanggal</th>
                                                <th>Posisi</th>
                                                <th>Kategori</th>
                                                <th>Tugas</th>
                                                <th>AK</th>
                                                <th>Satuan Hasil</th>
                                                <th>Waktu</th>
                                                <th>Kuantitas</th>
											</tr>
										</thead>
										<tbody>
                                            <?php 
                                            $no=1;
											foreach($log as $lg) : ?>
											<tr>
												<td> <?= $no++?> </td>
												<td> <?= $lg->nama?> </td>
												<td> <?= $lg->tanggal?> </td>
                                                <td> <?= $lg->posisi?> </td>
                                                <td> <?= $lg->nama_kategori?> </td>
                                                <td> <?= $lg->nama_tugas?> </td>
                                                <td> <?= $lg->AK?> </td>
                                                <td> <?= $lg->satuan_hasil?> </td>
                                                <td> <?= $lg->waktu?> </td>
                                                <td> <?= $lg->kuantitas?> </td>
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