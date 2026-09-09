
<!-- Menampilkan Data Anak!-->
<div class="col pt-2">
	 <div class="card card-primary">
        <div class="card-header">
        	<h3 class="card-title">DATA CICIT</h3>
			</div>

	<div class="container pt-3">
	<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
        <li class="breadcrumb-item active">Detail Data Keluarga</li></a>
        <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url('dashboard1/tampil_data_anak'); ?>"> Data Orang Tua</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Cucu</li>
   </ol>

</div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="detil_cucu" width="100%" cellspacing="0">
        <thead>
		<tr class="table-success">
            <th class="text-center">No</th>
			<th class="text-center">Nama Lengkap</th>	
			<th class="text-center">Nama Menantu</th>
			<th class="text-center">View Profile</th>

</tr>
</thead>	
<tbody>
		<?php 
        $no = 1;
			foreach($detil_cucu as $u)
		{ 
		?>
		<tr>
            
			<td class="text-center"><?php echo $no++; ?></td>
			<td><?php echo $u->nama_cicit; ?></td>
			<!--<td class="text-center"><?php echo $u->tgl_lahir_cicit; ?></td>!-->
			<td class="text-center"><?php echo $u->menantu_cicit;?></td>
			<!--<td class="text-center"><?php echo $u->alamat_cicit; ?></td>	
			<td class="text-center"><?php echo $u->NoHP_cicit?></td>
			<td class="text-center"><?php echo $u->total_anak_cicit?></td>!-->
			<td class="text-center"><a href="<?= site_url('dashboard1/view_profile_cicit/' . $u->id_cicit) ?>"  class="btn btn-outline-primary btn-sm" >View Profile </a></td>

		</tr>
   
		 <?php
        } 
        ?> 

    </tbody>    
    
</div>
</div>
    </nav>
    