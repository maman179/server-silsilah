<div class="card">
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
	<?php if ($this->session->flashdata('flash')) : ?>
	<?php endif; ?>
</div>

<div class="container pt-2">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard1/form_input_backup'); ?>">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Backup Database</li>
		</ol>

		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover">

					<thead>
						<tr>
							<th width="60">No</th>
							<th>Nama File</th>
							<th width="150">Ukuran</th>
							<th width="180">Tanggal Backup</th>
							<th colspan="2" class="text-center">Aksi</th>
						</tr>
					</thead>

					<tbody>

						<?php if (!empty($backup_files)): ?>

							<?php $no = 1; ?>

							<?php foreach ($backup_files as $file): ?>
								<tr>
									<td>
										<?= $no++; ?>
									</td>

									<td>
										<i class="fas fa-file-code text-primary me-2"></i>
										<?= htmlspecialchars($file['nama']); ?>
									</td>

									<td>
										<?= $file['ukuran']; ?>
									</td>

									<td>
										<?= date('d-m-Y H:i:s', $file['tanggal']); ?>
									</td>

									<td class="text-center">
										<form action="<?= site_url('backup/download'); ?>"
											method="post"
											style="display:inline;">

											<input type="hidden"
												name="filename"
												value="<?= htmlspecialchars($file['nama'], ENT_QUOTES, 'UTF-8'); ?>">

											<button type="submit"
												class="btn btn-sm btn-success"
												title="Download">

												<i class="fas fa-download"></i>

											</button>

										</form>
									</td>
									<td class="text-center">
										<form action="<?= site_url('backup/hapus'); ?>"
											method="post"
											class="form-hapus-backup"
											style="display:inline;">

											<input type="hidden"
												name="filename"
												value="<?= htmlspecialchars($file['nama'], ENT_QUOTES, 'UTF-8'); ?>">

											<button type="submit"
												class="btn btn-sm btn-danger" title="Hapus">
												<i class="fas fa-trash"></i>
											</button>

										</form>
									</td>
								</tr>
							<?php endforeach; ?>
						<?php else: ?>

							<tr>
								<td colspan="5" class="text-center text-muted">
									Belum ada backup database.
								</td>
							</tr>

						<?php endif; ?>

					</tbody>

				</table>

			</div>

		</div>

</div>
