<?php
class Grades_model extends CI_model
{
  public function get_grade(){
    $this->db->select('*');
    $this->db->from('grades');
    return $this->db->get()->result_array();
  }

  }
   ?>
