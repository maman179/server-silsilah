     <!-- GALERI KELUARGA -->
     <div class="gallery-page">

     	<!-- HEADER -->
     	<div class="gallery-header">
     		<div>
     			<h4 class="gallery-heading">
     				<i class="fas fa-images"></i>
     				Foto Kegiatan
     			</h4>

     			<p class="gallery-subtitle">
     				Dokumentasi kegiatan keluarga
     			</p>
     		</div>

     		<div class="gallery-total">
     			<?= count($galery); ?> Foto
     		</div>
     	</div>

     	<!-- TOOLBAR -->
     	<div class="gallery-toolbar">
     		<!-- SEARCH -->
     		<div class="gallery-search">
     			<input type="text"
     				id="gallerySearch"
     				placeholder="Cari foto...">
     		</div>

     		<!-- FILTER -->
     		<div class="gallery-filter">
     			<button type="button"
     				class="gallery-filter-btn active"
     				data-filter="all">
     				Semua
     			</button>

     			<button type="button"
     				class="gallery-filter-btn"
     				data-filter="keluarga">
     				Keluarga
     			</button>

     			<button type="button"
     				class="gallery-filter-btn"
     				data-filter="kegiatan">
     				Kegiatan
     			</button>
     		</div>
     	</div>

     	<!-- GALLERY GRID -->
     	<div class="gallery-grid" id="galleryGrid">
     		<?php if (!empty($galery)) : ?>
     			<?php foreach ($galery as $u) : ?>
     				<?php
						$caption = !empty($u->caption)
							? $u->caption
							: 'Foto Kegiatan';

						$kategori = !empty($u->kategori)
							? strtolower($u->kategori)
							: 'kegiatan';

						?>

     				<div class="gallery-item"
     					data-category="<?= htmlspecialchars($kategori); ?>"
     					data-title="<?= strtolower(htmlspecialchars($caption)); ?>">

     					<div class="gallery-card">
     						<!-- IMAGE -->
     						<a href="<?= base_url('assets/galery/' . $u->galery); ?>"
     							class="fresco"
     							data-fresco-group="family-gallery"
     							data-fresco-caption="<?= htmlspecialchars($caption); ?>">

     							<div class="gallery-image">

     								<img src="<?= base_url('assets/galery/' . $u->galery); ?>"
     									alt="<?= htmlspecialchars($caption); ?>"
     									loading="lazy">

     								<div class="gallery-overlay">

     									<div class="gallery-zoom">
     										<i class="fas fa-search-plus"></i>
     									</div>
     								</div>
     							</div>
     						</a>

     						<!-- CAPTION -->
     						<div class="gallery-info">
     							<div class="gallery-caption"
     								title="<?= htmlspecialchars($caption); ?>">
     								<?= htmlspecialchars($caption); ?>
     							</div>
     						</div>
     					</div>
     				</div>
     			<?php endforeach; ?>
     		<?php else : ?>

     			<!-- EMPTY -->
     			<div class="gallery-empty">
     				<i class="fas fa-images"></i>
     				<h5>Belum ada foto</h5>
     				<p> Dokumentasi foto belum tersedia. </p>
     			</div>
     		<?php endif; ?>
     	</div>

     	<!-- NO RESULT -->
     	<div id="galleryNoResult"
     		class="gallery-empty d-none">
     		<i class="fas fa-search"></i>
     		<h5>Foto tidak ditemukan</h5>
     		<p> Coba gunakan kata pencarian lain. </p>
     	</div>
     </div>