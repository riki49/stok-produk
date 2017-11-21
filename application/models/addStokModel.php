<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddStokModel extends CI_Model{
	
	
	function getLogin(){
	$this->db->where('user', $this->input->post('user'));
	$this->db->where('pass', $this->input->post('pass'));
	$query = $this->db->get('user');
	if ($query->num_rows() == 1)
	return $query->row();
	else
	return '';
	}
}