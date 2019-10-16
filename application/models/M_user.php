<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {
	public $tb = 'user';
	public $id = 'id_user';

	public function get($table)
	{
		return $this->db->get($this->tb);
	}
	public function get_where($table,$where){
		return $this->db->get_where($table,$where)->row_array();
	}
	public function get_where_calon($table,$where){
		return $this->db->get_where($table,$where)->result_array();
	}
	public function time($table){
		return $this->db->get($table)->row_array();
	}
	public function update_data($table,$data,$where){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function join_user_kelas()
	{
		$this->db->select('
			user.*,kelas.*
		');
		$this->db->from($this->tb);
		$this->db->join('kelas','kelas.id_kelas = user.id_kelas');
		return $this->db->get();
	}
	function cek_session($token,$nis){
		$result = $this->db->where('id_user',$nis)
							->limit(1)
							->get('user');
		if ($result->num_rows() > 0 ) {
			$field = $result->row('token');
			if ($token == $field) {
				$data['hasil'] = array(
					'status' => TRUE,
					'pesan'  => 'success',
					'data'	 => $result->row_array()
				);
				return $data;
			} else {
					$data['hasil'] = array(
					'status' => FALSE,
					'pesan'  => 'Token Tidak Cocok'
				);
			return  $data;
			}
		} else {
			$data['hasil'] = array(
					'status' => FALSE,
					'pesan'  => 'NIS Tidak Ditemukan'
				);
			return  $data;
		}
	}
	function get_user($id){
		$data = $this->db->select('user.*,kelas.nama_kelas')->from('user')->join('kelas','kelas.id_kelas = user.id_kelas','left')->where('user.id_user',$id)->group_by('user.id_user')->get();
		$all = $data->row_array();
		return $all;

	}
	public function jml_user()
	{
		return $this->db->query("SELECT COUNT(*) as data FROM user");
	}
	function add_rate($table,$data){
		$id = $this->session->userdata('id_user');
		$result = $this->db->where('id_user',$id)
							->get($table);
		if ($result->num_rows() > 0 ) {
		$this->db->where('id_user',$id);
		$this->db->update($table,$data);
		}else{
		$this->db->insert($table,$data);
	}
	}
	public function input($table,$data){
		$this->db->insert($table,$data);
	}
	public function get_data($table,$order_by){
		return $this->db->select("user.nama,user.jk,$table.*")
					->from($table)
					->join('user','user.id_user = aspirasi.id_user','left')
					->order_by($order_by,"DESC")
					->limit(3)
					->get()
					->result_array();
	}
	function cek_field($table,$id){
		$result = $this->db->where('id_user',$id)
							->limit(1)
							->get($table);
		if ($result->num_rows() > 0 ) {
				return $result->row();
			} else {
				return false;
			}
		}

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */