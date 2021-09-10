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
            <?php echo form_open_multipart('Admin/ubah_paket_umroh') ?>
                  <div class="form-group">
                     <input type="hidden" name="id" value="<?= $konten->ID_PAKET ?>">
                     <label>Travel</label>
                      <select class="form-control" name="travel">
                        <option value="<?= $konten->ID_TRAVEL ?>"><?php echo $konten->NAMA_TRAVEL ?></option>
                        <?php foreach ($travel as $x) { ?>
                          <option value="<?php echo $x->ID_TRAVEL ?>"><?php echo $x->NAMA_TRAVEL ?></option>>
                        <?php } ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label>Maskapai</label>
                      <select class="form-control" name="maskapai">
                        <option value="<?php echo $konten->ID_MASKAPAI ?>"><?php echo $konten->NAMA_MASKAPAI ?></option>
                        <?php foreach ($maskapai as $x) { ?>
                          <option value="<?php echo $x->ID_MASKAPAI ?>"><?php echo $x->NAMA_MASKAPAI ?></option>>
                        <?php } ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label>Kamar</label>
                      <select class="form-control" name="kamar">
                        <option value="<?php echo $konten->ID_KAMAR ?>"><?php echo $konten->NAMA_KAMAR ?></option>
                        <?php foreach ($kamar as $x) { ?>
                          <option value="<?php echo $x->ID_KAMAR ?>"><?php echo $x->NAMA_KAMAR ?></option>>
                        <?php } ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label>Paket Katering</label>
                      <select class="form-control" name="katering">
                        <option value="<?php echo $konten->ID_PAKET_KATERING ?>"><?php echo $konten->NAMA_PAKET_KATERING ?></option>
                        <?php foreach ($paketkat as $x) { ?>
                          <option value="<?php echo $x->ID_PAKET_KATERING ?>"><?php echo $x->NAMA_PAKET_KATERING ?></option>>
                        <?php } ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label>Nama Paket Umrah</label>
                     <input name="nama_paket_umroh" type="text" class="form-control" value="<?php echo $konten->NAMA_PAKET_UMROH ?>">
                  </div>
                  <div class="form-group">
                    <label>Keberangkatan</label>
                     <input name="keberangkatan" type="date" class="form-control" value="<?php echo $konten->KEBERANGKATAN ?>">
                  </div>
                  <div class="form-group">
                    <label>Kedatangan</label>
                     <input name="kedatangan" type="date" class="form-control" value="<?php echo $konten->KEDATANGAN ?>">
                  </div>
                  <div class="form-group">
                    <label>Harga</label>
                     <input name="harga" type="text" class="form-control" value="<?php echo $konten->HARGA_PAKET_UMROH ?>">
                  </div>
                  <div class="form-group">
                     <div>
                        <label for="gambarPaket">Gambar</label>
                     </div>
                     <img src="<?= base_url($konten->GAMBAR_PAKET_UMROH) ?>" style="width: 500px;">
                     <br>
                     <input name="gambar" type="file" id="gambarPaket">
                  </div>

                  <a href="<?php echo base_url('Admin/paket_umroh') ?>" class="btn btn-secondary mt-3">Kembali</a>
                  <button type="submit" class="btn btn-primary float-right">Ubah Data</button>
               <?php echo form_close() ?>
         </div>
      </div>
     


   </div>
</div>
