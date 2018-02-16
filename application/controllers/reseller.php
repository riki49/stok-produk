<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reseller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('modelproduk');
		$this->load->model('mailModel');
		if ($this->session->userdata('status') !=TRUE) {
			redirect('login');
		}
	}

	public function index() {
		$this->read();
	}

	public function read() {
		$data['produk'] = $this->modelproduk->readproduk();
		$this->load->view('user/reseller/m_kastemer',$data);
	}
	
	public function update($id) {
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

	public function sendMail() {
		if ($this->input->post()){
			$id = $_SESSION['id'];

			$this->mailModel->sendMail($id);
			echo "<script>alert('Sukses kirim pesan');location.href='http://localhost/food/reseller'</script>";
		}else{
			$this->load->view('user/reseller/formEmail');
		}
	}
	public function readMail($id) {
		$inbox['mail'] = $this->mailModel->readMail($id);
		$this->load->view('user/reseller/masterMail', $inbox);
	}

}

