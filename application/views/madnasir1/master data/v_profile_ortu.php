<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<?php if ($this->session->flashdata('flash')) : ?>
<?php endif; ?>
</div>

<nav aria-label="breadcrumb"></nav>
<div class="container pt-2">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard1/tampil_data_orangtua'); ?>">Master Data</a></li>
			<li class="breadcrumb-item">Profile</li>
			<li class="breadcrumb-item active" aria-current="page">Profile Orangtua</a></li>
		</ol>
		<?php
		$no = 1;
		foreach ($profile as $u) { ?>
			<div class="row gutters-sm">
				<div class="col-md-4 mb-3">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<input type="hidden" name="id_ortu" value=<?= $u->id_ortu; ?>>
								<img width="150px" class="img-thumbnail" src="<?php echo base_url() . '/assets/foto_ortu/' . $u->foto_ortu; ?>" onclick="myFunction(this);">

								<div class="mt-4">
									<h4><b><?= $u->nama_ortu; ?></b></h4>
									<h6><?= $u->alamat_ortu; ?></h6>
									<button type="button" class="btn btn-outline-success"><a href="<?= site_url('dashboard1/edit_ortu/' . $u->id_ortu) ?>"></i>Update</button></a>
									<button type="button" class="btn btn-outline-secondary"><a href="<?php echo base_url('dashboard1/tampil_data_orangtua'); ?>">Kembali</a></button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-8">
					<!-- general form elements -->
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">VIEW PROFILE</h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-sm-5">
									<h6 class="mb-0"><b>NAMA LENGKAP</b></h6>
								</div>
								<div class="col-sm-7 text-secondary">
									<?= $u->nama_ortu; ?>
								</div>
							</div>
							<hr>

							<div class="row">
								<div class="col-sm-5">
									<h6 class="mb-0"><b>NAMA PASANGAN</b></h6>
								</div>
								<div class="col-sm-7 text-secondary">
									<?= $u->pasangan; ?>
								</div>
							</div>
							<hr>

							<div class="row">
								<div class="col-sm-5">
									<h6 class="mb-0"><b>GENDER</b></h6>
								</div>
								<div class="col-sm-7 text-secondary">
									<?= $u->jenis_kelamin_ortu; ?>
								</div>
							</div>
							<hr>

							<div class="row">
								<div class="col-sm-5">
									<h6 class="mb-0"><b>TANGGAL LAHIR</b></h6>
								</div>
								<div class="col-sm-7 text-secondary">
									<?= $u->tgl_lahir_ortu; ?>
								</div>
							</div>
							<hr>

							<div class="row">
								<div class="col-sm-5">
									<b>
										<h6 class="mb-0">ALAMAT LENGKAP
									</b></h6>
								</div>
								<div class="col-sm-7 text-secondary">
									<?= $u->alamat_ortu; ?>
								</div>
							</div>
							<hr>

							<div class="row">
								<div class="col-sm-5">
									<b>
										<h6 class="mb-0">NO HANDPHONE
									</b></h6>
								</div>
								<div class="col-sm-7 text-secondary">
									<?= $u->NoHP_ortu; ?>
								</div>
							</div>
							<hr>

							<div class="row">
								<div class="col-sm-5">
									<b>
										<h6 class="mb-0">JUMLAH ANAK
									</b></h6>
								</div>
								<div class="col-sm-7 text-secondary">
									<a href="<?= site_url('dashboard1/tampil_data_anak'); ?>"><?= $u->total_anak_ortu; ?> ORANG</a>
								</div>
							</div>
							<hr>

						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 mb-2">
				<div class="card-hidden"><span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span><img id="expandedImg" style="width: 90%">
					<div id="imgtext">
					</div>
				</div>
			</div>
</div>

<?php
		} ?>