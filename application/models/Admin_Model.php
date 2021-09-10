<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {

  public function tampil($qry){
    $query = $this->db->query($qry);
      
    if($query->num_rows() >= 0){
      return $query->result();
    }else{
      return false;
    }
  }

  public function view($limit, $start, $keyword = null, $kolom_search, $tabel){
    if ($keyword) {
      $this->db->like($kolom_search, $keyword);
    }
    return $this->db->get($tabel, $limit, $start)->result();
  }

  public function view_join($keyword = null, $kolom_search){
    $this->db->select('*');
    $this->db->from('pemesanan');
    $this->db->join('paket_umrah', 'paket_umrah.ID_PAKET = pemesanan.ID_PAKET', 'inner');
    $this->db->join('user', 'user.EMAIL_USER = pemesanan.EMAIL_USER', 'inner');
    if ($keyword) {
      $this->db->like($kolom_search, $keyword);
    }
    return $this->db->get()->result();
  }

  public function view_user($limit, $start, $keyword = null, $kolom_search, $tabel){
    if ($keyword) {
      $this->db->like($kolom_search, $keyword);
    }
    $email = 'admin@gmail.com';
    $level = 'admin';
    $array = array('EMAIL_USER != ' => $email, 'LEVEL != ' => $level);
    $this->db->where($array);
    return $this->db->get($tabel, $limit, $start)->result();
  }
    
  public function simpan($tabel, $data){    
    $this->db->insert($tabel, $data);

    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  } 

  public function ubah($id_column, $id, $tabel, $data){     
    $this->db->where($id_column, $id);
    $this->db->update($tabel, $data);

    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

  public function editByID($qry){
    $query = $this->db->query($qry);
    if($query->num_rows() > 0){
      return $query->row();
    }else{
      return false;
    }
  }

  public function hapus($id_column, $id, $tabel){
    $this->db->where($id_column, $id);
    $this->db->delete($tabel);
    if($this->db->affected_rows()>0){
      return true;
    }else{
      return false;
    }
  }

  public function upload_image(){
      $type = explode('.', $_FILES["gambar"]["name"]);
      $type = $type[count($type)-1];
      $url = "gambar/".uniqid(rand()).'.'.$type;
      if(in_array($type, array("jpg", "jpeg", "gif", "png")))
        if(is_uploaded_file($_FILES["gambar"]["tmp_name"]))
          if(move_uploaded_file($_FILES["gambar"]["tmp_name"], $url))
            return $url;
      return "";
  }
}