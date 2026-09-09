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

//  JUMLAH DATA PER HALAMAN

$per_halaman = 10;
$total_data = count($cucu);
$total_halaman = ceil($total_data / $per_halaman);

//  BAGI DATA MENJADI BEBERAPA HALAMAN
$halaman = array_chunk($cucu, $per_halaman);
?>

<?php foreach ($halaman as $index => $data_halaman): ?>

<div class="halaman">
  <!-- JUDUL -->
    <div class="judul"> DATA CUCU </div>

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

	<div class="nomor-halaman">
        Halaman <?= $index + 1 ?> / <?= $total_halaman ?>
    </div>

    <table>
        <thead>
            <tr>
                <th width="8%">No</th>
                <th width="18%">Foto</th>
                <th width="42%">Nama Cucu </th>
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
                <td class="center">
                    <?= $nomor++ ?>
                </td>

                <td class="center">
                    <?php if (!empty($c->foto_cucu)): ?>

				    <?php
    					$path_foto = FCPATH . 'assets/foto_cucu/' . $c->foto_cucu;

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
                    <strong>
                        <?= htmlspecialchars($c->nama_cucu) ?>
                    </strong>
                </td>

                <td class="center">
                    <?= htmlspecialchars($c->nama_anak) ?> /
                    <?= htmlspecialchars($c->menantu) ?>
                </td>

				<td>
					<?= htmlspecialchars($c->alamat_cucu) ?>
				</td>

				<td>
					<?= htmlspecialchars($c->NoHP_cucu) ?>
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
