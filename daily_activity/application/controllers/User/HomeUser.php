<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeUser extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');         
        $this->load->library('session');
        if ($this->session->userdata('posisi') != "admin") {
            $this->load->model('UserModel');
            $this->load->helper('url');
        }else{
            redirect('Login');         
        }

    }

	public function index()
	{
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $sess['kategori'] = $this->UserModel->get_data('kategori')->result();
        $data['penugasan'] = $this->UserModel->get_data('penugasan')->result();
        
        $id_user = $this->session->userdata('id_user');

        $this->load->view('User/Template/Header',$sess);
        $this->load->view('User/Index',$data);
        $this->load->view('User/Template/Footer');
    }

    public function edit_profile()
    {
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $sess['kategori'] = $this->UserModel->get_data('kategori')->result();
        // var_dump($sess);
        
        $this->load->view('User/Template/Header',$sess);
        $this->load->view('User/Profile');
        $this->load->view('User/Template/Footer');
    }

    public function simpan_profile()
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
// var_dump($data,$where);
        $this->UserModel->edit('user', $data, $where);
        redirect('User/HomeUser');
    }
    
    public function produk($id)
    {
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $sess['kategori'] = $this->UserModel->get_data('kategori')->result();
        $data['kategori'] = $this->UserModel->id_kategori($id);
        $data['select'] = $this->UserModel->get_data('kategori')->result();

        // var_dump($data);
        $this->load->view('User/Template/Header',$sess);
        $this->load->view('User/Shop',$data);
        $this->load->view('User/Template/Footer');
    }

    public function tentang()
    {
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->UserModel->viewKategori();
        $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        // $data['tugas'] = $this->UserModel->get_tugas('tugas')->result();
        
        $this->load->view('User/Template/Header',$sess);
        $this->load->view('User/Tentang',$data);
        $this->load->view('User/Template/Footer');
    }

    public function log()
    {
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['log'] = $this->UserModel->get_skp();
        $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('User/Template/Header',$sess);
        $this->load->view('User/Log',$data);
        $this->load->view('User/Template/Footer');
    } 

    public function listTugas() {
        $id_kategori = $this->input->post('id_kategori');
        $tugas = $this->UserModel->viewByKategori($id_kategori);
        $lists = "<option value=''>--Pilih Tugas</option>";

        foreach($tugas as $tg) {
            $lists .= "<option value='".$tg->id_tugas."'>".$tg->nama_tugas."</option>";
        }

        $callback = array('list_tugas'=>$lists);

        echo json_encode($callback);
    }

    public function simpan_penugasan()
    {
        $id_user = $this->input->post('id_user');
        $id_tugas = $this->input->post('id_tugas');
        $kuantitas = $this->input->post('kuantitas');
        $tanggal = $this->input->post('tanggal');
        $detail = $this->input->post('detail_hewan');
        

        $data = array(
            'id_user' => $id_user, 
            'id_tugas' => $id_tugas,
            'kuantitas' => $kuantitas,
            'tanggal' => $tanggal,
            'details' => $detail
            
        );
        // var_dump($data);

        $this->UserModel->insert_penugasan($data, 'penugasan');
        redirect('User/HomeUser');
    }

    public function kontak()
    {
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $sess['kategori'] = $this->UserModel->get_data('kategori')->result();

        $this->load->view('User/Template/Header',$sess);
        $this->load->view('User/Kontak_Kami');
        $this->load->view('User/Template/Footer');
    }

    public function shop_detail($id)
    {
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $sess['kategori'] = $this->UserModel->get_data('kategori')->result();
        $data['penugasan'] = $this->UserModel->id_penugasan($id);

        // var_dump($data);
        $this->load->view('User/Template/Header',$sess);
        $this->load->view('User/ShopDetail',$data);
        $this->load->view('User/Template/Footer');
    }

    public function logout() {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('posisi');
        session_destroy();
        redirect('Login');
    }
}