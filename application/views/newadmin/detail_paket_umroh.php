<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Detail Paket Katering</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="">Home</a></li>
                  <li class="breadcrumb-item active">Detail Paket Katering</li>
               </ol>
            </div>
         </div>
         <!-- content -->
         <hr>
         <div class="content ml-3">
            <div class="row pt-3"> 
               <div class="col-md-6">
                  <h3 class="font-weight-bold">Nama Paket Umrah</h3>
                  <p><?= $konten->NAMA_PAKET_UMROH ?></p>
                  <h3 class="font-weight-bold">Keberangkatan</h3>
                  <p><?= $konten->KEBERANGKATAN ?></p>
                  <h3 class="font-weight-bold">Kedatangan</h3>
                  <p><?= $konten->KEDATANGAN ?></p>
                  <h3 class="font-weight-bold">Harga</h3>
                  <p><?= $konten->HARGA_PAKET_UMROH ?></p>
                  <h3 class="font-weight-bold">Gambar</h3>
                  <img src="<?= base_url($konten->GAMBAR_PAKET_UMROH) ?>" class="w-50">
               </div>
               <div class="col-md-6">
                  <h3 class="font-weight-bold">Dengan Travel</h3>
                  <p><?= $konten->NAMA_TRAVEL ?></p>
                  <h3 class="font-weight-bold">Dengan Maskapai</h3>
                  <p><?= $konten->NAMA_MASKAPAI ?></p>
                  <h3 class="font-weight-bold">Dengan Kamar</h3>
                  <p><?= $konten->NAMA_KAMAR ?> di Hotel <?= $konten->NAMA_HOTEL ?></p>
                  <h3 class="font-weight-bold">Dengan Paket Katering</h3>
                  <p><?= $konten->NAMA_PAKET_KATERING ?> dengan makanan <?= $konten->SPESIALISASI ?></p>
               </div>
            </div>
            <a href="<?php echo base_url('Admin/paket_umroh') ?>" class="btn btn-secondary mt-5">Kembali</a>
         </div>
      </div>
     


   </div>
</div>
