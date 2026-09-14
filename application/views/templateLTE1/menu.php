<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">

	<!-- TAB NAVIGATION -->
	<div class="nav navbar navbar-expand navbar-white navbar-light border-bottom p-0">

		<!-- CLOSE -->
		<div class="nav-item dropdown">

			<a class="nav-link bg-danger text-white dropdown-toggle"
				data-toggle="dropdown"
				href="#"
				role="button"
				aria-haspopup="true"
				aria-expanded="false">
				Close
			</a>

			<div class="dropdown-menu mt-0">

				<a class="dropdown-item"
					href="#"
					data-widget="iframe-close"
					data-type="all">
					<i class="fas fa-times mr-2"></i>
					Close All
				</a>

				<a class="dropdown-item"
					href="#"
					data-widget="iframe-close"
					data-type="all-other">
					<i class="fas fa-times-circle mr-2"></i>
					Close All Other
				</a>
			</div>
		</div>

		<!-- SCROLL LEFT -->
		<a class="nav-link bg-light"
			href="#"
			data-widget="iframe-scrollleft">
			<i class="fas fa-angle-double-left"></i>
		</a>

		<!-- TABS -->
		<ul class="navbar-nav overflow-hidden" role="tablist"></ul>

		<!-- SCROLL RIGHT -->
		<a class="nav-link bg-light"
			href="#"
			data-widget="iframe-scrollright">
			<i class="fas fa-angle-double-right"></i>
		</a>

		<!-- FULLSCREEN -->
		<a class="nav-link bg-light"
			href="#"
			data-widget="iframe-fullscreen">
			<i class="fas fa-expand"></i>
		</a>

	</div>

	<!-- TAB CONTENT -->
	<div class="tab-content">
		<!-- FLASH MESSAGE -->
		<div class="flash-data"
			data-flashdata="<?= $this->session->flashdata('flash'); ?>">
		</div>

		<!-- WELCOME DASHBOARD -->
		<div class="tab-empty">
			<div class="dashboard-welcome">

				<!-- Background Decoration -->
				<div class="welcome-circle circle-one"></div>
				<div class="welcome-circle circle-two"></div>

				<div class="welcome-container">

					<!-- Icon -->
					<div class="welcome-logo">
						<div class="logo-circle">
							<i class="fas fa-sitemap"></i>
						</div>
					</div>

					<!-- Welcome Text -->
					<div class="welcome-small">
						SELAMAT DATANG
					</div>

					<h1>
						Web Silsilah Keluarga
					</h1>

					<div class="welcome-line">
						<span></span>
						<i class="fas fa-leaf"></i>
						<span></span>
					</div>

					<p class="welcome-description">
						Selamat datang di halaman keluarga Anda.
						<br>
						Simpan, kenali, dan lestarikan hubungan keluarga
						<br>
						dari generasi ke generasi.
					</p>

					<!-- Feature Cards -->
					<div class="welcome-features">

						<!-- Data Keluarga -->
						<div class="feature-card">
							<div class="feature-icon">
								<i class="fas fa-users"></i>
							</div>

							<div>
								<h5>Data Keluarga</h5>
								<p>
									Kelola data anggota keluarga
									dengan mudah.
								</p>
							</div>
						</div>

						<!-- Pohon Silsilah -->
						<div class="feature-card">
							<div class="feature-icon">
								<i class="fas fa-sitemap"></i>
							</div>

							<div>
								<h5>Pohon Silsilah</h5>
								<p>
									Lihat hubungan keluarga
									antar generasi.
								</p>
							</div>
						</div>

						<!-- Lokasi Keluarga -->
						<div class="feature-card">
							<div class="feature-icon">
								<i class="fas fa-map-marker-alt"></i>
							</div>

							<div>
								<h5>Lokasi Keluarga</h5>
								<p>
									Temukan lokasi rumah
									anggota keluarga.
								</p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

	</div>
</div>