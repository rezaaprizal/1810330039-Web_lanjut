<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_mahasiswa');
	}

	public function index()
	{
		$data['tabel'] = $this->M_mahasiswa->semuaData();
		
		$data['nama_lengkap'] = "Lalu Reza Aprizal Mahdi";
		$data['nim'] = 1810330039;
		$mahasiswa[0] = array(
		     'nim' => 12345,
		     'nama' => "reza"
		 );
		$data['mahasiswa'] = $mahasiswa;
		$this->load->view('mahsiswa_index' ,$data);
	}

    public function tambah()
    {
    	$this->load->view('mahasiswa_tambah');
    }
}

/* End of file mahasiswa.php */
/* Location: ./application/controllers/mahasiswa.php */