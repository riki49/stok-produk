<?php if ( ! defined('BASEPATH')) exit ('No direct script acces allowed');



class Modelpendaftar extends CI_Model{

	

	function readpendaftar(){

		$query = $this->db->get('users');
		return $query -> result();

		//$this->db->select('*');
		//$this->db->from('users');
		//$this->db->where ('username','iqbal');

		//$query = $this->db->get();
		//return $query;

	}

	function detailpendaftar($id_pendaftaran){

		$this->db->where('id_pendaftaran',$id_pendaftaran);

		$query=$this->db->get('users');

		return $query->row();

	}

	function updatependaftar ($id_pendaftaran){

		$data=array(

			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'tmp_lahir' => $this->input->post('tmp_lahir'),

			'tgl_lahir' => $this->input->post('tgl_lahir'),

			'alamat' => $this->input->post('alamat'),

			'phone' => $this->input->post('phone'),

			'jk' => $this->input->post('jk'),

			'jenis_mobil' => $this->input->post('jenis_mobil'),

			'riwayat' => $this->input->post('riwayat'),

			'paket' => $this->input->post('paket')
			

		);

		$this->db->where('id_pendaftaran',$id_pendaftaran);

		$this->db->update('users',$data);

	}

	function deletependaftar ($id_pendaftaran){

		$this->db->where('id_pendaftaran',$id_pendaftaran);

		$this->db->delete('users');

	}

	public function view_row(){
		return $this->db->get('users')->result();
	}

}