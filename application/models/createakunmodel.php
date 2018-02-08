<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Createakunmodel extends CI_Model{
	function createpenjual($tabel){
		$user = $this->input->post('username');
		$password = $this->input->post('password');
		$this->db->insert($tabel, array('username' => $user, 'password'=>$password));
	}
	function createakun(){
		$user = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->db->insert('user', array('username' => $user, 'email' => $email, 'password'=>$password));
	}
}