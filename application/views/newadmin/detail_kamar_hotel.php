<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Detail Travel Umrah</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="">Home</a></li>
                  <li class="breadcrumb-item active">Detail Travel Umrah</li>
               </ol>
            </div>
         </div>
         <!-- content -->
         <hr>
         <div class="content ml-3">
            <div class="row pt-3"> 
               <div class="col-md-6">
                  <h3 class="font-weight-bold">Nama Kamar</h3>
                  <p><?= $konten->NAMA_KAMAR ?></p>
                  <h3 class="font-weight-bold">Fasilitas</h3>
                  <p><?= $konten->FASILITAS ?></p>
                  <h3 class="font-weight-bold">Harga</h3>
                  <p><?= $konten->HARGA_KAMAR ?></p>
               </div>
               <div class="col-md-6">
                  <h3 class="font-weight-bold">Nama Hotel</h3>
                  <p><?= $konten->NAMA_HOTEL ?></p>
                  <h3 class="font-weight-bold">Keterangan Hotel</h3>
                  <p><?= $konten->KETERANGAN_HOTEL ?></p>
                  <h3 class="font-weight-bold">Gambar Hotel</h3>
                  <img src="<?= base_url($konten->GAMBAR_HOTEL) ?>" class="w-50">
               </div>
            </div>
            <a href="<?php echo base_url('Admin/kamar_hotel') ?>" class="btn btn-secondary mt-5">Kembali</a>
         </div>
      </div>

   </div>
</div>
