<!-- Menampilkan Data Anak!-->
<!-- Menampilkan Data Anak!-->
<div class="col pt-2">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">DATA BAOK</h3>
		</div>

		<div class="col pt-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<!-- <li class="breadcrumb-item active">Detail Data Keluarga</li></a> -->
					<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url('dashboard1/tampil_data_cicit'); ?>">DATA ORANG TUA</a></li>
					<li class="breadcrumb-item active" aria-current="page">DATA BAOK</li>
				</ol>
		</div>

		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="detil_cucu" width="100%" cellspacing="0">
					<thead>
						<tr class="table-success">
							<th class="text-center">No</th>
							<th class="text-center">Nama Lengkap</th>
							<th class="text-center">Nama Menantu</th>
							<!--<th class="text-center">Alamat Lengkap</th>
			<th class="text-center">Nomor HP</th>!-->
							<th class="text-center">View Profile</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($detil_cicit as $u) {
						?>
							<tr>

								<td class="text-center"><?php echo $no++; ?></td>
								<td><?php echo $u->nama_baok; ?></td>
								<td class="text-center"><?php echo $u->menantu_baok; ?></td>
								<!--<td class="text-center"><?php echo $u->alamat_baok; ?></td>	
			<td class="text-center"><?php echo $u->NoHP_baok ?></td>!-->
								<td class="text-center"><a href="<?= site_url('dashboard1/view_profile_baok/' . $u->id_baok) ?>" class="btn btn-outline-info btn-sm">View Profile</a></td>

							</tr>

						<?php
						}
						?>


					</tbody>

			</div>
		</div>
		</nav>