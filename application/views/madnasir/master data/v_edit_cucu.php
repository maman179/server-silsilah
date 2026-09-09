<!-- Edit Data !-->
<div class="container-fluid" pt-3>

	<div class="container pt-3">
	<div class="col">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">EDIT DATA CUCU</h3>
              </div>

<div class="card-body">	


<nav aria-label="breadcrumb"></nav>
  
	<div class="container pt-2">
	<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard/tampil_data_cucu');?>">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ubah Data Cucu</li>
  </ol>

	<?php foreach($cucu as $u)
	{ ?>
	 <?php echo form_open_multipart('dashboard/update_cucu');?>
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
                            <input type="date" class="form-control col-sm-9" id="tgl_lahir" name="tgl_lahir_cucu" value="<?php echo date('Y-m-d', strtotime($u->tgl_lahir_cucu));?>">
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
                        <label for="NoHP" class="col-sm-2 col-form-label">FOTO</label>
                        <div class="col-sm-5">
                        <img src="<?php echo base_url().'/assets/foto_cucu/'.$u->foto_cucu?>" width="100px">
            
                        </div>
                    </div>

                  

	<div class="container pt-2">
    <button type="submit" class="btn btn-primary">Simpan</button>
	</div>		
	</form>	
	<?php } ?>
</body>
</html>