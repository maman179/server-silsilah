<!-- Menampilkan Data Anak!-->
<div class="col pt-2">
    <div class="card card-primary">
        <div class="card-header">
			<h3 class="card-title">DATA ANAK</h3>
        </div>

	<div class="container pt-3">
	<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="<?php echo base_url('dashboard1/tampil_data_orangtua'); ?>">Detail Data Keluarga</li></a>
        <li class="breadcrumb-item active" aria-current="page">Data Keluarga</li>
        <li class="breadcrumb-item active" aria-current="page">Data Anak</li>
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
			foreach($detil_anak as $u)
		{ 
		?>
		<tr>
            
			<td class="text-center"><?php echo $no++; ?></td>
			<td><?php echo $u->nama_cucu; ?></td>
			<td class="text-center"><?php echo $u->menantu_cucu;?></td>
			<td class="text-center"><a href="<?= site_url('dashboard1/view_profile_anak/' . $u->id_cucu) ?>" class="btn btn-outline-info btn-sm"><i class="fa fa-eye"></i> View </a></td>			
			<!--<td class="text-center"><?php echo $u->total_anak_cucu;?></td>
			<td class="text-center"><a href="<?= site_url('dashboard/detil_cicit/' . $u->id_cucu) ?>"  class="btn btn-outline-dark btn-sm" data-somestringvalue-text="Loading Finished" autocomplete="off">Lihat Detail Anak (<?php echo $u->total_anak_cucu;?>) <i class="fa fa-angle-double-right"></i></a></td>!-->
						
		</tr>
   
		 <?php
        } 
        ?> 

    </tbody>    
    
</div>
</div>
    </nav>
    