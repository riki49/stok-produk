<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ManageStock extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->create();
	}
	public function create() {
		$this->load->view('addProduct');
	}

	public function addStock() {
		echo "tambah stok berhasil";
		echo $this->input->post('date');
		echo $this->input->post('jumlah');
	}	
	public function ambilStok() {
		
	}

}
?>