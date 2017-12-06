<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produk extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('modelproduk');
	if ($this->session->userdata('status') !=TRUE) {
		redirect('login');
	}
	
}

	public function create(){
		if ($this->input->post()){
			$this->modelproduk->createproduk();
			redirect('produk');
		}else{
			$jenis= $this->modelproduk->jenis();
			$level = $this->modelproduk->level();
			// $this->load->view('produk/formproduk', array('jenis' => $jenis), array('level' => $level));
			$this->load->view('admin/formproduk');
		}
	}
	public function update($id) {
		if ($this->input->post()){
			$this->modelproduk->updateproduk($id);
			redirect('produk');
		} else {
			$data['m_produk']=$this->modelproduk->detailproduk($id);
			$jenis= $this->modelproduk->jenis();
			$level = $this->modelproduk->level();
			// $this->load->view('produk/formproduk',$data, array('jenis' => $jenis), array('level' => $level));
			$this->load->view('produk/formproduk',$data);
		}
	}
	public function delete($id){
		$this->modelproduk->deleteproduk($id);
		redirect ('produk');
	}
}

