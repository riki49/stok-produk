<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('modelproduk');
		if ($this->session->userdata('level') != 'admin') {
			redirect('login');
		}
	}

	public function create(){
		if ($this->input->post()){
			$this->modelproduk->createproduk();
			redirect('admin');
		}else{
			$this->load->view('user/admin/formAddProduk');
		}
	}
	public function update($id) {
		if ($this->input->post()){
			$jumlah = $this->input->post('jumlah') + $this->input->post('baru');
			$this->modelproduk->updateproduk($id, $jumlah);
			redirect('admin');
		} else {
			$data['m_produk']=$this->modelproduk->detailproduk($id);
			$this->load->view('user/admin/formeditproduk',$data);
		}
	}

	public function delete($id){
		$this->modelproduk->deleteproduk($id);
		redirect ('admin');
	}
}

