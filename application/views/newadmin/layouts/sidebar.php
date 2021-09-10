   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
      <img src="<?= base_url('assets/backend/img/AdminLTELogo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard Admin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
            <img src="<?= base_url('assets//backend/img/user2-160x160.jpg')?>" class="img-circle elevation-2" alt="User Image">
         </div>
         <div class="info">
            <a href="#" class="d-block">Admin</a>
         </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
               <a href="<?php echo base_url('Admin/index') ?>" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                     Dashboard
                  </p>
               </a>
            </li>
            <!---------------------- katering ---------------------->
            <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
               <i class="nav-icon fas fa-utensils"></i>
               <p>
                  Katering
                  <i class="right fas fa-angle-left"></i>
               </p>
               </a>
               <ul class="nav nav-treeview">
               <li class="nav-item">
                  <a href="<?php echo base_url('Admin/katering') ?>" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Katering</p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="<?php echo base_url('Admin/paketkat') ?>" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Paket Katering</p>
                  </a>
               </li>
               </ul>
            </li>
            <li class="nav-item">
               <a href="<?php echo base_url('Admin/maskapai') ?>" class="nav-link">
                  <i class="nav-icon fas fa-plane"></i>
                  <p>
                     Maskapai
                  </p>
               </a>
            </li>
            <!---------------------- umrah ---------------------->
            <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
               <i class="nav-icon fas fa-kaaba"></i>
               <p>
                  Umrah
                  <i class="right fas fa-angle-left"></i>
               </p>
               </a>
               <ul class="nav nav-treeview">
               <li class="nav-item">
                  <a href="<?php echo base_url('Admin/travel') ?>" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Travel Umrah</p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="<?php echo base_url('Admin/paket_umroh') ?>" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Paket Umrah</p>
                  </a>
               </li>
               </ul>
            </li>
            <!---------------------- hotel ---------------------->
            <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
               <i class="nav-icon fas fa-hotel"></i>
               <p>
                  Hotel
                  <i class="right fas fa-angle-left"></i>
               </p>
               </a>
               <ul class="nav nav-treeview">
               <li class="nav-item">
                  <a href="<?php echo base_url('Admin/hotel') ?>" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Hotel</p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="<?php echo base_url('Admin/kamar_hotel') ?>" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Kamar Hotel</p>
                  </a>
               </li>
               </ul>
            </li>
            <li class="nav-item">
               <a href="<?php echo base_url('Admin/pemesanan') ?>" class="nav-link">
                  <i class="nav-icon fas fa-book-reader"></i>
                  <p>
                     Pemesanan 
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?php echo base_url('Admin/user') ?>" class="nav-link">
                  <i class="nav-icon fas fa-user-friends"></i>
                  <p>
                     User 
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?php echo base_url('Admin/berita') ?>" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>
                     Berita 
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?php echo base_url('Admin/kontak') ?>" class="nav-link">
                  <i class="nav-icon fas fa-envelope"></i>
                  <p>
                     Saran & Kritik 
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link" data-toggle="modal" data-target="#logoutModal">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>
                     Logout 
                  </p>
               </a>
            </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
   </aside>