<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pdf extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->helper('form');
        $this->load->library('fpdf');
		$this->load->model('modelproduk');
	}
	public function index(){
        $data['produk']= $this->modelproduk->readproduk();        
		$this->load->view('laporanPDF', $data);
	}
}