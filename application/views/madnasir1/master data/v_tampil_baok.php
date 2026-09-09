<!-- Begin Page Content -->
   
<div class="col">
    <div class="card card-primary">
       <div class="card-header">
            <h3 class="card-title">DATA BAOK</h3>
        </div>

        <div class="row pt-3">
	    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" > <a href="<?=site_url('dashboard1/tampil_data_cucu')?>"> Master Data</li></a>
            <li class="breadcrumb-item active" aria-current="page">Data Keluarga</li>
            <li class="breadcrumb-item active" aria-current="page">Data Baok</li>
        </ol>
    </div>
            <div class="row pt-2">
                <table class="table table-striped table-bordered table-hover" id="baok">
                <thead>
		            <tr class="table-success">
                        <th class="text-center" colspan="2">Action</th>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Lengkap</th>			
                        <th class="text-center">Nama Orang Tua</th>
                        <th class="text-center">Total Anak</th>
                        
                    </tr>
                </thead>	
                <tbody>
                    <?php 
                    $no = 1;
                        foreach($baok as $u)
                    { 
                    ?>
                    <tr>
                        <td class="text-center"><a href="#" class="btn btn-outline-success btn-sm"><i class="fa fa-edit"></i>Tambah Data</button></td> 
                        <td class="text-center"><a href="<?= site_url('dashboard1/view_profile_baok/' . $u->id_baok) ?>" class="btn btn-outline-info btn-sm"><i class="fa fa-eye"></i> Lihat Detail [<?php echo $u->total_anak_baok ?>]</a></td>
                        <td class="text-center"><?php echo $no++; ?></td>
                        <td><?php echo $u->nama_baok; ?></td>
                        <td><?php echo $u->nama_cicit; ?></td>
                        <td class="text-center"><?php echo $u->total_anak_baok  ; ?></td>
            
		            </tr>
   
                    <?php
                    } 
                    ?> 

                </tbody>   
            </div>
        </div>
    </div>    