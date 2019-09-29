<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_calon');
		$this->load->model('M_user');
		$this->load->model('M_pemilihan');
	}

	public function index()
	{
		$data['calon'] = $this->M_calon->get()->result();
		$data['user'] = $this->M_user->join_user_kelas()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('admin/footer');
	}

	public function data_calon()
	{
		$data['calon'] = $this->M_calon->get()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/page/data_calon', $data);
		$this->load->view('admin/footer');
	}

	public function data_pemilih()
	{
		$data['user'] = $this->M_user->join_user_kelas()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/page/data_pemilih', $data);
		$this->load->view('admin/footer');
	}

	public function bar_diagram()
	{
		$id1=array("pemilihan.id_calon"=>1,"calon.id_calon"=>1);
		$id2=array("pemilihan.id_calon"=>2,"calon.id_calon"=>2);
		$id3=array("pemilihan.id_calon"=>3,"calon.id_calon"=>3);
		$dt['calon1'] = $this->M_pemilihan->join_calon_pemilihan($id1)->result();
		$dt['calon2'] = $this->M_pemilihan->join_calon_pemilihan($id2)->result();
		$dt['calon3'] = $this->M_pemilihan->join_calon_pemilihan($id3)->result();

		foreach ($dt['calon1'] as $d1) {
		foreach ($dt['calon2'] as $d2) {
		foreach ($dt['calon3'] as $d3) {
			$data['sa'] = json_encode(array(
					array("id"=>$d1->id_calon,"nama"=>$d1->nama_calon,"data"=>count($dt['calon1'])),
					array("id"=>$d2->id_calon,"nama"=>$d2->nama_calon,"data"=>count($dt['calon2'])),
					array("id"=>$d3->id_calon,"nama"=>$d3->nama_calon,"data"=>count($dt['calon3']))
				));
			// print_r($data);
			// exit();
		}	
		}
		}

		$this->load->view('admin/header');
		$this->load->view('admin/page/bar_diagram',$data);
		$this->load->view('admin/footer');
	}

	public function pie_diagram()
	{
		$id1=array("pemilihan.id_calon"=>1,"calon.id_calon"=>1);
		$id2=array("pemilihan.id_calon"=>2,"calon.id_calon"=>2);
		$id3=array("pemilihan.id_calon"=>3,"calon.id_calon"=>3);
		$dt['calon1'] = $this->M_pemilihan->join_calon_pemilihan($id1)->result();
		$dt['calon2'] = $this->M_pemilihan->join_calon_pemilihan($id2)->result();
		$dt['calon3'] = $this->M_pemilihan->join_calon_pemilihan($id3)->result();

		foreach ($dt['calon1'] as $d1) {
		foreach ($dt['calon2'] as $d2) {
		foreach ($dt['calon3'] as $d3) {
			$data['sa'] = json_encode(array(
					array("id"=>$d1->id_calon,"label"=>$d1->nama_calon,"y"=>count($dt['calon1'])),
					array("id"=>$d2->id_calon,"label"=>$d2->nama_calon,"y"=>count($dt['calon2'])),
					array("id"=>$d3->id_calon,"label"=>$d3->nama_calon,"y"=>count($dt['calon3']))
				));
			// print_r($data);
			// exit();
		}	
		}
		}
		$this->load->view('admin/header');
		$this->load->view('admin/page/pie_diagram', $data);
		$this->load->view('admin/footer');
	}

	public function penilaian()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/page/penilaian');
		$this->load->view('admin/footer');
	}

	public function edit_calon($id)
	{
		$this->load->view('admin/header');
		$this->load->view('admin/page/edit_calon');
		$this->load->view('admin/footer');
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */