
<body>
 <div class="container-fluid pt-5">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="col-md-12">
    	    <div class="card card-primary">
                <div class="card-header">
            	    <h3 class="card-title">GANTI PASSWORD</h3>
    		    </div>
			<div class="card-body">
			<nav aria-label="breadcrumb"></nav>
		
				<?php foreach($ortu as $u)
				{ ?>
			<?php echo form_open_multipart('dashboard1/aksi_ubah_password');?>	
			<div class="container pt-2">
				<input type="hidden" class="form-control" id="id_ortu" name="id_ortu" value="<?php echo $u->id_ortu ?>">
                <input type="hidden" class="form-control" id="username" name="username" value="<?php echo $u->username ?>">
				<label class="form-label " for="caption">Password Lama</label>
                <input type="password" class="form-control col-md-12 " id="password" name="password" placeholder="Masukan Password Lama">
                    <small class="text-danger">
                           <?php echo form_error('password') ?>
                    </small>
			</div>
            <div class="container pt-2">
                <label class="form-label" for="caption">Password Baru</label>
                <input type="password" class="form-control col-md-12 " id="password1" name="password1" placeholder="Masukan Password Baru" >
			</div>
            <div class="container pt-2">
                <label class="form-label" for="caption">Confirm Password</label>
                <input type="password" class="form-control col-md-12" id="password2" name="password2" placeholder="Ulangi Password Baru">
			</div>
 
			<div class="container pt-3">
				<button type="submit" class="btn btn-outline-primary">UBAH PASSWORD</button>
                <button type="button" class="btn btn-outline-danger"><a href="<?=base_url('dashboard1/profile')?>">BATAL</a></button>
			</div>        
		</div><?php }?>
	</div>
</div>
