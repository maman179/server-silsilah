<body>
	<div id="loadingOverlay">
	</div>

	<div class="col pt-2">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">INPUT DATA BAOK</h3>
			</div>

			<div class="card-body">
				<nav aria-label="breadcrumb"></nav>
				<!-- <div class="container pt-2">
  		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard1/dashboard1/tampil_data_cucu'); ?>">Master Data</a></li>
			<li class="breadcrumb-item active" aria-current="page">Tambah Data Cicit</li>
		</ol>
    -->
				<div class="card-body">
					<table class="table table-striped table-bordered table-hover" id="anak">
						<thead>
							<!-- <?php
									$no = 1;
									foreach ($cicit as $u) { ?>
                    <div class="user-panel mt-2 pb-3 mb-3 d-flex">
                        <div class="image"><img src="<?php echo base_url() . '/assets/foto_ortu/' . $u->foto_; ?>" class="img-circle elevation-3 -sm-right" alt="profile">
                    </div>
                    <div class="info"><span><label> Selamat datang, Keluarga Bani <?php echo $u->nama_ortu; ?></label></span></div>
                </div>
                <?php } ?> -->
							<div class="row pt-2">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard1/tampil_data'); ?>">Master Data</a></li>
										<li class="breadcrumb-item active" aria-current="page">Detail Data Baok</li>
									</ol>

									<div class="row pt-2 info-row">
										<div class="col-md-3">
											<strong>NAMA ORANGTUA</strong>
										</div>
										<div class="col-md-9">
											<?= $u->nama_cicit ?> / <?= $u->menantu_cicit ?>
										</div>
									</div>
									<hr>

									<div class="row info-row">
										<div class="col-md-3">
											<strong>ALAMAT</strong>
										</div>
										<div class="col-md-9 alamat-detail">
											<?= $u->alamat_cicit ?>
										</div>
									</div>

									<hr>
									<div class="row info-row">
										<div class="col-md-3">
											<strong>TOTAL ANAK</strong>
										</div>
										<div class="col-md-9">
											<?= $u->total_anak_cicit ?> Orang
										</div>
									</div>
									<hr>

									<div class="container pt-2">
										<div class="row">
											<div class="col-12 text-right">
												<a href="<?= site_url('dashboard1/form_baok/' . $u->id_cicit) ?>"
													class="btn btn-primary">
													<i class="fas fa-plus-circle"></i>
													Tambah Anak
												</a>
											</div>
										</div>
									</div>

									<div class="row pt-3">
										<tr class="table-success pt-2">
											<div class="flash-data-gagaladd" data-flashdata="<?= $this->session->flashdata('flash_gagal'); ?>"></div>
											<?php if ($this->session->flashdata('flash_gagal')) : ?>
											<?php endif; ?>
											<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
											<?php if ($this->session->flashdata('flash')) : ?>
											<?php endif; ?>
											<th class="text-center">No</th>
											<th class="text-center">Nama Lengkap</th>
											<th class="text-center">Alamat</th>
											<th class="text-center">Jumlah Anak</th>

										</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($baok as $row) { ?>
								<tr>
									<td class="text-center"><?php echo $no++ ?></td>
									<td><?php echo $row->nama_baok ?></td>
									<td class="text"><?= $row->alamat_baok ?></td>
									<td class="text-center"><?= $row->total_anak_baok ?></td>

								</tr>
				</div>
			<?php } ?>