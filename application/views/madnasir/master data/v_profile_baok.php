
<nav aria-label="breadcrumb"></nav>
	<div class="container pt-2">
	<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url('baok/index'); ?>">Home</a></li>
    <li class="breadcrumb-item">Profile</li>
	<li class="breadcrumb-item active" aria-current="page">Profile Baok Madnasir</a></li>
  </ol>

  <?php 
   $no = 1;
	foreach($profile as $u)
  {?>
  <div class="row gutters-sm">
     <div class="col-md-4 mb-3">
                 <div class="card">
                <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                  <input type="hidden" name="id_baok" value=<?= $u->id_baok;?>> 
                  <img width="150px" class="img-thumbnail" src="<?php echo base_url().'/assets/foto_baok/'.$u->foto_baok;?>" onclick="myFunction(this);">
                  <script>
function myFunction(imgs) 
{
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>

                    <div class="mt-4">
                      <h4><b><?= $u->nama_baok;?></b></h4>                     
                      <h6><?= $u->alamat_baok;?></h6>
                      <button type="button" class="btn btn-outline-success"><a href="<?= site_url('dashboard/edit_baok/'. $u->id_baok) ?>"></i>Update</button></a>    
                      <button type="button" class="btn btn-outline-danger" data-toggle="modal" id="BtnHapus" name="BtnUpdate" data-target="#ModalHapus<?php echo $u->id_baok;?>">Hapus</button></td>              
                      <button type="button" class="btn btn-outline-secondary"><a href="<?php echo base_url('dashboard/tampil_data_cicit'); ?>">Kembali</a></button>
                      </div>
                  </div>
                </div>
              </div>  
            </div>

            <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">VIEW PROFILE</h3>
              </div>
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">  
                    <h6 class="mb-0"><b>NAMA LENGKAP</b></h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                    <?= $u->nama_baok;?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-5">  
                    <h6 class="mb-0"><b>NAMA ORANGTUA</b></h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                    <?= $u->nama_cicit;?> / <?= $u->menantu_cicit;?> 
                    </div>
                  </div>
                  <hr>
                
                  <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0"><b>GENDER</b></h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                    <?= $u->jenis_kelamin_baok;?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0"><b>TANGGAL LAHIR</b></h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                    <?= $u->tgl_lahir_baok;?>
                    </div>
                  </div>
                  <hr>
                  
                  <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0"><b>NAMA SUAMI/ISTRI</b></h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                    <?= $u->menantu_baok;?>
                    </div>
                  </div>
                  <hr>
                  
                  <div class="row">
                    <div class="col-sm-5">
                      <b><h6 class="mb-0">ALAMAT LENGKAP</b></h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                    <?= $u->alamat_baok;?>           
                 </div>
                  </div>
                  <hr>
          
                  <div class="row">
                    <div class="col-sm-5">
                      <b><h6 class="mb-0">NO HANDPHONE</b></h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                    <?= $u->NoHP_baok;?>           
                 </div>
                  </div>
                  <hr>
                
                  <div class="row">
                    <div class="col-sm-5">
                      <b><h6 class="mb-0">JUMLAH ANAK </b></h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                    <a href="<?= site_url('baok/detil_cicit/' . $u->id_baok) ?>"><?= $u->total_anak_baok;?> ORANG</a>       
                 </div>
                  </div>
                  <hr>
        
                  </div>
                </div>                
                </div>
              </div>      
                <div class="col-sm-6 mb-2">
                  <div class="card-hidden"><span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span><img id="expandedImg" style="width: 90%"><div id="imgtext">
                </div>
              </div>
            </div>
         </div>

<?php 
}?>

<!-- Modal Edit data
<?php 
        $no = 0;
			foreach($profile as $u)
            
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
                        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="id_anak" name="id_anak" value="<?= $u->id_anak?>">

                            <input type="text" class="form-control col-sm-9" id="nama" name="nama" value="<?= $u->nama?>">
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
                            <input type="text" class="form-control col-sm-9" id="tgl_lahir" name="tgl_lahir" value=" <?= $u->tgl_lahir?>">
                </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Menantu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control col-sm-9" id="menantu" name="menantu" value=" <?= $u->menantu?>">
                          
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                        <div class="col-sm-10">
                            <textarea class="form-control col-sm-9" id="alamat" name="alamat" rows="3"><?= $u->alamat?></textarea>
                                                  </div>
                    </div>
                                   
                    <div class="form-group row">
                        <label for="NoHP" class="col-sm-2 col-form-label">Nomor HP</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control col-sm-9" id="NoHP" name="NoHP" value="<?= $u->NoHP?>">
                          
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
                        <div>
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
}?>-->


<!-- Akhir Modal Edit Ortu !-->

<!-- Modal Hapus Data-->
<?php 
        $no = 0;
			foreach($profile as $u)
            
            {?>

<div class="modal fade" id="ModalHapus<?php echo $u->id_baok;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
  <div class="modal-header">
  <h5 class="list-group-item active" id="exampleModalLabel" aria-current="true">Konfirmasi Hapus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
       </button>
    </div>
        
      <div class="modal-body">
      <span><h4>Anda ingin menghapus data dengan </span></h4>
                <h4><span>Id : <?= $u->id_baok?> - Nama : <?=$u->nama_baok?></span>?</h4>
      </div>
     
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <a href="<?= site_url('dashboard/hapus_baok/' . $u->id_baok) ?>" class="btn btn-danger" id="btdelete">Lanjutkan</a>
      </div>

    </div>
   </div>
</div>
<?php 
}
?>
<? echo form_close();?>

<!-- akhir Modal Hapus-->
