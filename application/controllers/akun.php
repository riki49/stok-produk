<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Akun extends CI_Controller {

	public function __construct() {
	parent::__construct();
	$this->load->model('akunmodel');
	}

	public function index(){
		$this->load->view('public/registered');
	}

	public function create(){
		$this->akunmodel->createakun();
		echo "<script>alert('Akun Berhasil Dibuat');location.href='http://localhost/food/login'</script>";
	}

	public function hapusAkun($id){
		$this->akunmodel->hapusAkun($id);
		echo "<script>alert('Akun Berhasil dihapus');location.href='http://localhost/food/laporan/readUser'</script>";
	}
}

