<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('wisata_model');
		$this->load->library('form_validation');
			$this->load->helper('url','form','file');
			$this->load->model('cetak_model');		
		$this->load->library('dompdf_gen');

		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username']= $session_data['username'];
		}	else{
			redirect('login','refresh');
		}
		
	}
	public function cetak()
	{
		$data['wisata_array']=$this->cetak_model->view_row();
		$this->load->view('priview',$data);
				
	}

	public function cetakPdf()
	{

		$data['wisata_array']=$this->cetak_model->view_row();
		$this->load->view('print',$data);
		$paper_size ='A4';
		$orientation='potrait';
		$html=$this->output->get_output();

		$dompdf = new DOMPDF();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan.pdf");
		unset($html);
		unset($dompdf);
	}

	public function cetak_excel()
	{
		$data = array('title' => 'Data Pengaduan' ,
		'preview' => $this->cetak_model->getAll() );

		$this->load->view('excel',$data);
	}

	public function export_excel()
	{
		$data = array('title' => 'Laporan Pengaduan' ,
		'preview' => $this->cetak_model->getAll() );

		$this->load->view('laporan_excel',$data);
	}

	public function datatable()
	{
		$data['wisata_array']=$this->wisata_model->getTempatQueryArray();
		$this->load->view('cobatabel',$data);	
	}

	public function datatable_user()
	{
		$data['user_array']=$this->wisata_model->getUserQueryArray();
		$this->load->view('data_user',$data);	
	}

	public function datatable_tujuan()
	{
		$data['tujuan_array']=$this->wisata_model->getTujuanQueryArray();
		$this->load->view('data_tujuan',$data);
	}

	/*public function data_server()
	{
		$this->load->library('Datatables');
		$this->datatables
			->select('judul,kategori,tanggal,laporan,foto,tanggapan')
			->from('tempat');
			echo $this->datatables->generate();
	}*/
	
	public function liat()
	{
		$data['wisata_array']=$this->wisata_model->getTempatQueryArray();
		$this->load->view('pengaduan',$data);
	}

	public function kirim()
	{
		$data['wisata_array']=$this->wisata_model->getTempatQueryArray();
		$this->load->view('kirim',$data);
	}
	
	

	public function index()
	{
		$data['wisata_array']=$this->wisata_model->getTempatQueryArray();
		$this->load->view('home',$data);
				
	}
	public function user()
	{
		$data['wisata_array']=$this->wisata_model->getTempatQueryArray();
		$this->load->view('index_user',$data);		
	}


	public function edit()
	{
		//$this->load->model('wisata_model');
			$data['wisata_array']=$this->wisata_model->getTempatQueryArray();
		$this->load->view('data_wisata',$data);	
	}

	public function edit1()
	{
		//$this->load->model('wisata_model');
			$data['tujuan_array']=$this->wisata_model->getTempatQueryArray();
		$this->load->view('data_tujuan',$data);	
	}

	
	public function create()
	{

			$this->form_validation->set_rules('judul','Judul','trim|required',
				array( 'required' => '<div class=" alert alert-danger"><b>Gagal!! </b> tidak boleh kosong</div>'
					)

				);
		
			$this->form_validation->set_rules('kategori','Kategori','trim|required',
				array( 'required' => '<div class=" alert alert-danger"><b>Gagal!! </b> tidak boleh kosong</div>'
					)

				);

			$this->form_validation->set_rules('tanggal','Tanggal','trim|required',
				array( 'required' => '<div class=" alert alert-danger"><b>Gagal!! </b> tidak boleh kosong</div>'
					)

				);

			$this->form_validation->set_rules('laporan','Laporan','trim|required',
				array( 'required' => '<div class=" alert alert-danger"><b>Gagal!! </b> tidak boleh kosong</div>'
					)

				);
			
			$this->load->model('wisata_model');


			if ($this->form_validation->run()==FALSE) {

				$this->load->view('kirim');
			}
			else
			{

				$config['upload_path'] = './assets/uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']  = '1000000000';
				$config['max_width']  = '10240';
				$config['max_height']  = '7680';
				
				$this->load->library('upload', $config);
				
				if ( ! $this->upload->do_upload('gambar'))
				{
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('kirim',$error);
				}
			
else{
	$gambar = $this->upload->data();

				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/uploads/'.$gambar['file_name'];
				$config['maintain_ratio']  = true;
				$config['create_thumb']  = true;
				$config['quality']  = '50%';
				$config['width']  = 270;

	$this->load->library('image_lib', $config);

if($this->image_lib->resize()){
				$this->wisata_model->insertTempat();
			
				$this->load->view('tambah_wisata_sukses');}
			}
			}
		
	}

	public function update($id)
	{
		
			$this->form_validation->set_rules('tanggapan','Tanggapan','trim|required',
				array( 'required' => '<div class=" alert alert-danger"><b>Gagal!! </b> tidak boleh kosong</div>'
					)
				);
		$data['tempat']=$this->wisata_model->getTempat($id);

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('edit_tempat_view',$data);
		}else
		{	$this->wisata_model->UpdateById($id);
			$this->load->view('edit_tempat_sukses');
			}		
		}

	public function delete($id)
	{
		$this->wisata_model->delete($id);
		$this->load->view('edit_tempat_sukses');
	}

public function update1($id)
	{
		$this->form_validation->set_rules('nama','Nama','trim|required',
				array( 'required' => '<div class=" alert alert-danger"><b>Gagal!! </b> tidak boleh kosong</div>'
					)

				);
		
			$this->form_validation->set_rules('jabatan','Jabatan','trim|required',
				array( 'required' => '<div class=" alert alert-danger"><b>Gagal!! </b> tidak boleh kosong</div>'
					)

				);
			

		$data['tujuan']=$this->wisata_model->getTujuan($id);

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('edit_tujuan',$data);
		}else{
		$this->wisata_model->UpdateTujuanById($id);
			$this->load->view('edit_tempat_sukses');}
		
	}
	public function delete1($id)
	{
		$this->wisata_model->delete1($id);
		$this->load->view('edit_tempat_sukses');
	}

	public function update2($id)
	{
		$this->form_validation->set_rules('nama','Nama','trim|required',
				array( 'required' => '<div class=" alert alert-danger"><b>Gagal!! </b> tidak boleh kosong</div>'
					)

				);
		
			$this->form_validation->set_rules('username','Username','trim|required',
				array( 'required' => '<div class=" alert alert-danger"><b>Gagal!! </b> tidak boleh kosong</div>'
					)

				);

			$this->form_validation->set_rules('password','Password','trim|required',
				array( 'required' => '<div class=" alert alert-danger"><b>Gagal!! </b> tidak boleh kosong</div>'
					)

				);
		
			$this->form_validation->set_rules('level','Level','trim|required',
				array( 'required' => '<div class=" alert alert-danger"><b>Gagal!! </b> tidak boleh kosong</div>'
					)

				);
			

		$data['user']=$this->wisata_model->getUser($id);

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('edit_pengguna',$data);
		}else{
		$this->wisata_model->UpdateUserById($id);
			$this->load->view('edit_tempat_sukses');}
		
	}

	public function delete2($id)
	{
		$this->wisata_model->delete2($id);
		$this->load->view('edit_tempat_sukses');
	}

}



/* End of file home.php */
/* Location: ./application/controllers/home.php */