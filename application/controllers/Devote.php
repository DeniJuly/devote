<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Devote extends CI_Controller {
	// function __construct()
	// {
	// 	// parent::__construct();
	// 	// if($this->session->userdata('id_user')==null){
	// 	// 	redirect(site_url('Login'));
	// 	// }
	// }
	public function index()
	{
		$this->load->view('user/data_diri');
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
