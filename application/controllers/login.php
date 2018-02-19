<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('loginmodel');	
	}

	public function index() {
		if ($this->session->userdata('level') == 'admin') {
			redirect('admin');
		} else if ($this->session->userdata('status') ==TRUE ) {
			redirect('reseller');
		} else {
			$this->load->view('public/login');
		}
	}
			
	public function doLogin() {
		$passresult = '';
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		if ($email == 'rikimustofa49@gmail.com') {
			$datalogin = $this->loginmodel->getLogin($email);
			
			if ($datalogin != '') {
				$passresult = $datalogin->password;
			} else {
				$passresult = 'salah';
			}

			if($passresult == $pass){
				$data_session = array(
				'nama' => $datalogin->username,
				'status' => TRUE,
				'level'=>'admin',
				'id'=> $datalogin->id,
				'password'=> $datalogin->password,
				'email' => $email
				);
				// session_start();
				// $_SESSION['nama'] = $user;
				$this->session->set_userdata($data_session);
				redirect('admin');
			} else {
				echo "<script>alert('email atau password salah');location.href='http://localhost/food/login'</script>";
			}
		} else {
			$datalogin = $this->loginmodel->getLogin($email);
			if ($datalogin != '') {
				$passresult = $datalogin->password;
			} else {
				$passresult = 'salah';
			}
			
			if($passresult == $pass){
				$data_session = array(
				'nama' => $datalogin->username,
				'status' => TRUE,
				'id'=> $datalogin->id,
				'password'=> $datalogin->password,
				'email' => $email
				);
				$this->session->set_userdata($data_session);
				redirect('reseller');
			} else {
				echo "<script>alert('email atau password salah');location.href='http://localhost/food/login'</script>";
			}
		}
	}
	
	public function doLogout(){
		echo "<script>alert('email atau password salah');location.href='http://localhost/food/login'</script>";
		$this->session->sess_destroy();
		redirect('');
	}
}
?>