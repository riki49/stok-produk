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
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');

		if ($email == 'rikimustofa49@gmail.com') {
			
			$datalogin = $this->loginmodel->getLogin($email);
			$user = $datalogin->username;
			
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
				// session_start();
				// $_SESSION['nama'] = $user;
				$this->session->set_userdata($data_session);
				redirect('admin');
			} else {
				echo "<script>alert('user name/password salah');</script>";
				// $this->load->view('login');
				redirect('login');
			}
		} else {
			$login = $this->loginmodel->getLogin($email);
			$user = $login->username;
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
				// session_start();
				// $_SESSION['nama'] = $user;
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