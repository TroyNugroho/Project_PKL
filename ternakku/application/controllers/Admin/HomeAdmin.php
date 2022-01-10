<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeAdmin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');         
        $this->load->library('session');
        if ($this->session->userdata('posisi') != "admin") {
            redirect('Login');
        }else{
            $this->load->model('AdminModel');
        }
    }

	public function index()
	{
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('Admin/Template/Header',$sess);
        $this->load->view('Admin/Home');
        $this->load->view('Admin/Template/Footer');
    }

    public function setting()
    {
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['setting'] = $this->AdminModel->data_setting();
        
        $this->load->view('Admin/Template/Header',$sess);
        $this->load->view('Admin/Setting',$data);
        $this->load->view('Admin/Template/Footer');
    }

    public function edit_setting()
    {
        $data = array(
            'id_toko' => 1,
            'lokasi' => $this->input->post('kota'),
            'nama_toko' => $this->input->post('nama_toko'),
            'alamat_toko' => $this->input->post('alamat_toko'),
            'no_telp_toko' => $this->input->post('no_telp_toko')
        );
        
        $this->AdminModel->edit_setting($data);
        redirect('Admin/HomeAdmin/setting');
    }

    public function logout() {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('posisi');
        session_destroy();
        redirect('Login');
    }
}