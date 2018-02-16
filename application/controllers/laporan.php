<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('akunModel');
		$this->load->model('transaksiModel');
		if ($this->session->userdata('level') != 'admin') {
			redirect('login');
		}
	}

	public function readUser(){
		$dataUser['yes'] = $this->akunModel->readUser();
		$this->load->view('user/admin/masterLaporanUserView', $dataUser);
	}

	// public function readProduk(){
	// 	$dataProduk['yes'] = $this->akunModel->readProduk();
	// 	$this->load->view('user/admin/laporanProduk', $dataProduk);
	// }
	public function readTransaksi(){
			$dataTransaksi['trasnsaksi'] = $this->transaksiModel->readTransaksi();
			$this->load->view('user/admin/masterLaporanTransaksi', $dataTransaksi);
	}
}