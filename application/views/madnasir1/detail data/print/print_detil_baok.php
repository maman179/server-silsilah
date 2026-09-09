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
		<h2>DATA CICIT</h2>

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
				<th width="8%">NO</th>
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
			foreach ($print_detil_baok as $u) {
			?>

				<tr>
					<td class="center">
						<?= $no++; ?>
					</td>

					<td>
						<?= htmlspecialchars($u->nama_baok); ?>
					</td>

					<td class="center">
						<?= htmlspecialchars($u->nama_cicit); ?> /
						<?= htmlspecialchars($u->menantu_cicit); ?>
					</td>

					<td class="center">
						<?= htmlspecialchars($u->menantu_baok); ?>
					</td>

					<td class="center">
						<?= $u->total_anak_baok; ?>
					</td>

					<td class="kolom-foto center">

						<?php

						if (!empty($u->foto_baok)) {

							$path_foto = FCPATH . 'assets/foto_baok/' . $u->foto_baok;

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