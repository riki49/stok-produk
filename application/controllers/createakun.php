<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Createakun extends CI_Controller {

	public function __construct() {
	parent::__construct();
	$this->load->model('createakunmodel');
	}

	public function index(){
		$this->load->view('createreseller');
	}

	public function create(){
		$tabel = 'reseller';
		$this->createakunmodel->createpenjual($tabel);
		echo "<script>alert('anda terdaftar sebagai reseller');</script>";
		$this->load->view('login');
	}
}

