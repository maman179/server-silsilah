<div id="loadingOverlay">

</div>

<div class="col pt-2">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">FORM EDIT DATA CUCU</h3>
		</div>

		<div class="card-body">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="<?= base_url('dashboard1/tampil_data_cucu'); ?>">
							Home
						</a>
					</li>

					<li class="breadcrumb-item active">
						Edit Data Cucu
					</li>
				</ol>
			</nav>

			<?php foreach ($cucu as $u) { ?>

				<form action="<?php echo base_url('dashboard1/update_cucu'); ?>"
					method="post" enctype="multipart/form-data" id="formEditCucu">

					<input type="hidden" name="id_cucu" value="<?= $u->id_cucu; ?>">
					<input type="hidden" name="id_anak" value="<?= $u->id_anak; ?>">
					<input type="hidden" id="old_provinsi" value="<?= $u->id_provinsi; ?>">
					<input type="hidden" id="old_kabupaten" value="<?= $u->id_kabupaten; ?>">
					<input type="hidden" id="old_kecamatan" value="<?= $u->id_kecamatan; ?>">
					<input type="hidden" id="old_desa" value="<?= $u->id_desa; ?>">

					<input type="hidden" name="latitude" id="latitude"
						value="<?= htmlspecialchars($u->latitude ?? ''); ?>">

					<input type="hidden" name="longitude" id="longitude"
						value="<?= htmlspecialchars($u->longitude ?? ''); ?>">


					<div class="form-group row text-center">
						<div class="col-md-12">
							<br>
							<img src="<?= base_url('assets/foto_cucu/' . $u->foto_cucu); ?>"
								width="130"
								height="130"
								style="object-fit: cover; border-radius: 6px;">
						</div>

					</div>
					<div class="form-group row">

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
								name="nama_cucu"
								autocomplete="off"
								value="<?= htmlspecialchars($u->nama_cucu); ?>"
								placeholder="Masukan Nama">
						</div>

						<div class="col-md-6">
							<select
								class="form-control"
								name="jenis_kelamin_cucu"
								autocomplete="off">

								<option value="">
									-- Pilih Jenis Kelamin --
								</option>

								<option
									value="LAKI-LAKI"
									<?= ($u->jenis_kelamin_cucu == 'LAKI-LAKI') ? 'selected' : ''; ?>>
									LAKI-LAKI
								</option>

								<option
									value="PEREMPUAN"
									<?= ($u->jenis_kelamin_cucu == 'PEREMPUAN') ? 'selected' : ''; ?>>
									PEREMPUAN
								</option>
							</select>
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
								name="tgl_lahir_cucu"
								autocomplete="off"
								value="<?= date('Y-m-d', strtotime($u->tgl_lahir_cucu)); ?>">

						</div>


						<div class="col-md-6">

							<input
								type="text"
								class="form-control"
								name="menantu_cucu"
								autocomplete="off"
								value="<?= htmlspecialchars(trim($u->menantu_cucu)); ?>"
								placeholder="Masukan Nama Pasangan">

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
								name="id_provinsi"
								autocomplete="off">

								<option value="">
									-- Pilih Provinsi --
								</option>
							</select>
						</div>

						<div class="col-md-3">

							<select
								class="form-control"
								id="kabupaten"
								name="id_kabupaten"
								autocomplete="off">

								<option value="">
									-- Pilih Kabupaten/Kota --
								</option>

							</select>

						</div>


						<!-- KECAMATAN -->

						<div class="col-md-3">

							<select
								class="form-control"
								id="kecamatan"
								name="id_kecamatan"
								autocomplete="off">

								<option value="">
									-- Pilih Kecamatan --
								</option>
							</select>
						</div>

						<div class="col-md-3">

							<select
								class="form-control"
								id="desa"
								name="id_desa"
								autocomplete="off">

								<option value="">
									-- Pilih Desa/Kelurahan --
								</option>

							</select>

						</div>

					</div>


					<div class="form-group row">
						<div class="col-md-6">
							<label>
								Detail Alamat / Jalan
							</label>

							<input
								type="text"
								name="alamat_manual"
								id="alamat_manual"
								class="form-control"
								autocomplete="off"
								placeholder="Contoh: JL. CIBINONG RAYA">
						</div>

						<div class="col-md-3">
							<label>
								RT
							</label>

							<input
								type="text"
								name="rt"
								id="inputRT"
								class="form-control"
								autocomplete="off"
								placeholder="Contoh: 03">

						</div>


						<!-- RW -->
						<div class="col-md-3">

							<label>
								RW
							</label>

							<input
								type="text"
								name="rw"
								id="inputRW"
								class="form-control"
								autocomplete="off"
								placeholder="Contoh: 05">

						</div>

					</div>

					<div class="form-group row">
						<div class="col-md-8">
							<label>
								Alamat Lengkap
							</label>

							<input
								type="text"
								class="form-control"
								id="alamat"
								name="alamat_cucu"
								value="<?= htmlspecialchars($u->alamat_cucu); ?>"
								autocomplete="off"
								readonly>

							<small class="text-muted">
								Alamat lengkap dibuat otomatis dari jalan, RT/RW,
								desa, kecamatan, kabupaten dan provinsi.
							</small>

						</div>

						<div class="mt-3">
							<label> Lokasi Rumah</label>
							<div id="mapEditCucu" style="width:100%; height:400px; border:1px solid #ddd; border-radius:8px;">
							</div>
							<small class="text-muted">
								Geser titik jika posisi rumah belum tepat.
							</small>
						</div>
						<div class="row mt-2">
							<div class="col-md-6">
								<label>Latitude</label>
								<input type="text" name="newLatitude" class="form-control" id="latitude_display" readonly>
							</div>
							<div class="col-md-6">
								<label>Longitude</label>
								<input type="text" name="newLongitude" class="form-control" id="longitude_display" readonly>
							</div>
						</div>

						<div class="col-md-4">
							<label>Nomor Handphone</label>
							<input type="text" class="form-control" name="NoHP_cucu" autocomplete="off" value="<?= htmlspecialchars($u->NoHP_cucu); ?>" placeholder="Masukan Nomor HP">
						</div>
					</div>

					<div class="form-group row">
						<div class="col-md-6">
							<label>Ganti Foto Cucu</label>
							<input type="file" class="form-control" name="foto_cucu">
							<small class="text-muted">Kosongkan jika tidak ingin mengganti foto.
							</small>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-md-12">
							<button type="submit" class="btn btn-outline-success"
								id="btnSimpan"><i class="fa fa-save"></i>UBAH DATA
							</button>
							<a href="<?= base_url('dashboard1/tampil_data_cucu'); ?>" class="btn btn-outline-danger">
								BATAL</a>
						</div>
					</div>
					<?= form_close(); ?><?php } ?>
		</div>
	</div>
</div>
</div>
</div>

<script src="<?= base_url('assets/js/edit_cucu.js'); ?>"></script>