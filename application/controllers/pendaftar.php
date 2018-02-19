<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Pendaftar extends CI_Controller {



public function __construct(){
		parent::__construct();
		$this->load->model('modelpendaftar');
		if($this->session->userdata('id_jenis_user') <> '1')
		{
			redirect('login');
		}
	}



	public function index()

	{

		$this->read();

	}

	public function read()

	{

		$data['pendaftaran'] = $this->modelpendaftar->readpendaftar();

		$this->load->view('admin/pendaftar/datapendaftar',$data);

	}

	public function update($id_pendaftaran)

	{

		if ($this->input->post()){

			$this->modelpendaftar->updatependaftar($id_pendaftaran);

			redirect('pendaftar');

		} else {

			$data['daftarpendaftar']=$this->modelpendaftar->detailpendaftar($id_pendaftaran);

			$this->load->view('admin/pendaftar/formpendaftar',$data);

		}

	}

	public function delete($id_pendaftaran){

		$this->modelpendaftar->deletependaftar($id_pendaftaran);

		redirect ('pendaftar');

	}

		public function cetak(){
		ob_start();
		$data['report'] = $this->modelpendaftar->view_row();
		$this->load->view('admin/pendaftar/print', $data);
		$html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','A4','en');
		$pdf->WriteHTML($html);
		$pdf->Output('Data Pendaftar.pdf', 'D');
	}

	}

