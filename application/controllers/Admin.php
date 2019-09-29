<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}

	public function data_calon()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/page/data_calon');
		$this->load->view('admin/footer');
	}

	public function data_pemilih()
	{
		// $this->load->model('test_jsgrid');
		// $data = $this->test_jsgrid->get_data()->result();
		// $x['data'] = $data;
		$this->load->view('admin/header');
		$this->load->view('admin/page/data_pemilih');
		$this->load->view('admin/footer');
	}

	public function bar_diagram()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/page/bar_diagram');
		$this->load->view('admin/footer');
	}

	public function pie_diagram()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/page/pie_diagram');
		$this->load->view('admin/footer');
	}

	public function penilaian()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/page/penilaian');
		$this->load->view('admin/footer');
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */