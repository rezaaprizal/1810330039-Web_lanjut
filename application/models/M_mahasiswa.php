<?php

class M_mahasiswa extends CI_Model
{
	private $tabel = 'mahasiswa';

	public function semuaData()
	{

		return $this->db->get($this->tabel)->result();
	}
}