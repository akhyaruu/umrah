<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Login_model');
	}

	function auth() {
		$email  = $this->input->post('email',TRUE);
		$password  = $this->input->post('password',TRUE);
		$result    = $this->Login_model->check_user($email, $password);
		if($result->num_rows() > 0) {
			$data  = $result->row_array();
			$email = $data['EMAIL_USER'];
			$nama = $data['NAMA'];
			$level = $data['LEVEL'];
			$sesdata = array(
				'EMAIL_USER'=> $email,
				'NAMA' 		=> $nama, 
				'LEVEL'     => $level,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sesdata);
			$this->session->set_userdata('session' ,$sesdata);
			if($level === 'admin') {
				redirect('Admin/index');
			}else{
				redirect('Homepage/index');
			}
		} else {
			echo "<script>alert('access denied');history.go(-1);</script>";
		}
	}

	function register(){
		$result = $this->Login_model->simpan_user();
        if($result){
            redirect('Homepage');
        }
	}

	function logout() {
		$this->session->sess_destroy();
		redirect('Homepage');
	}
}
