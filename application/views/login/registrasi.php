<body>

<div class="container pt-3">
	<div class="col">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">REGISTRASI</h3>
              </div>
         <div class="card-body">
            <div class="row-md-12">
                <div class="col-sm-12">  
                <?php echo form_open_multipart('login/aksi_registrasi');?>
                <div class="form-group row">
                    <label for="nama" class="col-md-6">Nama Keluarga - BANI</label>
                    <label for="jeniskelamin" class="col-md-6 ">Jenis Kelamin</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama_ortu" name="nama_ortu" value=" <?= set_value('nama_ortu'); ?>" placeholder="Masukan Nama" >
                    <small class="text-danger"><?php echo form_error('nama_ortu') ?></small></div>

                    <div class="col-md-6"><select class="form-control" id="JenisKelamin" name="jenis_kelamin_ortu">
                        <option value="LAKI-LAKI" selected disabled>Pilih</option>
                        <option value="LAKI-LAKI" <?php if (set_value('jenis_kelamin_ortu') == "LAKI-LAKI") : echo "selected";
                        endif; ?>>LAKI-LAKI</option>
                        <option value="PEREMPUAN" <?php if (set_value('jenis_kelamin_ortu') == "PEREMPUAN") : echo "selected";
                        endif; ?>>PEREMPUAN</option>                     
                    </select>
                        <small class="text-danger"><?php echo form_error('jenis_kelamin_ortu') ?></small>
                  </div>
                </div>
                    <div class="form-group row">
                        <label for="nama" class="col-md-6">Tanggal Lahir</label>
                        <label for="nama" class="col-md-6">Nama Pasangan</label>
                        <div class="col-sm-6">
                            <input type="date" class="form-control" id="tgl_lahir_ortu" name="tgl_lahir_ortu" value=" <?= set_value('tgl_lahir_ortu'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('tgl_lahir_ortu') ?>
                            </small>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="pasangan" name="pasangan" value=" <?= set_value('pasangan'); ?>" placeholder="Nama Pasangan">
                            <small class="text-danger">
                                <?php echo form_error('pasangan') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Alamat" class="col-md-6">Alamat Lengkap</label>
                        <label for="NoHP" class="col-md-6">Nomor Handphone</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="alamat_ortu" name="alamat_ortu" rows="3"><?= set_value('alamat_ortu'); ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('alamat_ortu') ?>
                            </small>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="NoHP_ortu" name="NoHP_ortu" value="<?= set_value('NoHP_ortu'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('NoHP_ortu') ?>
                            </small>
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <label for="NoHP" class="col-md-6">Masukan Email</label>
                        <label for="foto" class="col-md-6">Upload Foto</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="username" name="username"  value="<?= set_value('username'); ?>" placeholder="Email" >
                            <small class="text-danger">
                                <?php echo form_error('username') ?>
                            </small>
                        </div>
                        <div class="col-md-6">
                            <input type="file" class="form-control" id="foto_ortu" name="foto_ortu" value="<?= set_value('foto_ortu');?>">            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-6">Password</label>
                        <label for="password" class="col-md-6">Ulangi Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" id="password1" name="password" placeholder="Password">
                            <small class="text-danger">
                                <?php echo form_error('password') ?>
                            </small>
                        </div>
                        <div class="col-md-6">
                            <input type="password" class="form-control" id="password2" name="password2" placeholder="Ulangi Password">
                            
                            <small class="text-danger">
                                <?php echo form_error('password2') ?>
                            </small>
                        </div>
                    </div>
             
      <div class="footer">
      <a href="<?= site_url('login') ?>" class="btn btn-outline-danger"> Batal </a>
        <button type="submit" class="btn btn-outline-success">DAFTAR</button>
      </div>
    </div>
  </div>
</div>
