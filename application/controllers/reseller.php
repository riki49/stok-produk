<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reseller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('modelproduk');
		$this->load->model('mailModel');
		$this->load->model('akunmodel');

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

			$this->mailModel->sendMail($id, 1);
			echo "<script>alert('Sukses kirim pesan');location.href='http://localhost/food/reseller'</script>";
		}else{
			$this->load->view('user/reseller/formEmail');
		}
	}
	public function readMail($id) {
		$inbox['mail'] = $this->mailModel->readMail($id);
		$this->load->view('user/reseller/masterMail', $inbox);
	}

	public function editProfil() {
		$id = $this->session->userdata('id');
		$detail = $this->akunmodel->readDetaildUser($id);

		if ($this->input->post()){	
			if ($detail->password == $this->input->post('password')) {
				$this->akunmodel->updateUser($id);	
				$this->session->userdata('password');
				$this->session->sess_destroy();
				$data_session = array(
				'nama' => $detail->username,
				'status' => TRUE,
				'id'=> $detail->id,
				'password'=> $detail->password,
				'email' => $detail->email
				);
				$this->session->set_userdata($data_session);
			echo "<script>alert('Sukses update User');location.href='http://localhost/food/reseller'</script>";
			} else {
				echo "<script>alert('password lama salah');location.href='http://localhost/food/reseller/editProfil'</script>";
			}
		}else{
			$this->load->view('user/reseller/formEditProfil');
		}
	}

}

