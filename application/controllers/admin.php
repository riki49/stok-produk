<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('modelproduk');
		$this->load->model('mailModel');
		$this->load->model('akunmodel');
		$this->load->model('transaksiModel');
		if ($this->session->userdata('level') != 'admin') {
			redirect('login');
		}
	}
	// ini fungsi pindahan dari produk
	public function index() {
		$this->read();
	}
	public function read() {
		$data['produk'] = $this->modelproduk->readproduk();
		$this->load->view('user/admin/masterAdminView',$data);
	}

	public function editDashboard() {
		$this->load->view('user/admin/formEditDashboard');	
	}

	public function readMail() {
		$inbox['mail'] = $this->mailModel->adminReadMail();
		$this->load->view('user/admin/masterMail', $inbox);
	}
	public function sendMail($id) {
		if ($this->input->post()){
			$this->mailModel->sendMail($id, 0);
			echo "<script>alert('Sukses kirim pesan');location.href='http://localhost/food/admin'</script>";
		}else{
			$this->load->view('public/formEmail');
		}
	}
	public function replyMail($id) {
		$this->session->set_userdata( array('id' => $id));
		$this->load->view('user/admin/formEmail', $id);
	}

		public function cetak(){
		ob_start();
		$data['report'] = $this->transaksiModel->view_row();
		$this->load->view('user/admin/print', $data);
		$html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','A4','en');
		$pdf->WriteHTML($html);
		$pdf->Output('Laporan Data Transaksi.pdf', 'P');
	}


	public function editProfil() {
		$id = $this->session->userdata('id');
		$detail = $this->akunmodel->readDetaildUser($id);

		if ($this->input->post()){	
			if ($detail->password == $this->input->post('password')) {
				$this->akunmodel->updateUser($id);	
				$this->session->userdata('password');
				$this->session->sess_destroy();
				$data_session = array(
				'nama' => $detail->username,
				'status' => TRUE,
				'id'=> $detail->id,
				'password'=> $detail->password,
				'email' => $detail->email
				);
				$this->session->set_userdata($data_session);
			echo "<script>alert('Sukses update User');location.href='http://localhost/food/admin'</script>";
			} else {
				echo "<script>alert('password lama salah');location.href='http://localhost/food/admin/editProfil'</script>";
			}
		}else{
			$this->load->view('user/admin/formEditProfil');
		}
	}
}