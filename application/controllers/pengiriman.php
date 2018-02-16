<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengiriman extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('modelproduk');
		$this->load->model('transaksiModel');
		if ($this->session->userdata('status') !=TRUE) {
			redirect('login');
		}	
	}

	public function index() {
		$data['produk'] = $this->modelproduk->readproduk();
		$this->load->view('user/admin/masterpengiriman',$data);
	}

	public function formPengiriman($id) {
		$data['m_produk']=$this->modelproduk->detailproduk($id);
		$this->load->view('user/admin/formpengiriman',$data);
	}


	public function kurangiStok($id) {
		if ($this->input->post()){
			$id = $this->input->post('idproduk');
			$input = $this->input->post('jumlahambil');
			$hasil = $this->input->post('jumlah');
			
			if ($input <= $hasil) {
				$update = $hasil-$input;
				$data=array(
				'nama' => $this->input->post ('nama'),
				'level' => $this->input->post ('level'),
				'harga' => $this->input->post ('harga'),
				'tgl_produksi' => $this->input->post ('tgl_produksi'),
				'jumlah' => $update);
				$this->modelproduk->kurangiStok($id, $data);
				$this->transaksiModel->inputTransaksi();
				redirect('pengiriman');
			} else {
				echo "<script>alert('pengambialan melebihi stok tersedia');location.href='http://localhost/food/pengiriman/formPengiriman/$id'</script>";
			}
		} else {
			$data['m_produk']=$this->modelproduk->detailproduk($id);
			$this->load->view('user/admin/formeditproduk',$data);
		}
	}

}