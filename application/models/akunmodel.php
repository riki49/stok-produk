<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Akunmodel extends CI_Model{

	function createakun(){
		$user = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->db->insert('user', array('id'=>NULL,'username' => $user, 'email' => $email, 'password'=>$password));
	}
	function readUser(){
		$query = $this->db->get('user');
		return $query -> result();
	}
	function readDetaildUser($id){
		$query = $this->db->get_where('user', array('id' => $id));
		// $this->db->where('id', $id);
		// $query = $this->db->get('user');
		return $query -> row();
	}
	function updateUser($id){
		$this->db->where('id', $id);
		$query = $this->db->update('user', array('username' => $this->input->post('username'), 'password'=>$this->input->post('newPassword')));
	}
	function hapusAkun($id){
		$this->db->where('id', $id);
		$this->db->delete('user');
		// $this->db->delete('user','2' );
	}
	function bakaAdmin($id){

		$sql = $this>query;
	}

}