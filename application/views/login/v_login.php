<!-- FORM LOGIN BIASA)-->
<html>
<head>
	
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.bootstrap5.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
           <h4 class="card-title text-center mb-5 fw-light fs-5"><b>Portal Silsilah</h4></b>
            <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
              <div class="form-floating mb-3"> 
                 <div class="flash-data-registrasi" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
		              <?php if ($this->session->flashdata('flash')) : ?>
			            <?php endif; ?>  
                  <div class="flash-data-gagalreg" data-flashdata="<?= $this->session->flashdata('flash_gagal1'); ?>"></div>
		              <?php if ($this->session->flashdata('flash_gagal1')) : ?>
			            <?php endif; ?>  
                  <div class="flash-data-gagallog" data-flashdata="<?= $this->session->flashdata('flash_gagal'); ?>"></div>
		              <?php if ($this->session->flashdata('flash_gagal')) : ?>
			            <?php endif; ?>  

                <input type="text" class="form-control" id="floatingInput" name="username" value="<?= set_value('username');?>" placeholder="Masukan Email">
                <label for="floatingInput">Email</label>          
              </div>
              
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" onclick="myFunction()" id="showpassword">
                  <label>Tampilkan Password</label>
              </div>
              <div class="d-grid">
                <button class="btn btn-outline-primary btn-login text-uppercase fw-bold" type="submit">L O G I N</button>
              </div>
            </form>
            
            <!-- <div class="d-grid">
              <label class="text-center"> ---Atau---</a></label>
              </div>             -->
              <div class="row">
              <!-- <br><label class="text-center"> Anda belum punya akun? Silakan klik</label></br> -->
              <br><label class="text-center"><a style="text-decoration:none" href="<?php echo base_url('login/registrasi'); ?>">Buat Akun</a></br>
            </div>
            <div class="row">
              <!-- <br><label class="text-center"> Anda belum punya akun? Silakan klik</label></br> -->
              <br><label class="text-center"><a style="text-decoration:none" href="<?php echo base_url('login/tampilEmail'); ?>">Lupa Password</a></br>
            </div>                   
</div>
</nav>
</body>
<script src="<?= base_url('assets/js/script.js');?>"></script>
<script>function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}</script>
</html>