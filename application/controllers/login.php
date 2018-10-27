<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('wisata_model');
		$this->load->library('form_validation');	
		
	}

	public function index()
	{
		
		$this->load->view('login_view');		
	}
	public function cekLogin()
	{
		
		$this->form_validation->set_rules('username','username','trim|required',
				array( 'required' => '<div class=" alert alert-danger"><b>Gagal!! </b> tidak boleh kosong</div>'
					)

				);
		
			$this->form_validation->set_rules('password','password','trim|required|callback_cekDb',
				array( 'required' => '<div class=" alert alert-danger"><b>Gagal!! </b> tidak boleh kosong</div>'
					)

				);
		if($this->form_validation->run()==FALSE){
			$this->load->view('login_view');
		}
		else{

			$user=$this->input->post('username');
			$pass=$this->input->post('password');
			$cek=$this->wisata_user->cek($user,MD5($pass))->num_rows();
			if($cek>0){

				$login=$this->wisata_user->cek($user,MD5($pass))->row_array();
				$user=$login['username'];
				$akses=$login['level'];
				$this->session->set_userdata('username',$user);
				$this->session->set_userdata('level',$akses);
				if($akses=='admin'){
					redirect('pengaduan','refresh');
				}else{
					redirect('home/user','refresh');
				}
			}

			
		else{
			redirect('index','refresh');
		}
	}
}

	public function cekDB($password)
	{
		$this->load->model('wisata_user');
		$username = $this->input->post('username');
		$result = $this->wisata_user->login($username,$password);
		if($result){
			$sess_array = array();
			foreach ($result as $row){
				$sess_array=array(
					'id'=>$row->id,
					'username'=>$row->username
					);
				$this->session->set_userdata('logged_in',$sess_array);
			}
			return true;
		}else{
			$this->form_validation->set_message('cekDb',"Login Gagal username dan password tidak valid");
			return false;
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('login','refresh');
	}
	

	public function create()
	{
			$this->form_validation->set_rules('nama','nama','trim|required',
				array( 'required' => '<div class=" alert alert-danger"><b>Gagal!! </b> tidak boleh kosong</div>'
					));

			$this->form_validation->set_rules('username','username','trim|required',
				array( 'required' => '<div class=" alert alert-danger"><b>Gagal!! </b> tidak boleh kosong</div>'
					));
			$this->form_validation->set_rules('password','password','trim|required',
				array( 'required' => '<div class=" alert alert-danger"><b>Gagal!! </b> tidak boleh kosong</div>'
					));
			$this->form_validation->set_rules('level','level','trim|required',
				array( 'required' => '<div class=" alert alert-danger"><b>Gagal!! </b> tidak boleh kosong</div>'
					));
		
			$this->load->model('wisata_user');
			if ($this->form_validation->run()==FALSE) {
				$this->load->view('tambah_pengguna');
			}
			else
			{
				$this->wisata_user->insertUser();
				$this->load->view('tambah_user_sukses');
			}
		
	}

}

