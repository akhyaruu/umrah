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
                  <h3 class="font-weight-bold">Nama Travel</h3>
                  <p><?= $konten->NAMA_TRAVEL ?></p>
                  <h3 class="font-weight-bold">Keterangan</h3>
                  <p><?= $konten->KETERANGAN_TRAVEL ?></p>
                  <h3 class="font-weight-bold">Email</h3>
                  <p><?= $konten->EMAIL_TRAVEL ?>com</p>
                  <h3 class="font-weight-bold">No Telp</h3>
                  <p><?= $konten->NO_TELP ?></p>
               </div>
               <div class="col-md-6">
                  <h3 class="font-weight-bold">Alamat</h3>
                  <p><?= $konten->ALAMAT ?></p>
                  <h3 class="font-weight-bold">Link</h3>
                  <p><?= $konten->LINK ?></p>
                  <h3 class="font-weight-bold">Profil Gambar</h3>
                  <img src="<?= base_url($konten->GAMBAR_TRAVEL) ?>" class="w-50">
               </div>
            </div>
            <a href="<?php echo base_url('Admin/travel') ?>" class="btn btn-secondary mt-5">Kembali</a>
         </div>
      </div>

   </div>
</div>
