<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation'); 
	}

	public function index() {
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		
		if( $this->form_validation->run() == false){
			$title['title'] = 'Login';
			$this->load->view('Auth/Template/header',$title);
			$this->load->view('Auth/Login');
			$this->load->view('Auth/Template/header');
		}else{
			$this->_login();
		}
	}

	public function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();
		if($user){
			if(password_verify($password, $user['password'])){
				$data = [
					'email' => $user['email'],
					'role_id' => $user['role_id']
				];
				$this->session->set_userdata($data);
				redirect('User/HomeUser');
			}
			else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Password Salah! </div>');
				redirect('auth');
				
			}
		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Email tidak tidak terdaftar! </div>');
			redirect('Auth');
		}
	}
	
	public function register()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
		
		if($this->form_validation->run() == false){
			$title['title'] = 'Registrasi';
			$this->load->view('Auth/Template/header',$title);
			$this->load->view('Auth/Register');
			$this->load->view('Auth/Template/header');
		}else{
			echo 'data berhasil';
		}
	}

	public function simpan_register()
	{
		# code...
	}
}