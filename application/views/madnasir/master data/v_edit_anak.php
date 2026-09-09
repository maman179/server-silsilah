<!-- Edit Data !-->
<div class="container-fluid" pt-3>

	<div class="container pt-3">
	<div class="col">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">EDIT DATA ORANGTUA</h3>
              </div>

<div class="card-body">	

<nav aria-label="breadcrumb"></nav>
  
	<div class="container pt-2">
	<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard/tampil_data_ortu'); ?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ubah  Data</li>
	<li class="breadcrumb-item active" aria-current="page">Ubah Data Orang tua</a></li>
  </ol>

	<?php foreach($anak as $u)
	{ ?>

	<?php echo form_open_multipart('dashboard/update');?>
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
                            <input type="date" class="form-control col-sm-9" id="tgl_lahir" name="tgl_lahir" value="<?php echo date('Y-m-d', strtotime($u->tgl_lahir));?>">
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
                        </div>

                        <div class="form-group row">
						<div class="col-sm-5">
                        <img src="<?php echo base_url().'/assets/foto_anak/'.$u->foto_anak?>" width="100">
                    </div></div>
                              
      <div class="form-group row">
	  <div class="col-sm-5">
	  <button type="submit" class="btn btn-success">Simpan Data</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
     </div>
    </div>
  </div>
</div>	
	<?php } ?>
</body>
</html>