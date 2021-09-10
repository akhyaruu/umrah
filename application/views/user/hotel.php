<div class="site-blocks-cover overlay" style="background-image: url(<?php echo base_url() ?>/assets/front/images/kakbah.jpg);" data-aos="fade"
      data-stellar-background-ratio="0.5" id="home-section">
      <div class="container">
        <div class="row align-items-center text-center justify-content-center">
          <div class="col-md-8">
            <a data-fancybox data-ratio="2" href="https://www.youtube.com/watch?v=f5anLvfaLxk"
              class="play-button d-block">
              <span class="icon-play"></span>
            </a>
            <h1 class="text-uppercase">Umroh Tour And Travel</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="pricing-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <span class="sub-title">Daftar</span>
            <h2 class="font-weight-bold text-black">Paket Umroh</h2>
          </div>
        </div>
        <br>
        <h3 class="text-center mt-4">Cari Paket</h3>
        <form action="<?php echo base_url('Homepage/index') ?>" method="post">
         <div class="row mx-auto justify-content-center mt-3 mb-5 pt-4" style="height: 40px;">
           <h6 class="mr-2">Cari Hotel</h6>
           <input type="text" id="search" class="mr-3" placeholder="Berdasarkan Nama" name="keyword" autocomplete="off">
           <input type="submit" class="btn btn-primary" name="submit">
        </div>
        </form>
        
        <hr>
        <h3 class="text-center mt-5">Hotel</h3>
        <div class="row mt-4 mb-4 ml-4 justify-content-center">
          <?php 
          if($hotel != null){
          foreach($hotel as $x) { ?>
           <div class="col-md-4 mt-4">
              <div class="card shadow" style="width: 18rem;">
                 <img src="<?= base_url($x->GAMBAR_PAKET_UMROH) ?>" class="card-img-top" alt="...">
                 <div class="card-body">
                    <h5 class="card-title"><?= $x->NAMA_PAKET_UMROH ?></h5>
                    <p class="card-text">Keberangkatan : <?= date('M jS, Y', strtotime($x->KEBERANGKATAN)) ?></p>
                    <p class="card-text">Kedatangan : <?= date('M jS, Y', strtotime($x->KEDATANGAN)) ?></p>
                    <p class="card-text">Harga : <h6>Rp. <?= $x->HARGA_PAKET_UMROH ?></h6></p>
                    <a href="<?php echo base_url('Homepage/infopaket/'.$x->ID_PAKET) ?>" class="btn btn-primary">Lihat Info</a>
                 </div>
              </div>
           </div>
          <?php } }else { ?>
            <div class="col-md-4 mt-4">
              <div class="card shadow" style="width: 18rem;">
                 <img src="<?= base_url('assets/front/images/maskapai.jpg') ?>" class="card-img-top" alt="...">
                 <div class="card-body">
                    <h5 class="card-title">Data Tidak Ditemukan</h5>
                 </div>
              </div>
           </div>
          <?php } ?>
        </div>
      </div>
    </div>