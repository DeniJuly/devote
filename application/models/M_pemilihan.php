<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemilihan extends CI_Model {

	public $tb = 'pemilihan';

	public function get()
	{
		return $this->db->get($this->tb);
	}

	public function jml_pemilih()
	{
		return $this->db->query("SELECT count(id_user) as data FROM pemilihan");
	}

	public function some($where)
	{
		$this->db->where($where);
		return $this->db->get($this->tb);
	}

	public function input($data)
	{
		return $this->db->insert($this->tb,$data);
	}

	public function join_calon_pemilihan_pie()
	{
		$this->db->select('calon.nama_calon as label, count(pemilihan.id_calon) as y');
		$this->db->from('calon');
		$this->db->join('pemilihan','pemilihan.id_calon = calon.id_calon');
		$this->db->group_by('pemilihan.id_calon');
		$this->db->order_by('y', 'desc');
		return $this->db->get();
	}

}

/* End of file M_pemilihan.php */
/* Location: ./application/models/M_pemilihan.php */