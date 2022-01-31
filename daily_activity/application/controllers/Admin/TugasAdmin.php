<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tugasAdmin extends CI_Controller {

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
        $data['tugas'] = $this->AdminModel->get_tugas ()->result();
        
        $this->load->view('Admin/Template/Header',$sess);
        $this->load->view('Admin/tugas',$data);
        $this->load->view('Admin/Template/Footer');
    }

    public function tambah_tugas()
    {
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('Admin/Template/Header',$sess);
        $this->load->view('Admin/tugasTambah');
        $this->load->view('Admin/Template/Footer');
    }

    public function simpan_tugas()
    {
        $nama_tugas = $this->input->post('nama_tugas');

        $data = array(
            'nama_tugas' => $nama_tugas,
        );
        // var_dump($data);

        $this->AdminModel->insert_tugas($data, 'tugas');
        redirect('Admin/tugasAdmin');
    }

    public function edit_tugas($id)
    {
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['tugas'] = $this->AdminModel->get_id_tugas($id);
        
        $this->load->view('Admin/Template/Header',$sess);
        $this->load->view('Admin/tugasEdit', $data);
        $this->load->view('Admin/Template/Footer');
    }

    public function simpan_edit()
    {
        $id_tugas = $this->input->post('id_tugas');
        $nama_tugas = $this->input->post('nama_tugas');

        $data = array(
            'nama_tugas' => $nama_tugas,
        );

        $where = array(
            'id_tugas' => $id_tugas
        );

        $this->AdminModel->edit_user('tugas', $data, $where);
        redirect('Admin/tugasAdmin');
    }

    public function hapus($id_tugas)
    {
        $where = array('id_tugas' => $id_tugas);
        $this->AdminModel->delete_tugas($where, 'tugas');
        redirect('Admin/tugasAdmin');
    }
}?>