<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
	parent::__construct();
	$this->load->model('loginmodel');
	}

	public function inputLogin() {
		$this->load->view('login');
	}
		
	public function doLogin() {
		$passresult = '';
		if ($this->input->post('level') == 'admin') {
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
					// session_start();
					// $_SESSION['isLogin'] = true;
					redirect('admin');
				} else {
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
				$this->load->view('public');
			} else {
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