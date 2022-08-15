<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf_model extends CI_Model{

  private $table = 'tbl_goods';
  private $id = 'tbl_goods.id';

  function get_all()
  {
    $this->db->select('*');
    $this->db->from($this->table);
    $query = $this->db->get();
    return $query->result();
  }

}
