<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<?php if ($this->session->flashdata('flash')) : ?>
<?php endif; ?>
</div>

<nav aria-label="breadcrumb"></nav>
<div class="container pt-2">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard1/tampil_data'); ?>">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Profile Orangtua</a></li>
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
								<img width="150px" class="img-thumbnail" src="<?php echo base_url() . '/assets/foto_ortu/' . $u->foto_ortu; ?>">

								<div class="mt-3">
									<h5><b><?= $u->nama_ortu; ?></b></h5>
									<h6><?= $u->alamat_ortu; ?></h6>
									<!--<button type="button" class="btn btn-outline-success" id="BtnUpdate" name="BtnUpdate" data-toggle="modal" data-target="#ModalEdit<?php echo $u->id_ortu; ?>"></i>UBAH</button>!-->
									<button type="button" class="btn btn-outline-success"><a href="<?= site_url('dashboard1/edit_ortu/' . $u->id_ortu) ?>">UBAH</a></button>
									<!-- <button type="button" class="btn btn-outline-danger tombol-hapus"><a href="<?= base_url('dashboard1/hapus_ortu/' . $u->id_ortu) ?>">Hapus</button></td> -->
									<button type="button" class="btn btn-outline-secondary"><a href="<?php echo base_url('dashboard1/tampil_data'); ?>">Kembali</a></button>
								</div>
							</div>
						</div>
					</div>

					<!-- MAP DI LUAR CARD -->
					<?php if (!empty($u->latitude) && !empty($u->longitude)) : ?>

						<!-- MAP -->
						<div class="map-wrapper-ortu">

							<div id="mapOrtu<?= $u->id_ortu; ?>"
								style="width:100%; height:280px;
										border:1px solid #ddd;
										border-radius:8px;">
							</div>

							<!-- <div class="text-muted text-center mt-1">
								<small>
									<i class="fas fa-map-marker-alt"></i>
									<?= $u->latitude; ?>,
									<?= $u->longitude; ?>
								</small>
							</div> -->

							<!-- TOMBOL DI BAWAH MAP -->
							<div class="text-center mt-2">

								<button type="button"
									class="btn btn-sm btn-primary btnBagikanLokasi"
									data-lat="<?= $u->latitude; ?>"
									data-lng="<?= $u->longitude; ?>"
									data-nama="<?= htmlspecialchars($u->nama_ortu, ENT_QUOTES, 'UTF-8'); ?>">

									<i class="fas fa-share-alt"></i>
									Bagikan
								</button>
							</div>
						</div>
					<?php else : ?>

						<div class="text-muted text-center mt-3">
							<small>
								<i class="fas fa-map-marker-alt"></i>
								Lokasi belum tersedia
							</small>
						</div>

					<?php endif; ?>

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
									<h6 class="mb-0"><b>NAMA SUAMI/ISTRI</b></h6>
								</div>
								<div class="col-sm-7 text-secondary">
									<?= $u->pasangan; ?>
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
										<h6 class="mb-0">GOOGLE MAPS
									</b></h6>
								</div>
								<div class="col-sm-7 text-secondary">
									<?php
									if (!empty($u->latitude) && !empty($u->longitude)) : ?>
										<a href="https://www.google.com/maps?q=<?= $u->latitude; ?>,<?= $u->longitude; ?>"
											target="_blank"
											class="btn btn-sm btn-success">
											<i class="fas fa-map-marker-alt"></i> Lihat Maps
										</a>

									<?php else : ?>
										<span class="text-danger">
											Koordinat belum tersedia
										</span>
									<?php endif; ?>
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
									<img src="<?php echo base_url('assets/img/whatsapp.png') ?>" width=20px></button></a>
									<a href="<?= site_url('dashboard1/tampil_chat_ortu/' . $u->id_ortu) ?>"><?= $u->NoHP_ortu; ?></a>
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
									<a href="<?= site_url('dashboard1/detil_ortu/' . $u->id_ortu) ?>"><?= $u->total_anak_ortu; ?> ORANG</a>
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

<script>
	document.addEventListener("DOMContentLoaded", function() {

		const tombolBagikan = document.querySelectorAll(".btnBagikanLokasi");

		tombolBagikan.forEach(function(button) {

			button.addEventListener("click", async function() {

				const latitude =
					this.dataset.lat;

				const longitude =
					this.dataset.lng;

				const nama =
					this.dataset.nama;


				if (!latitude || !longitude) {

					alert("Koordinat lokasi belum tersedia.");
					return;

				}


				// LINK GOOGLE MAPS
				const link =
					"https://www.google.com/maps?q=" +
					latitude +
					"," +
					longitude;


				// ==========================================
				// SHARE BAWAAN HP / BROWSER
				// ==========================================

				if (navigator.share) {

					try {

						await navigator.share({

							title: "Lokasi " + nama,

							text: "Lokasi rumah " + nama,

							url: link

						});

					} catch (error) {

						console.log(
							"Share dibatalkan:",
							error
						);

					}

					return;
				}


				// ==========================================
				// BROWSER TIDAK MENDUKUNG SHARE
				// COPY LINK
				// ==========================================

				try {

					await navigator.clipboard.writeText(
						link
					);

					alert(
						"Link lokasi berhasil disalin."
					);

				} catch (error) {

					prompt(
						"Salin link lokasi berikut:",
						link
					);

				}

			});

		});

	});

	document.addEventListener("DOMContentLoaded", function() {

		<?php foreach ($profile as $u) : ?>

			<?php if (!empty($u->latitude) && !empty($u->longitude)) : ?>

				var lat = <?= (float)$u->latitude ?>;
				var lng = <?= (float)$u->longitude ?>;


				var map = L.map(
					'mapOrtu<?= $u->id_ortu; ?>'
				).setView([lat, lng], 17);

				L.tileLayer(
					'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
						attribution: '&copy; OpenStreetMap contributors'
					}
				).addTo(map);

				var marker = L.marker([lat, lng])
					.addTo(map);

				marker.bindPopup(
					'<center>Lokasi rumah<center>' +
					'<b><?= htmlspecialchars($u->nama_ortu, ENT_QUOTES); ?></b><br>'
				).openPopup();

			<?php endif; ?>

		<?php endforeach; ?>

	});
</script>