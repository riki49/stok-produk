<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index() {
		$this->read();
	}
	public function read() {
		$this->load->view('produk/m_produk');
	}
}