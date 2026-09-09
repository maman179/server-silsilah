<!--Menampilkan Data Orang Tua!-->

<!-- Begin Page Content -->
 <div class="container-fluid pt-3">
<!-- Page Heading -->
<div class="row">
                
<!--Page Heading!--> 
        
<!--Menampilkan flashh data (pesan saat data berhasil disimpan)-->
<?php 
if ($this->session->flashdata('message')) :
 echo $this->session->flashdata('message');
                endif; ?>
            </div>
            <div class="col">
    
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">DATA ANAK</h3>
              </div>
            
                 <div class="card-body">

    <table class="table table-striped table-bordered table-hover" id="anak">
    
        <thead>

    <div class="row">
	<div class="container pt-2">
	<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard/tampil_data_ortu'); ?>">Master Data</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data Keluarga</li>
      <li class="breadcrumb-item active" aria-current="page">Data Anak</li>
   </ol>
        <div class="row pt-2"> 
		<tr class="table-success pt-2">
           
             <th class="text-center"colspan="2">Action</th>
            <th class="text-center">No</th>
			<th class="text-center">Nama Lengkap</th>
            <th class="text-center">Keterangan</th>
                        
</tr>
</thead>	
<tbody>
		<?php 
        $no=1;
			foreach($anak as $u)
        { 
		?>
		<tr> 
            <td class="text-center"><a href="<?= site_url('dashboard/tambah_cucu/' . $u->id_anak) ?>" class="btn btn-outline-success btn-sm"><i class="fas fa-plus-circle"></i>Tambah Anak</a></td>
            <td class="text-center"><a href="<?= site_url('dashboard/view_profile/' . $u->id_anak) ?>" class="btn btn-outline-info btn-sm"><i class="fa fa-eye"></i> Lihat Detail [<?php echo $u->total_anak;?>]</a></td>
            <td class="text-center"><?php echo $no++ ?></td>
            <td ><?php echo $u->nama ?></td>
            <td></td>
</td>	
            	
			</tr></div>
   
		 <?php
        } 
        ?>
        
<!-- Modaltambah cucu-->

<?php 
        $no=1;
			foreach($anak as $u)
        { 
		?>
<div class="modal fade" id="ModalTambahCucu<?php echo $u->id_anak;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="list-group-item active" id="exampleModalLabel" aria-current="true">FORM TAMBAH CUCU MADNASIR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('cucu/aksi_tambah_cucu');?>
                <div class="form-group row">
        
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="id_anak" name="id_anak" value=" <?= $u->id_anak; ?>">
                        <input type="text" class="form-control" id="nama" name="nama_cucu" value="<?= set_value('nama_cucu'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('nama_cucu') ?>
                            </small>
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="jenis_kelamin" name="jenis_kelamin_cucu" value="Laki-laki" 
                                    <?php if (set_value('jenis_kelamin_cucu') == "Laki-laki") : echo "checked";endif; ?>>
                                    <label class="form-check-label" for="jenis_kelamin">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="jenis_kelamin" name="jenis_kelamin_cucu" value="Perempuan" 
                                    <?php if (set_value('jenis_kelamin_cucu') == "Perempuan") : echo "checked"; endif; ?>>
                                    <label class="form-check-label" for="jenis_kelamin">
                                        Perempuan
                                    </label>
                                </div>
                                <small class="text-danger">
                                    <?php echo form_error('jenis_kelamin_cucu') ?>
                                </small>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir_cucu" value=" <?= set_value('tgl_lahir_cucu'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('tgl_lahir_cucu') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Menantu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="menantu" name="menantu_cucu" value=" <?= set_value('menantu_cucu'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('menantu_cucu') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="alamat" name="alamat_cucu" rows="3"><?= set_value('alamat_cucu'); ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('alamat_cucu') ?>
                            </small>
                        </div>
                    </div>         
    
                    <div class="form-group row">
                        <label for="NoHP" class="col-sm-2 col-form-label">Nomor Handphone</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="NoHP" name="NoHP_cucu" value="<?= set_value('NoHP_cucu'); ?>">
                            <small class="text-danger">
                        <?php echo form_error('NoHP_cucu') ?>    

                    </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="NoHP" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-5">
                       <input type="file" name="foto_cucu" size="20">
                            <small class="text-danger">
                        <?php echo form_error('foto_cucu') ?>    

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
<?php echo form_close();?>
        
</div>
</nav>
<?php
}?>
        
</div>
</nav>
<!-- Akhir Modal Tambah Cucu!-->

<!-- Modal Hapus Data-->
<?php 
        $no = 0;
			foreach($anak as $u)
            
            {?>

<div class="modal fade" id="ModalHapus<?php echo $u->id_anak;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
  <div class="modal-header">
  <h5 class="list-group-item active" id="exampleModalLabel" aria-current="true">Konfirmasi Hapus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
       </button>
    </div>
        
      <div class="modal-body">
      <span><h2>Anda ingin menghapus data dengan </span></h2>
                <h2><span>Id : <?= $u->id_anak?> - Nama : <?=$u->nama?></span>?</h2>
      </div>
     
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <a href="<?= site_url('anak/hapus/' . $u->id_anak) ?>" class="btn btn-danger" id="btdelete">Lanjutkan</a>
      </div>

    </div>
   </div>
</div>
<?php 
}
?>
<? echo form_close();?>

<!-- akhir Modal Hapus-->

             </tbody>

<!-- Modal Edit data-->
<?php 
        $no = 0;
			foreach($anak as $u)
            
            {?>

<div class="modal fade" id="ModalEdit<?php echo $u->id_anak; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="list-group-item active" id="exampleModalLabel" aria-current="true">FORM EDIT DATA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <?php echo form_open_multipart('anak/update');?>
                <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="id_anak" name="id_anak" value="<?= $u->id_anak?>">

                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $u->nama?>">
                                                    </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="jenis_kelamin1" name="jenis_kelamin" value="Laki-laki"
                                    <?php 
                                    if ($u->jenis_kelamin == "Laki-laki") : echo "checked"; endif; ?>>
                                    <label class="form-check-label" for="jenis_kelamin1">
                                        Laki-laki
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="jenis_kelamin2" name="jenis_kelamin" value="Perempuan" 
                                <?php if ($u->jenis_kelamin == "Perempuan") : echo "checked"; endif; ?>>
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
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value=" <?= $u->tgl_lahir?>">
                                             </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Menantu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="menantu" name="menantu" value=" <?= $u->menantu?>">
                          
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $u->alamat?></textarea>
                                                  </div>
                    </div>
                                   
                    <div class="form-group row">
                        <label for="NoHP" class="col-sm-2 col-form-label">Nomor Handphone</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="NoHP" name="NoHP" value="<?= $u->NoHP?>">
                          
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="foto_anak" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-5">
                       <input type="file" name="foto_anak" size="20">
                            <small class="text-danger">
                        <?php echo form_error('foto_anak') ?>    

                    </small>
                        </div>
                        <img src="<?php echo base_url().'/assets/foto_anak/'.$u->foto_anak?>" width="100">
                    </div>
                  

             
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Simpan Data</button>
     </div>
    </div>
  </div>
</div>


<?php echo form_close();?>
        
</div>
</nav>
<?php
}?>


<!-- Akhir Modal Edit Ortu !-->



<!-- Modaltambah data-->

<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <?php echo form_open_multipart('anak/aksi_tambah_anak');?>
                <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value=" <?= set_value('nama'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('nama') ?>
                            </small>
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki" <?php if (set_value('jenis_kelamin') == "Laki-laki") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="jenis_kelamin">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan" <?php if (set_value('jenis_kelamin') == "Perempuan") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="jenis_kelamin">
                                        Perempuan
                                    </label>
                                </div>
                                <small class="text-danger">
                                    <?php echo form_error('jenis_kelamin') ?>
                                </small>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value=" <?= set_value('tgl_lahir'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('tgl_lahir') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Menantu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="menantu" name="menantu" value=" <?= set_value('menantu'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('menantu') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= set_value('alamat'); ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('alamat') ?>
                            </small>
                        </div>
                    </div>
                   
                
                    <div class="form-group row">
                        <label for="NoHP" class="col-sm-2 col-form-label">Nomor Handphone</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="NoHP" name="NoHP" value="<?= set_value('NoHP'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('NoHP') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-5">
                            <input type="file" class="form-control" id="foto_anak" name="foto_anak" value="<?= set_value('foto_anak');?>">            
                        </div>
                    </div>

             
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Simpan Data</button>
      </div>
    </div>
  </div>
</div>
<? echo form_close();?>
        
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

