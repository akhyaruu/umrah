<div class="site-blocks-cover overlay" style="background-image: url(<?php echo base_url() ?>/assets/front/images/kakbah.jpg);" data-aos="fade"
      data-stellar-background-ratio="0.5" id="home-section">
      <div class="container">
         <div class="row align-items-center text-center justify-content-center">
            <div class="col-md-8">
               <h1 class="text-uppercase">Informasi Maskapai</h1>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row mt-5 mb-5 justify-content-center">
         <div class="col-md-6">
            <img src="<?= base_url($konten->GAMBAR_MASKAPAI) ?>" class="shadow" style="width: 500px;">
         </div>
         <div class="col-md-6">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="font-weight-bold"><?= $konten->NAMA_MASKAPAI ?></h1>
                  <h6 class="mt-5">Keterangan</h6>
                  <p><?= $konten->KETERANGAN_MASKAPAI ?></p>

               </div>
               <div class="col-md-6">
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