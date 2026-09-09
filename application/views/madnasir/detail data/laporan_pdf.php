<!-- Menampilkan Data Anak!-->
<html>
	<head></head>
	<title>Laporan Data Cucu</title><body>
</div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="cucu" width="100%" cellspacing="0">
        <thead>
		<tr class="table-success">
            <th class="text-center">No</th>
			<th class="text-center">Nama Lengkap</th>			
			<th class="text-center">Nama Menantu</th>
			<th class="text-center">Alamat Lengkap</th>
			<th class="text-center">Nomor HP</th>
			<!--<th class="text-center">JUMLAH ANAK</th>!-->
			<th class="text-center">Lihat Detil Anak</th>
</tr>
</thead>	
<tbody>
		<?php 
        $no = 1;
			foreach($cucu_pdf as $u)
		{ 
		?>
		<tr>
            
			<td class="text-center"><?php echo $no++; ?></td>
			<td><?php echo $u->nama_cucu; ?></td>
			<td class="text-center"><?php echo $u->menantu_cucu;?></td>
			<td class="text-center"><?php echo $u->alamat_cucu;?></td>
			<td class="text-center"><?php echo $u->NoHP_cucu;?></td>
			<td class="text-center"><?php echo $u->total_anak_cucu;?></td>
						
		</tr>
   
		 <?php
        } 
        ?> 

    </tbody>    
    
</div>
</div>
    </body></html>
    