<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Devote extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('id_user')==null){
			redirect(site_url('Login'));
		}
		$this->load->model('M_user');
		$this->load->model('M_pemilihan');
		$this->load->model('M_calon');
	}

// -------- Function for chooice lead of MPK 


	// public function index()
	// {
	// 	if($this->session->userdata('id_user')){
	// 	$id = $this->session->userdata('id_user');
	// 	$data['data_diri'] = $this->M_user->get_user($id);
	// 	// print_r($data);
	// 	$this->load->view('user/pemilihan_ketua_mpk',$data);
	// 	}
	// 	else{
	// 		redirect('Login');
	// 	}
	
	// }


// -----  Function for chooice lead of  osis



	public function index()
	{
		if($this->session->userdata('id_user')){
		$id = $this->session->userdata('id_user');
		$data['data_diri'] = $this->M_user->get_user($id);
		// print_r($data);
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
		if ($valid_user == true) {
			redirect('devote/aspirasi');
		} else {
		$where = array(
			"jenis_calon" => 'OSIS'
		);
		$data['calon'] = $this->M_user->get_where_calon("calon",$where);
		$this->load->view('user/pemilihan',$data);
		$id_user = $this->session->userdata('id_user');
	}
}
// ---- FOR KETUA MPK

// 	public function pemilihan_ketua_mpk()
// 	{
// 		$table = "pemilihan";
// 		$id = $this->session->userdata('id_user');
// 		$valid_user = $this->M_user->cek_field($table,$id);
// 		if ($valid_user == true) {
// 			redirect('devote/pemilihan_wakil_mpk');
// 		} else {
// 		$where = array(
// 			"jenis_calon" => 'KETUA'
// 		);
// 		$data['calon'] = $this->M_user->get_where_calon("calon",$where);
// 		$this->load->view('user/pemilihan',$data);
// 	}
// }

// ---- FOR WAKIL MPK

// 	public function pemilihan_wakil_mpk()
// 	{
// 		$table = "pemilihan";
// 		$id = $this->session->userdata('id_user');
// 		$valid_user = $this->M_user->cek_field($table,$id);
// 		if ($valid_user == true) {
// 			redirect('devote/aspirasi');
// 		} else {
// 		$where = array(
// 			"jenis_calon" => 'WAKIL'
// 		);
// 		$data['calon'] = $this->M_user->get_where_calon("calon",$where);
// 		$this->load->view('user/pemilihan',$data);
// 		$id_user = $this->session->userdata('id_user');
// 	}
// }


	public function aspirasi()
	{
		$table = "aspirasi";
		$id = $this->session->userdata('id_user');
		$valid_user = $this->M_user->cek_field($table,$id);
		if ($valid_user == true) {
			redirect('Login/logout');
		} else {
		$where = array(
			"jenis_calon" => 'OSIS'
		);
		$data['aspirasi'] = $this->M_user->get_data('aspirasi','aspirasi.waktu');
		// print_r($data['aspirasi']);
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
		// redirect('login/logout');
	}
	function pilih_input($id){
		$id_calon = $id;
		$id_user = $this->session->userdata('id_user');
		$data = array(
				'id_calon' => $id_calon,
				'id_user'  => $id_user,
				'janis_calon' => 'OSIS'
			);
		$this->M_pemilihan->input($data);
		redirect('/devote/aspirasi');
	}
	// for lead MPK

	function pilih_input_ketua_mpk($id){
		$id_calon = $id;
		$id_user = $this->session->userdata('id_user');
		$data = array(
				'id_calon' => $id_calon,
				'id_user'  => $id_user
			);
		$this->M_pemilihan->input($data);
		redirect('/devote/pemilihan_wakil_mpk');
	}
	// for wakil mpk

	function pilih_input_wakil_mpk($id){
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
