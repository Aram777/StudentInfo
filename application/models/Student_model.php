<?php
class Student_model extends CI_model
{
    public function get_students()
    {
        $this->db->select('*');
        $this->db->from('studentandpostal');
        return $this->db->get()->result_array();
    }
    public function get_chosen_student($student_id)
    {
        $this->db->select('*');
        $this->db->from('studentandpostal');
        $this->db->where('idStudent', $student_id);
        return $this->db->get()->result_array();
    }

    public function get_by_name($student_name)
    {
        $where = "firstname like '%" . $student_name . "%'";
//    echo "<script type='text/javascript'>alert('".$student_name."')</script>";
        $this->db->select('*');
        $this->db->from('studentandpostal');
        $this->db->where($where);
        return $this->db->get()->result_array();
    }

    public function delete_student($student_id)
    {
        $this->db->db_debug = false;
        $this->db->where('idStudent', $student_id);
        $test = $this->db->delete('student');
        return $test;
    }

    public function save_edited($update_id, $data_update)
    {
        $this->db->db_debug = false;
        $this->db->where('idStudent', $update_id);
        $upd_result = $this->db->update('student', $data_update);
        return $upd_result;
    }
    public function insert_new_student($insert_data)
    {
        $this->db->db_debug = false;
        $test = $this->db->insert('student', $insert_data);
        return $test;
    }

}
