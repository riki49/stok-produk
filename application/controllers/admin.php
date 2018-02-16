<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('modelproduk');
		$this->load->model('mailModel');
		if ($this->session->userdata('level') != 'admin') {
			redirect('login');
		}
	}
	// ini fungsi pindahan dari produk
	public function index() {
		$this->read();
	}
	public function read() {

		$data['produk'] = $this->modelproduk->readproduk();
		$this->load->view('user/admin/masterAdminView',$data);
	}

	public function edit() {
		$this->load->view('user/admin/formEditDashboard');	
	}

	public function sendMail($id) {
		if ($this->input->post()){
			$this->mailModel->sendMail($id, 0);
			echo "<script>alert('Sukses kirim pesan');location.href='http://localhost/food/admin'</script>";
		}else{
			$this->load->view('public/formEmail');
		}
	}
	public function readMail() {
		$inbox['mail'] = $this->mailModel->adminReadMail();
		$this->load->view('user/admin/masterMail', $inbox);
	}
	public function replyMail($id) {
		$this->session->set_userdata( array('id' => $id));
		$this->load->view('user/admin/formEmail', $id);
	}
}