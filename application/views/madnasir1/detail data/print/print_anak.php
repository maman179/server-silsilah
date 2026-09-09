<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<style>
		<?= file_get_contents(FCPATH . 'assets/dist/css/print.css'); ?>
	</style>
</head>

<body>

	<?php
	// DATA PER HALAMAN
	$per_halaman = 20;
	$total_data = count($anak);
	$total_halaman = ceil($total_data / $per_halaman);
	$halaman = array_chunk($anak, $per_halaman);

	?>

	<?php
	foreach ($halaman as $index => $data_halaman):
	?>

		<div class="halaman">

			<!--  JUDUL  -->

			<div class="judul">
				DATA ANAK
			</div>


			<!-- SUBJUDUL NAMA KELUARGA -->

			<?php if (!empty($ortu)): ?>
				<?php foreach ($ortu as $o): ?>

					<div class="subjudul">
						<strong>
							Bani : <?= htmlspecialchars($o->nama_ortu) ?>
							<?php if (!empty($o->pasangan)): ?>
								/
								<?= htmlspecialchars($o->pasangan) ?>

						</strong>
					<?php endif; ?>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>

			<!-- NOMOR HALAMAN -->
			<div class="nomor-halaman">
				Halaman
				<?= $index + 1 ?>
				/
				<?= $total_halaman ?>
			</div>

			<table>
				<thead>
					<tr>
						<th width="7%">
							No
						</th>

						<th width="15%">
							Foto
						</th>

						<th width="28%">
							Nama Lengkap
						</th>

						<th width="30%">
							Alamat Lengkap
						</th>

						<th width="20%">
							No Handphone
						</th>
					</tr>
				</thead>
				<tbody>

					<?php

					// Nomor data
					$nomor = ($index * $per_halaman) + 1;
					?>
					<?php foreach ($data_halaman as $c): ?>
						<tr>
							<td class="center">
								<?= $nomor++ ?>
							</td>

							<td class="center">
								<?php
								if (!empty($c->foto_anak)) {
									$path_foto = FCPATH . 'assets/foto_anak/' .
										$c->foto_anak;

									if (file_exists($path_foto)) {
										$extension = strtolower(
											pathinfo(
												$path_foto,
												PATHINFO_EXTENSION
											)
										);


										if (
											$extension == 'jpg' || $extension == 'jpeg'
										) {

											$mime = 'image/jpeg';
										} elseif ($extension == 'png') {

											$mime = 'image/png';
										} elseif ($extension == 'gif') {

											$mime = 'image/gif';
										} else {

											$mime = '';
										}

										/* MASUKKAN FOTO KE PDF                   */
										if ($mime != '') {
											$data_foto =
												file_get_contents(
													$path_foto
												);

											$base64 =
												base64_encode(
													$data_foto
												);
								?>

											<img
												src="data:<?= $mime ?>;base64,<?= $base64 ?>"
												class="foto">
								<?php
										}
									}
								}

								?>
							</td>

							<td>
								<strong>
									<?= htmlspecialchars($c->nama) ?>
								</strong>
							</td>

							<td>
								<?= htmlspecialchars($c->alamat) ?>
							</td>

							<td>
								<?= htmlspecialchars($c->NoHP) ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>


			<div class="footer">
				Sistem Silsilah Keluarga
			</div>

		</div>

	<?php endforeach; ?>

</body>

</html>