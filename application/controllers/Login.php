<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('M_user');
	}
    public function index()
	{
		$this->form_validation->set_rules('nis','Nis','required');
		$this->form_validation->set_rules('token','Token','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {
			$token = $this->input->post('token');
			$nis = $this->input->post('nis');
			$valid_user = $this->M_user->cek_session($token,$nis);
			if ($valid_user == FALSE) {
				$this->session->set_flashdata('error','Nis dan token tidak dapat di temukan');
				redirect('login');
			} else {
				$valid_user =  $this->M_user->cek_session($token,$nis);
				if ($valid_user == FALSE) {
					$this->session->set_flashdata('error','Nis dan token tidak dapat di temukan');
					redirect('login');
				} else {
					$this->session->set_userdata('nama',$valid_user->nama);
					$this->session->set_userdata('level',$valid_user->jenis_user);
					switch ($valid_user->jenis_user) {
						case 'SISWA':
							$this->session->set_userdata('id_user',$valid_user->id_user);
							redirect('devote');
							break;
						case 'GURU':
							$this->session->set_userdata('id',$valid_user->id_user);
							$this->session->set_userdata('nama',$valid_user->nama);
							redirect('admin');
							break;
						default:break;
					}
				}
			}
		}

	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
