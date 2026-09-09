<!-- Menampilkan Data Anak!-->

<div class="container-fluid pt-3">
             <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">DATA CUCU AMINAH</h3>
              </div>

<div class="container pt-2">
      <div class="row">
        <div class="col-9">
           <button type="button" class="btn btn-outline-info btn-sm"> <a href = "<?php echo base_url('cicit/print_cucu_aminah'); ?>"><i class="fa fa-print"></i>PRINT</a></button>
           <button type="button" class="btn btn-outline-info btn-sm"> <a href = "<?php echo base_url('cucu/print'); ?>"><i class="fa fa-file"></i>EXPORT PDF</a></button>
          </div>
      </div>
</div>


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
			<th class="text-center">Keterangan</th>
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
			<td class="text-center"><?php echo $u->menantu_cicit;?></td>
			<td class="text-center"><?php echo $u->alamat_cicit; ?></td>	
			<td class="text-center"><?php echo $u->NoHP_cicit?></td>
			<td class="text-center"></td>

		</tr>
   
		 <?php
        } 
        ?> 

    </tbody>    
    
</div>
</div>
    </nav>
    
	    <!-- Modal Logout !-->
<div class="modal fade" id="modalExit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Logout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
</div>
 
    <div class="modal-body">
    <p>Apakah Yakin Ingin Keluar?</p>
    </div>

<div class="modal-footer">
<div class="modal-footer">
<form action= "<?php echo base_url(). 'login/logout'; ?>" method="post">
<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success" >Lanjutkan</button>
  </div></form>
</div>
</div>
</div>
<? echo form_close();?>

<!--akhir Modal Logout-->
