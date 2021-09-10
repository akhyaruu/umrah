<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Daftar Paket Katering</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="">Home</a></li>
                  <li class="breadcrumb-item active">Daftar Travel Umrah</li>
               </ol>
            </div>
         </div>
         <form action="<?php echo base_url('Admin/paket_umroh') ?>" method="post">
         <div class="content mt-4">
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                 <span class="input-group-text" id="basic-addon1"><i class="fas fa-kaaba"></i></span>
               </div>
               <input type="text" id="search" class="form-control" placeholder="Cari Paket Katering (berdasarkan nama paket)" name="keyword" autocomplete="off">
               <input type="submit" class="btn btn-primary" name="submit">
            </div>
         </div>
         </form>
         <button class="btn btn-primary mt-2" data-toggle="modal" data-target="#modalTambahTravel">Tambah Data Paket Katering</button>
         <div class="content mt-2">
            <table class="table">
               <thead class="thead-dark">
                 <tr>
                   <th scope="col">No</th>
                   <th scope="col">Nama Paket Umrah</th>
                   <th scope="col">Harga</th>
                   <th scope="col">Keberangkatan</th>
                   <th scope="col">Kedatangan</th>
                   <th scope="col" class="text-center">Aksi</th>
                 </tr>
               </thead>
               <tbody>
                  <?php 
                  $i = 1;
                  foreach ($paket as $x) { 
                  ?>
                    <tr>
                       <th scope="row"><?= $i ?></th>
                       <td><?= $x->NAMA_PAKET_UMROH ?></td>
                       <td><?= $x->HARGA_PAKET_UMROH ?></td>
                       <td><?= date('M jS, Y', strtotime($x->KEBERANGKATAN)) ?></td>
                       <td><?= date('M jS, Y', strtotime($x->KEDATANGAN)) ?></td>
                       <td>
                          <a href="<?= base_url('Admin/detail_paket_umroh/'.$x->ID_PAKET) ?>" class="btn btn-primary btn-sm">Detail</a>
                          <a href="<?= base_url('Admin/edit_paket_umroh/'.$x->ID_PAKET) ?>" class="btn btn-warning btn-sm ">Edit</a>
                          <a href="<?= base_url('Admin/hapus_paket_umroh/'.$x->ID_PAKET) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a>
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
               <?php echo form_open_multipart('Admin/tambah_paket_umroh') ?>
                  <div class="form-group">
                      <select class="form-control" name="travel">
                        <option>- Pilih Salah Satu -</option>
                        <?php foreach ($travel as $x) { ?>
                          <option value="<?php echo $x->ID_TRAVEL ?>"><?php echo $x->NAMA_TRAVEL ?></option>>
                        <?php } ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <select class="form-control" name="maskapai">
                        <option>- Pilih Salah Satu -</option>
                        <?php foreach ($maskapai as $x) { ?>
                          <option value="<?php echo $x->ID_MASKAPAI ?>"><?php echo $x->NAMA_MASKAPAI ?></option>>
                        <?php } ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <select class="form-control" name="kamar">
                        <option>- Pilih Salah Satu -</option>
                        <?php foreach ($kamar as $x) { ?>
                          <option value="<?php echo $x->ID_KAMAR ?>"><?php echo $x->NAMA_KAMAR ?></option>>
                        <?php } ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <select class="form-control" name="katering">
                        <option>- Pilih Salah Satu -</option>
                        <?php foreach ($paketkat as $x) { ?>
                          <option value="<?php echo $x->ID_PAKET_KATERING ?>"><?php echo $x->NAMA_PAKET_KATERING ?></option>>
                        <?php } ?>
                      </select>
                  </div>
                  <div class="form-group">
                     <input name="nama_paket_umroh" type="text" class="form-control" placeholder="Nama Paket Umrah">
                  </div>
                  <div class="form-group">
                     <input name="keberangkatan" type="date" class="form-control" placeholder="Keberangkatan">
                  </div>
                  <div class="form-group">
                     <input name="kedatangan" type="date" class="form-control" placeholder="Kedatangan">
                  </div>
                  <div class="form-group">
                     <input name="harga" type="text" class="form-control" placeholder="Harga">
                  </div>
                  <div class="form-group">
                     <div>
                        <label for="gambarPaket">Gambar</label>
                     </div>
                     <input name="gambar" type="file" id="gambarPaket">
                  </div>
                  <button type="submit" class="btn btn-primary float-right">Tambahkan Data</button>
               <?php echo form_close() ?>
            </div>
          </div>
        </div>
      </div>
      

   </div>
</div>
