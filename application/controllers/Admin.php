<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_calon');
		$this->load->model('M_user');
		$this->load->model('M_pemilihan');
		$this->load->model('M_penilaian');
	}

	public function index()
	{
		$data['calon'] = $this->M_calon->get()->result();
		$data['user'] = $this->M_user->join_user_kelas()->result();
		$data['feedback'] = $this->M_penilaian->join_three()->result();
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
		$dt = $this->M_pemilihan->join_calon_pemilihan()->result();
		$data['sa'] = json_encode($dt);

		$this->load->view('admin/header');
		$this->load->view('admin/page/bar_diagram',$data);
		$this->load->view('admin/footer');
	}

	public function pie_diagram()
	{
		$dt = $this->M_pemilihan->join_calon_pemilihan_pie()->result();
		$data['sa'] = json_encode($dt);
		$this->load->view('admin/header');
		$this->load->view('admin/page/pie_diagram', $data);
		$this->load->view('admin/footer');
	}

	public function penilaian()
	{
		$dt['penilaian'] = $this->M_penilaian->join_three()->result();
		// $test = substr(($dt->num_rows() / $this->M_user->get()->num_rows()) * 100, 0, 4) . '%';
		$dt['avg'] = $this->M_penilaian->avg()->result();
		
		$this->load->view('admin/header');
		$this->load->view('admin/page/penilaian',$dt);
		$this->load->view('admin/footer');
	}

	public function detail_calon($id)
	{
		$id = $this->uri->segment(3);
		$dec = decrypt_url($id);
		$where = array("id_calon"=>$dec);
		$data['calon'] = $this->M_calon->some($where)->result();
		$this->load->view('admin/header');
		$this->load->view('admin/page/detail_calon',$data);
		$this->load->view('admin/footer');
	}

	public function tambah_calon()
	{
		$nama = $this->input->post('nama_calon');
		$visi = $this->input->post('text-visi');
		$misi = $this->input->post('text-misi');

		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date("d-M-Y");
		$tgl_pembuatan = date('Y-m-d');

		$config['upload_path']  ="./public/img/foto_calon/";
        $config['allowed_types']='gif|jpg|png';
        $config['file_name']	= $nama.'-'.$tanggal;
         
        $this->load->library('upload',$config);
        if($this->upload->do_upload("foto_calon")){
            $data = $this->upload->data();
            $data_calon = array(
            	'nama_calon'		=> $nama,
            	'visi'				=> $visi,
            	'misi'				=> $misi,
            	'foto'				=> $data['file_name']
            );
            $ins = $this->M_calon->ins($data_calon);
            if ($ins == 1) {
            	echo 1;
            }else{
            	echo 2;
            }
        }else{
        	echo 3;
        	$error = array('error' => $this->upload->display_errors());
        	print_r($error);
        }
	}

	public function edit_calon()
	{
		$id_calon = $this->input->post('id_calon');
		$where = array("id_calon"=>$id_calon);

		$nama = $this->input->post('nama_calon');
		$visi = $this->input->post('text-visi');
		$misi = $this->input->post('text-misi');

		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date("d-M-Y");
		$tgl_pembuatan = date('Y-m-d');

		$config['upload_path']  ="./public/img/foto_calon/";
        $config['allowed_types']='gif|jpg|png';
        $config['file_name']	= $nama.'-'.$tanggal;
         
        $this->load->library('upload',$config);
        if($this->upload->do_upload("foto_calon")){
            $data = $this->upload->data();
            
            $get_calon_by_id = $this->M_calon->some($where)->row();
			unlink("./public/img/foto_calon/".$get_calon_by_id->foto);

            $data_calon = array(
            	'nama_calon'		=> $nama,
            	'visi'				=> $visi,
            	'misi'				=> $misi,
            	'foto'				=> $data['file_name']
            );
            $update = $this->M_calon->upd($where,$data_calon);
            if ($update == 1) {
            	echo 1;
            }else{
            	echo 2;
            }
        }else{
        	echo 3;
        	$error = array('error' => $this->upload->display_errors());
        	print_r($error);
        }
	}

	public function hapus_calon()
	{
		$id_calon = $this->input->post('id_calon');
		$where = array("id_calon"=>$id_calon);
		$get_calon_by_id = $this->M_calon->some($where)->row();
		if ($get_calon_by_id->foto == "default.png") {
			echo 3;
		}else{
			unlink("./public/img/foto_calon/".$get_calon_by_id->foto);
			$where = array('id_calon'=>$id_calon);
			$del = $this->M_calon->del($where);
			if ($del ) {
				echo 1;
			}else{
				echo 2;
			}
		}
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */