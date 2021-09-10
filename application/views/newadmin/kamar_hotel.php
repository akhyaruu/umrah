<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Daftar Kamar Hotel</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="">Home</a></li>
                  <li class="breadcrumb-item active">Daftar Kamar Hotel</li>
               </ol>
            </div>
         </div>
         <form action="<?php echo base_url('Admin/kamar_hotel') ?>" method="post">
         <div class="content mt-4">
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                 <span class="input-group-text" id="basic-addon1"><i class="fas fa-kaaba"></i></span>
               </div>
               <input type="text" id="search" class="form-control" placeholder="Cari Hotel (berdasarkan nama)" name="keyword" autocomplete="off">
               <input type="submit" class="btn btn-primary" name="submit">
            </div>
         </div>
         </form>
         <button class="btn btn-primary mt-2" data-toggle="modal" data-target="#modalTambahHotel">Tambah Data Kamar</button>
         <div class="content mt-2">
            <table class="table">
               <thead class="thead-dark">
                 <tr>
                   <th scope="col">No</th>
                   <th scope="col">Nama Kamar</th>
                   <th scope="col">Fasilitas</th>
                   <th scope="col">Harga</th>
                   <th scope="col" class="text-center">Aksi</th>
                 </tr>
               </thead>
               <tbody>
                  <?php 
                  $i = 1;
                  foreach ($kamar as $x) { 
                  ?>
                    <tr>
                       <th scope="row"><?= $i ?></th>
                       <td><?= $x->NAMA_KAMAR ?></td>
                       <td><?= $x->FASILITAS ?></td>
                       <td><?= $x->HARGA_KAMAR ?></td>
                       <td>
                          <a href="<?= base_url('Admin/detail_kamar_hotel/'.$x->ID_KAMAR) ?>" class="btn btn-primary btn-sm">Detail</a>
                          <a href="<?= base_url('Admin/edit_kamar_hotel/'.$x->ID_KAMAR) ?>" class="btn btn-warning btn-sm ">Edit</a>
                          <a href="<?= base_url('Admin/hapus_kamar_hotel/'.$x->ID_KAMAR) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a>
                       </td>
                    </tr>
                  <?php 
                  $i++;
                  }
                  ?>   
               </tbody>
               <?php echo $this->pagination->create_links(); ?>
             </table>
         </div>
      </div>
      <!-- modal tambah data travel-->
      <div class="modal fade" id="modalTambahHotel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Masukan Kamar Baru</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <?php echo form_open_multipart('Admin/tambah_kamar_hotel') ?>
                  <div class="form-group">
                      <select class="form-control" name="hotel">
                        <option>- Pilih Salah Satu -</option>
                        <?php foreach ($isi as $x) { ?>
                          <option value="<?php echo $x->ID_HOTEL ?>"><?php echo $x->NAMA_HOTEL ?></option>>
                        <?php } ?>
                      </select>
                  </div>
                  <div class="form-group">
                     <input name="nama_kamar" type="text" class="form-control" placeholder="Nama Kamar">
                  </div>
                  <div class="form-group">
                      <textarea name="fasilitas" class="form-control" rows="4" placeholder="Fasilitas"></textarea>
                  </div>
                  <div class="form-group">
                     <input name="harga" type="text" class="form-control" placeholder="Harga Kamar">
                  </div>
                  <button type="submit" class="btn btn-primary float-right">Tambahkan Data</button>
               <?php echo form_close() ?>
            </div>
          </div>
        </div>
      </div>
      

   </div>
</div>
