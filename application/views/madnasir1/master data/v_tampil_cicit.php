<!-- Begin Page Content -->

<body>
	<div class="col">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">DATA CICIT</h3>
			</div>

			<div class="row pt-2">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"> <a href="<?= site_url('dashboard1/tampil_data_cucu') ?>"> Master Data</li></a>
						<!-- <li class="breadcrumb-item active" aria-current="page">Data Keluarga</li> -->
						<li class="breadcrumb-item active" aria-current="page"> Input Data Baok</li>
					</ol>

					<div class="row pt-2">
						<table class="table table-striped table-bordered table-hover" id="baok">
							<thead>
								<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
								<?php if ($this->session->flashdata('flash')) : ?>
								<?php endif; ?>
								<div class="flash-data-gagaladd" data-flashdata="<?= $this->session->flashdata('flash_gagal'); ?>"></div>
								<?php if ($this->session->flashdata('flash_gagal')) : ?>
								<?php endif; ?>

								<tr class="table-success">
									<th class="text-center" colspan="3">Action</th>
									<th class="text-center">No</th>
									<th class="text-center">Nama Lengkap</th>
									<th class="text-center">Nama Orang Tua</th>
									<th class="text-center">Total Anak</th>
								</tr>
							</thead>
							<tbody>

								<?php
								$no = 1;
								foreach ($cicit as $u) {
								?>
									<tr>
										<td class="text-center"><a href="<?= site_url('dashboard1/tambah_baok/' . $u->id_cicit) ?>" class="btn btn-outline-success btn-sm"><i class="fa fa-edit"></i>Tambah Baok</button></td>
										<td class="text-center"><a href="<?= site_url('dashboard1/view_profile_cicit/' . $u->id_cicit) ?>" class="btn btn-outline-info btn-sm"><i class="fa fa-eye"></i> View [<?php echo $u->total_anak_cicit ?>]</a></td>
										<td class="text-center"><a href="<?= site_url('dashboard1/hapus_cicit/' . $u->id_cicit) ?>" class="btn btn-outline-danger btn-sm tombol-hapus"><i class="fa fa-trash"></i> Hapus</a></td>
										<td class="text-center"><?php echo $no++; ?></td>
										<td><?php echo $u->nama_cicit; ?></td>
										<td><?php echo $u->nama_cucu; ?></td>
										<td class="text-center"><?php echo $u->total_anak_cicit; ?></td>
									</tr>
								<?php
								}
								?>
							</tbody>
					</div>
			</div>
		</div>