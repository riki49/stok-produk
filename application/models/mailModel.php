<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MailModel extends CI_Model{

	function sendMail($id, $status){
		$email = array( 'id' => $id,
						'tanggal' => date("d-m-Y"),
						'username' => $this->input->post('username'),
						'email' => $this->input->post('email'),
						'pesan' => $this->input->post('pesan'),
						'status'=> $status);
		$this->db->insert('pesan', $email);
	}
	function readMail($id){
		$this->db->where('id', $id);
		$query=$this->db->get('pesan');
		return $query->result();
	}

	function adminReadMail(){
		$query=$this->db->get('pesan');
		return $query->result();
	}
}
