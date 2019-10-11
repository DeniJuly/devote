<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('M_user');
		$this->load->model('M_admin');
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
	public function login_admin()
	{
		$this->load->view('admin/page/login');
	}
	public function proses_login_admin()
	{
		$username = $this->input->post('username');
    	$password = $this->input->post('password');
        $where = array(
            'username'  => $username,
            'password'  => sha1($password)
        );
    	$cek = $this->M_admin->some($where)->num_rows();
    	
    	if ($cek == 1) {
            $get = $this->M_admin->some($where)->row();
            $where_id = array('id_admin'=>$get->id_admin);
            $get_admin = $this->M_admin->some($where_id)->row();
            $session = array(
                    'username'=> $get_admin->username,
                    'email'   => $get_admin->nama
                ); 
            $this->session->set_userdata($session);
            echo 1;
    	}else{
            echo 2;
    	}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
