<?php
class Course_model extends CI_model
{
  public function get_course(){
    $this->db->select('*');
    $this->db->from('course');
    return $this->db->get()->result_array();
  }

  }
   ?>
