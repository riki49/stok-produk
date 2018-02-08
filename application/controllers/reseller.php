<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reseller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('modelproduk');
		if ($this->session->userdata('status') !=TRUE) {
			redirect('login');
		}
	}

	public function index() {
		$this->read();
	}
	public function tampil() {
		echo $this->input->post('list');
	}
	public function read() {
		$data['produk'] = $this->modelproduk->readproduk();
		$this->load->view('reseller/m_kastemer',$data);
	}
	public function create(){
		if ($this->input->post()){
			$this->modelkastamer->createkastamer();
			redirect('reseller');
		}else{
			$this->load->view('listTransaksi');
		}
	}
	public function update($id)
	{
		if ($this->input->post()){
			$this->modelkastamer->updatekastamer($id);
			redirect('reseller');
		} else {
			$data['m_kastamer']=$this->modelkastamer->detailkastamer($id);
			$this->load->view('reseller/formkastamer',$data);
		}
	}
	public function delete($id){
		$this->modelkastamer->deletekastamer($id);
		redirect ('reseller');
	}
}

