<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
			if($this->session->userdata('status') != "login"){
				redirect(base_url("login"));
			}
	}

	public function index() {
		$this->read();
	}
	public function read() {
		$this->load->view('produk/m_produk');
	}
}