<?php if ( ! defined('BASEPATH')) exit ('No direct script acces allowed');

class Modelproduk extends CI_Model{
	function createproduk(){
		$data = array(
			
			'id' => $this->input->post ('id'),
			'nama' => $this->input->post ('nama'),
			'level' => $this->input->post ('level'),
			'harga' => $this->input->post ('harga'),
			'tgl_produksi' => $this->input->post ('tgl_produksi'),
			'jumlah' => $this->input->post ('jumlah')
		);
		$this->db->insert('produk',$data);
	}
	function readproduk(){
		$query = $this->db->get('produk');
		return $query -> result();
	}
	function detailproduk($id){
		$this->db->where('id',$id);
		$query=$this->db->get('produk');
		return $query->row();
	}
	function updateproduk ($id){
		$data=array(
			'nama' => $this->input->post ('nama'),
			'level' => $this->input->post ('level'),
			'harga' => $this->input->post ('harga'),
			'tgl_produksi' => $this->input->post ('tgl_produksi'),
			'jumlah' => $this->input->post ('jumlah')
		);
		$this->db->where('id',$id);
		$this->db->update('produk',$data);
	}
	function deleteproduk ($id){
		$this->db->where('id',$id);
		$this->db->delete('produk');
	}

	function jenis(){
		$query = $this->db->get('jenis');
		return $query -> result();
	}
	function level(){
		$query = $this->db->get('level');
		return $query -> result();
	}

}