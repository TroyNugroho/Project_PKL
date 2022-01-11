<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HewanAdmin extends CI_Controller {

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
        $data['penugasan'] = $this->AdminModel->get_penugasan ()->result();
        
        $this->load->view('Admin/Template/Header',$sess);
        $this->load->view('Admin/Hewan',$data);
        $this->load->view('Admin/Template/Footer');
    }

    public function tambah_hewan()
    {
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->AdminModel->get_kategori('kategori')->result();
        $data['user'] = $this->AdminModel->get_user('user')->result();
        
        $this->load->view('Admin/Template/Header',$sess);
        $this->load->view('Admin/HewanTambah',$data);
        $this->load->view('Admin/Template/Footer');
    }

    public function simpan_hewan()
    {
        $id_petugas = $this->input->post('id_petugas');
        $id_kategori = $this->input->post('id_kategori');
        

        $data = array(
            'id_petugas' => $id_petugas, 
            'id_kategori' => $id_kategori,
            
        );
        // var_dump($data);

        $this->AdminModel->insert_hewan($data, 'penugasan');
        redirect('Admin/HewanAdmin');
    }

    public function edit_hewan($id)
    {
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $where = array('id_petugas'=> $id);
        $data['penugasan'] = $this->db->query("SELECT * FROM penugasan hw, kategori kg WHERE hw.id_kategori=kg.id_kategori AND hw.id_hewan='$id'")->result();
        $data['kategori'] = $this->AdminModel->get_data('kategori')->result();

        $this->load->view('Admin/Template/Header',$sess);
        $this->load->view('Admin/HewanEdit', $data);
        $this->load->view('Admin/Template/Footer');
    }

    public function simpan_edit()
    {
        $id_hewan = $this->input->post('id_hewan');
        $nama_hewan = $this->input->post('nama_hewan');
        $harga_hewan = $this->input->post('harga_hewan');
        $berat = $this->input->post('berat');
        $id_kategori = $this->input->post('id_kategori');
        // $jenis_hewan = $this->input->post('jenis_hewan');
        $detail_hewan = $this->input->post('detail_hewan');
        $foto_hewan = $_FILES['foto_hewan']['name'];

        if ($foto_hewan) {
            $config['upload_path'] = './upload/hewan';
            $config['allowed_types'] = 'jpg|jpeg|png';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_hewan')) {
                $foto_hewan = $this->upload->data('file_name');
                $this->db->set('foto_hewan', $foto_hewan);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $data = array();

        if ($foto_hewan != "") {
            $data += array(
                'foto_hewan' => $foto_hewan
            );
        }

        $data += array(
            'nama_hewan' => $nama_hewan,
            'harga_hewan' => $harga_hewan,  
            'berat' => $berat,  
            'id_kategori' => $id_kategori,
            // 'jenis_hewan' => $jenis_hewan,
            'detail_hewan' => $detail_hewan,
        );

        $where = array(
            'id_hewan' => $id_hewan
        );

        //  var_dump($data, $where);
        $this->AdminModel->edit_hewan('hewan', $data, $where);
        redirect('Admin/HewanAdmin');
    }

    public function detail_hewan($id)
    {
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['penugasan'] = $this->AdminModel->get_penugasan($id);
        
        $this->load->view('Admin/Template/Header',$sess);
        $this->load->view('Admin/HewanDetail', $data);
        $this->load->view('Admin/Template/Footer');
    }

    public function hapus($id_hewan)
    {
        $where = array('id_hewan' => $id_hewan);
        $this->AdminModel->delete_hewan($where, 'hewan');
        redirect('Admin/hewanAdmin');
    }
}