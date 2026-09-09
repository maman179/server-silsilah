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
                foreach($ortu as $u)
              { ?>
            <h1>Data Keluarga <?=$u->nama_ortu ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('dashboard1/tampil_data_orangtua') ?>">Home</a></li>
              <li class="breadcrumb-item active">Input Data Cucu</li>
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
                <h3 class="card-title">Input data otomatis masuk data cucu bani <?=$u->nama_ortu ?></h3>
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
                  <th colspan="3" class="text-center">Action</th>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Lengkap</th>			
                    <th class="text-center">Jumlah Anak</th> 
                    <th class="text-center">Keterangan</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                $no = 1;
                foreach($anak as $u)
              { ?>
                <tr>
                  <td class="text-center"><a href="<?= site_url('dashboard1/tambah_cucu/' . $u->id_anak) ?>" class="btn btn-outline-success btn-sm"><i class="fas fa-plus-circle"></i> Add Data</a></td>
                  <td class="text-center"><a href="<?= site_url('dashboard1/view_profile_anak/'.$u->id_anak) ?>" class="btn btn-outline-info btn-sm"><i class="fa fa-eye"></i> View[<?php echo $u->total_anak;?>]</a></td>
                  <td class="text-center"><a href="<?= site_url('dashboard1/hapus/'.$u->id_anak) ?>" class="btn btn-outline-danger btn-sm tombol-hapus"><i class="fa fa-trash"></i>  Hapus </a></td>
                  
                  <td class="text-center"><?php echo $no++; ?></td>
                  <td ><?php echo $u->nama; ?></td>
                  <td class="text-center"><?php echo $u->total_anak;?></td>
									<td>
									<td>	
									
                </tr>
                <?php
                } 
                ?>
                 </tbody>
                 <tfoot>
                 </table>
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
                  




