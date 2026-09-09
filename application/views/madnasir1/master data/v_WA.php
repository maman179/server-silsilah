 

<body>
 <div class="container-fluid pt-5">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="col-md-12">
    	    <div class="card card-primary">
                <div class="card-header">
                <?php 
                  $no=1;
		              	foreach($bani as $u)
                    {?>
            	    <h3 class="card-title">WHATSAPP CENTER BANI <?= $u->nama_ortu ?></h3>
					<?php } ?>

    		    </div>
			<div class="card-body">
			<nav aria-label="breadcrumb"></nav>
		
			<?php echo form_open_multipart('Dashboard1/outbox');?>	
            <div class="container pt-2">
                <label class="form-label" for="caption">Penerima</label>
                <input type="text" class="form-control col-md-12 " id="target" name="target" placeholder="Nomor Tujuan" >
			</div>
            <div class="container pt-2">
                <label class="form-label" for="caption">Isi Pesan</label>
                <textarea class="form-control col-md-12" id="message" name="message" placeholder="message"></textarea>
			</div>
 
			<div class="container pt-3">
				<button type="submit" class="btn btn-outline-primary">KIRIM PESAN</button>
			</div>        
		</div>
	</div>
</div>
</div>


<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">KOTAK MASUK</h3>
              </div>
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
                     <th class="text-center">Pengirim</th> 
                    <th class="text-center">Penerima</th>
                    <th class="text-center">Isi Pesan</th>
                    <th Class="text-center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                $no = 1;
                foreach($inbox as $i)
              { ?>
                <tr> 
                  <td class="text-center"><?php echo $no++; ?></td>
                  <td ><?php echo $i->device; ?></td>
                  <td ><?php echo $i->sender; ?></td>
                  <td class="text"><?php echo $i->message; ?></td>
                  <td class="text-center"><a href="<?= site_url('dashboard1/hapus_sms/'.$i->id) ?>" class="btn btn-outline-danger btn-sm tombol-hapus"><i class="fa fa-trash"></i>  Hapus Pesan</a></td>
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
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">KOTAK KELUAR</h3>
              </div>
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
                     <th class="text-center">Penerima</th> 
                    <th class="text-center">Isi Pesan</th>
                    <th class="text-center">Status</th>
                    <th Class="text-center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                $no = 1;
                foreach($outbox as $u)
              { ?>
                <tr> 
                  <td class="text-center"><?php echo $no++; ?></td>
                  <td ><?php echo $u->target; ?></td>
                  <td ><?php echo $u->message; ?></td>
                  <td class="text-center"><?php echo $u->status; ?></td>
                  <td class="text-center"><a href="<?= site_url('dashboard1/hapus_sms/'.$u->id) ?>" class="btn btn-outline-danger btn-sm tombol-hapus"><i class="fa fa-trash"></i>  Hapus Pesan</a></td>
                  <td></td>
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
                 





