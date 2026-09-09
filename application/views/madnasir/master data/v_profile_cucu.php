
	<nav aria-label="breadcrumb"></nav>
	<div class="container pt-2">
	<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard/tampil_data_cucu'); ?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Profile Cucu</a></li>
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
                  <input type="hidden" name="id_cucu" value=<?= $u->id_cucu;?>> 
                  <img width="150px" class="img-thumbnail" src="<?php echo base_url().'/assets/foto_cucu/'.$u->foto_cucu;?>" onclick="myFunction(this);">
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

                    <div class="mt-3">
                      <h5><b><?= $u->nama_cucu;?></b></h5>                     
                      <h6><?= $u->alamat_cucu;?></h6>
                      <!--<button type="button" class="btn btn-outline-success" id="BtnUpdate" name="BtnUpdate" data-toggle="modal" data-target="#ModalEdit<?php echo $u->id_cucu;?>"></i>UBAH</button>!-->
                      <button type="button" class="btn btn-outline-success"><a href="<?= site_url('dashboard/edit_cucu/' . $u->id_cucu)?>">UBAH</a></button>  
                      <button type="button" class="btn btn-outline-danger" data-toggle="modal" id="BtnHapus" name="BtnUpdate" data-target="#ModalHapus<?php echo $u->id_cucu;?>">Hapus</button></td>              
                      <button type="button" class="btn btn-outline-secondary"><a href="<?php echo base_url('dashboard/tampil_data_cucu'); ?>">Kembali</a></button>
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
                    <?= $u->nama_cucu;?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-5">  
                    <h6 class="mb-0"><b>NAMA ORANGTUA</b></h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                    <?= $u->nama;?> / <?= $u->menantu;?>
                    </div>
                  </div>
                  <hr>
                
                  <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0"><b>GENDER</b></h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                    <?= $u->jenis_kelamin_cucu;?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0"><b>TANGGAL LAHIR</b></h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                    <?= $u->tgl_lahir_cucu;?>
                    </div>
                  </div>
                  <hr>
                  
                  <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0"><b>NAMA SUAMI/ISTRI</b></h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                    <?= $u->menantu_cucu;?>
                    </div>
                  </div>
                  <hr>
                  
                  <div class="row">
                    <div class="col-sm-5">
                      <b><h6 class="mb-0">ALAMAT LENGKAP</b></h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                    <?= $u->alamat_cucu;?>           
                 </div>
                  </div>
                  <hr>
          
                  <div class="row">
                    <div class="col-sm-5">
                      <b><h6 class="mb-0">NO HANDPHONE</b></h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                    <img src="<?php echo base_url('assets/img/whatsapp.png') ?>" width=20px></button></a>
                    <a href="<?php echo ('https://api.whatsapp.com/send?phone='.$u->NoHP_cucu)?>" target="_blank"><?= $u->NoHP_cucu;?></a>          
                 </div>
                  </div>
                  <hr>
                
                  <div class="row">
                    <div class="col-sm-5">
                      <b><h6 class="mb-0">JUMLAH ANAK </b></h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                    <a href="<?= site_url('dashboard/tampil_detil_cicit/' . $u->id_cucu) ?>"><?= $u->total_anak_cucu;?> ORANG</a>         
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
        $no = 1;
			foreach($profile as $u)
            
            {?>

<div class="modal fade" id="ModalEdit<?php echo $u->id_cucu; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="list-group-item active" id="exampleModalLabel" aria-current="true">FORM EDIT DATA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <?php echo form_open_multipart('cucu/update_cucu');?>
                <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="id_cucu" name="id_cucu" value="<?= $u->id_cucu?>">

                            <input type="text" class="form-control" id="nama" name="nama_cucu" value="<?= $u->nama_cucu?>">
                                                    </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="jenis_kelamin1" name="jenis_kelamin_cucu" value="LAKI-LAKI"
                                    <?php 
                                    if ($u->jenis_kelamin_cucu == "LAKI-LAKI") : echo "checked"; endif; ?>>
                                    <label class="form-check-label" for="jenis_kelamin1">
                                        Laki-laki
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="jenis_kelamin2" name="jenis_kelamin_cucu" value="PEREMPUAN" 
                                <?php if ($u->jenis_kelamin_cucu == "PEREMPUAN") : echo "checked"; endif; ?>>
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
                            <input type="text" id="tgl_lahir" value=" <?= $u->tgl_lahir_cucu?>" name="tgl_lahir_cucu">

                                             </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Menantu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="menantu" name="menantu_cucu" value=" <?= $u->menantu_cucu?>">
                          
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="alamat" name="alamat_cucu" rows="3"><?= $u->alamat_cucu?></textarea>
                                                  </div>
                    </div>
                                   
                    <div class="form-group row">
                        <label for="NoHP" class="col-sm-2 col-form-label">Nomor Handphone</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="NoHP" name="NoHP_cucu" value="<?= $u->NoHP_cucu?>">            
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
                    <div class="form-group row">
                       <div class="col-sm-5">
                        <img src="<?php echo base_url().'/assets/foto_cucu/'.$u->foto_cucu?>" width="100px"></div>
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
?>-->
<!-- Akhir Modal Edit cucu !-->


<!-- Modal dialog hapus data-->
<?php 
        $no = 0;
			foreach($profile as $u)
            
            {?>
		
<div class="modal fade" id="ModalHapus<?php echo $u->id_cucu;?>" tabindex="-1" aria-labelledby="myModalHapusLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalDeleteLabel">Konfirmasi</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                            <span><h2>Anda ingin menghapus data dengan </span></h2>
                <h2><span>Id : <?= $u->id_cucu?> - Nama : <?=$u->nama_cucu?></span>?</h2>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <a href="<?= site_url('dashboard/hapus_cucu/' . $u->id_cucu) ?>" class="btn btn-danger" id="btdelete">Lanjutkan</a>
            </div>        
        </div>
    </div>
</div>

  <?php } ?>                
