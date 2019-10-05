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
		$this->load->view('user/ulasan');
	}

	public function pemilihan()
	{
		$this->load->view('user/pemilihan');
	}

	public function aspirasi()
	{
		$this->load->view('user/aspirasi');
	}
}
