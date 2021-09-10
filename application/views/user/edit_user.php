
   <div class="site-blocks-cover overlay" style="background-image: url(<?php echo base_url() ?>/assets/front/images/kakbah.jpg);" data-aos="fade"
      data-stellar-background-ratio="0.5" id="home-section">
      <div class="container">
         <div class="row align-items-center text-center justify-content-center">
            <div class="col-md-8">
               <h1 class="text-uppercase">Ubah Profil</h1>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row pt-5 mb-5 justify-content-center">
         <div class="col-md-6">
            <img src="<?= base_url($konten->GAMBAR) ?>" style="width: 500px;">
         </div>
         <div class="col-md-6 pr-md-5 pl-md-5">
            <?php echo form_open_multipart('Homepage/edit_profil') ?>
               <input name="email" type="hidden" class="form-control" value="<?= $konten->EMAIL_USER ?>">
               <div class="form-group">
                  <label>Nama</label>
                  <input name="nama" type="text" class="form-control" value="<?= $konten->NAMA ?>">
               </div>
               <div class="form-group">
                  <label>No Telp</label>
                  <input name="telp" type="number" class="form-control" value="<?= $konten->NO_TELP ?>">
               </div>
               <div class="form-group">
                  <label for="">Alamat</label>
                  <textarea name="alamat" rows="5" class="form-control"><?= $konten->ALAMAT ?></textarea>
               </div>
               <label for="idKelamin">Jenis Kelamin</label>
               <div class="mb-4">
                  <select name="jk" id="idKelamin">
                     <option value="L">L</option>
                     <option value="P">P</option>
                  </select>
               </div>
               <div class="mb-4">
                  <label for="idGambar">Gambar (biarkan kosong jika tidak diubah)</label>
                  <br>
                  <input type="file" name="gambar" id="idGambar">
               </div>
               <div class="form-group">
                  <label>Password</label>
                  <input name="pass" type="password" class="form-control" value="<?= $konten->PASSWORD ?>">
               </div>
               <button class="btn btn-primary float-right mt-5" type="submit">Simpan Perubahan</button>
            <?php echo form_close() ?>
         </div>
      </div>
   </div>
</div>
