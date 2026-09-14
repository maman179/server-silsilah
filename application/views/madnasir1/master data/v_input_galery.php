<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<?php if ($this->session->flashdata('flash')) : ?>
<?php endif; ?>

<div class="flash-data-gagaladd" data-flashdata="<?= $this->session->flashdata('flash_gagal'); ?>"></div>
<?php if ($this->session->flashdata('flash_gagal')) : ?>
<?php endif; ?>

<div class="container-fluid" pt-3>
	<div class="container pt-3">
		<div class="col">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">INPUT FOTO KEGIATAN</h3>
				</div>
				<div class="card-body">
					<nav aria-label="breadcrumb"></nav>

					<div class="container pt-2">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard1/tampil_galery'); ?>">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Input Gallery</li>
								<li class="breadcrumb-item active" aria-current="page">Foto Kegiatan</a></li>
							</ol>
							<?php foreach ($galery as $u) { ?>
								<?php echo form_open_multipart('dashboard1/aksi_tambah_foto'); ?>
								<div class="container pt-2">
									<input type="hidden" class="form-control" id="id_ortu" name="id_ortu" value="<?php echo $u->id_ortu ?>">
								</div>
								<div class="container pt-2">
									<label class="form-label" for="caption">Caption</label>
									<input type="text" class="form-control" id="caption" name="caption">
								</div>
								<div class="container pt-2">
									<label class="form-label" for="galery">Upload Foto</label>
									<input type="file" class="form-control" id="galery" name="galery" size="20">

								</div>
								<div class="container pt-2">
									<button type="submit" class="btn btn-primary" data-somestringvalue-text="Loading Finished" autocomplete="off">Simpan</button>
								</div>
					</div><?php } ?>
				</div>
			</div>