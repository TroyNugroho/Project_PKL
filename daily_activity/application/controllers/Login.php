<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AuthModel');         
    }

	public function index() {
		$title['title'] = 'Login';
		$this->load->view('Auth/Template/header',$title);
		$this->load->view('Auth/Login');
		$this->load->view('Auth/Template/header');
	}

	public function cek_login() {
		$data=array('email'=> $this->input->post('email', TRUE),
			'password'=> md5($this->input->post('password', TRUE)));
		$hasil=$this->AuthModel->cek_user($data);

		// var_dump($hasil);	
		if ($hasil->num_rows()==1) {

			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in']='Sudah Loggin';
				$sess_data['id_user']=$sess->id_user;
				$sess_data['nama']=$sess->nama;
				$sess_data['email']=$sess->email;
				$sess_data['foto_user']=$sess->foto_user;
				$sess_data['posisi']=$sess->posisi;
				$this->session->set_userdata($sess_data);
			}

			if ($this->session->userdata('posisi')=='admin') {
				redirect('Admin/HomeAdmin');
			}

			elseif ($this->session->userdata('posisi')=='penjual') {
				// redirect('Admin/HomeAdmin');
				echo"Halaman penjual masih belum tersedia !";
			}
			elseif ($this->session->userdata('posisi')!='admin') {
				redirect('User/HomeUser');
			}
		} else {
			echo "<script>alert('Gagal login: Cek Email dan password!');history.go(-1);</script>";
		}
	}

	public function register()
	{
		$this->load->view('Login/Register');
	}

	public function simpan_register()
	{
		$nama = $this->input->post('nama');
		$nip = $this->input->post('nip');
        $email = $this->input->post('email');
        $password= $this->input->post('password');
        $posisi = $this->input->post('posisi');

        $data = array(
            'nama' => $nama,
			'nip' => $nip,
            'email' => $email,  
            'password' => md5($password),
            'posisi' => $posisi,
        );
        // var_dump($data);

        $this->AuthModel->insert_user($data, 'user');
        redirect('Login');
	}
}
?>