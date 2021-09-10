<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Daftar Pemesanan</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="">Home</a></li>
                  <li class="breadcrumb-item active">Daftar Pemesanan</li>
               </ol>
            </div>
         </div>
         <form action="<?php echo base_url('Admin/pemesanan') ?>" method="post">
         <div class="content mt-4">
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                 <span class="input-group-text" id="basic-addon1"><i class="fas fa-kaaba"></i></span>
               </div>
               <input type="text" id="search" class="form-control" placeholder="Cari Travel (berdasarkan ID Pemesanan)" name="keyword" autocomplete="off">
               <input type="submit" class="btn btn-primary" name="submit">
            </div>
         </div>
         </form>
         <div class="content mt-2">
            <table class="table">
               <thead class="thead-dark">
                 <tr>
                   <th scope="col">No</th>
                   <th scope="col">ID Pemesanan</th>
                   <th scope="col">Nama Paket</th>
                   <th scope="col">Email User</th>
                   <th scope="col">Skor Umrah</th>
                   <th scope="col">Skor Katering</th>
                   <th scope="col">Skor Hotel</th>
                   <th scope="col">Isi Review</th>
                   <th scope="col">Validasi</th>
                   <th scope="col">Tanggal</th>
                   <th scope="col" class="text-center">Aksi</th>
                 </tr>
               </thead>
               <tbody>
                  <?php 
                  $i = 1;
                  foreach ($order as $x) { 
                  ?>
                    <tr>
                       <th scope="row"><?= $i ?></th>
                       <td><?= $x->ID_PEMESANAN ?></td>
                       <td><?= $x->NAMA_PAKET_UMROH ?></td>
                       <td><?= $x->EMAIL_USER ?></td>
                       <td><?= $x->SKOR_UMROH ?></td>
                       <td><?= $x->SKOR_CATERING ?></td>
                       <td><?= $x->SKOR_HOTEL ?></td>
                       <td><?= $x->ISI_RIVIEW ?></td>
                       <td><?= $x->VALIDASI ?></td>
                       <td><?= $x->TANGGAL ?></td>
                       <td>
                          <?php echo form_open_multipart('Admin/validasi/'.$x->ID_PEMESANAN) ?>
                          <select name="valid">
                            <option value="S">S</option>
                            <option value="B">B</option>
                          </select>
                          <button type="submit" class="btn btn-primary mt-3 float-right">Validasi</button>
                          <?php echo form_close() ?>
                       </td>
                    </tr>
                  <?php 
                  $i++;
                  }
                  ?>
               </tbody>
             </table>
             <?php echo $this->pagination->create_links(); ?>
             </table>
         </div>
      </div>
      



   </div>
</div>
