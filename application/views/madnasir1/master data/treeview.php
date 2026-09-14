<div class="card">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fas fa-sitemap"></i>
			Silsilah Keluarga Bani <?= htmlspecialchars($ortu->nama_ortu); ?> / <?= htmlspecialchars($ortu->pasangan); ?>
		</h3>
	</div>

	<!-- <a href="<?= base_url('dashboard1/cetak_treeview') ?>" class="btn btn-danger">
		<i class="fa fa-file-pdf"></i> Cetak PDF
	</a> -->

	<div class="tree-container">
		<div class="family-tree">

			<!-- Orang Tua -->
			<div class="root">
				<div class="node <?= !empty($anak) ? 'has-children' : '' ?>">
					<div class="box ortu-box">
						<div class="nama">
							<?= htmlspecialchars($ortu->nama_ortu); ?>/ <?= htmlspecialchars($ortu->pasangan); ?>
						</div>
						<div class="generasi">
							AYAH / IBU
						</div>
					</div>


					<?php if (!empty($anak)): ?>

						<div class="children">
							<!-- ==================================
                             ANAK
                        =================================== -->

							<?php foreach ($anak as $a): ?>

								<?php

								$anak_cucu = array_filter(
									$cucu,
									function ($c) use ($a) {
										return $c->id_anak == $a->id_anak;
									}
								);

								?>

								<div class="node <?= !empty($anak_cucu) ? 'has-children' : '' ?>">

									<div class="box anak-box">

										<div class="nama">
											<?= htmlspecialchars($a->nama); ?> / <?= htmlspecialchars($a->menantu); ?>
										</div>

										<div class="generasi">
											ANAK
										</div>

									</div>


									<?php if (!empty($anak_cucu)): ?>

										<div class="children">


											<!-- ==================================
                                     CUCU
                                =================================== -->

											<?php foreach ($anak_cucu as $c): ?>

												<?php

												$cucu_cicit = array_filter(
													$cicit,
													function ($ci) use ($c) {
														return $ci->id_cucu == $c->id_cucu;
													}
												);

												?>


												<div class="node <?= !empty($cucu_cicit) ? 'has-children' : '' ?>">

													<div class="box cucu-box">

														<div class="nama">
															<?= htmlspecialchars($c->nama_cucu); ?> / <?= htmlspecialchars($c->menantu_cucu); ?>
														</div>

														<div class="generasi">
															CUCU
														</div>

													</div>


													<?php if (!empty($cucu_cicit)): ?>

														<div class="children">


															<!-- ==================================
                                             CICIT
                                        =================================== -->

															<?php foreach ($cucu_cicit as $ci): ?>

																<?php

																$cicit_baok = array_filter(
																	$baok,
																	function ($b) use ($ci) {
																		return $b->id_cicit == $ci->id_cicit;
																	}
																);

																?>


																<div class="node <?= !empty($cicit_baok) ? 'has-children' : '' ?>">

																	<div class="box cicit-box">

																		<div class="nama">
																			<?= htmlspecialchars($ci->nama_cicit); ?>
																		</div>

																		<div class="generasi">
																			CICIT
																		</div>

																	</div>


																	<?php if (!empty($cicit_baok)): ?>

																		<div class="children">


																			<!-- ==================================
                                                     BAOK
                                                =================================== -->

																			<?php foreach ($cicit_baok as $b): ?>

																				<div class="node">

																					<div class="box baok-box">

																						<div class="nama">
																							<?= htmlspecialchars($b->nama_baok); ?>
																						</div>

																						<div class="generasi">
																							BAOK
																						</div>

																					</div>

																				</div>

																			<?php endforeach; ?>


																		</div>

																	<?php endif; ?>


																</div>

															<?php endforeach; ?>


														</div>

													<?php endif; ?>


												</div>

											<?php endforeach; ?>


										</div>

									<?php endif; ?>


								</div>

							<?php endforeach; ?>


						</div>

					<?php endif; ?>


				</div>

			</div>


		</div>

	</div>

</div>