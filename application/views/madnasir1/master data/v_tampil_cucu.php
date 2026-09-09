<body>
	<!-- Begin Page Content -->
	<div class="col">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">DATA CUCU</h3>
			</div>

			<div class="row pt-2">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"> <a href="<?php echo base_url('dashboard1/tampil_data_anak'); ?>"> Master Data</li></a>
						<li class="breadcrumb-item active" aria-current="page"> Input Data Cicit</li></a>
					</ol>

					<div class="row pt-2">
						<table class="table table-striped table-bordered table-hover" id="cucu">
							<thead>
								<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
								<?php if ($this->session->flashdata('flash')) : ?>
								<?php endif; ?>
								<div class="flash-data-gagaladd" data-flashdata="<?= $this->session->flashdata('flash_gagal'); ?>"></div>
								<?php if ($this->session->flashdata('flash_gagal')) : ?>
								<?php endif; ?>

								<tr class="table-success">
									<th colspan='3' class="text-center">Action</th>
									<th class="text-center">No</th>
									<th class="text-center">Nama Lengkap</th>
									<th class="text-center">Nama Orangtua</th>
									<th class="text-center">Jumlah Anak</th>
								</tr>
							</thead>
							<tbody>

								<?php
								$no = 1;
								foreach ($cucu as $u) {
								?>
									<tr>
										<td class="text-center"><a href="<?= site_url('dashboard1/tambah_cicit/' . $u->id_cucu) ?>" class="btn btn-outline-success btn-sm"><i class="fas fa-plus-circle"></i>Tambah Cicit</a></td>
										<td class="text-center"><a href="<?= site_url('dashboard1/view_profile_cucu/' . $u->id_cucu) ?>" class="btn btn-outline-info btn-sm"><i class="fa fa-eye"></i> View [<?php echo $u->total_anak_cucu ?>]</a></td>
										<td class="text-center"><a href="<?= site_url('dashboard1/hapus_cucu/' . $u->id_cucu) ?>" class="btn btn-outline-danger btn-sm tombol-hapus"><i class="fa fa-trash"></i> Hapus </a></td>
										<td class="text-center"><?php echo $no++; ?></td>
										<td class="text-left"><?php echo $u->nama_cucu; ?></td>
										<td class="text-center"><?php echo $u->nama; ?></td>
										<td class="text-center"><?php echo $u->total_anak_cucu; ?></td>
									</tr>
								<?php
								}
								?>
							<tbody>
					</div>
			</div>
		</div>