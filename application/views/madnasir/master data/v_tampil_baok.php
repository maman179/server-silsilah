	
    <!-- Begin Page Content -->
 <div class="container pt-3">
<!-- Page Heading -->
<div class="row">
                
<!--Page Heading!--> 


	<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" > <a href="<?=site_url('tampil_data_cicit')?>"> Master Data</li></a>
        <li class="breadcrumb-item active" aria-current="page">Data Keluarga</li>
        <li class="breadcrumb-item active" aria-current="page">Data Baok</li>
   </ol>

</div>
<div class="container pt-2">
                
<!-- Menampilkan flashh data (pesan saat data berhasil disimpan)-->
<?php if ($this->session->flashdata('message')) :
 echo $this->session->flashdata('message');
                endif; ?>
            </div>

        <!-- general form elements -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">DATA BAOK</h3>
              </div>
              <div class="card-body">

<!--<div class="container">
      <button type="button" class="btn btn-success btn-sm-right" data-toggle="modal" data-target="#modalTambahCicit">Tambah Data
</div>!-->
		
    <div class="container pt-2">
    <table class="table table-striped table-bordered table-hover" id="baok">
        
        <thead>
		<tr class="table-success">
            <th class="text-center" colspan="2">Action</th>
            <th class="text-center">No</th>
			<th class="text-center">Nama Lengkap</th>			
            <!--<th class="text-center">Nama Orang Tua</th>
			<th class="text-center">Nama Menantu</th>
			<th class="text-center">Alamat Lengkap</th>
			<th class="text-center">Nomor HP</th>!-->
            <th class="text-center">Total Anak</th>
            
</tr>
</thead>	
<tbody>
		<?php 
        $no = 1;
			foreach($baok as $u)
		{ 
		?>
		<tr>
            <td class="text-center"><button type="button" class="btn btn-outline-success btn-sm"><i class="fa fa-edit"></i>Tambah Data</button></td> 
            <!--<td class="text-center"><a href="<?= site_url('baok/edit_baok/' . $u->id_baok) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a></td>!-->
			<!--<td class="text-center"><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalHapus<?php echo $u->id_baok;?>"><i class="fa fa-trash"></i></button></td>!-->
            <td class="text-center"><a href="<?= site_url('dashboard/view_profile_baok/' . $u->id_baok) ?>" class="btn btn-outline-info btn-sm"><i class="fa fa-eye"></i> Lihat Detail [<?php echo $u->total_anak_baok ?>]</a></td>
			<td class="text-center"><?php echo $no++; ?></td>
			<td><?php echo $u->nama_baok; ?></td>
			<!--<td><?php echo $u->nama_cicit; ?></td>
			<td><?php echo $u->menantu_baok; ?></td>
			<td><?php echo $u->alamat_baok; ?></td>	
			<td><?php echo $u->NoHP_baok  ; ?></td>!-->
            <td class="text-center"><?php echo $u->total_anak_baok  ; ?></td>
            
		</tr>
   
		 <?php
        } 
        ?> 

    </tbody>   
    <!-- Modal Edit data baok-->
