<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ManageStock extends CI_Controller {

	function __construct(){
		parent::__construct();
			if($this->session->userdata('status') != "login"){
				redirect(base_url("login"));
			}
	}

	public function index() {
		$this->load->view('addProduct');
	}

	public function addStock() {
		// $produk = $this->input->post;
		$tabelName = $this->input->post('name');
		$data = $this->input->post();
		if ($tabelName == 'makaroni') {
			$this->addStockModel->addStock($tabelName, $data);
		} else if ($tabelName == 'batagor') {
			$this->addStockModel->addStock($tabelName, $data);
		} else if ($tabelName == 'lumpia') {
			$this->addStockModel->addStock($tabelName, $data);
		} else if ($tabelName == 'pangsit') {
			$this->addStockModel->addStock($tabelName, $data);
		} else if ($tabelName == 'siomay') {
			$this->addStockModel->addStock($tabelName, $data);
		} else if ($tabelName == 'cimol') {
			$this->addStockModel->addStock($tabelName, $data);
		} else {
			$this->addStockModel->addStock($tabelName, $data);
		}
	}

	public function readAllStock() {
		$data = $this->allStock->getAll();
		$this->load->view('allProduct', array('data' => $data));
	}
	public function ambilStok() {
		
	}

}
?>