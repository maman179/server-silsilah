<label>DATA ANAK HJ. OYOH</label>
<label>DESA LENGKONG</label>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="detil_cucu" width="100%" cellspacing="0">
        <thead>
			
		<tr class="table-success">
            <th class="text-center">No</th>
			<th class="text-center">Nama Lengkap</th>			
			<th class="text-center">Nama Menantu</th>
			<th class="text-center">Alamat Lengkap</th>
			<th class="text-center">Nomor HP</th>
			</tr>
</thead>	
<tbody>
		<?php 
        $no = 1;
			foreach($cucu_print as $u)
		{ 
		?>
		<tr>
            
			<td class="text-center"><?php echo $no++; ?></td>
			<td><?php echo $u->nama_cicit; ?></td>
			<td class="text-center"><?php echo $u->menantu_cicit;?></td>
			<td class="text-center"><?php echo $u->alamat_cicit; ?></td>	
			<td class="text-center"><?php echo $u->NoHP_cicit?></td>
					</tr>
   
		 <?php
        } 
        ?> 

    </tbody>    
    <script type="text/javascript">
			window.print();
		</script>
</div>
</div>
