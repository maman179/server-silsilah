	<meta charset="UTF-8">
	<meta name="description" content="Boto Photo Studio HTML Template">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url('assets/template_galery/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/template_galery/css/font-awesome.min.css');?>"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/template_galery/css/slicknav.min.css');?>"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/template_galery/css/fresco.css');?>"/>
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css')?>">

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url('assets/template_galery/css/style.css');?>">

<body>

  <div class="gallery__page">
		<div class="gallery__warp">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">DATA KEGIATAN BANI MADNASIR</h3>
              </div>
              <div class="card-body">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-6">
          <?php foreach ($galery as $u) {?>
					<a class="gallery__item fresco" href="<?php echo base_url('assets/galery/'. $u->galery);?>" data-fresco-group="gallery">
						<img src="<?php echo base_url('assets/galery/'.$u->galery);?>" class="thumbnail" alt="">
					</a>
        <?php } ?>
				</div>
		</div>
	</div>
	
	<!--====== Javascripts & Jquery ======-->
	<script src="<?php echo base_url('assets/template_galery/js/vendor/jquery-3.2.1.min.js');?>"></script>
	<script src="<?php echo base_url('assets/template_galery/js/jquery.slicknav.min.js');?>"></script>
	<script src="<?php echo base_url('assets/template_galery/js/slick.min.js');?>"></script>
	<script src="<?php echo base_url('assets/template_galery/js/fresco.min.js');?>"></script>
	<script src="<?php echo base_url('assets/template_galery/js/main.js');?>"></script>

