<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>Ceklist Umrah</title>
</head>
<body>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Estimasi Keberangkatan</th>
        <th scope="col">Ceklis Paspor</th>
        <th scope="col">Ceklis Vaksin</th>
        <th scope="col">Ceklis visa </th>
        <th scope="col">Ceklis Tiket </th>
        <th scope="col">Ceklis Dokumen Manifest</th>
        <th scope="col">Ceklis Dokumen Pembagian Bis</th>
        <th scope="col">Ceklis Copy Visa</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $no = 1;
      foreach ($umrah as $umr):?>
      <tr>
        <th scope="row"><?php echo $no++ ?></th>
        <td><?php echo $umr->estimasi_keberangkatan?></td>
        <td><?php echo anchor('umrah/ceklist/'.$umr->id.'/'.$umr->ceklis_paspor.'/ceklis_paspor', ''.$umr->ceklis_paspor)?></td>
        <td><?php echo anchor('umrah/ceklist/'.$umr->id.'/'.$umr->ceklis_faksin.'/ceklis_faksin', ''.$umr->ceklis_faksin)?></td>
        <td><?php echo anchor('umrah/ceklist/'.$umr->id.'/'.$umr->ceklis_visa.'/ceklis_visa', ''.$umr->ceklis_visa)?></td>
        <td><?php echo anchor('umrah/ceklist/'.$umr->id.'/'.$umr->ceklis_tiket.'/ceklis_tiket', ''.$umr->ceklis_tiket)?></td>
        <td><?php echo anchor('umrah/ceklist/'.$umr->id.'/'.$umr->ceklis_dokumen_manifest.'/ceklis_dokumen_manifest', ''.$umr->ceklis_dokumen_manifest)?></td>
        <td><?php echo anchor('umrah/ceklist/'.$umr->id.'/'.$umr->ceklis_dokumen_pembagian_bis.'/ceklis_dokumen_pembagian_bis', ''.$umr->ceklis_dokumen_pembagian_bis)?></td>
        <td><?php echo anchor('umrah/ceklist/'.$umr->id.'/'.$umr->ceklis_copy_visa.'/ceklis_copy_visa', ''.$umr->ceklis_copy_visa)?></td>
      </tr>
      <?php endforeach; ?>
     
    </tbody>
  </table>
</body>
</html>