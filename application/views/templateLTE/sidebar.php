 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url('assets/dist/img/AdminLTELogo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo $this->session->userdata('nama');?> FAMILY</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/foto_profile/maman.jpg');?>" class="img-circle elevation-2" alt="profile">
        </div>
        <div class="info">
          <a href="#" class="d-block">ADMINISTRATOR</a>
        </div>
      </div>



      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="<?=site_url('dashboard/tampil_data')?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
      
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="<?=site_url('dashboard/tampil_data_ortu')?>" class="nav-link active">
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p>Input Data Anak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('dashboard/tampil_data_cucu')?>" class="nav-link">
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p>Input Data cucu</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="<?=site_url('dashboard/tampil_data_cicit')?>" class="nav-link">
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p>Input Data Cicit</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="<?=site_url('dashboard/tampil_data_baok')?>" class="nav-link">
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p>Input Data Baok</p>
                </a>
              </li>

              <li class="nav-item">
              <a href="<?=site_url('dashboard/galery')?>" class="nav-link">
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p>Input Galery</p>
                </a>
              </li>


            </ul>
          </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Keluarga                
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
              Keluarga Hj. Oyoh
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('cucu/detail_anak_oyoh'); ?>" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Data Anak-Hj.Oyoh</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url('cicit/detail_cucu_oyoh'); ?>" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Data Cucu-Hj.Oyoh</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('baok/detail_cicit_oyoh'); ?>" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Data Cicit-Hj.Oyoh</p>
                </a>
              </li>

            </ul>
  

            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
              Keluarga Inoh
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('cucu/detail_anak_aminah'); ?>" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Data Anak-Aminah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('cicit/detail_cucu_aminah')?>" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Data Cucu-Aminah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('baok/detail_cicit_aminah'); ?>" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Data Cicit-Aminah</p>
                </a>
              </li>
            </ul>

            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
              Keluarga Aat Mulyati
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('cucu/detail_anak_aat'); ?>" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Data Anak-Aat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('cicit/detail_cucu_aat')?>" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Data Cucu-Aat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('baok/detail_cicit_aat'); ?>" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Data Cicit-Aat</p>
                </a>
              </li>
            </ul>

            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
              Keluarga Hj. Emay
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('cucu/detail_anak_emay'); ?>" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Data Anak-Hj. Emay</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('cicit/detail_cucu_emay')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Cucu-Hj. Emay</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('baok/detail_cicit_emay'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Cicit-Hj. Emay</p>
                </a>
              </li>
</ul>
</ul>  
                    <li class="nav-item">
            <a href="<?=site_url('dashboard/tampil_galery')?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          
                        <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="fas fa-portrait nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
                            <li class="nav-item">
                <a href="pages/examples/contacts.html" class="nav-link">
                  <i class="fas fa-id-card nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" data-toggle="modal" data-target="#modalExit" class="nav-link">
                  <i class="fas fa-file-import nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
        </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  