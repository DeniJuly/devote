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
	function cek_session($token,$nis){
		$result = $this->db->where('id_user',$nis)
							->limit(1)
							->get('user');
		if ($result->num_rows() > 0 ) {
			$field = $result->row('token');
			if ($token == $field) {
				return $result->row();
			} else {
				echo "wrong token lurr";
			}
		}
	}
	function get_user($id){
		$data = $this->db->select('user.*,kelas.nama_kelas')->from('user')->join('kelas','kelas.id_kelas = user.id_kelas','left')->where('user.id_user',$id)->group_by('user.id_user')->get();
		$all = $data->row_array();
		return $all;

	}

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */