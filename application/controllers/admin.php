<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('modelproduk');
		if ($this->session->userdata('level') != 'admin') {
			redirect('login');
		}
	}
	// ini fungsi pindahan dari produk
	public function index() {
		$this->read();
	}
	public function read() {

		$data['produk'] = $this->modelproduk->readproduk();
		$this->load->view('user/admin/masterAdminView',$data);
	}

	public function edit() {
		$this->load->view('user/admin/formEditDashboard');	
	}
}