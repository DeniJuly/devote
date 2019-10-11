<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('M_user');
		$this->load->model('M_admin');
	}

	// ------------ FUNCTION FOR CHOOICE LEAD OF MPK


	// public function index(){
	// 	if($this->session->userdata('id_user')){
	// 		redirect('devote/pemilihan_ketua_mpk');
	// 		}
	// 	else{
	// 		$this->load->view('login');
	// 	}
	// }

	// ------------ FUNCTION FOR CHOOICE LEAD OF OSIS

	public function index(){
		if($this->session->userdata('id_user')){
			$id = $this->session->userdata('id_user');
			$data['data_diri'] = $this->M_user->get_user($id);
			// print_r($data);
			$this->load->view('user/data_diri',$data);
			}
		else{
			$this->load->view('login');
		}
	}
    public function login()
	{
			$token = $this->input->post('token');
			$nis = $this->input->post('nis');
			$valid_user = $this->M_user->cek_session($token,$nis);
			$output = array('error' => FALSE);

			if ($valid_user == FALSE) {
				$output['error'] = true ;
				$output['message'] = 'Login Invalid.User not found';
			} else {
				$valid_user =  $this->M_user->cek_session($token,$nis);
				if ($valid_user == FALSE) {
						$output['error'] = true ;
						$output['message'] = 'Login Invalid.User not found';
				} else {
					$this->session->set_userdata('nama',$valid_user->nama);
					$this->session->set_userdata('level',$valid_user->jenis_user);
					switch ($valid_user->jenis_user) {
						case 'SISWA':
							$this->session->set_userdata('id_user',$valid_user->id_user);
							$output['message'] = 'Logging in. Please wait...';
							break;
						case 'GURU':
							$this->session->set_userdata('id_user',$valid_user->id_user);
							$output['message'] = 'Logging in. Please wait...';
							break;
						default:break;
					}
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
