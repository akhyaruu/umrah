<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
class Homepage extends CI_Controller {

	public function __construct() {
		parent::__construct();
   		$this->load->model('User_Model');
	}
	
	public function index(){
		$this->load->library('pagination');

		if ($this->input->post('submit')) {
			$data['keyword'] =  $this->input->post('keyword');
			$data['tgl'] =  $this->input->post('tgl');
			$data['maskapai'] =  $this->input->post('maskapai');
			$data['katering'] =  $this->input->post('katering');
			$this->session->set_userdata('keyword', $data['keyword']);
			$this->session->set_userdata('tgl', $data['tgl']);
			$this->session->set_userdata('maskapai', $data['maskapai']);
			$this->session->set_userdata('katering', $data['katering']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
			$data['tgl'] =  $this->session->userdata('tgl');
			$data['maskapai'] =  $this->session->userdata('maskapai');
			$data['katering'] =  $this->session->userdata('katering');
		}

		$this->db->like('NAMA_PAKET_UMROH', $data['keyword']);
		$this->db->where('KEBERANGKATAN', $data['tgl']);
		$this->db->where('ID_MASKAPAI', $data['maskapai']);
		$this->db->where('ID_PAKET_KATERING', $data['katering']);
		$this->db->from('paket_umrah');

		$config['base_url'] = 'http://localhost/CodeIngniter/Umrah/Homepage/index';
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 6;

		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['paket'] = $this->User_Model->view($config['per_page'], $data['start'], $data['keyword'], $data['tgl'], $data['maskapai'], $data['katering']);
		$data['berita'] = $this->User_Model->view_berita($config['per_page'], $data['start']);
		$maskapai = 'SELECT ID_MASKAPAI, NAMA_MASKAPAI FROM maskapai';
		$katering = 'SELECT ID_PAKET_KATERING, NAMA_PAKET_KATERING FROM paket_katering';
		$data['maskapai'] = $this->User_Model->tampil($maskapai);
		$data['katering'] = $this->User_Model->tampil($katering);
		$this->load->view('user/header');
		$this->load->view('user/index', $data);
		$this->load->view('user/footer');
	}

	public function paketumrah(){
		$this->load->view('user/header');
		$this->load->view('user/paketumrah');
		$this->load->view('user/footer');
	}

	public function infopaket($id){
		$query_paket = 'SELECT *, SUM(pemesanan.SKOR_UMROH + pemesanan.SKOR_CATERING + pemesanan.SKOR_HOTEL)/(3*COUNT(pemesanan.ID_PAKET)) AS SKOR_TOTAL FROM paket_umrah inner join travel_umrah, maskapai, kamar_hotel, paket_katering, hotel, katering, pemesanan WHERE paket_umrah.ID_TRAVEL = travel_umrah.ID_TRAVEL AND paket_umrah.ID_MASKAPAI = maskapai.ID_MASKAPAI AND paket_umrah.ID_KAMAR = kamar_hotel.ID_KAMAR AND paket_umrah.ID_PAKET_KATERING = paket_katering.ID_PAKET_KATERING AND kamar_hotel.ID_HOTEL = hotel.ID_HOTEL AND pemesanan.ID_PAKET = paket_umrah.ID_PAKET AND paket_katering.ID_KATERING = katering.ID_KATERING AND paket_umrah.ID_PAKET = "'.$id.'"';
		$query_review = 'SELECT * FROM pemesanan INNER JOIN user WHERE pemesanan.EMAIL_USER = user.EMAIL_USER AND pemesanan.ID_PAKET = "'.$id.'"';

        $data['konten'] = $this->User_Model->showByID($query_paket);
        $data['review'] = $this->User_Model->tampil($query_review);
		$this->load->view('user/header');
		$this->load->view('user/infopaket', $data);
		$this->load->view('user/footer');
	}

	public function maskapai(){
		$query_maskapai = 'SELECT * FROM maskapai';
		$data['maskapai'] = $this->User_Model->tampil($query_maskapai);
		$this->load->view('user/header');
		$this->load->view('user/maskapai', $data);
		$this->load->view('user/footer');
	}

	public function review_maskapai($id){
		$query_maskapai = 'SELECT *, AVG(pemesanan.SKOR_MASKAPAI) AS SKOR_TOTAL FROM maskapai INNER JOIN pemesanan, paket_umrah WHERE maskapai.ID_MASKAPAI = paket_umrah.ID_MASKAPAI AND pemesanan.ID_PAKET = paket_umrah.ID_PAKET AND maskapai.ID_MASKAPAI = "'.$id.'"';
		$data['konten'] = $this->User_Model->showByID($query_maskapai);
		$this->load->view('user/header');
		$this->load->view('user/infomaskapai', $data);
		$this->load->view('user/footer');
	}

	public function paketkat(){
		$query_paketkat = 'SELECT * FROM paket_katering';
		$data['paketkat'] = $this->User_Model->tampil($query_paketkat);
		$this->load->view('user/header');
		$this->load->view('user/paketkat', $data);
		$this->load->view('user/footer');
	}

	public function review_paketkat($id){
		$query_paketkat = 'SELECT *, AVG(pemesanan.SKOR_CATERING) AS SKOR_TOTAL FROM paket_katering INNER JOIN pemesanan, paket_umrah, katering WHERE paket_katering.ID_PAKET_KATERING = paket_umrah.ID_PAKET_KATERING AND pemesanan.ID_PAKET = paket_umrah.ID_PAKET AND paket_katering.ID_KATERING = katering.ID_KATERING AND paket_katering.ID_PAKET_KATERING = "'.$id.'"';
		$data['konten'] = $this->User_Model->showByID($query_paketkat);
		$this->load->view('user/header');
		$this->load->view('user/infopaketkat', $data);
		$this->load->view('user/footer');
	}

	public function kamar(){
		$query_kamar = 'SELECT * FROM kamar_hotel INNER JOIN hotel WHERE kamar_hotel.ID_HOTEL = hotel.ID_HOTEL';
		$data['kamar'] = $this->User_Model->tampil($query_kamar);
		$this->load->view('user/header');
		$this->load->view('user/kamar', $data);
		$this->load->view('user/footer');
	}

	public function review_kamar($id){
		$query_kamar = 'SELECT *, AVG(pemesanan.SKOR_HOTEL) AS SKOR_TOTAL FROM kamar_hotel INNER JOIN pemesanan, paket_umrah, hotel WHERE kamar_hotel.ID_KAMAR = paket_umrah.ID_KAMAR AND pemesanan.ID_PAKET = paket_umrah.ID_PAKET AND kamar_hotel.ID_HOTEL = hotel.ID_HOTEL AND kamar_hotel.ID_KAMAR = "'.$id.'"';
		$data['konten'] = $this->User_Model->showByID($query_kamar);
		$this->load->view('user/header');
		$this->load->view('user/infokamar', $data);
		$this->load->view('user/footer');
	}

	public function review($id){
		$data['konten'] = $this->User_Model->view_review($id);
		$this->load->view('user/header');
		$this->load->view('user/review', $data);
		$this->load->view('user/footer');
	}

	function update_review(){
		$id = $this->input->post('id');
        $data = array(
          'SKOR_UMROH' => $this->input->post('skor_umroh'),
          'SKOR_CATERING' => $this->input->post('skor_katering'),
          'SKOR_HOTEL' => $this->input->post('skor_hotel'),
          'ISI_RIVIEW' => $this->input->post('isi_review')
        );

        $id_column = 'ID_PEMESANAN';
        $tabel = 'pemesanan';
        $result = $this->User_Model->ubah($id_column, $id, $tabel, $data);
        if($result){
          redirect('Homepage/index');
        }
	}

	function pesan_paket($id){
		$id = $this->input->post('id');
		$email = $this->input->post('email');
		$date = date('Y-m-d');

        $data = array(
          'ID_PAKET' => $id,
          'EMAIL_USER' => $email,
          'TANGGAL' => $date,
          'VALIDASI' => 'B'
        );

        $tabel = 'pemesanan';
        $result = $this->User_Model->simpan($tabel, $data);
        if($result){
          redirect('Homepage/index');
        }
	}

	function tambah_kontak(){
        $data = array(
          'NAMA' => $this->input->post('nama'),
          'EMAIL' => $this->input->post('email'),
          'PESAN' => $this->input->post('pesan')          
        );

        $tabel = 'kontak';

        $result = $this->User_Model->simpan($tabel, $data);
        if($result){
            redirect('Homepage/index');
        }
    }

	public function profil($id){
		$query_profil = 'SELECT * FROM user WHERE EMAIL_USER = "'.$id.'"';
		$data['konten'] = $this->User_Model->showByID($query_profil);
        $this->load->view('user/header');
		$this->load->view('user/edit_user', $data);
		$this->load->view('user/footer');
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

	function edit_profil(){
		$id = $this->input->post('email');
        $data = array(
          'NAMA' => $this->input->post('nama'),
          'ALAMAT' => $this->input->post('alamat'),
          'NO_TELP' => $this->input->post('telp'),
          'PASSWORD' => $this->input->post('pass'),
          'JENIS_KELAMIN' => $this->input->post('jk')
        );

        if($this->input->post('gambar') != null){
        	$url = $this->User_Model->upload_image();
        	$data['GAMBAR']  = $url;
        }

        $id_column = 'EMAIL_USER';
        $tabel = 'user';
        $result = $this->User_Model->ubah($id_column, $id, $tabel, $data);
        if($result){
          redirect('Homepage');
        }
	}
}?>