<?php

class UserModel extends CI_Model{

    public function get_data($table){
        $query = $this->db->get($table);
        return $query;
    }

    public function get_user()
    {
        $query = $this->db->get('user');
        return $query;
    }
      
    public function id_penugasan($id)
    {
        $this->db->select('*');
        $this->db->from('penugasan');
        $this->db->join('kategori', '[penugasan].id_kategori = kategori.id_kategori');
        $hasil = $this->db->where('id_penugasan', $id)->get();

        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return false;
        }
    }

    public function insert_penugasan($table, $data)
    {
        $this->db->insert($data, $table);
    }

    public function get_penugasan()
    {
        $query = $this->db->get('penugasan');
        return $query;
    }

    public function get_tugas()
    {
        $query = $this->db->get('tugas');
        return $query;
    }

    public function get_kategori()
    {
        $this->db->from('penugasan');
        $this->db->join('kategori', 'kategori.id_kategori = penugasan.id_kategori');
        return $this->db->get()->result();
    }

    public function id_kategori($id)
    {
        $this->db->select('penugasan.id_penugasan, penugasan.id_user, penugasan.id_tugas, kategori.id_kategori, kategori.nama_kategori');
        $this->db->from('penugasan');
        $this->db->join('kategori', 'penugasan.id_kategori = kategori.id_kategori');
        $hasil = $this->db->where('kategori.id_kategori', $id)->get();

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