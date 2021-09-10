<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Daftar Maskapai</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="">Home</a></li>
                  <li class="breadcrumb-item active">Daftar Travel Umrah</li>
               </ol>
            </div>
         </div>
         <form action="<?php echo base_url('Admin/maskapai') ?>" method="post">
         <div class="content mt-4">
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                 <span class="input-group-text" id="basic-addon1"><i class="fas fa-kaaba"></i></span>
               </div>
               <input type="text" id="search" class="form-control" placeholder="Cari Maskapai (berdasarkan nama)" name="keyword" autocomplete="off">
               <input type="submit" class="btn btn-primary" name="submit">
            </div>
         </div>
         </form>         
         <button class="btn btn-primary mt-2" data-toggle="modal" data-target="#modalTambahTravel">Tambah Data Maskapai</button>
         <div class="content mt-2">
            <table class="table">
               <thead class="thead-dark">
                 <tr>
                   <th scope="col">No</th>
                   <th scope="col">Nama Maskapai</th>
                   <th scope="col">Keterangan</th>
                   <th scope="col">Gambar Maskapai</th>
                   <th scope="col" class="text-center">Aksi</th>
                 </tr>
               </thead>
               <tbody>
                  <?php 
                  $i = 1;
                  foreach ($maskapai as $x) { 
                  ?>
                    <tr>
                       <th scope="row"><?= $i ?></th>
                       <td><?= $x->NAMA_MASKAPAI ?></td>
                       <td><?= $x->KETERANGAN_MASKAPAI ?></td>
                       <td><img src="<?= base_url($x->GAMBAR_MASKAPAI) ?>" style="width: 400px;"></td>
                       <td>
                          <a href="<?= base_url('Admin/edit_maskapai/'.$x->ID_MASKAPAI) ?>" class="btn btn-warning btn-sm ">Edit</a>
                          <a href="<?= base_url('Admin/hapus_maskapai/'.$x->ID_MASKAPAI) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a>
                       </td>
                    </tr>
                  <?php 
                  $i++;
                  }
                  ?>
               </tbody>
             </table>
             <?php echo $this->pagination->create_links(); ?>
         </div>
      </div>
      <!-- modal tambah data travel-->
      <div class="modal fade" id="modalTambahTravel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Masukan Data Travel Umrah Baru</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <?php echo form_open_multipart('Admin/tambah_maskapai') ?>
                  <div class="form-group">
                     <input name="nama_maskapai" type="text" class="form-control" placeholder="Nama Maskapai">
                  </div>
                  <div class="form-group">
                      <textarea name="keterangan" class="form-control" rows="4" placeholder="Keterangan"></textarea>
                  </div>
                  <div class="form-group">
                     <div>
                        <label for="gambarMaskapai">Gambar</label>
                     </div>
                     <input name="gambar" type="file" id="gambarMaskapai">
                  </div>
                  <button type="submit" class="btn btn-primary float-right">Tambahkan Data</button>
               <?php echo form_close() ?>
            </div>
          </div>
        </div>
      </div>
      

   </div>
</div>
