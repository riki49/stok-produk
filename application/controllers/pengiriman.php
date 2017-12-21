<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengiriman extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('modelproduk');
		if ($this->session->userdata('status') !=TRUE) {
			redirect('login');
		}
		
	}


	public function index() {
		$data['produk'] = $this->modelproduk->readproduk();
		$this->load->view('a_pengiriman/masterpengiriman',$data);
	}

	public function loadupdate($id) {
		$data['m_produk']=$this->modelproduk->detailproduk($id);
			$this->load->view('a_pengiriman/formpengiriman',$data);
	}
}