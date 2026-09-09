<!--Menampilkan Data Orang Tua!-->
 <!-- Begin Page Content -->
 <div class="container-fluid" pt-3>

	<div class="container pt-3">
	<div class="col">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">INPUT DATA CICIT</h3>
              </div>

<div class="card-body">

	<nav aria-label="breadcrumb"></nav>
  
	<div class="container pt-2">
	<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url('cucu/index'); ?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
	<li class="breadcrumb-item active" aria-current="page">Data Anak</a></li>
  </ol>
  <?php foreach($cicit as $u)
{ ?>

<?php echo form_open_multipart('dashboard/aksi_tambah_cicit');?>
	<div class="container pt-2">
		
	</div>

	<div class="container pt-2">
	<input type="hidden" class="form-control" id="inputidCicit" name="id_cicit">
	<input type="hidden" class="form-control" id="inputidcucu" name="id_cucu" value="<?php echo $u->id_cucu ?>" readonly>
		<label class="form-label" for="inputNama">Nama Lengkap</label>
        <input type="text" class="form-control" id="inputNama" name="nama_cicit" placeholder="Masukan Nama">
	</div>
	<div class="container pt-2">
         <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
         <select class="form-control" id="JenisKelamin" name="jenis_kelamin_cicit">
    	     <option value="Laki-Laki" selected disabled>Pilih</option>
        	 <option value="Laki-Laki" <?php if (set_value('jenis_kelamin_cicit') == "Laki-Laki") : echo "selected";
          	endif; ?>>Laki-Laki</option>
         	<option value="Perempuan" <?php if (set_value('jenis_kelamin_cucu') == "Perempuan") : echo "selected";
          	endif; ?>>Perempuan</option>                     
        </select>
    </div>
	
		<div class="container pt-2">
		<label class="form-label" for="inputTgl_lahir">Tanggal Lahir</label>
        <input type="date" class="form-control" id="inputTgl_lahir" name="tgl_lahir_cicit" placeholder="Masukan Tanggal Lahir">
	</div>	
	<div class="container pt-2">
		<label class="form-label" for="inputMenantu">Nama Menantu</label>
        <input type="text" class="form-control" id="inputMenantu" name="menantu_cicit" placeholder="Masukan Nama Menantu">
	</div>
	<div class="container pt-2">
		<label class="form-label" for="inputAlamat">Alamat Lengkap</label>
        <input type="text" class="form-control" id="inputAlamat" name="alamat_cicit" placeholder="Masukan Alamat Lengkap">
	</div>

	<div class="container pt-2">
		<label class="form-label" for="inputNoHP">Nomor Handphone</label>
        <input type="text" class="form-control" id="inputNoHP" name="NoHP_cicit" placeholder="Masukan Nomor HP">
	</div>

	<div class="container pt-2">
		<label class="form-label" for="foto_cicit">Upload Foto</label>
        <input type="file" class="form-control" id="foto_cicit" name="foto_cicit" size="20">
	</div>

	<div class="container pt-2">
	<button type="submit" class="btn btn-primary" data-somestringvalue-text="Loading Finished" autocomplete="off">Simpan</button>
				
		</table>
<?php }?>
	</form>
		</div>
	<script>
$(document).ready(function(){
  $(".btn").click(function(){
    $(this).button('loading').delay(1000).queue(function(){
      $(this).button('somestringvalue');
      $(this).dequeue();
    });        
  });  
});
</script>