<?php 
        $no = 0;
			foreach($baok as $u)
            
            {?>

<div class="modal fade" id="ModalEditBaok<?php echo $u->id_baok; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM EDIT DATA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <?php echo form_open_multipart('baok/update_baok');?>
                <div class="form-group row">
                        <input type="hidden" id="id_baok" name="id_baok" value="<?= $u->id_baok?>">
                        <input type="hidden" id="id_cicit" name="id_cicit" value="<?= $u->id_cicit?>">

                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_baok" name="nama_baok" value="<?= $u->nama_baok?>">
                       </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="jenis_kelamin1" name="jenis_kelamin_baok" value="Laki-laki"
                                    <?php 
                                    if ($u->jenis_kelamin_baok == "Laki-laki") : echo "checked"; endif; ?>>
                                    <label class="form-check-label" for="jenis_kelamin1">
                                        Laki-laki
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="jenis_kelamin2" name="jenis_kelamin_baok" value="Perempuan" 
                                <?php if ($u->jenis_kelamin_baok == "Perempuan") : echo "checked"; endif; ?>>
                                    <label class="form-check-label" for="jenis_kelamin2">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir_baok" value=" <?= $u->tgl_lahir_baok?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Menantu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="menantu" name="menantu_baok" value=" <?= $u->menantu_baok?>">
                          
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="alamat" name="alamat_baok" rows="3"><?= $u->alamat_baok?></textarea>
                    </div>
                    </div>
                                   
                    <div class="form-group row">
                        <label for="NoHP" class="col-sm-2 col-form-label">Nomor Handphone</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="NoHP" name="NoHP_baok" value="<?= $u->NoHP_baok?>">
                          
                        </div>
                    </div>
                    
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Simpan</button>
     </div>
    </div>
  </div>
</div>

<?php echo form_close();?>
        
</div>
</nav>
<?php
}
?>
	 
    <!-- Modal dialog hapus data-->
    <?php 
        $no = 0;
			foreach($baok as $u)
		{ 
		?>   
<div class="modal fade" id="ModalHapus<?php echo $u->id_baok;?>" tabindex="-1" aria-labelledby="myModalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalDeleteLabel">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
      <span ><h2>Anda ingin menghapus data dengan </span></h2>
                <h2><span>Id : <?= $u->id_baok?> - Nama : <?=$u->nama_baok?></span>?</h2>
      </div>            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <a href="<?= site_url('baok/hapus_baok/' . $u->id_baok) ?>" class="btn btn-danger" id="btdelete">Lanjutkan</a>
            </div>        
                        
        </div>
    </div>
</div>
</div>
</div>
<?php }?>
<!-- Modal Exit !-->

<div class="modal fade" id="modalExit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Logout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
         
      <div class="modal-body">
        <p>Apakah Yakin Ingin Keluar?</p>
      </div>
      

      <div class="modal-footer">
        <form action= "<?php echo base_url(). 'login/logout'; ?>" method="post">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" >Lanjutkan</button>
          </div></form>
    </div>
  </div>
</div>
<? echo form_close();?>
<!-- Akhir Modal Exit !-->

 
    <!-- Modal Tambah data Cicit-->
<div class="modal fade" id="modalTambahCicit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Baok</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('baok/aksi_tambah_baok');?>
                <div class="form-group row">
                        <label for="id_cicit" class="col-sm-2 col-form-label">Id Orang Tua</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_cicit" name="id_cicit" placeholder="Masukan Id" value=" <?= set_value('id_cicit'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('id_cicit') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_baok" name="nama_baok" value=" <?= set_value('nama_baok'); ?>" placeholder="Nama Lengkap">
                            <small class="text-danger">
                                <?php echo form_error('nama_baok') ?>
                            </small>
                        </div>
                    </div>      

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="jenis_kelamin_baok" name="jenis_kelamin_baok" value="Laki-laki" <?php if (set_value('jenis_kelamin_baok') == "Laki-laki") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="jenis_kelamin_baok">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="jenis_kelamin_baok" name="jenis_kelamin_baok" value="Perempuan" <?php if (set_value('jenis_kelamin_baok') == "Perempuan") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="jenis_kelamin_baok">
                                        Perempuan
                                    </label>
                                </div>
                                <small class="text-danger">
                                    <?php echo form_error('jenis_kelamin_baok') ?>
                                </small>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tgl_lahir_baok" name="tgl_lahir_baok" value=" <?= set_value('tgl_lahir_baok'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('tgl_lahir_baok') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Menantu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="menantu_baok" name="menantu_baok" value=" <?= set_value('menantu_baok'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('menantu_baok') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="alamat_baok" name="alamat_baok" rows="3"><?= set_value('alamat_baok'); ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('alamat_baok') ?>
                            </small>
                        </div>
                    </div>
                   
                
                    <div class="form-group row">
                        <label for="NoHP" class="col-sm-2 col-form-label">Nomor Handphone</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="NoHP_baok" name="NoHP_baok" value="<?= set_value('NoHP_baok'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('NoHP_baok') ?>
                            </small>
                        </div>
                    </div>
                    
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Simpan Data</button>
      </div>
    </div>
  </div>
</div>
</div>

<? echo form_close();?>
<!-- akhir Modal Tambah data-->


