<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_calon extends CI_Model {

	public $tb = 'calon';
	public $id = 'id_calon';

	public function get()
	{
		return $this->db->get($this->tb);
	}

	public function get_nama()
	{
		$this->db->select('calon.nama_calon AS nama');
		$this->db->from('calon');
		
		return $this->db->get();
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
	 public function get_by_id($id)
    {
        $this->db->from($this->tb);
        $this->db->where('id_calon',$id);
        $query = $this->db->get();

        return $query->row();
    }
}

/* End of file M_calon.php */
/* Location: ./application/models/M_calon.php */