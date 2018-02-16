<?php if ( ! defined('BASEPATH')) exit ('No direct script acces allowed');

class TransaksiModel extends CI_Model{
	function inputTransaksi(){
		$data=array(
				'idtrx' => $this->input->post ('idtrx'),
				'tanggal' => $this->input->post ('tgl_produksi'),
				'idproduk' => $this->input->post ('idproduk'),
				'jumlah' => $this->input->post ('jumlahambil'),
				'harga' => $this->input->post ('harga'),
				'reseller' => $this->input->post ('reseller'));
		$this->db->insert('pengiriman',$data);
	}
	function readTransaksi(){
		return $this->db->get('pengiriman')-> result();
	}
}