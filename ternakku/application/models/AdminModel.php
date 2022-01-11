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
    
    public function get_penugasan()
    {
        $query = $this->db->get('penugasan');
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

    public function get_id_penugasan($id)
    {
        $this->db->select('*');
        $this->db->from('penugasan');
        $this->db->join('kategori', 'penugasan.id_kategori = kategori.id_kategori');
        $hasil = $this->db->where('id_penugasan', $id)->get();

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
        $this->db->select('kategori.id_kategori, kategori.nama_kategori');
        $this->db->from('kategori');
        $hasil = $this->db->where('id_kategori', $id)->get();

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
        $this->db->where('id_perpus',1);
        return $this->db->get()->row();
    }

    public function edit_setting($data)
    {
        $this->db->where('id_perpus',$data['id_perpus']);
        $this->db->update('setting',$data);
    }
}?>