	
     <!-- Begin Page Content -->
 <div class="container pt-3">
<!-- Page Heading -->
<div class="row">
                
<!--Page Heading!--> 

    
</div>
                
<!-- Menampilkan flashh data (pesan saat data berhasil disimpan)-->
<?php if ($this->session->flashdata('message')) :
 echo $this->session->flashdata('message');
                endif; ?>
            </div>


<!--<div class="container">
      <button type="button" class="btn btn-success btn-sm-right" data-toggle="modal" data-target="#modalTambahCucu">Tambah Data
</div>!-->
		
<div class="col">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">DATA CICIT</h3>
              </div>

              <div class="container pt-3">
	<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"> <a href="<?php echo base_url('dashboard/tampil_data_cucu');?>"> Master Data</li></a>
        <li class="breadcrumb-item active" aria-current="page"> Data Cicit</li></a>

   </ol>

                 <div class="table-responsive">
                               <table class="table table-striped table-bordered table-hover" id="cucu">

        
        <thead>
		<tr class="table-success">
            <th colspan='2' class="text-center">Action</th>
            <th class="text-center">No</th>
			      <th class="text-center">Nama Lengkap</th>			
            <th class="text-center">Jumlah Anak</th>
            <th class="text-center">Ket</th>

        </tr>
</thead>	
<tbody>
		<?php 
        $no = 1;
			foreach($cicit as $u)
		{ 
		?>
		<tr>
       <td class="text-center"><a href="<?= site_url('dashboard/tambah_baok/' . $u->id_cicit) ?>" class="btn btn-outline-success btn-sm"><i class="fas fa-plus-circle"></i>Tambah Anak</a></td>
       <td class="text-center"><a href="<?= site_url('dashboard/view_profile_cicit/'.$u->id_cicit) ?>" class="btn btn-outline-info btn-sm"><i class="fa fa-eye"></i> View  [<?php echo $u->total_anak_cicit ?>]</a></td>
      <td class="text-center"><?php echo $no++; ?></td>
		 <td class="text-left"><?php echo $u->nama_cicit; ?></td>
		  <td class="text-center"><?php echo $u->total_anak_cicit ; ?></td>
            <td></td>

                    </tr>
   
		 <?php
        } 
        ?> 

<!-- Modaltambah Baok-->
<?php 
        $no=1;
			foreach($cicit as $u)
        { 
		?>
<div class="modal fade" id="ModalTambahBaok<?php echo $u->id_cicit;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="list-group-item active" id="exampleModalLabel" aria-current="true">FORM TAMBAH BAOK MADNASIR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <?php echo form_open_multipart('baok/aksi_tambah_baok');?>
                <div class="form-group row">
        
                        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="id_cicit" name="id_cicit" value=" <?= $u->id_cicit; ?>">
                        <input type="text" class="form-control" id="id_cicit" name="nama_baok" value=" <?= set_value('nama_baok'); ?>">
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
                                    <input class="form-check-input" type="radio" id="jenis_kelamin" name="jenis_kelamin_baok" value="Laki-laki" 
                                    <?php if (set_value('jenis_kelamin_baok') == "Laki-laki") : echo "checked";endif; ?>>
                                    <label class="form-check-label" for="jenis_kelamin">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="jenis_kelamin" name="jenis_kelamin_baok" value="Perempuan" 
                                    <?php if (set_value('jenis_kelamin_baok') == "Perempuan") : echo "checked"; endif; ?>>
                                    <label class="form-check-label" for="jenis_kelamin">
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
                        <input type="date" id="tgl_lahir" value=" <?= set_value('tgl_lahir_baok'); ?>" min="2018-01-01" max="2018-12-31" name="tgl_lahir_baok">
                            <small class="text-danger">
                                <?php echo form_error('tgl_lahir_baok') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Menantu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="menantu" name="menantu_baok" value=" <?= set_value('menantu_baok'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('menantu_baok') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="alamat" name="alamat_baok" rows="3"><?= set_value('alamat_baok'); ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('alamat_baok') ?>
                            </small>
                        </div>
                    </div>
                   
                
                    <div class="form-group row">
                        <label for="NoHP" class="col-sm-2 col-form-label">Nomor Handphone</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="NoHP" name="NoHP_baok" value="<?= set_value('NoHP_baok'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('NoHP_cicit') ?>
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
<?php
}?>
        
