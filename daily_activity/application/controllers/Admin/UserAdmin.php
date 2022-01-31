<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserAdmin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');         
        $this->load->library('session');
        if ($this->session->userdata('posisi') != "admin") {
            redirect('Login');
        }else{
        $this->load->model('AdminModel');
        $this->load->helper('url');         
        }
    }

	public function index()
	{
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->AdminModel->get_user ()->result();
        
        $this->load->view('Admin/Template/Header',$sess);
        $this->load->view('Admin/User',$data);
        $this->load->view('Admin/Template/Footer');
    }

    public function tambah_user()
    {
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('Admin/Template/Header',$sess);
        $this->load->view('Admin/userTambah');
        $this->load->view('Admin/Template/Footer');
    }

    public function simpan_user()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $password= $this->input->post('password');
        $alamat= $this->input->post('alamat');
        $telepon = $this->input->post('telepon');
        $foto_user = $_FILES['foto_user']['name'];
        $posisi = $this->input->post('posisi');

        if ($foto_user = '') {} else {
            $config['upload_path'] = './upload/image';
            $config['allowed_types'] = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_user')) {
                echo "foto Diri Gagal Di-Upload\n";
            } else {
                $foto_user = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama' => $nama,
            'email' => $email,  
            'password' => md5($password),
            'alamat' => $alamat,
            'telepon' => $telepon,
            'foto_user' => $foto_user,
            'posisi' => $posisi,
        );
        // var_dump($data);

        $this->AdminModel->insert_user($data, 'user');
        redirect('Admin/UserAdmin');
    }

    public function edit_user($id)
    {
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->AdminModel->get_id($id);
        
        $this->load->view('Admin/Template/Header',$sess);
        $this->load->view('Admin/UserEdit', $data);
        $this->load->view('Admin/Template/Footer');
    }

    public function simpan_edit()
    {
        $id_user = $this->input->post('id_user');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $password= $this->input->post('password');
        $alamat= $this->input->post('alamat');
        $telepon = $this->input->post('telepon');
        $posisi = $this->input->post('posisi');
        $foto_user = $_FILES['foto_user']['name'];

        if ($foto_user) {
            $config['upload_path'] = './upload/image';
            $config['allowed_types'] = 'jpg|jpeg|png';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_user')) {
                $foto_user = $this->upload->data('file_name');
                $this->db->set('foto_user', $foto_user);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $data = array();

        if ($password != "") {
            $data = array(
                'password' => MD5($password)
            );
        }

        if ($foto_user != "") {
            $data += array(
                'foto_user' => $foto_user
            );
        }

        $data += array(
            'nama' => $nama,
            'email' => $email,  
            'alamat' => $alamat,
            'telepon' => $telepon,
            'posisi' => $posisi,
        );

        $where = array(
            'id_user' => $id_user
        );

        $this->AdminModel->edit_user('user', $data, $where);
        redirect('Admin/UserAdmin');
    }

    public function detail_user($id)
    {
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->AdminModel->get_id($id);
        
        $this->load->view('Admin/Template/Header',$sess);
        $this->load->view('Admin/UserDetail', $data);
        $this->load->view('Admin/Template/Footer');
    }

    public function hapus($id_user)
    {
        $where = array('id_user' => $id_user);
        $this->AdminModel->delete_user($where, 'user');
        redirect('Admin/UserAdmin');
    }
}