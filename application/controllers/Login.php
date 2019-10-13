<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('M_user');
		$this->load->model('M_admin');
	}


	public function index(){
		if($this->session->userdata('id_user')){
			redirect('devote');
			}
		else{
			$this->load->view('login');
		}
	}

    public function login()
	{
			$token = $this->input->post('token');
			$nis = $this->input->post('nis');
			$valid_user = $this->M_user->cek_field("pemilihan",$this->input->post('nis'));
			if($valid_user){
				$output['error'] = true ;
				$output["message"] = "Anda Sudah Memilih";
			}else{
				$valid_user = $this->M_user->cek_session($token,$nis);
				$output = array('error' => false);
				if ($valid_user['hasil']['status'] == TRUE) {
					switch ($valid_user['hasil']['data']['jenis_user']) {
							case 'SISWA':
								$this->session->set_userdata('id_user',$valid_user['hasil']['data']['id_user']);
								$output['message'] = 'Logging in. Please wait...';
								break;
							case 'GURU':
								$this->session->set_userdata('id_user',$valid_user['hasil']['data']['id_user']);
								$output['message'] = 'Logging in. Please wait...';
								break;
							default:break;
						}
					
				} else {
					$output['error'] = true ;
					$output['message'] = $valid_user['hasil']['pesan'];
				}
			}

		echo json_encode($output);

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
