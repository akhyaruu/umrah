<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
   		$this->load->model('Admin_Model');
		if($this->session->userdata('logged_in') !== TRUE) {
			redirect('Homepage');
		}
        if($this->session->userdata('LEVEL') !== 'admin') {
            redirect('Homepage');
        }
	}

	function index() {
		// $query_travel = '';
  //       $data['travel'] = $this->Admin_Model->tampil($query_travel);
        $this->load->view('newadmin/layouts/header');
        $this->load->view('newadmin/layouts/sidebar');
        $this->load->view('newadmin/dashboard');
        $this->load->view('newadmin/layouts/footer');
	}

    function travel(){
        $this->load->library('pagination');

        if ($this->input->post('submit')) {
            $data['keyword'] =  $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('NAMA_TRAVEL', $data['keyword']);
        $this->db->from('travel_umrah');
        $config['base_url'] = 'http://localhost/CodeIngniter/Umrah/Admin/travel';
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $kolom_search = 'NAMA_TRAVEL';
        $tabel = 'travel_umrah';
        $data['travel'] = $this->Admin_Model->view($config['per_page'], $data['start'], $data['keyword'], $kolom_search, $tabel);
        $this->load->view('newadmin/layouts/header');
        $this->load->view('newadmin/layouts/sidebar');
        $this->load->view('newadmin/travel_umrah', $data);
        $this->load->view('newadmin/layouts/footer');
    }

    function detail_travel($id){
        $query_travel = 'SELECT * FROM travel_umrah WHERE ID_TRAVEL = "'.$id.'"';
        $data['konten'] = $this->Admin_Model->editByID($query_travel);
        $this->load->view('newadmin/layouts/header');
        $this->load->view('newadmin/layouts/sidebar');
        $this->load->view('newadmin/detail_travel', $data);
        $this->load->view('newadmin/layouts/footer');
    }

    function tambah(){
        $url = $this->Admin_Model->upload_image();

        $data = array(
          'NAMA_TRAVEL' => $this->input->post('nama_travel'),
          'KETERANGAN_TRAVEL' => $this->input->post('keterangan'),
          'NO_TELP' => $this->input->post('no_telp'),
          'EMAIL_TRAVEL' => $this->input->post('email'),
          'ALAMAT' => $this->input->post('alamat'),
          'GAMBAR_TRAVEL' => $url,
          'LINK' => $this->input->post('link_wa')            
        );

        $tabel = 'travel_umrah';

        $result = $this->Admin_Model->simpan($tabel, $data);
        if($result){
            redirect('admin/travel');
        }
    }

    function edit_travel($id){
        $query_travel = 'SELECT * FROM travel_umrah WHERE ID_TRAVEL = "'.$id.'"';
        $data['konten'] = $this->Admin_Model->editByID($query_travel);
        $this->load->view('newadmin/layouts/header');
        $this->load->view('newadmin/layouts/sidebar');
        $this->load->view('newadmin/edit_travel', $data);
        $this->load->view('newadmin/layouts/footer');
    }

    function ubah(){
        $id = $this->input->post('id');
        $data = array(
          'ID_TRAVEL' => $id,
          'NAMA_TRAVEL' => $this->input->post('nama_travel'),
          'KETERANGAN_TRAVEL' => $this->input->post('keterangan'),
          'NO_TELP' => $this->input->post('no_telp'),
          'EMAIL_TRAVEL' => $this->input->post('email'),
          'ALAMAT' => $this->input->post('alamat'),
          'LINK' => $this->input->post('link_wa')
        );

        if($this->input->post('gambar') != null){
            $url = $this->Admin_Model->upload_image();
            $data['GAMBAR_TRAVEL']  = $url;
        }

        $id_column = 'ID_TRAVEL';
        $tabel = 'travel_umrah';
        $result = $this->Admin_Model->ubah($id_column, $id, $tabel, $data);
        if($result){
          redirect('admin/travel');
        }
    }

    function hapus_travel($id){
        $id_column = 'ID_TRAVEL';
        $tabel = 'travel_umrah';
        $result = $this->Admin_Model->hapus($id_column, $id, $tabel);
        if($result){
          redirect('admin/travel');
        } 
    }

    function user(){
        $this->load->library('pagination');

        if ($this->input->post('submit')) {
            $data['keyword'] =  $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('NAMA', $data['keyword']);
        $this->db->from('user');
        $config['base_url'] = 'http://localhost/CodeIngniter/Umrah/Admin/user';
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 10;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $kolom_search = 'NAMA';
        $tabel = 'user';
        $data['user'] = $this->Admin_Model->view_user($config['per_page'], $data['start'], $data['keyword'], $kolom_search, $tabel);
        $this->load->view('newadmin/layouts/header');
        $this->load->view('newadmin/layouts/sidebar');
        $this->load->view('newadmin/user', $data);
        $this->load->view('newadmin/layouts/footer');
    }

    function maskapai(){
        $this->load->library('pagination');

        if ($this->input->post('submit')) {
            $data['keyword'] =  $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('NAMA_MASKAPAI', $data['keyword']);
        $this->db->from('maskapai');
        $config['base_url'] = 'http://localhost/CodeIngniter/Umrah/Admin/maskapai';
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $kolom_search = 'NAMA_MASKAPAI';
        $tabel = 'maskapai';
        $data['maskapai'] = $this->Admin_Model->view($config['per_page'], $data['start'], $data['keyword'], $kolom_search, $tabel);
        $this->load->view('newadmin/layouts/header');
        $this->load->view('newadmin/layouts/sidebar');
        $this->load->view('newadmin/maskapai', $data);
        $this->load->view('newadmin/layouts/footer');
    }

    function tambah_maskapai(){
        $url = $this->Admin_Model->upload_image();

        $data = array(
          'NAMA_MASKAPAI' => $this->input->post('nama_maskapai'),
          'KETERANGAN_MASKAPAI' => $this->input->post('keterangan'),
          'GAMBAR_MASKAPAI' => $url         
        );

        $tabel = 'maskapai';

        $result = $this->Admin_Model->simpan($tabel, $data);
        if($result){
            redirect('admin/maskapai');
        }
    }

    function edit_maskapai($id){
        $query_maskapai = 'SELECT * FROM maskapai WHERE ID_MASKAPAI = "'.$id.'"';
        $data['konten'] = $this->Admin_Model->editByID($query_maskapai);
        $this->load->view('newadmin/layouts/header');
        $this->load->view('newadmin/layouts/sidebar');
        $this->load->view('newadmin/edit_maskapai', $data);
        $this->load->view('newadmin/layouts/footer');
    }

    function ubah_maskapai(){
        $id = $this->input->post('id');
        $data = array(
          'ID_MASKAPAI' => $id,
          'NAMA_MASKAPAI' => $this->input->post('nama_travel'),
          'KETERANGAN_MASKAPAI' => $this->input->post('keterangan')
        );

        if($this->input->post('gambar') != null){
            $url = $this->Admin_Model->upload_image();
            $data['GAMBAR_MASKAPAI']  = $url;
        }

        $id_column = 'ID_MASKAPAI';
        $tabel = 'maskapai';
        $result = $this->Admin_Model->ubah($id_column, $id, $tabel, $data);
        if($result){
          redirect('admin/maskapai');
        }
    }

    function hapus_maskapai($id){
        $id_column = 'ID_MASKAPAI';
        $tabel = 'maskapai';
        $result = $this->Admin_Model->hapus($id_column, $id, $tabel);
        if($result){
          redirect('admin/maskapai');
        } 
    }


    function paketkat(){
        $this->load->library('pagination');

        if ($this->input->post('submit')) {
            $data['keyword'] =  $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('NAMA_PAKET_KATERING', $data['keyword']);
        $this->db->from('paket_katering');
        $config['base_url'] = 'http://localhost/CodeIngniter/Umrah/Admin/paketkat';
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $kolom_search = 'NAMA_PAKET_KATERING';
        $tabel = 'paket_katering';
        $data['paketkat'] = $this->Admin_Model->view($config['per_page'], $data['start'], $data['keyword'], $kolom_search, $tabel);
        $query_paketkat = 'SELECT * FROM katering';
        $data['katering'] = $this->Admin_Model->tampil($query_paketkat);
        $this->load->view('newadmin/layouts/header');
        $this->load->view('newadmin/layouts/sidebar');
        $this->load->view('newadmin/paketkat', $data);
        $this->load->view('newadmin/layouts/footer');
    }

    function detail_paketkat($id){
        $query_paketkat = 'SELECT * FROM paket_katering INNER JOIN katering WHERE paket_katering.ID_KATERING = katering.ID_KATERING AND ID_PAKET_KATERING = "'.$id.'"';
        $data['konten'] = $this->Admin_Model->editByID($query_paketkat);
        $this->load->view('newadmin/layouts/header');
        $this->load->view('newadmin/layouts/sidebar');
        $this->load->view('newadmin/detail_paketkat', $data);
        $this->load->view('newadmin/layouts/footer');
    }

    function tambah_paketkat(){
        $url = $this->Admin_Model->upload_image();

        $data = array(
          'ID_KATERING' => $this->input->post('katering'),
          'NAMA_PAKET_KATERING' => $this->input->post('nama_katering'),
          'KETERANGAN_PAKET' => $this->input->post('keterangan'),
          'HARGA_PAKET_KATERING' => $this->input->post('harga'),
          'GAMBAR_PAKET_KATERING' => $url         
        );

        $tabel = 'paket_katering';

        $result = $this->Admin_Model->simpan($tabel, $data);
        if($result){
            redirect('admin/paketkat');
        }
    }

    function edit_paketkat($id){
        $query_paketkat = 'SELECT * FROM paket_katering INNER JOIN katering WHERE paket_katering.ID_KATERING = katering.ID_KATERING AND ID_PAKET_KATERING = "'.$id.'"';
        $query_kat = 'SELECT * FROM katering';
        $data['katering'] = $this->Admin_Model->tampil($query_kat);
        $data['konten'] = $this->Admin_Model->editByID($query_paketkat);
        $this->load->view('newadmin/layouts/header');
        $this->load->view('newadmin/layouts/sidebar');
        $this->load->view('newadmin/edit_paketkat', $data);
        $this->load->view('newadmin/layouts/footer');
    }

    function ubah_paketkat(){
        $id = $this->input->post('id');
        $data = array(
          'ID_KATERING' => $this->input->post('katering'),
          'NAMA_PAKET_KATERING' => $this->input->post('nama_katering'),
          'KETERANGAN_PAKET' => $this->input->post('keterangan'),
          'HARGA_PAKET_KATERING' => $this->input->post('harga')   
        );

        if($this->input->post('gambar') != null){
            $url = $this->Admin_Model->upload_image();
            $data['GAMBAR_PAKET_KATERING']  = $url;
        }

        $id_column = 'ID_PAKET_KATERING';
        $tabel = 'paket_katering';
        $result = $this->Admin_Model->ubah($id_column, $id, $tabel, $data);
        if($result){
          redirect('admin/paketkat');
        }
    }

    function hapus_paketkat($id){
        $id_column = 'ID_PAKET_KATERING';
        $tabel = 'paket_katering';
        $result = $this->Admin_Model->hapus($id_column, $id, $tabel);
        if($result){
          redirect('admin/paketkat');
        } 
    }

    function katering(){
        $this->load->library('pagination');

        if ($this->input->post('submit')) {
            $data['keyword'] =  $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('NAMA_KATERING', $data['keyword']);
        $this->db->from('katering');
        $config['base_url'] = 'http://localhost/CodeIngniter/Umrah/Admin/katering';
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $kolom_search = 'NAMA_KATERING';
        $tabel = 'katering';
        $data['katering'] = $this->Admin_Model->view($config['per_page'], $data['start'], $data['keyword'], $kolom_search, $tabel);
        $this->load->view('newadmin/layouts/header');
        $this->load->view('newadmin/layouts/sidebar');
        $this->load->view('newadmin/katering', $data);
        $this->load->view('newadmin/layouts/footer');
    }

    function tambah_katering(){
        $url = $this->Admin_Model->upload_image();

        $data = array(
          'NAMA_KATERING' => $this->input->post('nama_katering'),
          'SPESIALISASI' => $this->input->post('spesialis'),
          'GAMBAR_KATERING' => $url         
        );

        $tabel = 'katering';

        $result = $this->Admin_Model->simpan($tabel, $data);
        if($result){
            redirect('admin/katering');
        }
    }

    function edit_katering($id){
        $query_katering = 'SELECT * FROM katering WHERE ID_KATERING = "'.$id.'"';
        $data['konten'] = $this->Admin_Model->editByID($query_katering);
        $this->load->view('newadmin/layouts/header');
        $this->load->view('newadmin/layouts/sidebar');
        $this->load->view('newadmin/edit_katering', $data);
        $this->load->view('newadmin/layouts/footer');
    }

    function ubah_katering(){
        $id = $this->input->post('id');
        $data = array(
          'NAMA_KATERING' => $this->input->post('nama_katering'),
          'SPESIALISASI' => $this->input->post('spesialis')
        );

        if($this->input->post('gambar') != null){
            $url = $this->Admin_Model->upload_image();
            $data['GAMBAR_KATERING']  = $url;
        }

        $id_column = 'ID_KATERING';
        $tabel = 'katering';
        $result = $this->Admin_Model->ubah($id_column, $id, $tabel, $data);
        if($result){
          redirect('admin/katering');
        }
    }

    function hapus_katering($id){
        $id_column = 'ID_KATERING';
        $tabel = 'katering';
        $result = $this->Admin_Model->hapus($id_column, $id, $tabel);
        if($result){
          redirect('admin/katering');
        } 
    }

    function hotel(){
        $this->load->library('pagination');

        if ($this->input->post('submit')) {
            $data['keyword'] =  $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('NAMA_HOTEL', $data['keyword']);
        $this->db->from('hotel');
        $config['base_url'] = 'http://localhost/CodeIngniter/Umrah/Admin/hotel';
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $kolom_search = 'NAMA_HOTEL';
        $tabel = 'hotel';
        $data['hotel'] = $this->Admin_Model->view($config['per_page'], $data['start'], $data['keyword'], $kolom_search, $tabel);
        $this->load->view('newadmin/layouts/header');
        $this->load->view('newadmin/layouts/sidebar');
        $this->load->view('newadmin/hotel', $data);
        $this->load->view('newadmin/layouts/footer');
    }

    function tambah_hotel(){
        $url = $this->Admin_Model->upload_image();

        $data = array(
          'NAMA_HOTEL' => $this->input->post('nama_hotel'),
          'KETERANGAN_HOTEL' => $this->input->post('keterangan'),
          'GAMBAR_HOTEL' => $url         
        );

        $tabel = 'hotel';

        $result = $this->Admin_Model->simpan($tabel, $data);
        if($result){
            redirect('admin/hotel');
        }
    }

    function edit_hotel($id){
        $query_hotel = 'SELECT * FROM hotel WHERE ID_HOTEL = "'.$id.'"';
        $data['konten'] = $this->Admin_Model->editByID($query_hotel);
        $this->load->view('newadmin/layouts/header');
        $this->load->view('newadmin/layouts/sidebar');
        $this->load->view('newadmin/edit_hotel', $data);
        $this->load->view('newadmin/layouts/footer');
    }

    function ubah_hotel(){
        $id = $this->input->post('id');
        $data = array(
          'NAMA_HOTEL' => $this->input->post('nama_hotel'),
          'KETERANGAN_HOTEL' => $this->input->post('keterangan')
        );

        if($this->input->post('gambar') == null){
            $url = $this->Admin_Model->upload_image();
            $data['GAMBAR_HOTEL']  = $url;
        }

        $id_column = 'ID_HOTEL';
        $tabel = 'hotel';
        $result = $this->Admin_Model->ubah($id_column, $id, $tabel, $data);
        if($result){
          redirect('admin/hotel');
        }
    }

    function hapus_hotel($id){
        $id_column = 'ID_HOTEL';
        $tabel = 'hotel';
        $result = $this->Admin_Model->hapus($id_column, $id, $tabel);
        if($result){
          redirect('admin/hotel');
        } 
    }

    function kamar_hotel(){
        $this->load->library('pagination');

        if ($this->input->post('submit')) {
            $data['keyword'] =  $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('NAMA_KAMAR', $data['keyword']);
        $this->db->from('kamar_hotel');
        $config['base_url'] = 'http://localhost/CodeIngniter/Umrah/Admin/kamar_hotel';
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $kolom_search = 'NAMA_KAMAR';
        $tabel = 'kamar_hotel';
        $data['kamar'] = $this->Admin_Model->view($config['per_page'], $data['start'], $data['keyword'], $kolom_search, $tabel);
        $query_kamar = 'SELECT * FROM hotel';
        $data['isi'] = $this->Admin_Model->tampil($query_kamar);
        $this->load->view('newadmin/layouts/header');
        $this->load->view('newadmin/layouts/sidebar');
        $this->load->view('newadmin/kamar_hotel', $data);
        $this->load->view('newadmin/layouts/footer');
    }

    function detail_kamar_hotel($id){
        $query_kamar = 'SELECT * FROM kamar_hotel INNER JOIN hotel WHERE kamar_hotel.ID_HOTEL = hotel.ID_HOTEL AND kamar_hotel.ID_HOTEL = "'.$id.'"';
        $data['konten'] = $this->Admin_Model->editByID($query_kamar);
        $this->load->view('newadmin/layouts/header');
        $this->load->view('newadmin/layouts/sidebar');
        $this->load->view('newadmin/detail_kamar_hotel', $data);
        $this->load->view('newadmin/layouts/footer');
    }

    function tambah_kamar_hotel(){
        $data = array(
          'ID_HOTEL' => $this->input->post('hotel'),
          'NAMA_KAMAR' => $this->input->post('nama_kamar'),
          'FASILITAS' => $this->input->post('fasilitas'),
          'HARGA_KAMAR' => $this->input->post('harga')         
        );

        $tabel = 'kamar_hotel';

        $result = $this->Admin_Model->simpan($tabel, $data);
        if($result){
            redirect('admin/kamar_hotel');
        }
    }

    function edit_kamar_hotel($id){
        $query_hotel = 'SELECT * FROM kamar_hotel INNER JOIN hotel WHERE kamar_hotel.ID_HOTEL = hotel.ID_HOTEL AND kamar_hotel.ID_HOTEL = "'.$id.'"';
        $query_kamar = 'SELECT * FROM hotel';
        $data['isi'] = $this->Admin_Model->tampil($query_kamar);
        $data['konten'] = $this->Admin_Model->editByID($query_hotel);
        $this->load->view('newadmin/layouts/header');
        $this->load->view('newadmin/layouts/sidebar');
        $this->load->view('newadmin/edit_kamar_hotel', $data);
        $this->load->view('newadmin/layouts/footer');
    }

    function ubah_kamar_hotel(){
        $id = $this->input->post('id');
        $data = array(
          'ID_HOTEL' => $this->input->post('hotel'),
          'NAMA_KAMAR' => $this->input->post('nama_kamar'),
          'FASILITAS' => $this->input->post('fasilitas'),
          'HARGA_KAMAR' => $this->input->post('harga') 
        );

        $id_column = 'ID_KAMAR';
        $tabel = 'kamar_hotel';
        $result = $this->Admin_Model->ubah($id_column, $id, $tabel, $data);
        if($result){
          redirect('admin/kamar_hotel');
        }
    }

    function hapus_kamar_hotel($id){
        $id_column = 'ID_KAMAR';
        $tabel = 'kamar_hotel';
        $result = $this->Admin_Model->hapus($id_column, $id, $tabel);
        if($result){
          redirect('admin/kamar_hotel');
        } 
    }

    function pemesanan(){

        if ($this->input->post('submit')) {
            $data['keyword'] =  $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $config['base_url'] = 'http://localhost/CodeIngniter/Umrah/Admin/pemesanan';
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];

        $this->pagination->initialize($config);

        $kolom_search = 'ID_PEMESANAN';
        $data['order'] = $this->Admin_Model->view_join( $data['keyword'], $kolom_search);
        $this->load->view('newadmin/layouts/header');
        $this->load->view('newadmin/layouts/sidebar');
        $this->load->view('newadmin/pemesanan', $data);
        $this->load->view('newadmin/layouts/footer');
    }

    function validasi($id){
        $data = array(
          'VALIDASI' => $this->input->post('valid') 
        );

        $id_column = 'ID_PEMESANAN';
        $tabel = 'pemesanan';
        $result = $this->Admin_Model->ubah($id_column, $id, $tabel, $data);
        if($result){
          redirect('admin/pemesanan');
        }
    }

    function paket_umroh(){
        $this->load->library('pagination');

        if ($this->input->post('submit')) {
            $data['keyword'] =  $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('NAMA_PAKET_UMROH', $data['keyword']);
        $this->db->from('paket_umrah');
        $config['base_url'] = 'http://localhost/CodeIngniter/Umrah/Admin/paket_umroh';
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $kolom_search = 'NAMA_PAKET_UMROH';
        $tabel = 'paket_umrah';
        $data['paket'] = $this->Admin_Model->view($config['per_page'], $data['start'], $data['keyword'], $kolom_search, $tabel);
        $query_travel = 'SELECT ID_TRAVEL, NAMA_TRAVEL FROM travel_umrah';
        $query_maskapai = 'SELECT ID_MASKAPAI, NAMA_MASKAPAI FROM maskapai';
        $query_kamar = 'SELECT ID_KAMAR, NAMA_KAMAR FROM kamar_hotel';
        $query_paketkat = 'SELECT ID_PAKET_KATERING, NAMA_PAKET_KATERING FROM paket_katering';
        $data['travel'] = $this->Admin_Model->tampil($query_travel);
        $data['maskapai'] = $this->Admin_Model->tampil($query_maskapai);
        $data['kamar'] = $this->Admin_Model->tampil($query_kamar);
        $data['paketkat'] = $this->Admin_Model->tampil($query_paketkat);
        $this->load->view('newadmin/layouts/header');
        $this->load->view('newadmin/layouts/sidebar');
        $this->load->view('newadmin/paket_umroh', $data);
        $this->load->view('newadmin/layouts/footer');
    }

    function detail_paket_umroh($id){
        $query_paket = 'SELECT * FROM paket_umrah inner join travel_umrah, maskapai, kamar_hotel, paket_katering, hotel, katering WHERE paket_umrah.ID_TRAVEL = travel_umrah.ID_TRAVEL AND paket_umrah.ID_MASKAPAI = maskapai.ID_MASKAPAI AND paket_umrah.ID_KAMAR = kamar_hotel.ID_KAMAR AND paket_umrah.ID_PAKET_KATERING = paket_katering.ID_PAKET_KATERING AND kamar_hotel.ID_HOTEL = hotel.ID_HOTEL AND paket_katering.ID_KATERING = katering.ID_KATERING AND paket_umrah.ID_PAKET = "'.$id.'"';
        $data['konten'] = $this->Admin_Model->editByID($query_paket);
        $this->load->view('newadmin/layouts/header');
        $this->load->view('newadmin/layouts/sidebar');
        $this->load->view('newadmin/detail_paket_umroh', $data);
        $this->load->view('newadmin/layouts/footer');
    }

    function tambah_paket_umroh(){
        $url = $this->Admin_Model->upload_image();
        $data = array(
          'ID_TRAVEL' => $this->input->post('travel'),
          'ID_MASKAPAI' => $this->input->post('maskapai'),
          'ID_KAMAR' => $this->input->post('kamar'),
          'ID_PAKET_KATERING' => $this->input->post('katering'),
          'NAMA_PAKET_UMROH' => $this->input->post('nama_paket_umroh'),
          'KEBERANGKATAN' => $this->input->post('keberangkatan'),
          'KEDATANGAN' => $this->input->post('kedatangan'),
          'HARGA_PAKET_UMROH' => $this->input->post('harga'),
          'GAMBAR_PAKET_UMROH' => $url         
        );

        $tabel = 'paket_umrah';

        $result = $this->Admin_Model->simpan($tabel, $data);
        if($result){
            redirect('admin/paket_umroh');
        }
    }

    function edit_paket_umroh($id){
        $query_paket = 'SELECT * FROM paket_umrah inner join travel_umrah, maskapai, kamar_hotel, paket_katering, hotel, katering WHERE paket_umrah.ID_TRAVEL = travel_umrah.ID_TRAVEL AND paket_umrah.ID_MASKAPAI = maskapai.ID_MASKAPAI AND paket_umrah.ID_KAMAR = kamar_hotel.ID_KAMAR AND paket_umrah.ID_PAKET_KATERING = paket_katering.ID_PAKET_KATERING AND kamar_hotel.ID_HOTEL = hotel.ID_HOTEL AND paket_katering.ID_KATERING = katering.ID_KATERING AND paket_umrah.ID_PAKET = "'.$id.'"';
        $data['konten'] = $this->Admin_Model->editByID($query_paket);

        $query_travel = 'SELECT ID_TRAVEL, NAMA_TRAVEL FROM travel_umrah';
        $query_maskapai = 'SELECT ID_MASKAPAI, NAMA_MASKAPAI FROM maskapai';
        $query_kamar = 'SELECT ID_KAMAR, NAMA_KAMAR FROM kamar_hotel';
        $query_paketkat = 'SELECT ID_PAKET_KATERING, NAMA_PAKET_KATERING FROM paket_katering';
        $data['travel'] = $this->Admin_Model->tampil($query_travel);
        $data['maskapai'] = $this->Admin_Model->tampil($query_maskapai);
        $data['kamar'] = $this->Admin_Model->tampil($query_kamar);
        $data['paketkat'] = $this->Admin_Model->tampil($query_paketkat);

        $this->load->view('newadmin/layouts/header');
        $this->load->view('newadmin/layouts/sidebar');
        $this->load->view('newadmin/edit_paket_umroh', $data);
        $this->load->view('newadmin/layouts/footer');
    }

    function ubah_paket_umroh(){
        $id = $this->input->post('id');
        $data = array(
          'ID_TRAVEL' => $this->input->post('travel'),
          'ID_MASKAPAI' => $this->input->post('maskapai'),
          'ID_KAMAR' => $this->input->post('kamar'),
          'ID_PAKET_KATERING' => $this->input->post('katering'),
          'NAMA_PAKET_UMROH' => $this->input->post('nama_paket_umroh'),
          'KEBERANGKATAN' => $this->input->post('keberangkatan'),
          'KEDATANGAN' => $this->input->post('kedatangan'),
          'HARGA_PAKET_UMROH' => $this->input->post('harga')
        );

        if($this->input->post('gambar') != null){
            $url = $this->Admin_Model->upload_image();
            $data['GAMBAR_PAKET_UMROH']  = $url;
        }

        $id_column = 'ID_PAKET';
        $tabel = 'paket_umrah';
        $result = $this->Admin_Model->ubah($id_column, $id, $tabel, $data);
        if($result){
          redirect('admin/paket_umroh');
        }
    }

    function hapus_paket_umroh($id){
        $id_column = 'ID_PAKET';
        $tabel = 'paket_umrah';
        $result = $this->Admin_Model->hapus($id_column, $id, $tabel);
        if($result){
          redirect('admin/paket_umroh');
        } 
    }

    function berita(){
        $this->load->library('pagination');

        if ($this->input->post('submit')) {
            $data['keyword'] =  $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('JUDUL', $data['keyword']);
        $this->db->from('berita');
        $config['base_url'] = 'http://localhost/CodeIngniter/Umrah/Admin/berita';
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 2;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $kolom_search = 'JUDUL';
        $tabel = 'berita';
        $data['berita'] = $this->Admin_Model->view($config['per_page'], $data['start'], $data['keyword'], $kolom_search, $tabel);
        $this->load->view('newadmin/layouts/header');
        $this->load->view('newadmin/layouts/sidebar');
        $this->load->view('newadmin/berita', $data);
        $this->load->view('newadmin/layouts/footer');
    }

    function tambah_berita(){
        $url = $this->Admin_Model->upload_image();
        $date = date('Y-m-d');

        $data = array(
          'JUDUL' => $this->input->post('judul'),
          'ISI_BERITA' => $this->input->post('isi'),
          'GAMBAR_BERITA' => $url,
          'TANGGAL' => $date         
        );

        $tabel = 'berita';

        $result = $this->Admin_Model->simpan($tabel, $data);
        if($result){
            redirect('admin/berita');
        }
    }

    function edit_berita($id){
        $query_maskapai = 'SELECT * FROM berita WHERE ID_BERITA = "'.$id.'"';
        $data['konten'] = $this->Admin_Model->editByID($query_maskapai);
        $this->load->view('newadmin/layouts/header');
        $this->load->view('newadmin/layouts/sidebar');
        $this->load->view('newadmin/edit_berita', $data);
        $this->load->view('newadmin/layouts/footer');
    }

    function ubah_berita(){
        $id = $this->input->post('id');
        $data = array(
          'JUDUL' => $this->input->post('judul'),
          'ISI_BERITA' => $this->input->post('isi')
        );

        if($this->input->post('gambar') != null){
            $url = $this->Admin_Model->upload_image();
            $data['GAMBAR_BERITA']  = $url;
        }

        $id_column = 'ID_BERITA';
        $tabel = 'berita';
        $result = $this->Admin_Model->ubah($id_column, $id, $tabel, $data);
        if($result){
          redirect('admin/berita');
        }
    }

    function hapus_berita($id){
        $id_column = 'ID_BERITA';
        $tabel = 'berita';
        $result = $this->Admin_Model->hapus($id_column, $id, $tabel);
        if($result){
          redirect('admin/berita');
        } 
    }

    function kontak(){

        if ($this->input->post('submit')) {
            $data['keyword'] =  $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('EMAIL', $data['keyword']);
        $this->db->from('kontak');
        $config['base_url'] = 'http://localhost/CodeIngniter/Umrah/Admin/kontak';
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $kolom_search = 'EMAIL';
        $tabel = 'kontak';
        $data['kontak'] = $this->Admin_Model->view($config['per_page'], $data['start'], $data['keyword'], $kolom_search, $tabel);
        $this->load->view('newadmin/layouts/header');
        $this->load->view('newadmin/layouts/sidebar');
        $this->load->view('newadmin/kontak', $data);
        $this->load->view('newadmin/layouts/footer');
    }
}