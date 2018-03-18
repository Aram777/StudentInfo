<?php
class Postalcode_model extends CI_model
{
  public function get_postalcode(){
    $this->db->select('*');
    $this->db->from('postalcode');
    return $this->db->get()->result_array();
  }

  }
   ?>
