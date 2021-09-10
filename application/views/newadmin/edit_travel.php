<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Edit Travel Umrah</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="">Home</a></li>
                  <li class="breadcrumb-item active">Edit Travel Umrah</li>
               </ol>
            </div>
         </div>
         <!-- content -->
         <div class="content mt-4 mb-2">
            <?php echo form_open_multipart('Admin/ubah') ?>
               <div class="form-group">
                  <input type="hidden" name="id" value="<?= $konten->ID_TRAVEL ?>">
                  <label>Nama Travel</label>
                  <input name="nama_travel" type="text" class="form-control" value="<?= $konten->NAMA_TRAVEL ?>">
               </div>
               <div class="form-group">
                  <label>Keterangan</label>
                  <textarea name="keterangan" class="form-control" rows="4"><?= $konten->KETERANGAN_TRAVEL ?></textarea>
               </div>
               <div class="form-group">
                  <label>NO Telp</label>
                  <input name="no_telp" type="number" class="form-control" value="<?= $konten->NO_TELP ?>">
               </div>
               <div class="form-group">
                  <label>Email</label>
                  <input name="email" type="email" class="form-control" value="<?= $konten->EMAIL_TRAVEL ?>">
               </div>
               <div class="form-group">
                  <label>Alamat</label>
                  <input name="alamat" type="text" class="form-control" value="<?= $konten->ALAMAT ?>">
               </div>
               <div class="form-group">
                  <div>
                     <label for="gambarTravel">Gambar Travel (biarkan kosong jika tidak diubah)</label>
                  </div>
                  <img src="<?= base_url($konten->GAMBAR_TRAVEL) ?>" style="width: 500px;">
                  <br>
                  <input name="gambar" type="file" id="gambarTravel">
               </div>
               <div class="form-group">
                  <input name="link_wa" type="text" class="form-control" value="<?= $konten->LINK ?>">
               </div>
               <a href="<?php echo base_url('Admin/travel') ?>" class="btn btn-secondary mt-3">Kembali</a>
               <button type="submit" class="btn btn-primary mt-3 float-right">Ubah Data</button>
            <?php echo form_close() ?>
         </div>
      </div>
     


   </div>
</div>
