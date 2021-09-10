<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Edit Kamar</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="">Home</a></li>
                  <li class="breadcrumb-item active">Edit Kamar</li>
               </ol>
            </div>
         </div>
         <!-- content -->
         <div class="content mt-4 mb-2">
            <?php echo form_open_multipart('Admin/ubah_kamar_hotel') ?>
               <div class="form-group">
                  <input type="hidden" name="id" value="<?= $konten->ID_KAMAR ?>">
                  <label>Nama Kamar</label>
                  <input name="nama_kamar" type="text" class="form-control" value="<?= $konten->NAMA_KAMAR ?>">
               </div>
               <div class="form-group">
                  <select class="form-control" name="hotel">
                     <option value="<?= $konten->ID_HOTEL ?>"><?= $konten->NAMA_HOTEL ?></option>
                     <?php foreach ($isi as $x) { ?>
                        <option value="<?php echo $x->ID_HOTEL ?>"><?php echo $x->NAMA_HOTEL ?></option>>
                     <?php } ?>
                  </select>
                  </div>
               <div class="form-group">
                  <label>Fasilitas</label>
                  <textarea name="fasilitas" class="form-control" rows="4"><?= $konten->FASILITAS ?></textarea>
               </div>
               <div class="form-group">
                  <label>Harga</label>
                  <input name="harga" type="text" class="form-control" value="<?= $konten->HARGA_KAMAR ?>">
               </div>
               <a href="<?php echo base_url('Admin/kamar_hotel') ?>" class="btn btn-secondary mt-3">Kembali</a>
               <button type="submit" class="btn btn-primary mt-3 float-right">Ubah Data</button>
            <?php echo form_close() ?>
         </div>
      </div>
     


   </div>
</div>
