<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('wisata_model');
		$this->load->library('form_validation');
			$this->load->helper('url','form','file');
			$this->load->model('cetak_model');		
		$this->load->library('dompdf_gen');

	}
	public function index()
	{
		
		$this->load->view('home_admin');
				
	}
	public function lihat()
	{
		
		$this->load->view('cobatabel');
				
	}
	public function tambah()
	{
		
		$this->load->view('tambah');
				
	}
	public function tambah_user()
	{
		
		$this->load->view('tambah_pengguna');
				
	}
	public function create1()
	{
			//$this->load->helper('url','form');
			//$this->load->library('form_validation');

			$this->form_validation->set_rules('nama','nama','trim|required',
				array( 'required' => '<div class=" alert alert-danger"><b>Gagal!! </b> tidak boleh kosong</div>'
					)

				);
			$this->form_validation->set_rules('jabatan','jabatan','trim|required',
				array( 'required' => '<div class=" alert alert-danger"><b>Gagal!! </b> tidak boleh kosong</div>'
					)

				);
		

			$this->load->model('wisata_user');


			if ($this->form_validation->run()==FALSE) {

				$this->load->view('tambah');
			}
			else
			{
				$this->wisata_user->insertTujuan();
			
				$this->load->view('tambah_user_sukses');
			}
		
	}

	public function edit1()
	{
		//$this->load->model('wisata_model');
			$data['tujuan_array']=$this->wisata_model->getTujuanQueryArray();
		$this->load->view('edit_tujuan',$data);	
	}

	



}



/* End of file home.php */
/* Location: ./application/controllers/home.php */