<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model {

  public function view($limit, $start, $keyword = null, $tgl = null, $maskapai = null, $katering = null){
    if ($keyword) {
      $this->db->like('NAMA_PAKET_UMROH', $keyword);
    }
    if ($tgl) {
      $this->db->where('KEBERANGKATAN', $tgl);
    }
    if ($maskapai) {
      $this->db->where('ID_MASKAPAI', $maskapai);
    }
    if ($katering) {
      $this->db->where('ID_PAKET_KATERING', $katering);
    }
    return $this->db->get('paket_umrah ', $limit, $start)->result();
  }

  public function view_berita($limit, $start){
    $this->db->order_by('TANGGAL', 'desc');
    return $this->db->get('berita', $limit, $start)->result();
  }

  public function view_list($id){
    $this->db->select('*');
    $this->db->from('pemesanan');
    $this->db->join('user', 'user.EMAIL_USER = pemesanan.EMAIL_USER', 'inner');
    $this->db->where('pemesanan.ID_PAKET', $id);
    return $this->db->get()->result();
  }

  public function simpan($tabel, $data){    
    $this->db->insert($tabel, $data);

    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

  public function tampil($qry){
    $query = $this->db->query($qry);
      
    if($query->num_rows() >= 0){
      return $query->result();
    }else{
      return false;
    }
  }

  public function view_review($id){
    $this->db->select('*');
    $this->db->from('pemesanan');
    $this->db->join('paket_umrah', 'paket_umrah.ID_PAKET = pemesanan.ID_PAKET', 'inner');
    $this->db->join('user', 'user.EMAIL_USER = pemesanan.EMAIL_USER', 'inner');
    $this->db->where('pemesanan.EMAIL_USER', $id);
    $this->db->where('VALIDASI', 'S');
    return $this->db->get()->result();
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

  public function showByID($qry){
    $query = $this->db->query($qry);
    if($query->num_rows() > 0){
      return $query->row();
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