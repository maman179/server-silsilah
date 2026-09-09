<!-- Content Wrapper -->

<div id="content-wrapper" class="d-flex flex-column">
<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

       
        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
            
        <h3>SILSILAH KELUARGA MADNASIR DAN MBAH ERUM </h3>
                  
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-3 d-none d-lg-inline text-black ">Selamat Datang, <?php echo $this->session->userdata('nama');?></span>
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/img/amay.jpg')?>">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Activity Log
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalExit"></i>Logout  </a>

                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar --> 
    
     <!-- Modal Logout !-->
     <div class="modal fade" id="modalExit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Logout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
</div>
 
    <div class="modal-body">
    <p>Apakah Yakin Ingin Keluar?</p>
    </div>

<div class="modal-footer">
<div class="modal-footer">
<form action= "<?php echo base_url(). 'login/logout'; ?>" method="post">
<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success" >Lanjutkan</button>
  </div></form>
</div>
</div>
</div>
<? echo form_close();?>

              
