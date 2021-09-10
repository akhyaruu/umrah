
   <div class="site-blocks-cover overlay" style="background-image: url(<?php echo base_url() ?>/assets/front/images/kakbah.jpg);" data-aos="fade"
      data-stellar-background-ratio="0.5" id="home-section">
      <div class="container">
         <div class="row align-items-center text-center justify-content-center">
            <div class="col-md-8">
               <h1 class="text-uppercase">Daftar Pemesanan Paket</h1>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row mt-4 mb-4 ml-4 justify-content-center">
         <?php foreach ($konten as $x) { ?>
            <div class="col-md-4 mt-4">
               <div class="card shadow" style="width: 18rem;">
                  <img src="<?php echo base_url() ?>/assets/front/images/maskapai.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title"><?= $x->NAMA_PAKET_UMROH ?></h5>
                     <p class="card-text"><?= $x->TANGGAL?></p>
                     <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modalPemesanan<?= $x->ID_PEMESANAN ?>">Berikan Rating
                        dan Review</a>
                  </div>
               </div>
            </div>
         <?php } ?>
      </div>

   </div>
   </div>
   <?php foreach ($konten as $y){ ?>
         <div class="modal fade" id="modalPemesanan<?= $y->ID_PEMESANAN ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Rating dan Review Paket Umrah</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <small>*urutan rating 1-5 mulai dari terkecil hingga terbesar</small>
                     <hr>
                     <?php echo form_open_multipart('Homepage/update_review') ?>
                        <div class="form-group">
                           <label>Skor Paket Umrah: </label>
                           <select name="skor_umroh">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label>Skor Paket Katering: </label>
                           <select name="skor_katering">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label>Skor Hotel: </label>
                           <select name="skor_hotel">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <textarea name="isi_review" class="form-control"
                              placeholder="Masukan review paket umrah..." rows="5"><?= $y->ISI_RIVIEW ?></textarea>
                        </div>
                        <input type="hidden" name="id" value="<?= $y->ID_PEMESANAN ?>">
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                     <?php echo form_close() ?>
                  </div>
               </div>
            </div>
         </div>
   <?php } ?>