<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_model extends CI_Model {

	public function view()
	{
		$this->db->select("id,judul,kategori,tanggal,laporan,foto,tanggapan");
		$query = $this->db->get('tempat');
		return $query->result();
	}

	public function view_row()
	{
		$this->db->select("id,judul,kategori,tanggal,laporan,foto,tanggapan");
		$query = $this->db->get('tempat');
		return $query->result();
	}

	public function getAll()
	{
		$this->db->select('*');
		$this->db->from('tempat');
		$query=$this->db->get();
		return $query->result();
	}
}

/* End of file cetak_model.php */
/* Location: ./application/models/cetak_model.php */