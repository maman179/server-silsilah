<!-- Edit Data Cucu !-->
<!-- Edit Data !-->
<div class="container-fluid" pt-3>
	<div class="container pt-3">
		<div class="col">
            <div class="card card-primary">
	              <div class="card-header">
    	            <h3 class="card-title">EDIT DATA CICIT</h3>
        		      </div>

		<div class="card-body">	  
			<div class="container pt-2">
				<nav aria-label="breadcrumb">
  					<ol class="breadcrumb">
	  					<li class="breadcrumb-item"><a href="#'); ?>">Dashboard</a></li>	
    					<li class="breadcrumb-item"><a href="#'); ?>">Ubah Data</a></li>
   						<li class="breadcrumb-item active" aria-current="page">Ubah Data Cucu</a></li>
  					</ol>

	<?php foreach($cicit as $u)
	{ ?>
		<?php echo form_open_multipart('dashboard/update_cicit');?>
	
	<div class="container pt-2">
		<input type="hidden" name="id_cicit" value="<?php echo $u->id_cicit ?>">
		<input type="hidden" class="form-control" name="id_cucu" value="<?php echo $u->id_cucu ?>">
	</div>
	<div class="container pt-2">
		<label class="form-label">Nama Lengkap</label>
		<input type="text" class="form-control" name="nama_cicit" value="<?php echo $u->nama_cicit ?>">
	</div>
	<div class="container pt-2">
		<label class="form-label">Jenis Kelamin</label>
        <input type="text" class="form-control"  name="jenis_kelamin_cicit" value="<?php echo $u->jenis_kelamin_cicit ?>">
	</div>	
	<div class="container pt-2">
		<label class="form-label" >Tanggal Lahir</label>
        <input type="date" class="form-control" name="tgl_lahir_cicit" placeholder="Masukan Tanggal Lahir"  value="<?php echo date('Y-m-d', strtotime($u->tgl_lahir_cicit));?>">
	</div>	
	<div class="container pt-2">
		<label class="form-label" for="InputMennatu">Nama Menantu</label>
        <input type="text" class="form-control" name="menantu_cicit" placeholder="Masukan Nama Menantu" value="<?php echo $u->menantu_cicit?>">
	</div>

		<div class="container pt-2">
		<label class="form-label" >Alamat Lengkap</label>
        <input type="text" class="form-control" name="alamat_cicit" placeholder="Masukan Alamat" value="<?php echo $u->alamat_cicit ?>">
	</div>
	<div class="container pt-2">
		<label class="form-label" >Nomor Handphone</label>
        <input type="text" class="form-control" name="NoHP_cicit" placeholder="Masukan No HP" value="<?php echo $u->NoHP_cicit ?>">
	</div>
	<div class="container pt-2">
		<label class="form-label" >FOTO</label>
        <input type="file" class="form-control" name="foto_cicit">
	</div>

	<div class="container pt-2">
		<div class="col-sm-5">
            <img src="<?php echo base_url().'/assets/foto_cicit/'.$u->foto_cicit?>" width="100">
        </div>
	</div>

	<div class="container pt-2">
   		 <button type="submit" class="btn btn-primary">Simpan</button>
	</div>		
		<?php } ?>
