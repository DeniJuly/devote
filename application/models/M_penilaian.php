<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penilaian extends CI_Model {

	public $tb = 'penilaian';

	public function get()
	{
		return $this->db->get($this->tb);
	}

	public function join_three()
	{
		$this->db->select('
			user.id_kelas,nama ,penilaian.* ,kelas.*
		');
		$this->db->from($this->tb);
		$this->db->join('user','penilaian.id_user = user.id_user');
		$this->db->join('kelas','kelas.id_kelas = user.id_kelas');
		// $this->db->group_by('penilaian');
		$this->db->order_by('penilaian', 'desc');
		return $this->db->get();
	}

	public function avg()
	{
		return $this->db->query("SELECT AVG(penilaian) as penilaian FROM penilaian");

	}
}

/* End of file M_penilaian.php */
/* Location: ./application/models/M_penilaian.php */