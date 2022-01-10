<?php

class UserModel extends CI_Model{

    public function get_data($table){
        $query = $this->db->get($table);
        return $query;
    }
    
    function total_keranjang() {
        return $this->db->get('keranjang')->num_rows();
    }
      
    public function id_hewan($id)
    {
        $this->db->select('*');
        $this->db->from('hewan');
        $this->db->join('kategori', 'hewan.id_kategori_produk = kategori.id_kategori_produk');
        $hasil = $this->db->where('id_hewan', $id)->get();

        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return false;
        }
    }

    public function get_kategori()
    {
        $this->db->from('hewan');
        $this->db->join('kategori', 'kategori.id_kategori_produk = hewan.id_kategori_produk');
        return $this->db->get()->result();
    }

    public function id_kategori($id)
    {
        $this->db->select('hewan.id_hewan, hewan.nama_hewan, hewan.harga_hewan, hewan.detail_hewan, 
        hewan.foto_hewan,kategori.id_kategori_produk, kategori.nama_kategori');
        $this->db->from('hewan');
        $this->db->join('kategori', 'hewan.id_kategori_produk = kategori.id_kategori_produk');
        $hasil = $this->db->where('kategori.id_kategori_produk', $id)->get();

        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return false;
        }
        
    }

    public function edit($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

}