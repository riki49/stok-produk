<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reseller extends CI_Controller {

	public function index() {
		$this->read();
	}
	public function read() {
		$this->load->view('reseller/m_kastemer');
	}
}