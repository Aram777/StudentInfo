<?php
class Course_model extends CI_model
{
    public function get_course()
    {
        $this->db->select('*');
        $this->db->from('courseview');
        return $this->db->get()->result_array();
    }

    public function get_chosen_course($idCourse)
    {
        $this->db->select('*');
        $this->db->from('courseview');
        $this->db->where('idCourse', $idCourse);
        return $this->db->get()->result_array();
    }

    public function get_by_name($coursename)
    {
        $where = "CourseName like '%" . $coursename . "%'";
        $this->db->select('*');
        $this->db->from('courseview');
        $this->db->where($where);
        return $this->db->get()->result_array();
    }

    public function delete_course($idCourse)
    {
        $this->db->db_debug = false;
        $this->db->where('idCourse', $idCourse);
        $test = $this->db->delete('course');
        return $test;
    }

    public function save_edited($update_id, $data_update)
    {
        $this->db->db_debug = false;
        $this->db->where('idCourse', $update_id);
        $upd_result = $this->db->update('course', $data_update);
        return $upd_result;
    }
    public function insert_new_course($insert_data)
    {
        $this->db->db_debug = false;
        $test = $this->db->insert('course', $insert_data);
        return $test;
    }
}