</div>
<!-- Akhir Modal Tambah Baok!-->

<!-- Modal Edit data-->
<?php 
        $no = 0;
			foreach($cicit as $u)
            
            {?>

<div class="modal fade" id="ModalEditCicit<?php echo $u->id_cicit; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="list-group-item active" id="exampleModalLabel" aria-current="true">FORM EDIT DATA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <?php echo form_open_multipart('cicit/update_cicit');?>
                <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="id_cicit" name="id_cicit" value="<?= $u->id_cicit?>">

                            <input type="text" class="form-control" id="nama_cicit" name="nama_cicit" value="<?= $u->nama_cicit?>">
                                                    </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="jenis_kelamin1" name="jenis_kelamin_cicit" value="LAKI-LAKI"
                                    <?php 
                                    if ($u->jenis_kelamin_cicit == "LAKI-LAKI") : echo "checked"; endif; ?>>
                                    <label class="form-check-label" for="jenis_kelamin1">
                                        LAKI-LAKI
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="jenis_kelamin2" name="jenis_kelamin_cicit" value="PEREMPUAN" 
                                <?php if ($u->jenis_kelamin_cicit == "PEREMPUAN") : echo "checked"; endif; ?>>
                                    <label class="form-check-label" for="jenis_kelamin2">
                                        PEREMPUAN
                                    </label>
                                </div>
                          </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                        <input type="date" id="tgl_lahir"  value="<?= $u->tgl_lahir_cicit?> min="2018-01-01" max="2018-12-31" name="tgl_lahir_cicit">
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Menantu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="menantu_cicit" name="menantu_cicit" value=" <?= $u->menantu_cicit?>">
                          
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="alamat" name="alamat_cicit" rows="3"><?= $u->alamat_cicit?></textarea>
                                                  </div>
                    </div>
                                   
                    <div class="form-group row">
                        <label for="NoHP" class="col-sm-2 col-form-label">Nomor Handphone</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="NoHP" name="NoHP_cicit" value="<?= $u->NoHP_cicit?>">            
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-5">
                       <input type="file" name="foto_cicit" size="20">
                            <small class="text-danger">
                        <?php echo form_error('foto_cicit') ?>    
                    </small>
                        </div>                  
                    </div>
                    <div class="form-group row">
                       <div class="col-sm-5">
                        <img src="<?php echo base_url().'/assets/foto_cicit/'.$u->foto_cicit?>" width="100px"></div>
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
<!-- Akhir Modal Edit cucu !-->


      <!-- Modal dialog hapus data-->
    <?php 
        $no = 0;
			foreach($cicit as $u)
		{ 
		?>
	
<div class="modal fade" id="ModalHapus<?php echo $u->id_cicit;?>" tabindex="-1" aria-labelledby="myModalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalDeleteLabel">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
      <span><h2>Anda ingin menghapus data dengan </span></h2>
                <h2><span>Id : <?= $u->id_cicit?> - Nama : <?=$u->nama_cicit?></span>?</h2>
      </div>
                 <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <a href="<?= site_url('cicit/hapus_cicit/' . $u->id_cicit) ?>" class="btn btn-danger" id="btdelete">Lanjutkan</a>
            </div>        
                    
    </div>
</div>
</tbody>    

</div>
</div>
<?php }?>    
        </div>
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

 
    <!-- Modal Tambah data Cucu-->
<div class="modal fade" id="modalTambahCucu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Cicit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('cicit/aksi_tambah_cicit');?>
                <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Id Orang Tua</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_cucu" name="id_cucu" value=" <?= set_value('id_cucu'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('id_cicit') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Cucu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_cicit" name="nama_cicit" value=" <?= set_value('nama_cicit'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('nama_cicit') ?>
                            </small>
                        </div>
                    </div>
         

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="jenis_kelamin_cicit" name="jenis_kelamin_cicit" value="Laki-laki" <?php if (set_value('jenis_kelamin_cicit') == "Laki-laki") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="jenis_kelamin_cicit">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="jenis_kelamin_cicit" name="jenis_kelamin_cicit" value="Perempuan" <?php if (set_value('jenis_kelamin_cicit') == "Perempuan") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="jenis_kelamin">
                                        Perempuan
                                    </label>
                                </div>
                                <small class="text-danger">
                                    <?php echo form_error('jenis_kelamin_cicit') ?>
                                </small>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tgl_lahir_cicit" name="tgl_lahir_cicit" value=" <?= set_value('tgl_lahir_cicit'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('tgl_lahir_cicit') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Menantu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="menantu_cicit" name="menantu_cicit" value=" <?= set_value('menantu_cicit'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('menantu_cicit') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="alamat_cicit" name="alamat_cicit" rows="3"><?= set_value('alamat_cicit'); ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('alamat_cicit') ?>
                            </small>
                        </div>
                    </div>
                   
                
                    <div class="form-group row">
                        <label for="NoHP" class="col-sm-2 col-form-label">Nomor Handphone</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="NoHP_cicit" name="NoHP_cicit" value="<?= set_value('NoHP_cicit'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('NoHP_cicit') ?>
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


<?php 
        $no = 1;
			foreach($cicit as $u)
            
            {?>
            <!--Awal Modal view Cicit !-->
<script>
$(document).ready(function()
{
  $("#ModalView1<?php echo $u->id_cicit;?>").modal("show");
    
  $("#BtnUpdate").click(function()
  {
    $("ModalView1<?php echo $u->id_cicit;?>").modal("hide");
  });
  $("#BtnHapus").click(function()
  {
    $("#ModalView1<?php echo $u->id_cicit;?>").modal("hide");
  });
  
});</script>


<div class="modal fade" id="ModalView1<?php echo $u->id_cicit; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="list-group-item active" id="exampleModalLabel" aria-current="true">VIEW PROFILE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php echo base_url().'/assets/foto_cucu/'.$u->foto_cicit?>" class="img-fluid rounded-start" alt="Foto Profile"><hr>
    <div><button type="button" class="btn btn-outline-success" id="BtnUpdate" data-toggle="modal" data-target="#ModalEditCicit<?php echo $u->id_cicit;?>">Ubah Profile</button></div><hr>
    <div><button type="button" class="btn btn-outline-danger" id="BtnHapus" data-toggle="modal" data-target="#ModalHapus<?php echo $u->id_cicit;?>">Hapus Profile</button></div><hr>
    <div><button type="button" class="btn btn-outline-primary" id="BtnHapus" data-toggle="modal" data-target="#ModalTambahBaok<?php echo $u->id_cicit;?>">Tambah Anggota Keluarga</button></div>
    <hr>
        </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><b>PROFILE<b></h5>
        <div class="row">
            <div class="col-sm-4">
              <h6 class="mb-0"><b>NAMA LENGKAP</b></h6>
                </div>
                  <div class="col-sm-10 text-secondary">
                    <?= $u->nama_cicit;?>       
                      </div>
                  </div>
                  <hr>      
                  <div class="row">
            <div class="col-sm-5">
              <h6 class="mb-0"><b>NAMA ORANGTUA</b></h6>
                </div>
                  <div class="col-sm-10 text-secondary">
                    <?= $u->nama_cucu;?> /   
                    <?= $u->menantu_cucu;?>    
                      </div>
                  </div>
                  <hr>      
                          <div class="row">
                    <div class="col-sm-4">
                      <h6 class="mb-0"><b>GENDER</b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?= $u->jenis_kelamin_cicit;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-4">
                      <h6 class="mb-0"><b>TANGGAL LAHIR</b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?= $u->tgl_lahir_cicit;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0"><b>NAMA SUAMI/ISTRI</b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?= $u->menantu_cicit;?>       
                             </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-5">
                      <b><h6 class="mb-0">ALAMAT LENGKAP</b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?= $u->alamat_cicit;?>           
                         </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-4">
                      <h6 class="mb-0"><b>NOMOR KONTAK</b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?= $u->NoHP_cicit;?>       
                             </div>
                  </div>
                  <hr>  
                  <div class="row">
                    <div class="col-sm-4">
                      <h6 class="mb-0"><b>JUMLAH ANAK</b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?= $u->total_anak_cicit;?> Orang       
                             </div>
                  </div>
                  
                    <hr>
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Kembali</button>

      </div>
    </div>
  </div>
</div>                          
              
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
<!--Akhir Modal view Cicit !-->

