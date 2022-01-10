<?php

class KeranjangModel extends CI_Model{

    public function add_cart($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function get_cart($id_user){
        $this->db->select('*');
        $this->db->join('hewan','hewan.id_hewan = keranjang.id_hewan');
        $this->db->where('id_user', $id_user);
        $query = $this->db->get('keranjang');
        return $query;
    }

    public function delete_cart($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    
    
}