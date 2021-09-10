<div class="site-blocks-cover overlay" style="background-image: url(<?php echo base_url() ?>/assets/front/images/kakbah.jpg);" data-aos="fade"
      data-stellar-background-ratio="0.5" id="home-section">
      <div class="container">
         <div class="row align-items-center text-center justify-content-center">
            <div class="col-md-8">
               <h1 class="text-uppercase">Informasi Paket Katering</h1>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row mt-5 mb-5 justify-content-center">
         <div class="col-md-6">
            <img src="<?= base_url($konten->GAMBAR_HOTEL) ?>" class="shadow" style="width: 500px;">
         </div>
         <div class="col-md-6">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="font-weight-bold"><?= $konten->NAMA_KAMAR ?></h1>
                  <h6 class="mt-5">Fasilitas Kamar</h6>
                  <p><?= $konten->FASILITAS ?></p>
                  <h6 class="mt-5">Harga</h6>
                  <p>Rp. <?= $konten->HARGA_KAMAR ?></p>

               </div>
               <div class="col-md-6">
                  <h6 class="mt-5">Nama Hotel</h6>
                  <p><?= $konten->NAMA_HOTEL ?></p>
                  <h6 class="mt-5">Keterangan Hotel</h6>
                  <p><?= $konten->KETERANGAN_HOTEL ?></p>
                  <h6>Rating</h6>
                  <?php if($konten->SKOR_TOTAL != null){ ?>
                     <h3><?= $konten->SKOR_TOTAL ?></h3>
                  <?php }else{ ?>
                     <h3>Belum ada Rating</h3>
                  <?php
                     }
                  ?>
               </div>
            </div>
         </div>
      </div>
   </div>