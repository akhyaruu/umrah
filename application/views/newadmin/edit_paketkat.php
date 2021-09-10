<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Edit Paket Katering</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="">Home</a></li>
                  <li class="breadcrumb-item active">Edit Paket Katering</li>
               </ol>
            </div>
         </div>
         <!-- content -->
         <div class="content mt-4 mb-2">
            <?php echo form_open_multipart('Admin/ubah_paketkat') ?>
               <div class="form-group">
                  <input type="hidden" name="id" value="<?= $konten->ID_PAKET_KATERING ?>">
                  <label>Nama Paket Katering</label>
                  <input name="nama_katering" type="text" class="form-control" value="<?= $konten->NAMA_PAKET_KATERING ?>">
               </div>
               <div class="form-group">
                  <label>Katering</label>
                  <select class="form-control" name="katering">
                     <option value="<?= $konten->ID_KATERING ?>"><?= $konten->NAMA_KATERING ?> dengan keahlian <?php echo $konten->SPESIALISASI ?></option>
                     <?php foreach ($katering as $x) { ?>
                        <option value="<?php echo $x->ID_KATERING ?>"><?php echo $x->NAMA_KATERING ?> dengan keahlian <?php echo $x->SPESIALISASI ?></option>>
                     <?php } ?>
                  </select>
                  </div>
               <div class="form-group">
                  <label>Keterangan</label>
                  <textarea name="keterangan" class="form-control" rows="4"><?= $konten->KETERANGAN_PAKET ?></textarea>
               </div>
               <label>Harga</label>
               <div class="form-group">
                  <input name="harga" type="text" class="form-control" value="<?= $konten->HARGA_PAKET_KATERING ?>">
               </div>
               <div class="form-group">
                  <div>
                     <label for="gambarMaskapai">Gambar Travel (biarkan kosong jika tidak diubah)</label>
                  </div>
                  <img src="<?= base_url($konten->GAMBAR_PAKET_KATERING) ?>" style="width: 500px;">
                  <br>
                  <input name="gambar" type="file" id="gambarMaskapai">
               </div>
               <a href="<?php echo base_url('Admin/paketkat') ?>" class="btn btn-secondary mt-3">Kembali</a>
               <button type="submit" class="btn btn-primary mt-3 float-right">Ubah Data</button>
            <?php echo form_close() ?>
         </div>
      </div>
     


   </div>
</div>
