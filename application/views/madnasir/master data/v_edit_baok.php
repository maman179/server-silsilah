<!-- Edit Data !-->
<div class="container-fluid" pt-3>

	<div class="container pt-3">
	<div class="col">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">EDIT DATA BAOK</h3>
              </div>

<div class="card-body">	

<nav aria-label="breadcrumb"></nav>
  
	<div class="container pt-2">
	<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="#'); ?>">Dashboard</a></li>	
    <li class="breadcrumb-item"><a href="#'); ?>">Ubah Data</a></li>
   	<li class="breadcrumb-item active" aria-current="page">Ubah Data Cucu</a></li>
  </ol>

	<?php foreach($baok as $u)
	{ ?>
	
	<?php echo form_open_multipart('dashboard/update_baok');?>	
	<div class="container pt-2">
		<input type="hidden" name="id_baok" value="<?php echo $u->id_baok ?>">
		<input type="hidden" class="form-control" name="id_cicit" value="<?php echo $u->id_cicit ?>">
	</div>
	<div class="container pt-2">
		<label class="form-label">Nama Lengkap</label>
		<input type="text" class="form-control" name="nama_baok" value="<?php echo $u->nama_baok ?>">
	</div>
	<div class="container pt-2">
		<label class="form-label">Jenis Kelamin</label>
        <input type="text" class="form-control"  name="jenis_kelamin_baok" value="<?php echo $u->jenis_kelamin_baok ?>">
	</div>	
	<div class="container pt-2">
		<label class="form-label" >Tanggal Lahir</label>
        <input type="date" class="form-control" name="tgl_lahir_baok" placeholder="Masukan Tanggal Lahir"  value="<?php echo date('Y-m-d', strtotime($u->tgl_lahir_baok));?>">
	</div>	
	<div class="container pt-2">
		<label class="form-label" for="InputMennatu">Nama Menantu</label>
        <input type="text" class="form-control" name="menantu_baok" placeholder="Masukan Nama Menantu" value="<?php echo $u->menantu_baok?>">
	</div>

		<div class="container pt-2">
		<label class="form-label" >Alamat Lengkap</label>
        <input type="text" class="form-control" name="alamat_baok" placeholder="Masukan Alamat" value="<?php echo $u->alamat_baok ?>">
	</div>
	
	<div class="container pt-2">
		<label class="form-label" >Nomor Handphone</label>
        <input type="text" class="form-control" name="NoHP_baok" placeholder="Masukan No HP" value="<?php echo $u->NoHP_baok ?>">
	</div>

	<div class="container pt-2">
		<label class="form-label" >FOTO</label>
        <input type="file" class="form-control" name="foto_baok">
	</div>

	<div class="container pt-2">
		<div class="col-sm-5">
            <img src="<?php echo base_url().'/assets/foto_baok/'.$u->foto_baok?>" width="100">
        </div>
	</div>



	<div class="container pt-2">
    <button type="submit" class="btn btn-primary">Simpan</button>
	</div>		
	</form>	
	<?php } ?>
</body>
</html>