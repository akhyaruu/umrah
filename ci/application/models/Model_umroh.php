<?php 
class Model_umroh extends CI_Model{

   public function getAll() 
   {
      return $this->db->get('data_jamaah_paket');
   }

   public function update_data($where, $data, $table) 
   {
      $this->db->where($where);
      $this->db->update($table, $data);
   }
        
}