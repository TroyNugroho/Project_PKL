<?php

class AdminModel extends CI_Model{

    public function get_user()
    {
        $query = $this->db->get('user');
        return $query;
    }

    public function insert_user($table, $data)
    {
        $this->db->insert($data, $table);
    }

    public function edit_user($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_user($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function get_id($id)
    {
        $this->db->select('user.id_user, user.nama, user.email, user.alamat, user.telepon, user.foto_user, user.posisi');
        $this->db->from('user');
        $hasil = $this->db->where('id_user', $id)->get();

        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return false;
        }
    }

    // Model Untuk Hewan
    
    public function get_hewan()
    {
        $query = $this->db->get('hewan');
        return $query;
    }

    public function insert_hewan($table, $data)
    {
        $this->db->insert($data, $table);
    }

    public function edit_hewan($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_hewan($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function get_id_hewan($id)
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

// Kategori

    public function get_data($table){
        $query = $this->db->get($table);
        return $query;
    }

    public function get_kategori()
    {
        $query = $this->db->get('kategori');
        return $query;
    }

    public function insert_kategori($table, $data)
    {
        $this->db->insert($data, $table);
    }

    public function edit_kategori($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_kategori($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function get_id_kategori($id)
    {
        $this->db->select('kategori.id_kategori_produk, kategori.nama_kategori');
        $this->db->from('kategori');
        $hasil = $this->db->where('id_kategori_produk', $id)->get();

        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return false;
        }
    }

    //Setting
    public function data_setting()
    {
        $this->db->select('*');
        $this->db->from('setting');
        $this->db->where('id_toko',1);
        return $this->db->get()->row();
    }

    public function edit_setting($data)
    {
        $this->db->where('id_toko',$data['id_toko']);
        $this->db->update('setting',$data);
    }
}?>