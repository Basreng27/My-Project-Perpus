<?php
class M_pilih extends CI_Model{
 
    function m_pilih()
    {
        $this->db->group_by('kategori');
        $this->db->select('kategori');
        $this->db->select("count(*) as stok");
        return $this->db->from('buku')
          ->get()
          ->result();
    }
}