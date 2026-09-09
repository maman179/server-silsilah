<body>
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <?php 
                $no = 1;
                foreach($tampil_ortu as $u)
              { ?>
            <h2>Kontak Whatsapp Keluarga <?=$u->nama_ortu ?></h2>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('dashboard1/tampil_data_orangtua')?>">Home</a></li>
              <li class="breadcrumb-item active">Input Kontak</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Input Kontak Whatsapp</h3>
              </div><?php } ?>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="anak" class="table table-bordered table-hover">
                  <thead>
                  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                        <?php if ($this->session->flashdata('flash')) : ?>
                        <?php endif; ?>
                        <div class="flash-data-gagaladd" data-flashdata="<?= $this->session->flashdata('flash_gagal'); ?>"></div>
                        <?php if ($this->session->flashdata('flash_gagal')) : ?>
                          <?php endif; ?>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Lengkap</th>			 
                    <th class="text-center">No Handphone</th>			 
                    <th class="text-center">Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                $no = 1;
                foreach($tampil_anak as $u)
              { ?>
                <tr>                    
                    <td class="text-center"><?php echo $no++; ?></td>
                    <td ><?php echo $u->nama; ?></td>
                    <td ><?php echo $u->NoHP; ?></td>
                    <td class="text-center"><a href="<?= site_url('dashboard1/tambah_kontak_anak/' . $u->id_anak) ?>" class="btn btn-outline-primary btn-sm">
                    <i class="far fa-comment-dots"></i> Chat Whatsapp</a></td>
                </tr>
                <?php
                } 
                ?> 
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div> 
 <!-- Modal -->
<?php 
        $no=1;
			foreach($tampil_anak as $u)
        { ?>
<div class="modal fade" id="ModalTambahKontak<?php echo $u->id_anak;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INPUT DATA CUCU</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
	<?php echo form_open_multipart('dashboard1/aksi_tambah_cucu');?>

                <div class="form-group row">
				<input type="hidden" class="form-control" id="inputidcucu" name="id_cucu">
				<input type="hidden" class="form-control" id="inputidanak" name="id_anak" value="<?php echo $u->id_anak ?>" readonly>
				<label for="nama" class="col-md-6">Nama Lengkap</label>
                <label for="jeniskelamin" class="col-md-6 ">Jenis Kelamin</label>
                   <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputNama" name="nama_cucu" placeholder="Masukan Nama">
                    <small class="text-danger"><?php echo form_error('nama_cucu') ?></small></div>
                    
					<div class="col-md-6"><select class="form-control" id="JenisKelamin" name="jenis_kelamin_cucu">
                        <option value="LAKI-LAKI" selected disabled>Pilih</option>
                        <option value="LAKI-LAKI" <?php if (set_value('jenis_kelamin_cucu') == "LAKI-LAKI") : echo "selected";
                        endif; ?>>LAKI-LAKI</option>
                        <option value="PEREMPUAN" <?php if (set_value('jenis_kelamin_cucu') == "PEREMPUAN") : echo "selected";
                        endif; ?>>PEREMPUAN</option>                     
                    </select>
                        <small class="text-danger"><?php echo form_error('jenis_kelamin_cucu') ?></small>
                  </div>
                </div>
                    <div class="form-group row">
                        <label for="nama" class="col-md-6">Tanggal Lahir</label>
                        <label for="nama" class="col-md-6">Nama Pasangan</label>
                        <div class="col-sm-6">
                            <input type="date" class="form-control" id="inputTgl_lahir" name="tgl_lahir_cucu" placeholder="Masukan Tanggal Lahir">
                            <small class="text-danger">
                                <?php echo form_error('tgl_lahir_cucu') ?>
                            </small>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputMenantu" name="menantu_cucu" placeholder="Masukan Nama Menantu">
                            <small class="text-danger">
                                <?php echo form_error('menantu_cucu') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Alamat" class="col-md-6">Alamat Lengkap</label>
                        <label for="NoHP" class="col-md-6">Nomor Handphone</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="inputAlamat" name="alamat_cucu" placeholder="Masukan Alamat Lengkap">
                            <small class="text-danger">
                                <?php echo form_error('alamat_cucu') ?>
                            </small>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control"id="inputNoHP" name="NoHP_cucu" placeholder="Masukan Nomor HP">
                            <small class="text-danger">
                                <?php echo form_error('NoHP_cucu') ?>
                            </small>
                        </div>
                    </div>             
      <div class="footer">
      <button type="button" class="btn btn-outline-danger" data-dismiss="modal"> Batal</button>
        <button type="submit" class="btn btn-outline-success">Simpan</button>
      </div>
    </div>
  </div>
</div><?php } ?>
	</div>      </div>
     
    </div>
  </div>
</div>
</form>        