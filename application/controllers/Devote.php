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
		$this->load->model('M_calon');
	}
	public function index()
	{
		$id = $this->session->userdata('id_user');
		$data['data_diri'] = $this->M_user->get_user($id);
		// print_r($data);
		$this->load->view('user/data_diri',$data);
	}

	public function ulasan()
	{
		$where = array(
			"jenis_calon" => 'OSIS'
		);
		$data['osis'] = $this->M_user->get_where('calon',$where);
		$this->load->view('user/ulasan',$data);
	}

	public function pemilihan()
	{
		$data['calon'] = $this->M_calon->get()->result();
		// print_r($data['calon']);
		// die();
		$this->load->view('user/pemilihan');
	}

	public function aspirasi()
	{
		$this->load->view('user/aspirasi');
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

}
