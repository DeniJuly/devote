<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_chart extends CI_Model {

	public function data_chart()
	{
		$waktu = $this->db->get('waktu_pemilihan')->result();
		$pemilihan = $this->db->get('pemilihan')->result();
		$jml_pemilihan = count($pemilihan);
		$data_user 	= $this->db->get('user')->result();
		$jml_user 	= count($data_user);
		$d_calon 	= $this->db->where('jenis_calon','CALON')->get('calon')->result();
		$d_pemilih = array();
		$res = array();
		$sudah_memilih = 0;
		foreach ($waktu as $wt) {
		for ($i=0; $i < count($d_calon); $i++) {
			$pemilih = $this->db->select('*')
					->from('calon')
					->join('pemilihan', 'calon.id_calon = pemilihan.id_calon')
					->where([
						'pemilihan.waktu_pemilihan >=' => $wt->mulai_pemilihan,
						'pemilihan.waktu_pemilihan <=' => $wt->akhir_pemilihan,
						'pemilihan.id_calon'=> $d_calon[$i]->id_calon,
						'calon.jenis_calon'=>'CALON'
					])
					->get()->result();
			$jml_pemilih = count($pemilih);
			$sudah_memilih = $sudah_memilih + $jml_pemilih;

			$d_pemilih[$i] = $jml_pemilih;
			$sat[$i]['label'] = $d_calon[$i]->nama_calon;
			$sat[$i]['y'] = $jml_pemilih;
			}
		}
		$sat[count($d_calon)]['label'] = 'BELUM MEMILIH';
		$sat[count($d_calon)]['y'] = $jml_user - $jml_pemilihan;
		$sat[$jml_pemilihan]['label'] = 'TIDAK SESUAI WAKTU';
		$sat[$jml_pemilihan]['y'] = $jml_pemilihan - $sudah_memilih;
		// echo json_encode($sat);
		// die();
		return $sat;
	}
}

/* End of file M_chart.php */
/* Location: ./application/models/M_chart.php */