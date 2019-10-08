<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_calon extends CI_Model {

	public $tb = 'calon';
	public $id = 'id_calon';

	public function get()
	{
		return $this->db->get($this->tb);
	}

	public function some($where)
	{
		$this->db->where($where);
		return $this->db->get($this->tb);
	}

	public function ins($data)
	{
		return $this->db->insert($this->tb,$data);
	}

	public function upd($where,$data)
	{
		$this->db->where($where);
		return $this->db->update($this->tb,$data);
	}

	public function del($where)
	{
		$this->db->where($where);
		return $this->db->delete($this->tb);
	}

}

/* End of file M_calon.php */
/* Location: ./application/models/M_calon.php */