<body>

	<div id="loadingOverlay">
	</div>

	<div class="col pt-2">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">FORM INPUT DATA BAOK</h3>
			</div>

			<div class="card-body">
				<div class="col pt-2">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="<?php echo base_url('dashboard1/tampil_data_baok'); ?>">
									Master Data
								</a>
							</li>

							<li class="breadcrumb-item active">
								Tambah Data Cucu
							</li>
						</ol>
					</nav>

					<div class="row-md-12">
						<div class="col-sm-12">
							<?php foreach ($cicit as $u) { ?>
								<form action="<?php echo base_url('dashboard1/aksi_tambah_baok'); ?>"
									method="post" enctype="multipart/form-data" id="formTambahBaok">

									<div class="form-group row">
										<input type="hidden" name="id_baok" id="inputidbaok">
										<input type="hidden" name="id_cicit"
											id="inputidcicit" value="<?php echo $u->id_cicit; ?>"
											readonly>

										<label class="col-md-6">
											Nama Lengkap
										</label>

										<label class="col-md-6">
											Jenis Kelamin
										</label>

										<div class="col-md-6">
											<input
												type="text"
												class="form-control"
												id="inputNama"
												name="nama_baok"
												value="<?= set_value('nama_baok'); ?>"
												placeholder="Masukan Nama">

											<small class="text-danger">
												<?php echo form_error('nama_baok'); ?>
											</small>
										</div>

										<div class="col-md-6">
											<select
												class="form-control"
												id="JenisKelamin"
												name="jenis_kelamin_baok">

												<option value="">
													-- Pilih Jenis Kelamin --
												</option>

												<option
													value="LAKI-LAKI"
													<?php
													if (set_value('jenis_kelamin_baok') == "LAKI-LAKI")
														echo "selected";
													?>>

													LAKI-LAKI
												</option>

												<option
													value="PEREMPUAN"
													<?php
													if (set_value('jenis_kelamin_baok') == "PEREMPUAN")
														echo "selected";
													?>>

													PEREMPUAN
												</option>
											</select>

											<small class="text-danger">
												<?php echo form_error('jenis_kelamin_baok'); ?>
											</small>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-md-6">
											Tanggal Lahir
										</label>

										<label class="col-md-6">
											Nama Pasangan
										</label>

										<div class="col-md-6">
											<input
												type="date"
												class="form-control"
												id="inputTgl_lahir"
												name="tgl_lahir_baok"
												value="<?= set_value('tgl_lahir_baok'); ?>">

											<small class="text-danger">
												<?php echo form_error('tgl_lahir_baok'); ?>
											</small>
										</div>

										<div class="col-md-6">
											<input
												type="text"
												class="form-control"
												id="inputMenantu"
												name="menantu_baok"
												value="<?= set_value('menantu_baok'); ?>"
												placeholder="Masukan Nama Pasangan">

											<small class="text-danger">
												<?php echo form_error('menantu_baok'); ?>
											</small>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-md-3">
											Provinsi
										</label>

										<label class="col-md-3">
											Kabupaten/Kota
										</label>

										<label class="col-md-3">
											Kecamatan
										</label>

										<label class="col-md-3">
											Desa/Kelurahan
										</label>

										<div class="col-md-3">
											<select
												class="form-control"
												id="provinsi"
												name="id_provinsi">
												<option value="">
													-- Pilih Provinsi --
												</option>
											</select>
											<input type="hidden" name="nama_provinsi" id="nama_provinsi">
										</div>

										<div class="col-md-3">
											<select
												class="form-control"
												id="kabupaten"
												name="id_kabupaten"
												disabled>

												<option value="">
													-- Pilih Kabupaten/Kota --
												</option>
											</select>
											<input type="hidden" name="nama_kabupaten" id="nama_kabupaten">
										</div>

										<div class="col-md-3">
											<select
												class="form-control"
												id="kecamatan"
												name="id_kecamatan"
												disabled>

												<option value="">
													-- Pilih Kecamatan --
												</option>
											</select>
											<input type="hidden" name="nama_kecamatan" id="nama_kecamatan">
										</div>

										<div class="col-md-3">
											<select
												class="form-control"
												id="desa"
												name="id_desa"
												disabled>

												<option value="">
													-- Pilih Desa/Kelurahan --
												</option>
											</select>
											<input type="hidden" name="nama_desa" id="nama_desa">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-6">

											<label>
												Alamat Jalan / Nomor Rumah
											</label>

											<input
												type="text"
												class="form-control"
												id="alamat_manual"
												placeholder="Contoh: Jl. Merdeka No. 10">
										</div>

										<div class="col-md-3">
											<label> RT</label>

											<input
												type="text"
												class="form-control"
												id="inputRT"
												placeholder="Contoh: 07">
										</div>

										<div class="col-md-3">
											<label>RW</label>

											<input
												type="text"
												class="form-control"
												id="inputRW"
												placeholder="Contoh: 01">

										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-12">
											<label>
												Alamat Lengkap
											</label>

											<textarea
												class="form-control"
												id="inputAlamat"
												name="alamat_baok"
												rows="3"
												placeholder="Alamat lengkap akan dibuat otomatis..."
												readonly><?= set_value('alamat_baok'); ?></textarea>

											<small class="text-muted">
												Alamat otomatis berdasarkan alamat jalan,
												RT/RW dan wilayah yang dipilih.
											</small>

											<small class="text-danger d-block">
												<?php echo form_error('alamat_baok'); ?>
											</small>
										</div>
									</div>

									<div class="mt-3">
										<label>
											Lokasi Rumah
										</label>

										<div id="mapInputBaok"
											style="
									width:100%;
									height:400px;
									border:1px solid #ddd;
									border-radius:8px;
								">
										</div>

										<small class="text-muted">
											Geser titik merah jika posisi rumah belum tepat.
										</small>

									</div>

									<div class="row mt-2">
										<div class="col-md-6">
											<label>Latitude</label>
											<input
												type="text"
												name="latitude"
												class="form-control"
												id="latitude_display"
												readonly>

										</div>

										<div class="col-md-6">
											<label>Longitude</label>
											<input
												type="text"
												name="longitude"
												class="form-control"
												id="longitude_display"
												readonly>
										</div>
										<input type="hidden" name="latitude" id="latitude">
										<input type="hidden" name="longitude" id="longitude">
									</div>

									<div class="form-group row">
										<div class="col-md-6">
											<label>Nomor Handphone </label>

											<input
												type="text"
												class="form-control"
												id="inputNoHP"
												name="NoHP_cicit"
												value="<?= set_value('NoHP_baok'); ?>"
												placeholder="Masukan Nomor HP">

											<small class="text-danger">
												<?php echo form_error('NoHP_baok'); ?>
											</small>
										</div>
									</div>
									<div class="footer mt-3">
										<a
											href="<?php echo base_url('dashboard1/tampil_data_cicit'); ?>"
											class="btn btn-outline-danger">
											Batal
										</a>

										<button
											type="submit"
											class="btn btn-outline-success"
											id="btnSimpan">
											Simpan
										</button>
									</div>
								<?php } ?>
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<script>
		const BASE_URL = "<?= base_url(); ?>";
	</script>
	<script src="<?= base_url('assets/js/input_baok.js'); ?>"></script>