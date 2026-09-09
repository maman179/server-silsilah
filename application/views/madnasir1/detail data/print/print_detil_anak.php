<style>
	<?= file_get_contents(FCPATH . 'assets/dist/css/print.css'); ?>
</style>

<nav aria-label="breadcrumb"></nav>
<div class="container pt-2">
	</ol>
	<?php
	$no = 1;
	foreach ($print_detil_anak as $u) { ?>
		<div class="row gutters-sm">
			<div class="col-md-4 mb-3">
				<div class="card">
					<div class="card-body">
						<div class="d-flex flex-column align-items-center text-center">
							<input type="hidden" name="id_anak" value=<?= $u->id_anak; ?>>
							<div style="text-align: center;">
								<?php
								$foto = FCPATH . 'assets/foto_anak/' . $u->foto_anak;
								if (!empty($u->foto_anak) && file_exists($foto)) {
									$ext = strtolower(pathinfo($foto, PATHINFO_EXTENSION));
									if ($ext == 'jpg' || $ext == 'jpeg') {
										$mime = 'image/jpeg';
									} elseif ($ext == 'png') {
										$mime = 'image/png';
									} else {
										$mime = '';
									}

									if ($mime) {
										$base64 = 'data:' . $mime . ';base64,' .
											base64_encode(file_get_contents($foto));
									}
								} ?>

								<?php if (!empty($base64)): ?>
									<img src="<?= $base64; ?>" width="150" style="display: inline-block;">
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<!-- general form elements -->
				<div class="card card-primary">
					<div class="card-body">
						<div class="row">
							<div class="col-sm-5">
								<h6 class="mb-0"><b>NAMA LENGKAP</b></h6>
							</div>
							<div class="col-sm-7 text-secondary">
								<?= $u->nama; ?>
							</div>
						</div>
						<hr>

						<div class="row">
							<div class="col-sm-5">
								<h6 class="mb-0"><b>NAMA ORANGTUA</b></h6>
							</div>
							<div class="col-sm-7 text-secondary">
								<?= $u->nama_ortu ?> / <?= $u->pasangan ?>
							</div>
						</div>
						<hr>

						<div class="row">
							<div class="col-sm-5">
								<h6 class="mb-0"><b>GENDER</b></h6>
							</div>
							<div class="col-sm-7 text-secondary">
								<?= $u->jenis_kelamin; ?>
							</div>
						</div>
						<hr>

						<div class="row">
							<div class="col-sm-5">
								<h6 class="mb-0"><b>TANGGAL LAHIR</b></h6>
							</div>
							<div class="col-sm-7 text-secondary">
								<?= $u->tgl_lahir; ?>
							</div>
						</div>
						<hr>

						<div class="row">
							<div class="col-sm-5">
								<h6 class="mb-0"><b>SUAMI/ISTRI</b></h6>
							</div>
							<div class="col-sm-7 text-secondary">
								<?= $u->menantu; ?>
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
								<?= $u->alamat; ?>
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
								<?= $u->NoHP; ?>
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
								<?= $u->total_anak; ?> ORANG</a>
							</div>
						</div>
						<hr>

					</div>
				</div>
			</div>
		</div>
</div>
</div>
</div>

<?php
	} ?>