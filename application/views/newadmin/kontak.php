<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Daftar Saran & Kritik</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="">Home</a></li>
                  <li class="breadcrumb-item active">Daftar Saran & Kritik</li>
               </ol>
            </div>
         </div>
         <form action="<?php echo base_url('Admin/kontak') ?>" method="post">
         <div class="content mt-4">
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                 <span class="input-group-text" id="basic-addon1"><i class="fas fa-kaaba"></i></span>
               </div>
               <input type="text" id="search" class="form-control" placeholder="Cari Travel (berdasarkan email)" name="keyword" autocomplete="off">
               <input type="submit" class="btn btn-primary" name="submit">
            </div>
         </div>
         </form>
         <div class="content mt-2">
            <table class="table">
               <thead class="thead-dark">
                 <tr>
                   <th scope="col">No</th>
                   <th scope="col">Nama</th>
                   <th scope="col">Email</th>
                   <th scope="col">Pesan</th>
                 </tr>
               </thead>
               <tbody>
                  <?php 
                  $i = 1;
                  foreach ($kontak as $x) { 
                  ?>
                    <tr>
                       <th scope="row"><?= $i ?></th>
                       <td><?= $x->NAMA ?></td>
                       <td><?= $x->EMAIL ?></td>
                       <td><?= $x->PESAN ?></td>
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
