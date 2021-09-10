
   <div class="site-blocks-cover overlay" style="background-image: url(<?php echo base_url() ?>/assets/front/images/kakbah.jpg);" data-aos="fade"
      data-stellar-background-ratio="0.5" id="home-section">
      <div class="container">
         <div class="row align-items-center text-center justify-content-center">
            <div class="col-md-8">
               <h1 class="text-uppercase">Informasi Paket</h1>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row mt-5 mb-5 justify-content-center">
         <div class="col-md-6">
            <img src="<?= base_url($konten->GAMBAR_PAKET_UMROH) ?>" class="shadow" style="width: 500px;">
         </div>
         <div class="col-md-6">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="font-weight-bold"><?= $konten->NAMA_PAKET_UMROH ?></h1>
                  <h6 class="mt-5">Keberangkatan</h6>
                  <p><?= date('M jS, Y', strtotime($konten->KEBERANGKATAN)) ?></p>
                  <h6>Kedatangan</h6>
                  <p><?= date('M jS, Y', strtotime($konten->KEDATANGAN)) ?></p>
                  <h6>Total Biaya</h6>
                  <h1>Rp. <?= $konten->HARGA_PAKET_UMROH ?></h1>

               </div>
               <div class="col-md-6">
                  <h6>Maskapai</h6>
                  <p><a href="#" data-toggle="modal" data-target="#modalMaskapai"><?= $konten->NAMA_MASKAPAI ?></a></p>
                  <h6>Paket Katering</h6>
                  <p><a href="#" data-toggle="modal" data-target="#modalKatering"><?= $konten->NAMA_PAKET_KATERING ?></a></p>
                  <h6>Hotel</h6>
                  <p><a href="#" data-toggle="modal" data-target="#modalHotel"><?= $konten->NAMA_HOTEL ?></a></p>
                  <h6>Rating</h6>
                  <?php if($konten->SKOR_TOTAL != null){ ?>
                     <h3><?= $konten->SKOR_TOTAL ?></h3>
                  <?php }else{ ?>
                     <h3>Belum ada Rating</h3>
                  <?php
                     } 
                     if($this->session->userdata('NAMA')){
                     $s = $this->session->userdata('session');
                     echo form_open_multipart('Homepage/pesan_paket/'.$konten->ID_PAKET)
                  ?>
                     <input type="hidden" name="email" value="<?= $s['EMAIL_USER'] ?>">
                     <input type="hidden" name="id" value="<?= $konten->ID_PAKET ?>">
                     <button type="submit" class="btn btn-primary mt-3" onclick="return confirm('Apakah anda yakin ingin memesan paket ini?');">Lakukan Pemesanan</button>
                  <?php 
                  echo form_close();
                  } ?>
               </div>
            </div>
         </div>
      </div>
      <hr>
      <div class="row mb-5 mt-5">
         <div class="col-md-12">
            <h2 class="text-center mb-3">Review Paket</h2>
            <?php if ($review != null) {
            foreach ($review as $k) { 
               $total = (($k->SKOR_UMROH + $k->SKOR_CATERING + $k->SKOR_HOTEL)/3)?>
               <div class="card mt-2">
                  <div class="card-body">
                     <h5><?= $k->NAMA ?> - <?= date('M jS, Y', strtotime($konten->KEDATANGAN)) ?></h5>
                     <p>Rating : <?= $total ?> - <?= $k->ISI_RIVIEW ?></p>
                  </div>
               </div>   
            <?php } }else { ?>
               <div class="card mt-2">
                  <div class="card-head">Nama user </div>
                  <div class="card-body">
                     Tidak ada data
                  </div>
               </div>
            <?php } ?>
         </div>
      </div>
   </div>





   <!-- Modal Katering-->
   <div class="modal fade" id="modalKatering" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel"><?= $konten->NAMA_PAKET_KATERING ?></h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <img src="<?= base_url($konten->GAMBAR_PAKET_KATERING) ?>" class="card-img-top mb-3">
               <h6>Keterangan</h6>
               <p><?= $konten->KETERANGAN_PAKET ?></p>
               <h6>Harga</h6>
               <p><?= $konten->HARGA_PAKET_KATERING ?></p>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            </div>
         </div>
      </div>
   </div>

   <!-- Modal Maskapai-->
   <div class="modal fade" id="modalMaskapai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel"><?= $konten->NAMA_MASKAPAI ?></h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <img src="<?= base_url($konten->GAMBAR_MASKAPAI) ?>" class="card-img-top mb-3">
               <h6>Keterangan</h6>
               <p><?= $konten->KETERANGAN_MASKAPAI ?></p>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            </div>
         </div>
      </div>
   </div>

   <!-- Modal Hotel-->
   <div class="modal fade" id="modalHotel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel"><?= $konten->NAMA_HOTEL ?></h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <img src="<?= base_url($konten->GAMBAR_HOTEL) ?>" class="card-img-top mb-3">
               <h6>Keterangan</h6>
               <p><?= $konten->KETERANGAN_HOTEL ?></p>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            </div>
         </div>
      </div>
   </div>

</div>