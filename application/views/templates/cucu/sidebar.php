<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Silsilah Bani Madnasir</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('dashboard'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Master Data
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Keluarga</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?php echo base_url('anak'); ?>">Input Data Anak</a>
                        <a class="collapse-item" href="<?php echo base_url('cucu'); ?>">Input Data Cucu</a>
                        <a class="collapse-item" href="<?php echo base_url('cicit'); ?>">Input Data Cicit</a>
                        <a class="collapse-item" href="<?php echo base_url('baok'); ?>">Input Data Baok</a>
                        <a class="collapse-item" href="#">Input Data Jangkawareng</a>
                    </div>
                </div>
            </li>

            

<!-- Heading -->
<div class="sidebar-heading">Detail Data Keluarga </div>
<!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-address-card"></i>
                    <span>Keluarga Bani Hj. Oyoh</span>
                </a>
                <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('cucu/detail_anak_oyoh'); ?>">Lihat Data Anak</a>
                        <a class="collapse-item" href="<?php echo base_url('cicit/detail_cucu_oyoh'); ?>">Lihat Data Cucu</a>
                        <a class="collapse-item" href="<?php echo base_url('baok/detail_cicit_oyoh'); ?>">Lihat Data Cicit</a>                    
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2"aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-address-card"></i>
                    <span>Keluarga Bani Aminah</span>
                </a>
                <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('cucu/detail_anak_aminah'); ?>">Lihat Data Anak</a>
                        <a class="collapse-item" href="<?php echo base_url('cicit/detail_cucu_aminah'); ?>">Lihat Data Cucu</a>
                        <a class="collapse-item" href="<?php echo base_url('baok/detail_cicit_aminah'); ?>">Lihat Data Cicit</a>                    
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities3"aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-address-card"></i>
                    <span>Keluarga Bani Aat</span>
                </a>
                <div id="collapseUtilities3" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('cucu/detail_anak_aat'); ?>">Lihat Data Anak</a>
                        <a class="collapse-item" href="<?php echo base_url('cicit/detail_cucu_aat'); ?>">Lihat Data Cucu</a>
                        <a class="collapse-item" href="<?php echo base_url('baok/detail_cicit_aat'); ?>">Lihat Data Cicit</a>                    
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities4"aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-address-card"></i>
                    <span>Keluarga Bani Hj. Emay</span>
                </a>
                <div id="collapseUtilities4" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('cucu/detail_anak_emay'); ?>">Lihat Data Anak</a></i>
                        <a class="collapse-item" href="<?php echo base_url('cicit/detail_cucu_emay'); ?>">Lihat Data Cucu</a>
                        <a class="collapse-item" href="<?php echo base_url('baok/detail_cicit_emay'); ?>">Lihat Data Cicit</a>                    
                    </div>
                </div>
            </li>
           
            
            <!-- Divider -->
            <hr class="sidebar-divider">

            
            <!--Nav Item - Charts !-->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('dashboard/tampil_galery'); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Galery</span></a>
            </li>

            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
