 <div class="container-fluid" pt-3>
 	<div class="container pt-3">
 		<div class="col">
 			<div class="card card-primary">
 				<div class="card-header">
 					<h3 class="card-title">BACKUP DATA SILSILAH</h3>
 				</div>
 				<div class="card-body">
 					<nav aria-label="breadcrumb"></nav>

 					<div class="container pt-2">
 						<nav aria-label="breadcrumb">
 							<ol class="breadcrumb">
 								<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard1/tampil_backup'); ?>">Riwayat Backup</a></li>
 								<li class="breadcrumb-item active" aria-current="page">Backup Database</li>
 							</ol>
 							<?php { ?>
 								<?php echo form_open_multipart('dashboard1/backup_database'); ?>

 								<div class="container pt-2">
 									<label class="form-label" for="caption">NAMA DATABASE</label>
 									<input type="text" class="form-control" id="caption" name="nama_database">
 								</div>
 								<div class="container pt-2">
 									<button type="submit" class="btn btn-primary">Backup</button>
 									<a href="<?php echo base_url('dashboard1/tampil_data'); ?>" class="btn btn-danger">
 										Batal
 									</a>
 								<?php } ?>
 								</div>
 					</div>
 				</div>
