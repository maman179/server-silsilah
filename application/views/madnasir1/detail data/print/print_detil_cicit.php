<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<style>
		<?= file_get_contents(FCPATH . 'assets/dist/css/print.css'); ?>
	</style>
</head>

<body>

	<div class="judul">
		<h2>DATA CUCU</h2>

		<?php if (!empty($ortu)): ?>

			<div class="info-ortu">

				<div class="row">
					<strong>BANI :</strong>
					<?= htmlspecialchars($ortu->nama); ?>/
					<?= htmlspecialchars($ortu->menantu); ?>
				</div>

				<div>
					<strong>ALAMAT :</strong>
					<?= htmlspecialchars($ortu->alamat); ?>
				</div>

			</div>

		<?php endif; ?>
	</div>

	<table>
		<thead>
			<tr>
				<th width="8%">No</th>
				<th width="30%">NAMA LENGKAP</th>
				<th width="25%">ORANGTUA</th>
				<th width="25%">SUAMI/ISTRI</th>
				<th width="15%">JUMLAH ANAK</th>
				<th width="22%">FOTO</th>
			</tr>
		</thead>

		<tbody>

			<?php
			$no = 1;
			foreach ($print_detil_cicit as $u) {
			?>

				<tr>
					<td class="center">
						<?= $no++; ?>
					</td>

					<td>
						<?= htmlspecialchars($u->nama_cicit); ?>
					</td>

					<td class="center">
						<?= htmlspecialchars($u->nama_cucu); ?> /
						<?= htmlspecialchars($u->menantu_cucu); ?>
					</td>

					<td class="center">
						<?= htmlspecialchars($u->menantu_cicit); ?>
					</td>

					<td class="center">
						<?= $u->total_anak_cicit; ?>
					</td>

					<td class="kolom-foto center">

						<?php

						if (!empty($u->foto_cicit)) {

							$path_foto = FCPATH . 'assets/foto_cicit/' . $u->foto_cicit;

							if (file_exists($path_foto)) {

								$type = strtolower(pathinfo($path_foto, PATHINFO_EXTENSION));

								if ($type == 'jpg' || $type == 'jpeg') {
									$mime = 'image/jpeg';
								} elseif ($type == 'png') {
									$mime = 'image/png';
								} else {
									$mime = '';
								}

								if ($mime != '') {

									$data_foto = file_get_contents($path_foto);

									$base64 = base64_encode($data_foto);

						?>

									<img
										class="foto"
										src="data:<?= $mime; ?>;base64,<?= $base64; ?>">

						<?php
								}
							}
						}

						?>

					</td>

				</tr>

			<?php
			}
			?>

		</tbody>

	</table>

</body>

</html>