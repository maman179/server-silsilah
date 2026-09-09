<!--Menampilkan Data Orang Tua!-->

<body>
	<!-- Begin Page Content -->
	<div class="container-fluid pt-3">
		<div class="sidebar">
			<?php
			$no = 1;
			foreach ($tampil_ortu as $u) {
			?>
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?php echo base_url() . '/assets/foto_ortu/' . $u->foto_ortu; ?>" class="img-circle elevation-3 -sm-right" alt="profile">
					</div>
					<div class="info">
						<span><label> Selamat datang, Keluarga Bani <?php echo $u->nama_ortu; ?></label></span>
					</div>
				</div>
			<?php } ?>
			<!-- Page Heading -->

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid pt-3">

					<!-- Small boxes (Stat box) -->


					<div class="row mb-2">
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-info">
								<div class="inner">
									<h3><?php echo $u->total_anak_ortu; ?> Orang</h3>

									<p>ANAK</p>
								</div>
								<div class="icon">
									<i class="fas fa-users"></i>
								</div>
								<a href="<?= site_url('dashboard1/tampil_data_anak') ?>" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-success">
								<div class="inner">
									<h3><?= $total_cucu ?> Orang</h3>

									<p>CUCU</p>
								</div>
								<div class="icon">
									<i class="ion ion-stats-bars"></i>
								</div>
								<a href="<?= site_url('dashboard1/tampil_data_cucu') ?>" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-warning">
								<div class="inner">
									<h3><?= $total_cicit ?> Orang</h3>

									<p>CICIT</p>
								</div>
								<div class="icon">
									<i class="ion ion-person-add"></i>
								</div>
								<a href="<?= site_url('dashboard1/tampil_data_cicit') ?>" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>

							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-danger">
								<div class="inner">
									<h3> <?= $total_baok ?> Orang</h3>

									<p>BAOK</p>
								</div>
								<div class="icon">
									<i class="ion ion-pie-graph"></i>
								</div>
								<a href="<?= site_url('dashboard1/tampil_data_baok') ?>" class="small-box-footer">Lihat Data<i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
					</div>
					<table class="table table-striped table-bordered table-hover" id="cicit">

						<th class="text-center">NO</th>
						<th class="text-center">NAMA LENGKAP</th>
						<th class="text-center">NAMA MENANTU</th>
						<th class="text-center">NAMA ORANG TUA</th>
						<th class="text-center">TOTAL ANAK</th>

						</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($anak as $a) {
							?>
								<tr>
									<td class="text-center"><?php echo $no++ ?></td>
									<td><?php echo $a->nama ?></td>
									<td><?php echo $a->menantu ?></td>
									<td><?php echo $a->nama_ortu ?></td>
									<td class="text-center"><?php echo $a->total_anak ?></td>

								</tr>
				</div>

			<?php } ?>

		</div>
	</div>
	</div>

	</div>
	</div>
	</div>
	</form>


	<style>
		/* =========================================
           DASHBOARD
        ========================================= */

		.dashboard-wrapper {
			padding: 20px;
		}


		/* =========================================
           MAP CARD
        ========================================= */

		.map-card {

			background: #ffffff;

			border-radius: 12px;

			box-shadow:
				0 3px 12px rgba(0, 0, 0, 0.12);

			overflow: hidden;

			margin-bottom: 20px;

		}


		.map-header {

			display: flex;

			justify-content: space-between;

			align-items: center;

			padding: 15px 20px;

			border-bottom: 1px solid #eee;

		}


		.map-title {

			font-size: 20px;

			font-weight: 700;

			margin: 0;

		}


		.map-title i {

			margin-right: 8px;

		}


		.btn-lihat-peta {

			background: #007bff;

			color: white;

			border: none;

			padding: 8px 18px;

			border-radius: 6px;

			cursor: pointer;

			text-decoration: none;

		}


		.btn-lihat-peta:hover {

			background: #0069d9;

			color: white;

		}


		/* =========================================
           MAP
        ========================================= */

		#mapKeluarga {

			width: 100%;

			height: 350px;

		}


		/* =========================================
           MAP FOOTER
        ========================================= */

		.map-footer {

			display: flex;

			justify-content: space-between;

			align-items: center;

			padding: 14px 20px;

			font-size: 15px;

		}


		.jumlah-lokasi {

			font-weight: 600;

		}


		/* =========================================
           CARDS
        ========================================= */

		.dashboard-cards {

			display: grid;

			grid-template-columns:
				repeat(3, 1fr);

			gap: 20px;

		}


		.dashboard-card {

			background: #fff;

			border-radius: 12px;

			padding: 20px;

			box-shadow:
				0 3px 12px rgba(0, 0, 0, 0.10);

			display: flex;

			align-items: center;

			min-height: 110px;

		}


		.dashboard-icon {

			width: 60px;

			height: 60px;

			border-radius: 50%;

			display: flex;

			align-items: center;

			justify-content: center;

			font-size: 28px;

			margin-right: 15px;

		}


		.icon-anak {

			background: #e3f2fd;

		}


		.icon-cucu {

			background: #fff3e0;

		}


		.icon-lokasi {

			background: #e8f5e9;

		}


		.dashboard-number {

			font-size: 28px;

			font-weight: 700;

			line-height: 1;

			margin-bottom: 7px;

		}


		.dashboard-label {

			color: #666;

			font-size: 15px;

		}


		/* =========================================
           RESPONSIVE
        ========================================= */

		@media(max-width: 768px) {

			.dashboard-cards {

				grid-template-columns: 1fr;

			}


			.map-header {

				flex-direction: column;

				align-items: flex-start;

				gap: 10px;

			}


			#mapKeluarga {

				height: 300px;

			}

		}
	</style>


	<div class="dashboard-wrapper">


		<!-- =========================================
         PETA KELUARGA
    ========================================== -->

		<div class="map-card">
			<div class="map-header">
				<h3 class="map-title">
					🗺️ PETA SEBARAN KELUARGA BANI <?php echo $u->nama_ortu; ?>
				</h3>

			</div>


			<!-- MAP -->

			<div id="mapKeluarga"></div>


			<!-- FOOTER -->

			<div class="map-footer">

				<div class="jumlah-lokasi">

					📍
					<?= $jumlah_lokasi; ?>
					lokasi rumah keluarga

				</div>


				<div>

					Klik marker untuk melihat alamat

				</div>

			</div>
		</div>
	</div>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
				//  DATA LOKASI DARI PHP

				const lokasiKeluarga = <?= json_encode($lokasi_keluarga); ?>;

				//  BUAT MAP
				const map = L.map('mapKeluarga');

				// OPEN STREET MAP
				L.tileLayer(
					'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {

						maxZoom: 19,

						attribution: '&copy; OpenStreetMap'

					}
				).addTo(map);

				//  MARKER
				const markers = [];
				lokasiKeluarga.forEach(function(lokasi) {
					const lat = parseFloat(lokasi.latitude);
					const lng = parseFloat(lokasi.longitude);

					if (isNaN(lat) || isNaN(lng)) {

						return;

					}

					const marker = L.marker([lat, lng]).addTo(map);
					marker.bindPopup(
						'<strong>' + lokasi.nama + '</strong>' +
						'<strong> [' + lokasi.jenis + ']</strong><br>' +
						'<small>' + (lokasi.alamat || '-') + '</small>');
					markers.push(marker);
				});

				//  POSISI AWAL MAP
				if (markers.length > 0) {

					const group = L.featureGroup(markers);

					map.fitBounds(group.getBounds(), {
						padding: [30, 30]
					});

				} else {

					// Kalau belum ada koordinat
					map.setView(
						[-6.914744, 107.609810],
						9
					);

				}

			}

		);
	</script>