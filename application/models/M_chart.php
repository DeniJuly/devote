<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_chart extends CI_Model {

	public function data_bar()
	{
		$data_user = $this->db->get('user')->result();
		$jml_user 	= count($data_user);
		$d_calon = $this->db->get('calon')->result();
		$d_pemilih = array();
		$res = array();
		$sudah_memilih = 0;
		for ($i=0; $i < count($d_calon); $i++) {
			$pemilih = $this->db->select('*')
					->from('calon')
					->join('pemilihan', 'calon.id_calon = pemilihan.id_calon')
					->where('pemilihan.id_calon', $d_calon[$i]->id_calon)
					->get()->result();
			$jml_pemilih = count($pemilih);
			$sudah_memilih = $sudah_memilih + $jml_pemilih;
			$d_pemilih[$i] = $jml_pemilih;
			$sat[$i]['nama'] = $d_calon[$i]->nama_calon;
			$sat[$i]['data'] = $jml_pemilih;
		}
		return $sat;
	}

	public function data_pie()
	{
		$data_user = $this->db->get('user')->result();
		$jml_user 	= count($data_user);
		$d_calon = $this->db->get('calon')->result();
		$d_pemilih = array();
		$res = array();
		$sudah_memilih = 0;
		for ($i=0; $i < count($d_calon); $i++) {
			$pemilih = $this->db->select('*')
					->from('calon')
					->join('pemilihan', 'calon.id_calon = pemilihan.id_calon')
					->where('pemilihan.id_calon', $d_calon[$i]->id_calon)
					->get()->result();
			$jml_pemilih = count($pemilih);
			$sudah_memilih = $sudah_memilih + $jml_pemilih;
			$d_pemilih[$i] = $jml_pemilih;
			$sat[$i]['label'] = $d_calon[$i]->nama_calon;
			$sat[$i]['y'] = $jml_pemilih;
		}
		return $sat;
	}	

}

/* End of file M_chart.php */
/* Location: ./application/models/M_chart.php */