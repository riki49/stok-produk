<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('modelproduk');
		if ($this->session->userdata('status') !=TRUE) {
			redirect('login');
		}
	}
	// ini fungsi pindahan dari produk
	public function index() {
		// $user = $this->session->userdata('user');
		// print_r($user);
		$this->read();
	}
	public function read() {
		$data['produk'] = $this->modelproduk->readproduk();
		$this->load->view('admin/m_produk',$data);
	}
}