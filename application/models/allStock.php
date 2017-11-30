<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AllStock extends CI_Model{
	
	
	function getAll(){
		$query = $this->db->get('batagor');
		if ($query->num_rows() == 1)
		return $query->row();
		else
		return '';
	}
}