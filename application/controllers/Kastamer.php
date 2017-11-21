<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kastamer extends CI_Controller {

public function __construct() {
	parent::__construct();
	$this->load->model('modelkastamer');
	if ($this->session->userdata('isLogin') ==FALSE) {
	redirect('');
}
}

	public function index()
	{
		$this->read();
	}
	public function read()
	{
		$data['kastamer'] = $this->modelkastamer->readkastamer();
		$this->load->view('kastamer/m_kastamer',$data);
	}
	public function create()
	{
		if ($this->input->post()){
			$this->modelkastamer->createkastamer();
			redirect('kastamer');
		}else{
			$this->load->view('kastamer/formkastamer');
		}
	}
	public function update($id)
	{
		if ($this->input->post()){
			$this->modelkastamer->updatekastamer($id);
			redirect('kastamer');
		} else {
			$data['m_kastamer']=$this->modelkastamer->detailkastamer($id);
			$this->load->view('kastamer/formkastamer',$data);
		}
	}
	public function delete($id){
		$this->modelkastamer->deletekastamer($id);
		redirect ('kastamer');
	}
}

