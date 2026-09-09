<!--Menampilkan Data Orang Tua!-->

<!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->

<!-- Main content -->
<section class="content">
      <div class="container-fluid pt-3">
        
        <!-- Small boxes (Stat box) -->
        <label> Selamat datang, Bani <?php echo $this->session->userdata('nama');?></label>
        
        <div class="row mb-2">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $total_anak ?> Orang</h3>

                <p>ANAK</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="<?= site_url('dashboard/tampil_data') ?>" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $total_cucu ?> Orang</h3>

                <p>CUCU</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?= site_url('dashboard/tampil_data_cucu') ?>" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $total_cicit ?> Orang</h3>

                <p>CICIT</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?= site_url('dashboard/tampil_data_cicit') ?>" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>

            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $total_baok ?> Orang</h3>

                <p>BAOK</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?= site_url('dashboard/tampil_data_baok') ?>" class="small-box-footer">Lihat Data<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

        
<!--Menampilkan flashh data (pesan saat data berhasil disimpan)-->
<?php if ($this->session->flashdata('message')) :
 echo $this->session->flashdata('message');
                endif; ?>
            </div>
           
            <p><h3><label> DATA ANAK MADNASIR-ERUM</p></h3></label>
    <table class="table table-striped table-bordered table-hover" id="anak">
        <thead>
	      <!--<div class="container">
            <button type="button" class="btn btn-success btn-sm-right" data-toggle="modal" data-target="#modalTambah">Tambah Data</div>!-->
      <th class="text-center">NO</th>
			<th class="text-center">NAMA LENGKAP</th>
			<th class="text-center">NAMA MENANTU</th>
			<!--<th class="text-center">ALAMAT LENGKAP</th>
      <th class="text-center">TOTAL ANAK</th>!-->
			<th class="text-center" colspan="3" >LIHAT DETAIL <i class="fas fa-arrow-circle-right"></i></th>
            
</tr>
</thead>	
<tbody>
		<?php 
        $no=1;
			foreach($anak as $u)
    { 
		?>
		<tr>
        
            <!--<td><a href="<?= site_url('silsilah/edit/' . $u->id_anak) ?>" class="btn btn-success btn-sm">Edit</i> </a></td>
            <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEdit">Edit</td>
			<td><a href="<?= site_url('silsilah/hapus/' . $u->id_anak) ?>" class="btn btn-danger btn-sm item-delete">Hapus </i> </a></td>
            <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalHapus">Hapus Data</td>!-->

            <td class="text-center"><?php echo $no++ ?></td>
            <td><?php echo $u->nama ?></td>
			<td><?php echo $u->menantu ?></td>
			 <!--<td><?php echo $u->alamat ?></td>	
           <td class="text-center"><?php echo $u->total_anak ?></td>!-->
            <td class="text-center"><a href="<?= site_url('dashboard/detil_anak/' . $u->id_anak) ?>" class="btn btn-outline-info btn-sm" data-somestringvalue-text="Loading Finished" autocomplete="off">Lihat Data Cucu <i class="fa fa-angle-double-right"></i></a></td>
            <td class="text-center"><a href="<?= site_url('dashboard/detil_cicit/' . $u->id_anak) ?>" class="btn btn-outline-info btn-sm" data-somestringvalue-text="Loading Finished" autocomplete="off">Lihat Data Cicit <i class="fa fa-angle-double-right"></i></a></td>
            <td class="text-center"><a href="<?= site_url('dashboard/detail_baok/' . $u->id_anak) ?>" class="btn btn-outline-info btn-sm" data-somestringvalue-text="Loading Finished" autocomplete="off">Lihat Data Baok <i class="fa fa-angle-double-right"></i></a></td>
  
          </tr></div>
            
		 <?php } ?>
         
             </tbody>
             <tr></tr>
             <tr>
                <!--<td colspan="5" ><b>TOTAL CUCU BANI MADNASIR : <b><?= $total_cucu ?> ORANG</td>!-->
                
            </tr>

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


