<!--Menampilkan Data Orang Tua!-->
 <!-- Begin Page Content -->
 <div class="container-fluid" pt-3>

	<div class="container pt-3">
	<div class="col">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">INPUT FOTO KEGIATAN</h3>
              </div>

<div class="card-body">

	<nav aria-label="breadcrumb"></nav>
  
	<div class="container pt-2">
	<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
	<li class="breadcrumb-item active" aria-current="page">Data Anak</a></li>
  </ol>
  
  <?php if ($this->session->flashdata('message')) :
 echo $this->session->flashdata('message');
                endif; ?>
            </div>

<?php echo form_open_multipart('dashboard/aksi_tambah_foto');?>
	<div class="container pt-2">
		
	</div>
		
	<div class="container pt-2">
		<label class="form-label" for="galery">Upload Foto</label>
        <input type="file" class="form-control" id="galery" name="galery" size="20">
	</div>

	<div class="container pt-2">
	<button type="submit" class="btn btn-primary" data-somestringvalue-text="Loading Finished" autocomplete="off">Simpan</button>

		</table>

	</form>
		</div>
