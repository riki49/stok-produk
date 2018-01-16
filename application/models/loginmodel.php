<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loginmodel extends CI_Model{
	
	
	function getLogin($tabel, $user){
		$query = $this->db->get_where($tabel, array('username' => $user));
		if ($query->num_rows() == 1)
		return $query->row();
		else
		return '';
	}
}