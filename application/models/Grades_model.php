<?php
class Grades_model extends CI_model
{
    public function get_student_data($student_id)
    {
        $this->db->select('*');
        $this->db->from('student');
        $this->db->where('idStudent', $student_id);
        return $this->db->get()->result_array();
    }

    public function get_free_course($student_id)
    {
        $where = "idCourse not in (select grd.idCourse from grades grd where (grd.idStudent=" . $student_id . "))";
        $this->db->select('*');
        $this->db->from('course');
        $this->db->where($where);
        return $this->db->get()->result_array();
    }
    public function get_grade()
    {
        $this->db->select('*');
        $this->db->from('gradesview');
        return $this->db->get()->result_array();
    }
    public function get_student_grade($student_id)
    {
        $this->db->select('*');
        $this->db->from('gradesview');
        $this->db->where('idStudent', $student_id);
        return $this->db->get()->result_array();
    }

    public function get_studentid_bygrade($idGrades)
    {
        $this->db->select('idStudent');
        $this->db->from('grades');
        $this->db->where('idGrades', $idGrades);
        //return $this->db->get()->row()->idStudent;
        $reault_array = $this->db->get()->result_array();
        return $reault_array[0]['idStudent'];

    }
    public function get_chosen_grade($idGrades)
    {
        $this->db->select('*');
        $this->db->from('gradesview');
        $this->db->where('idGrades', $idGrades);
        return $this->db->get()->result_array();
    }

    public function delete_grade($idGrades)
    {
        $this->db->db_debug = false;
        $this->db->where('idGrades', $idGrades);
        $test = $this->db->delete('grades');
        return $test;
    }

    public function save_edited($update_id, $data_update)
    {
        $this->db->db_debug = false;
        $this->db->where('idGrades', $update_id);
        $upd_result = $this->db->update('grades', $data_update);
        return $upd_result;
    }
    public function insert_new_grade($insert_data)
    {
        $this->db->db_debug = false;
        $test = $this->db->insert('grades', $insert_data);
        return $test;
    }
}
