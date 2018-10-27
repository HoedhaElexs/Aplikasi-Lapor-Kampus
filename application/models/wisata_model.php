<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata_model extends CI_Model {
public function __construct(){
		parent::__construct();
		
	}

	public function insertTempat()
	{
		$object = array 
		('judul' =>$this->input->post('judul'),
			'kategori' =>$this->input->post('kategori'),
				'tanggal' =>$this->input->post('tanggal'),
				'laporan' =>$this->input->post('laporan'),
				'foto' =>$this->upload->data('raw_name').'_thumb'.$this->upload->data('file_ext'),
					);
		$this->db->insert('tempat',$object);

	}

	public function getTempatQueryArray()
	{
		$query = $this->db->query("SELECT * from tempat");
		return $query->result_array();
	}

	public function getUserQueryArray()
	{
		$query = $this->db->query("SELECT * from user");
		return $query->result_array();
	}

	public function getTujuanQueryArray()
	{
		$query = $this->db->query("SELECT * from tujuan");
		return $query->result_array();
	}

public function getUser($id)
	{

	$this->db->where('id',$id);
	$query = $this->db->get('user');
	return $query->result();
}

	public function getTujuan($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('tujuan');
		return $query->result();
	}

	public function getTempat($id)
	{

	$this->db->where('id',$id);
	$query = $this->db->get('tempat');
	return $query->result();
}

public function UpdateById($id)
{
	$data = array
	('tanggapan' =>$this->input->post('tanggapan'),
					);
	$this->db->where('id',$id);
	$this->db->update('tempat',$data);
}
public function delete($id)
{
	$this->db->where('id',$id);
	$this->db->delete('tempat');
}

public function UpdateUserById($id)
{
	$data = array
	('nama' =>$this->input->post('nama'),
			'username' =>$this->input->post('username'),
				'password' =>$this->input->post('password'),
					'level' =>$this->input->post('level'),
					);
	$this->db->where('id',$id);
	$this->db->update('user',$data);
}
public function delete2($id)
{
	$this->db->where('id',$id);
	$this->db->delete('user');
}

public function UpdateTujuanById($id)
{
	$data = array
	('nama' =>$this->input->post('nama'),
			'jabatan' =>$this->input->post('jabatan'),
					);
	$this->db->where('id',$id);
	$this->db->update('tujuan',$data);
}
public function delete1($id)
{
	$this->db->where('id',$id);
	$this->db->delete('tujuan');
}



}
/* End of file wisata_model.php */
/* Location: ./application/models/wisata_model.php */