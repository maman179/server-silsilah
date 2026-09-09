<!DOCTYPE html>
<html>

<head>

	<meta charset="UTF-8">

	<style>
		<?= file_get_contents(FCPATH . 'assets/dist/css/diagram.css'); ?>
	</style>

</head>

<body>


	<div class="judul">
		STRUKTUR SILSILAH KELUARGA
	</div>

	<div class="subjudul">
		<?= htmlspecialchars($ortu->nama_ortu) ?>

		<?php if (!empty($ortu->pasangan)): ?>
			/ <?= htmlspecialchars($ortu->pasangan) ?>
		<?php endif; ?>
	</div>

	<div class="tree">
		<div class="ortu-area">
			<?php
			$foto_ortu = '';

			if (!empty($ortu->foto_ortu)) {

				$foto_ortu =
					FCPATH .
					'assets/foto_ortu/' .
					$ortu->foto_ortu;
			}
			?>

			<div class="card ortu">
				<?php if ($foto_ortu && file_exists($foto_ortu)): ?>
					<img src="<?= $foto_ortu ?>">
				<?php else: ?>
					<div class="no-photo">👤</div>
				<?php endif; ?>

				<div class="nama">
					<?= htmlspecialchars($ortu->nama_ortu) ?>
				</div>

				<div class="jenis">
					AYAH / IBU
				</div>

			</div>

		</div>


		<?php if (!empty($anak)): ?>
			<div class="vline"></div>

			<table class="ortu-connector">
				<tr>
					<?php foreach ($anak as $a): ?>
						<td class="ortu-line"></td>
					<?php endforeach; ?>
				</tr>

				<tr>
					<?php foreach ($anak as $a): ?>
						<td>
							<div class="ortu-down"></div>
						</td>
					<?php endforeach; ?>
				</tr>
			</table>

			<table class="anak-table">
				<tr>
					<?php foreach ($anak as $a): ?>
						<td>
							<div class="branch">
								<?php

								$foto_anak = '';
								if (!empty($a->foto_anak)) {

									$foto_anak =
										FCPATH .
										'assets/foto_anak/' .
										$a->foto_anak;
								}

								?>

								<div class="card anak">
									<?php if ($foto_anak && file_exists($foto_anak)): ?>
										<img src="<?= $foto_anak ?>">
									<?php else: ?>
										<div class="no-photo">👤</div>
									<?php endif; ?>


									<div class="nama">
										<?= htmlspecialchars($a->nama) ?>
									</div>

									<div class="jenis">
										ANAK
									</div>

								</div>


								<?php

								$cucu_anak = array();
								foreach ($cucu as $c) {
									if (
										isset($c->id_anak) &&
										$c->id_anak == $a->id_anak
									) {

										$cucu_anak[] = $c;
									}
								}

								?>

								<?php if (!empty($cucu_anak)): ?>


									<!-- GARIS ANAK KE CUCU -->

									<div class="child-line"></div>


									<?php if (count($cucu_anak) > 1): ?>

										<table class="cucu-connector">

											<tr>

												<?php foreach ($cucu_anak as $c): ?>

													<td class="cucu-top"></td>

												<?php endforeach; ?>

											</tr>

											<tr>

												<?php foreach ($cucu_anak as $c): ?>

													<td>
														<div class="cucu-down"></div>
													</td>

												<?php endforeach; ?>

											</tr>

										</table>

									<?php endif; ?>


									<!-- =================================================
     CUCU
================================================= -->

									<table class="cucu-table">

										<tr>

											<?php foreach ($cucu_anak as $c): ?>

												<td>

													<?php

													$foto_cucu = '';

													if (!empty($c->foto_cucu)) {

														$foto_cucu =
															FCPATH .
															'assets/foto_cucu/' .
															$c->foto_cucu;
													}

													?>

													<div class="card cucu">

														<?php if ($foto_cucu && file_exists($foto_cucu)): ?>

															<img src="<?= $foto_cucu ?>">

														<?php else: ?>

															<div class="no-photo">👤</div>

														<?php endif; ?>


														<div class="nama">
															<?= htmlspecialchars($c->nama_cucu) ?>
														</div>

														<div class="jenis">
															CUCU
														</div>

													</div>


													<?php

													/*
 * Cari CICIT milik cucu ini
 */

													$cicit_cucu = array();

													foreach ($cicit as $ci) {

														if (
															isset($ci->id_cucu) &&
															$ci->id_cucu == $c->id_cucu
														) {

															$cicit_cucu[] = $ci;
														}
													}

													?>


													<?php if (!empty($cicit_cucu)): ?>


														<div class="child-line"></div>


														<!-- =================================================
     CICIT
================================================= -->

														<table class="cicit-table">

															<tr>

																<?php foreach ($cicit_cucu as $ci): ?>

																	<td>

																		<?php

																		$foto_cicit = '';

																		if (!empty($ci->foto_cicit)) {

																			$foto_cicit =
																				FCPATH .
																				'assets/foto_cicit/' .
																				$ci->foto_cicit;
																		}

																		?>

																		<div class="card cicit">

																			<?php if ($foto_cicit && file_exists($foto_cicit)): ?>

																				<img src="<?= $foto_cicit ?>">

																			<?php else: ?>

																				<div class="no-photo">👤</div>

																			<?php endif; ?>


																			<div class="nama">
																				<?= htmlspecialchars($ci->nama_cicit) ?>
																			</div>

																			<div class="jenis">
																				CICIT
																			</div>

																		</div>


																		<?php

																		/*
 * Cari BAOK milik cicit
 */

																		$baok_cicit = array();

																		foreach ($baok as $b) {

																			if (
																				isset($b->id_cicit) &&
																				$b->id_cicit == $ci->id_cicit
																			) {

																				$baok_cicit[] = $b;
																			}
																		}

																		?>


																		<?php if (!empty($baok_cicit)): ?>


																			<div class="child-line"></div>


																			<!-- =================================================
     BAOK
================================================= -->

																			<table class="baok-table">

																				<tr>

																					<?php foreach ($baok_cicit as $b): ?>

																						<td>

																							<?php

																							$foto_baok = '';

																							if (!empty($b->foto_baok)) {

																								$foto_baok =
																									FCPATH .
																									'assets/foto_baok/' .
																									$b->foto_baok;
																							}

																							?>

																							<div class="card baok">

																								<?php if ($foto_baok && file_exists($foto_baok)): ?>

																									<img src="<?= $foto_baok ?>">

																								<?php else: ?>

																									<div class="no-photo">👤</div>

																								<?php endif; ?>


																								<div class="nama">
																									<?= htmlspecialchars($b->nama_baok) ?>
																								</div>

																								<div class="jenis">
																									BAOK
																								</div>

																							</div>

																						</td>

																					<?php endforeach; ?>

																				</tr>

																			</table>

																		<?php endif; ?>


																	</td>

																<?php endforeach; ?>

															</tr>

														</table>

													<?php endif; ?>


												</td>

											<?php endforeach; ?>

										</tr>

									</table>


								<?php endif; ?>


							</div>

						</td>

					<?php endforeach; ?>

				</tr>

			</table>

		<?php endif; ?>


	</div>

</body>

</html>