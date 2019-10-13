<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Devote extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		// if($this->session->userdata('id_user')==null){
		// 	redirect(site_url('Login'));
		// }
		$this->load->model('M_user');
		$this->load->model('M_pemilihan');
		$this->load->model('M_calon');
	}

	public function index()
	{
		if($this->session->userdata('id_user')){
			$id = $this->session->userdata('id_user');
			$data['data_diri'] = $this->M_user->get_user($id);
			$this->load->view('user/data_diri',$data);
		}
		else{
			redirect('Login');
		}
	
	}

	public function ulasan()
	{	
		$table = "penilaian";
		$id = $this->session->userdata('id_user');
		$valid_user = $this->M_user->cek_field($table,$id);
		if ($valid_user == true) {
			redirect('devote/pemilihan');
		} else {
			$where = array(
				"jenis_calon" => 'OSIS'
			);
			$data['osis'] = $this->M_user->get_where('calon',$where);
			$this->load->view('user/ulasan',$data);
		}
	}

	public function pemilihan()
	{
		$table = "pemilihan";
		$id = $this->session->userdata('id_user');
		$valid_user = $this->M_user->cek_field($table,$id);
		$valid_user_penilaian = $this->M_user->cek_field('penilaian',$id);
		if ($valid_user == true) {
			redirect('devote/aspirasi');
		}elseif($valid_user_penilaian == false){
			redirect('devote/ulasan');
		} else {
		$where = array(
			"jenis_calon" => 'CALON'
		);
		$data['calon'] = $this->M_user->get_where_calon("calon",$where);
		$this->load->view('user/pemilihan',$data);
		$id_user = $this->session->userdata('id_user');
	}
}

	public function aspirasi()
	{
		$table = "aspirasi";
		$id = $this->session->userdata('id_user');
		$valid_user = $this->M_user->cek_field($table,$id);
		$valid_user_pemilihan = $this->M_user->cek_field('pemilihan',$id);
		if ($valid_user == true) {
			redirect('Login/logout');
		} elseif($valid_user_pemilihan == false){
			redirect('devote/pemilihan');
		} else {
		$where = array(
			"jenis_calon" => 'OSIS'
		);
		$data['aspirasi'] = $this->M_user->get_data('aspirasi','aspirasi.waktu');
		$this->load->view('user/aspirasi',$data);
	}
}
	function rate_old_ossis()
	{
		$id = $this->session->userdata('id_user');
		$rate = $this->input->post('rate');
		$id_calon = $this->input->post('id_calon');
		$data= array(
			'id_calon' =>$id_calon,
			'id_user'  => $id,
			'penilaian'=>$rate
		);
		$isi = $this->M_user->add_rate('penilaian',$data);
	}
	function input_aspirasi(){
		$id = $this->session->userdata('id_user');
		$data = array(
				"id_user" => $id,
				"isi"	  => $this->input->post('isi')
		);
		$this->M_user->input('aspirasi',$data);
		$output = array('error' => false );
		echo json_encode($output);
	}
	function pilih_input($id){
		$id_calon = $id;
		$id_user = $this->session->userdata('id_user');
		$data = array(
				'id_calon' => $id_calon,
				'id_user'  => $id_user
		);
		$this->M_pemilihan->input($data);
		redirect('/devote/aspirasi');
	}

}
