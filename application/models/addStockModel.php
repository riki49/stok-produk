<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddStockModel extends CI_Model{
	
	function addStock($table, $data){
		$this->db->insert($table,$data);
		echo "berhasil";
	}
	// function getLogin(){
	// $this->db->where('user', $this->input->post('user'));
	// $this->db->where('pass', $this->input->post('pass'));
	// $query = $this->db->get('user');
	// if ($query->num_rows() == 1)
	// return $query->row();
	// else
	// return '';
	// }
}