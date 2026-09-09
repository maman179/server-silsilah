
<body>
 <div class="container-fluid pt-5">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="col-md-12">
    	    <div class="card card-primary">
                <div class="card-header">
            	    <h3 class="card-title">LUPA PASSWORD?</h3>
    		    </div>
			<div class="card-body">
			<nav aria-label="breadcrumb"></nav>
		
			<?php echo form_open_multipart('login/konfirmEmail');?>	
			<div class="flash-data-gagallog" data-flashdata="<?= $this->session->flashdata('flash_gagal'); ?>"></div>
		              <?php if ($this->session->flashdata('flash_gagal')) : ?>
			            <?php endif; ?> 
			<div class="container pt-2"> 
				<label class="form-label " for="caption">Masukan Email</label>
                <input type="text" class="form-control col-md-12 " id="username" name="username" placeholder="Masukan Email">
                    <small class="text-danger">
                           <?php echo form_error('username') ?>
                    </small>
			</div>
			<div class="container pt-3">
				<button type="submit" class="btn btn-outline-primary">KONFIRMASI</button>
                <button type="button" class="btn btn-outline-danger"><a href="<?=base_url('login')?>">BATAL</a></button>
			</div>        
		</div>
	</div>
</div>
