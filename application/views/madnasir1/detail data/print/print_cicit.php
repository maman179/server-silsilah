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


// JUMLAH DATA PER HALAMAN
$per_halaman = 10;
$total_data = count($cicit);
$total_halaman = ceil($total_data / $per_halaman);

//  BAGI DATA MENJADI BEBERAPA HALAMAN

$halaman = array_chunk($cicit, $per_halaman);

?>

<?php foreach ($halaman as $index => $data_halaman): ?>
<div class="halaman">
	<div class="judul"> DATA CICIT</div>

    <?php if (!empty($ortu)): ?>
        <?php foreach ($ortu as $o): ?>
            <div class="subjudul">
                Keluarga:
                <strong>
					<?= htmlspecialchars($o->nama_ortu) ?>
                </strong>

				<?php if (!empty($o->pasangan)): ?>
                    /
                    <?= htmlspecialchars($o->pasangan) ?>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

	<!-- NOMOR HALAMAN -->
    <div class="nomor-halaman">
        Halaman
        <?= $index + 1 ?> / <?= $total_halaman ?>
    </div>

	<!-- TABEL -->
    <table>
        <thead>
            <tr>
                <th width="8%">No</th>
                <th width="18%">Foto</th>
				<th width="42%">Nama Cicit</th>
				<th width="32%">Orang Tua</th>
				<th width="32%">Alamat</th>
				<th width="32%">No Handphone</th>
            </tr>
        </thead>

        <tbody>
        <?php
		//  NOMOR DATA
        $nomor = ($index * $per_halaman) + 1;
        ?>

		<?php foreach ($data_halaman as $c): ?>
            <tr>
                <td class="center"><?= $nomor++ ?></td>
                <td class="center">
                    <?php if (!empty($c->foto_cicit)): ?>
				    <?php
    				$path_foto = FCPATH . 'assets/foto_cicit/' . $c->foto_cicit;

					if (file_exists($path_foto)) {
						$type = pathinfo($path_foto, PATHINFO_EXTENSION);
						$data_foto = file_get_contents($path_foto);
						$base64 = base64_encode($data_foto);
						echo '<img class="foto" src="data:image/' . $type . ';base64,' . $base64 . '">';
					}
					?>
				<?php endif; ?>
                </td>

                <td>
					<strong><?= htmlspecialchars($c->nama_cicit) ?></strong>
                </td>

                <td class="center">
                    <?= htmlspecialchars($c->nama_cucu) ?> /
                    <?= htmlspecialchars($c->menantu_cucu) ?>
                </td>

				<td>
					<?= htmlspecialchars($c->alamat_cicit) ?>
				</td>

				<td>
					<?= htmlspecialchars($c->NoHP_cicit) ?>
				</td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

	<!-- FOOTER -->
    <div class="footer">
        Sistem Silsilah Keluarga
    </div>
</div>

<?php endforeach; ?>
</body>
</html>
