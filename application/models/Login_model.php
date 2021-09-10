<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function check_user($email, $password) {
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('EMAIL_USER', $email);
		$this->db->where('PASSWORD', $password);
		$query = $this->db->get();
		return $query;
	}

	public function simpan_user(){    
		$url = $this->upload_image();
	    $data = array(
	      'NAMA' => $this->input->post('username'),
	      'EMAIL_USER' => $this->input->post('email'),
	      'PASSWORD' => $this->input->post('password'),
	      'ALAMAT' => $this->input->post('alamat'),
	      'NO_TELP' => $this->input->post('telp'),
	      'JENIS_KELAMIN' => $this->input->post('jk'),
	      'GAMBAR' => $url,
	      'level' => 'user'
	    );
	    
	    $this->db->insert('user', $data);

	    if($this->db->affected_rows() > 0){
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
