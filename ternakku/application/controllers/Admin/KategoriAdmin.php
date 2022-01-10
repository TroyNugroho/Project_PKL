<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriAdmin extends CI_Controller {

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
        $data['kategori'] = $this->AdminModel->get_kategori ()->result();
        
        $this->load->view('Admin/Template/Header',$sess);
        $this->load->view('Admin/Kategori',$data);
        $this->load->view('Admin/Template/Footer');
    }

    public function tambah_kategori()
    {
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('Admin/Template/Header',$sess);
        $this->load->view('Admin/KategoriTambah');
        $this->load->view('Admin/Template/Footer');
    }

    public function simpan_kategori()
    {
        $nama_kategori = $this->input->post('nama_kategori');

        $data = array(
            'nama_kategori' => $nama_kategori,
        );
        // var_dump($data);

        $this->AdminModel->insert_kategori($data, 'kategori');
        redirect('Admin/KategoriAdmin');
    }

    public function edit_kategori($id)
    {
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->AdminModel->get_id_kategori($id);
        
        $this->load->view('Admin/Template/Header',$sess);
        $this->load->view('Admin/KategoriEdit', $data);
        $this->load->view('Admin/Template/Footer');
    }

    public function simpan_edit()
    {
        $id_kategori_produk = $this->input->post('id_kategori_produk');
        $nama_kategori = $this->input->post('nama_kategori');

        $data = array(
            'nama_kategori' => $nama_kategori,
        );

        $where = array(
            'id_kategori_produk' => $id_kategori_produk
        );

        $this->AdminModel->edit_user('kategori', $data, $where);
        redirect('Admin/KategoriAdmin');
    }

    public function hapus($id_kategori_produk)
    {
        $where = array('id_kategori_produk' => $id_kategori_produk);
        $this->AdminModel->delete_kategori($where, 'Kategori');
        redirect('Admin/KategoriAdmin');
    }
}?>