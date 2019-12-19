<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('AuthModel');
		$this->load->library('session');
	}
	
	public function index() {
		if ($this->session->userdata('dmi-bengkulu') == TRUE) {
			if ($this->session->userdata('level')=='admin'){
				redirect(base_url("admin"));
			} elseif ($this->session->userdata('level')=='pengurus') {
				redirect(base_url("pengurus"));
			} elseif ($this->session->userdata('level')=='ustadz') {
				redirect(base_url("ustadz"));
			} 
		} else {
			$this->login();
		}
	}

	public function login() {
		header("Access-Control-Allow-Origin: *");
		if($this->session->userdata('dmi-bengkulu') == TRUE){
			$this->index();
		}else{
			$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('view_login');
			} else {
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$checkUser = $this->AuthModel->checkUser($email);
				if($checkUser->num_rows()==1){
					$user =  $checkUser->row();
					if (password_verify($password, $user->password)) {
						$session_data['dmi-bengkulu'] = TRUE;
						$session_data['id_user'] = $user->id_user;
						$session_data['nama_user'] = $user->nama;
						$session_data['foto_user'] = $user->foto;
						$session_data['level'] = $user->level;
						// Add user data in session
						$this->session->set_userdata($session_data);
						$this->index();
					} else {
						$this->session->set_flashdata('error','Password Salah');
						$this->load->view('view_login');
					}
				}else {
					$this->session->set_flashdata('error','Email tidak terdaftar');
					$this->load->view('view_login');
				}
			}
		}
		
	}
	
	// Logout from admin page
	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url("auth"));
	}

	public function daftar()
	{
		header("Access-Control-Allow-Origin: *");
		if($this->session->userdata('dmi-bengkulu') == TRUE){
			$this->index();
		}else{
			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length[6]');
			$this->form_validation->set_rules('ulangipassword', 'Ulangi Password', 'trim|required|xss_clean|matches[password]');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('register');
			} else {
				$username = $this->input->post('username');
				$cek = $this->AuthModel->checkUser($username);
				if($cek->num_rows()){
					$this->session->set_flashdata('error','Username telah terdaftar.');
					$this->load->view('register');
				}else{
					$akun['level'] = "ustadz";
					$akun['username'] = $this->input->post('username');
					$akun['email'] = $this->input->post('email');
					$akun['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
					$insert=$this->AuthModel->createNewUser($akun);
					if($insert){
						$this->session->set_flashdata('info','Pendaftaran Berhasil. Silahkan Login!');
						redirect(base_url('auth'));
					}else{
						$this->session->set_flashdata('error','Pendaftaran Gagal.');
						$this->load->view('register');
					}
				}
			}
		}
	}

	public function lupapassword() {
		header("Access-Control-Allow-Origin: *");
		if($this->session->userdata('dmi-bengkulu') == TRUE){
			$this->index();
		}else{
			$email=$this->input->post('email');
			$result = $this->AuthModel->get_where('tb_user',array('email'=>$email));
			if ($result->num_rows()==1) {
				$this->session->set_flashdata('info','Perubahan password telah dikirim ke email anda. Silahkan periksa  kotak masuk email anda');
			} else {
				$this->session->set_flashdata('error','Email anda tidak terdaftar. Silahkan daftar baru!');
			}
			$this->login();
		}
	}


}
