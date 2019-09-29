<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public $tb = 'user';
	public $id = 'id_user';

	public function get()
	{
		return $this->db->get($this->tb);
	}

	public function join_user_kelas()
	{
		$this->db->select('
			user.*,kelas.*
		');
		$this->db->from($this->tb);
		$this->db->join('kelas','user.id_kelas = kelas.id_kelas');
		return $this->db->get();
	}

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */