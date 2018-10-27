<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('biodata');
	}

	public function hello()
	{
		echo "Hello";
	}

	public function hello1($param='',$param_dua='')
	{
		echo "Hello...$param $param_dua";
	}

public function biodata()
{
	echo "Nama : Satria Setya Arissandy <br>";
	echo "Tgl Lahir : 17 Februari 1996<br>";
	echo "Kelas : TI2H<br>";

}
public function biodata1($nama='',$tgl='',$kelas='')
{
	echo "Nama : $nama <br>";
	echo "Tgl Lahir : $tgl<br>";
	echo "Kelas : $kelas<br>";

}


}


