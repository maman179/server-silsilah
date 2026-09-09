
<body>
 <div class="container-fluid pt-5">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="col-md-12">
    	    <div class="card card-primary">
                <div class="card-header">
            	    <h3 class="card-title">GANTI PASSWORD AKUN : [<label><?= $this->session->userdata('reset_email');?><label>]</h3>
					
    		    </div>
			<div class="card-body">
			<nav aria-label="breadcrumb"></nav>
		
			<?php echo form_open_multipart('Login/aksi_ubah_password');?>	
            <div class="container pt-2">
                <label class="form-label" for="caption">Masukan Password Baru</label>
                <input type="password" class="form-control col-md-12 " id="password1" name="password1" placeholder="Masukan Password Baru" >
			</div>
            <div class="container pt-2">
                <label class="form-label" for="caption">Confirm Password</label>
                <input type="password" class="form-control col-md-12" id="password2" name="password2" placeholder="Ulangi Password Baru">
			</div>
 
			<div class="container pt-3">
				<button type="submit" class="btn btn-outline-primary">UBAH PASSWORD</button>
                <button type="button" class="btn btn-outline-danger"><a href="<?=base_url('login')?>">BATAL</a></button>
			</div>        
		</div>
	</div>
</div>
