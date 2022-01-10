<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
        $this->load->model('KeranjangModel');

		if ($this->session->userdata('posisi') !="pembeli") {
			redirect('Login');
		}else {
            $this->load->model('UserModel');
            $this->load->helper('url');  
            // $this->load->library('cart');
        }

	}

    public function index()
    {
        $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->UserModel->get_kategori();

        $id_user = $this->session->userdata('id_user');
        $data['hewan'] = $this->KeranjangModel->get_cart($id_user)->result();
        
        $this->load->view('User/Template/Header',$data);
        $this->load->view('User/Keranjang');
        $this->load->view('User/Template/Footer');
    }

    public function add_to_cart($id_hewan){
        $id_user = $this->session->userdata('id_user');
        
        $data = array(
            'id_user' => $id_user,
            'id_hewan' => $id_hewan,
			'qty' => 1
        );

        var_dump($data);
        // $this->KeranjangModel->add_cart($data, 'keranjang');
        // redirect('user/keranjang');
    }
    
    public function add_cart()
    {
        $id_user = $this->session->userdata('id_user');
        $redirect = $this->input->post('redirect_page');
        $data= array('id' => $this->input->post('id_hewan'),
					 'id_user' => $id_user,
					 'name' => $this->input->post('name'),
					 'berat' => $this->input->post('berat'),
					 'price' => $this->input->post('price'),
					 'foto_hewan' => $this->input->post('foto_hewan'),
					 'qty' =>$this->input->post('qty')
					);
                    
        // var_dump($data);
		$this->cart->insert($data);
		redirect($redirect,'refresh');
    }

    public function delete_cart($rowid){
        // var_dump($rowid);
        $this->cart->remove($rowid);
        redirect('user/Keranjang');
    }

    public function update_cart()
    {
        $i = 1;
        foreach ($this->cart->contents() as $items) {
            $data= array(
                'rowid' => $items['rowid'],
                'qty'=> $this->input->post($i . '[qty]')
            );
            $this->cart->update($data);
            $i++;
        }
        redirect('user/keranjang');
    }

    public function checkout()
    {
        $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('User/Template/Header',$data);
        $this->load->view('User/Checkout');
        $this->load->view('User/Template/Footer');
    }
}