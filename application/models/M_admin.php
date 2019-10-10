<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	public function some($where)
	{
		$this->db->where($where);
		return $this->db->get('admin');
	}
}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */