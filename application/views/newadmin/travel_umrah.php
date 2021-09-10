<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Daftar Travel Umrah</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="">Home</a></li>
                  <li class="breadcrumb-item active">Daftar Travel Umrah</li>
               </ol>
            </div>
         </div>
         <form action="<?php echo base_url('Admin/travel') ?>" method="post">
         <div class="content mt-4">
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                 <span class="input-group-text" id="basic-addon1"><i class="fas fa-kaaba"></i></span>
               </div>
               <input type="text" id="search" class="form-control" placeholder="Cari Travel (berdasarkan nama)" name="keyword" autocomplete="off">
               <input type="submit" class="btn btn-primary" name="submit">
            </div>
         </div>
         </form>
         <button class="btn btn-primary mt-2" data-toggle="modal" data-target="#modalTambahTravel">Tambah Data Travel</button>
         <div class="content mt-2">
            <table class="table">
               <thead class="thead-dark">
                 <tr>
                   <th scope="col">No</th>
                   <th scope="col">Nama Travel</th>
                   <th scope="col">Email</th>
                   <th scope="col">No. Telp</th>
                   <th scope="col">Link</th>
                   <th scope="col" class="text-center">Aksi</th>
                 </tr>
               </thead>
               <tbody>
                  <?php 
                  $i = 1;
                  foreach ($travel as $x) { 
                  ?>
                    <tr>
                       <th scope="row"><?= $i ?></th>
                       <td><?= $x->NAMA_TRAVEL ?></td>
                       <td><?= $x->EMAIL_TRAVEL ?></td>
                       <td><?= $x->NO_TELP ?></td>
                       <td><?= $x->LINK ?></td>
                       <td>
                          <a href="<?= base_url('Admin/detail_travel/'.$x->ID_TRAVEL) ?>" class="btn btn-primary btn-sm">Detail</a>
                          <a href="<?= base_url('Admin/edit_travel/'.$x->ID_TRAVEL) ?>" class="btn btn-warning btn-sm ">Edit</a>
                          <a href="<?= base_url('Admin/hapus_travel/'.$x->ID_TRAVEL) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a>
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
               <?php echo form_open_multipart('Admin/tambah') ?>
                  <div class="form-group">
                     <input name="nama_travel" type="text" class="form-control" placeholder="Nama Travel">
                  </div>
                  <div class="form-group">
                      <textarea name="keterangan" class="form-control" rows="4" placeholder="Keterangan"></textarea>
                  </div>
                  <div class="form-group">
                     <input name="no_telp" type="number" class="form-control" placeholder="No. Telp">
                  </div>
                  <div class="form-group">
                     <input name="email" type="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                     <input name="alamat" type="text" class="form-control" placeholder="Alamat">
                  </div>
                  <div class="form-group">
                     <div>
                        <label for="gambarTravel">Gambar Travel</label>
                     </div>
                     <input name="gambar" type="file" id="gambarTravel">
                  </div>
                  <div class="form-group">
                     <input name="link_wa" type="text" class="form-control" placeholder="Link WA">
                  </div>
                  <button type="submit" class="btn btn-primary float-right">Tambahkan Data</button>
               <?php echo form_close() ?>
            </div>
          </div>
        </div>
      </div>
      

   </div>
</div>
