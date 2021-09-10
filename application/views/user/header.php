<!DOCTYPE html>
<html lang="en">

<head>
  <title>Umroh &mdash; haromain webpage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/front/fonts/icomoon/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/front/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/front/css/magnific-popup.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/front/css/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/front/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/front/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/front/css/bootstrap-datepicker.css">
  <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/front/images/Logo1.png">

  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/front/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/front/css/aos.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/front/css/jquery.fancybox.min.css">


  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/front/css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <!-- 
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div> -->

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar-wrap">
      <div class="site-navbar-top">
        <div class="container py-3">
          <div class="row align-items-center">
            <div class="col-6">
              <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
              <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
              <a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
              <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
            </div>
            <div class="col-6">
              <div class="d-flex ml-auto">
                <a href="#" class="d-flex align-items-center ml-auto mr-4">
                  <span class="icon-envelope mr-2"></span>
                  <span class="d-none d-md-inline-block">info@domain.com</span>
                </a>
                <a href="#" class="d-flex align-items-center">
                  <span class="icon-phone mr-2"></span>
                  <span class="d-none d-md-inline-block">+1 234 4567 8910</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-2">
              <h1 class="my-0 site-logo"><a href="<?php echo base_url('Homepage/index') ?>">Haromain</a></h1>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                      class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                    <!-- <li>
                      <a href="#home-section" class="nav-link">Beranda</a>
                    </li>
                    <li class="has-children">
                       <a href="#about-section" class="nav-link">Review</a>
                       <ul class="dropdown arrow-top">
                          <li>
                             <a href="#our-team-section" class="nav-link">Hotel</a>
                          </li>
                          <li>
                             <a href="#pricing-section" class="nav-link">Katering</a>
                          </li>
                          <li>
                             <a href="#faq-section" class="nav-link">Maskapai</a>
                          </li>
                       </ul>
                    </li> 
                    <li>
                      <a href="<?php echo base_url('Homepage/paketumrah') ?>" class="nav-link">Paket Umroh</a>
                    </li>
                    <li>
                      <a href="#news-section" class="nav-link">Berita</a>
                    </li>
                    -->
                    <?php if($this->session->userdata('session')){ ?>
                              <li class="nav-item nav-profile dropdown">
                              <?php $s = $this->session->userdata('session'); ?>
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                <span class="nav-profile-name"><?php echo $s['NAMA'] ?></span>
                              </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                <a class="dropdown-item" style="color: black;" href="<?php echo base_url('Homepage/profil/'.$s['EMAIL_USER'])?>">Ubah profil</a>
                                <a class="dropdown-item" style="color: black;" href="<?php echo base_url('Homepage/review/'.$s['EMAIL_USER'])?>">Review</a>
                                <a class="dropdown-item" style="color: black;" href="<?php echo base_url('Login/logout');?>" onclick="return confirm('Apakah anda yakin ingin log out?');">
                                    Logout
                                </a>
                            </div>
                          </li>
                           <?php }else{ ?>
                              <li>
                                 <a href="" class="nav-link" data-toggle="modal" data-target="#loginModal">Login</a>
                              </li>
                              <li>
                                 <a href="" class="nav-link" data-toggle="modal" data-target="#registerModal">Register</a>
                              </li>
                           <?php } ?>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>