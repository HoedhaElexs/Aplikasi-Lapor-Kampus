<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Wisata_user extends CI_Model {

	public function __construct(){
		parent::__construct();	}

public function login($username,$password)
{
	$this->db->select('id,nama,username,password,level');
	$this->db->from('user');
	$this->db->where('username',$username);
	$this->db->where('password',MD5($password));
	$query=$this->db->get();
	if($query->num_rows()==1){
		return $query->result();
	}else{
		return false;
	}
}

public function cek($user,$pass)
{
$this->db->where('username',$user);
$this->db->where('password',$pass);
return $this->db->get('user');
}

public function insertUser()
	{
		$object = array 
		('nama' =>$this->input->post('nama'),
			'username' =>$this->input->post('username'),
			'password' =>md5($this->input->post('password')),
			'level' =>$this->input->post('level')
				);
		$this->db->insert('user',$object);



	}

public function insertTujuan()
	{
		$object = array 
		('nama' =>$this->input->post('nama'),
			'jabatan' =>$this->input->post('jabatan')
				);
		$this->db->insert('tujuan',$object);



	}
}

/* End of file wisata_user.php */
/* Location: ./application/models/wisata_user.php */