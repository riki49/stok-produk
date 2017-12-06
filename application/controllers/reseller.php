<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reseller extends CI_Controller {

public function __construct() {
	parent::__construct();
	$this->load->model('modelkastamer');
	if ($this->session->userdata('isLogin') ==FALSE) {
	redirect('');
}
}

	public function index() {
		$this->read();
	}
	public function read()
	{
		$data['reseller'] = $this->modelkastamer->readkastamer();
		$this->load->view('reseller/m_kastamer',$data);
	}
	public function create()
	{
		if ($this->input->post()){
			$this->modelkastamer->createkastamer();
			redirect('reseller');
		}else{
			$this->load->view('reseller/formkastamer');
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

