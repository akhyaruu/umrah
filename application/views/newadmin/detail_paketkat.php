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
                  <h3 class="font-weight-bold">Nama Paket Katering</h3>
                  <p><?= $konten->NAMA_PAKET_KATERING ?></p>
                  <h3 class="font-weight-bold">Keterangan</h3>
                  <p><?= $konten->KETERANGAN_PAKET ?></p>
                  <h3 class="font-weight-bold">Harga</h3>
                  <p><?= $konten->HARGA_PAKET_KATERING ?></p>
               </div>
               <div class="col-md-6">
                  <h3 class="font-weight-bold">Spesialisasi</h3>
                  <p><?= $konten->SPESIALISASI ?></p>
                  <h3 class="font-weight-bold">Gambar</h3>
                  <img src="<?= base_url($konten->GAMBAR_PAKET_KATERING) ?>" class="w-50">
               </div>
            </div>
            <a href="<?php echo base_url('Admin/paketkat') ?>" class="btn btn-secondary mt-5">Kembali</a>
         </div>
      </div>
     


   </div>
</div>
