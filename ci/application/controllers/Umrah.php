<?php

class Umrah extends CI_Controller {

   function index()
   {
      $data['umrah'] = $this->Model_umroh->getAll()->result();
      $this->load->view('index_view', $data);
   }

   function ceklist($id, $nilai, $column)
   {
      $data1['umrah'] = $this->Model_umroh->getAll()->result();
      $where = array('id' => $id);
      if($nilai == 0) {
         if($column == 'ceklis_paspor'){
            $data = array('ceklis_paspor' => 1);
            $this->Model_umroh->update_data($where, $data, 'data_jamaah_paket');

         } elseif ($column == 'ceklis_faksin') {
            $data = array('ceklis_faksin' => 1);
            $this->Model_umroh->update_data($where, $data, 'data_jamaah_paket');

         } elseif ($column == 'ceklis_visa') {
            $data = array('ceklis_visa' => 1);
            $this->Model_umroh->update_data($where, $data, 'data_jamaah_paket');

         } elseif ($column == 'ceklis_tiket') {
            $data = array('ceklis_tiket' => 1);
            $this->Model_umroh->update_data($where, $data, 'data_jamaah_paket');

         } elseif ($column == 'ceklis_dokumen_manifest') {
            $data = array('ceklis_dokumen_manifest' => 1);
            $this->Model_umroh->update_data($where, $data, 'data_jamaah_paket');

         } elseif ($column == 'ceklis_dokumen_pembagian_bis') {
            $data = array('ceklis_dokumen_pembagian_bis' => 1);
            $this->Model_umroh->update_data($where, $data, 'data_jamaah_paket');

         } elseif ($column == 'ceklis_copy_visa') {
            $data = array('ceklis_copy_visa' => 1);
            $this->Model_umroh->update_data($where, $data, 'data_jamaah_paket');

         }
      } elseif($nilai == 1) {
         if($column == 'ceklis_paspor'){
            $data = array('ceklis_paspor' => 0);
            $this->Model_umroh->update_data($where, $data, 'data_jamaah_paket');

         } elseif ($column == 'ceklis_faksin') {
            $data = array('ceklis_faksin' => 0);
            $this->Model_umroh->update_data($where, $data, 'data_jamaah_paket');

         } elseif ($column == 'ceklis_visa') {
            $data = array('ceklis_visa' => 0);
            $this->Model_umroh->update_data($where, $data, 'data_jamaah_paket');

         } elseif ($column == 'ceklis_tiket') {
            $data = array('ceklis_tiket' => 0);
            $this->Model_umroh->update_data($where, $data, 'data_jamaah_paket');

         } elseif ($column == 'ceklis_dokumen_manifest') {
            $data = array('ceklis_dokumen_manifest' => 0);
            $this->Model_umroh->update_data($where, $data, 'data_jamaah_paket');

         } elseif ($column == 'ceklis_dokumen_pembagian_bis') {
            $data = array('ceklis_dokumen_pembagian_bis' => 0);
            $this->Model_umroh->update_data($where, $data, 'data_jamaah_paket');

         } elseif ($column == 'ceklis_copy_visa') {
            $data = array('ceklis_copy_visa' => 0);
            $this->Model_umroh->update_data($where, $data, 'data_jamaah_paket');

         }
      }
      redirect('umrah/index');
   }
}