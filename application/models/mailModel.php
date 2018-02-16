<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MailModel extends CI_Model{

	function sendMail($id){
		$email = array( 'id' => $id,
						'tanggal' => date("d-m-Y"),
						'username' => $this->input->post('username'),
						'email' => $this->input->post('email'),
						'pesan' => $this->input->post('pesan'),
						'status'=> '1');
		$this->db->insert('pesan', $email);
	}
	function readMail($id){
		$this->db->where('id', $id);
		$query=$this->db->get('pesan');
		return $query->result();
	}
}
