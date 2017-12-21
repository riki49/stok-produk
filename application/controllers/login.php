<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
	parent::__construct();
	$this->load->model('loginmodel');
	}

	public function index() {
		$this->load->view('login');
	}
		
	public function doLogin() {
		$passresult = '';
		if ($this->input->post('level') == 'admin') {
			$tabel = $this->input->post('level');
			$user = $this->input->post('user');
			$pass = $this->input->post('pass');

			$datalogin = $this->loginmodel->getLogin($tabel, $user);

			if ($datalogin != '') {
				$passresult = $datalogin->password;
			} else {
				$passresult = 'salah';
			}
				
			if($passresult == $pass){
				$data_session = array(
				'nama' => $user,
				'status' => TRUE
				);
				$this->session->set_userdata($data_session);		
				redirect('admin');
			} else {
				echo "<script>alert('user name/password salah');</script>";
				$this->load->view('login');
			}
		} else {
			$passresult = '';
			$tabel = $this->input->post('level');
			$user = $this->input->post('user');
			$pass = $this->input->post('pass');
			$login = $this->loginmodel->getLogin($tabel, $user);
			if ($login != '') {
				$passresult = $login->password;
			} else {
				$passresult = 'salah';
			}
			
			if($passresult == $pass){
				$data_session = array(
				'nama' => $user,
				'status' => "login"
				);
				$this->session->set_userdata($data_session);
				redirect('reseller');
			} else {
				echo "<script>alert('user name/password salah');</script>";
				$this->load->view('login');
			}
		}
	}
	
	public function doLogout(){
		$this->session->sess_destroy();
		redirect('');
	}
}
?>