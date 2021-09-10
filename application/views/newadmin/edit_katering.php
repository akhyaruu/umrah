<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Edit Katering</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="">Home</a></li>
                  <li class="breadcrumb-item active">Edit Katering</li>
               </ol>
            </div>
         </div>
         <!-- content -->
         <div class="content mt-4 mb-2">
            <?php echo form_open_multipart('Admin/ubah_katering') ?>
               <div class="form-group">
                  <input type="hidden" name="id" value="<?= $konten->ID_KATERING ?>">
                  <label>Nama Katering</label>
                  <input name="nama_katering" type="text" class="form-control" value="<?= $konten->NAMA_KATERING ?>">
               </div>
               <div class="form-group">
                  <label>Spesialisasi</label>
                  <textarea name="spesialis" class="form-control" rows="4"><?= $konten->SPESIALISASI ?></textarea>
               </div>
               <div class="form-group">
                  <div>
                     <label for="gambarKatering">Gambar (biarkan kosong jika tidak diubah)</label>
                  </div>
                  <img src="<?= base_url($konten->GAMBAR_KATERING) ?>" style="width: 500px;">
                  <br>
                  <input name="gambar" type="file" id="gambarKatering">
               </div>
               <a href="<?php echo base_url('Admin/katering') ?>" class="btn btn-secondary mt-3">Kembali</a>
               <button type="submit" class="btn btn-primary mt-3 float-right">Ubah Data</button>
            <?php echo form_close() ?>
         </div>
      </div>
     


   </div>
</div>
