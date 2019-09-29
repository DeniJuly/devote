<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemilihan extends CI_Model {

	public $tb = 'pemilihan';

	public function get()
	{
		return $this->db->get($this->tb);
	}

	public function some($where)
	{
		$this->db->where($where);
		return $this->db->get($this->tb);
	}

	public function join_calon_pemilihan($where)
	{
		$this->db->select('
			calon.id_calon,nama_calon,pemilihan.id_calon
		');
		$this->db->from('calon');
		$this->db->join('pemilihan','pemilihan.id_calon = calon.id_calon');
		$this->db->where($where);
		return $this->db->get();
	}

}

/* End of file M_pemilihan.php */
/* Location: ./application/models/M_pemilihan.php */