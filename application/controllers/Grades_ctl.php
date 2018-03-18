<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Grades_ctl extends CI_Controller
{
/*
    public function show_grades()
    {
        $this->load->model('Grades_model');
        $data['postalcodes'] = $this->Grades_model->get_grade();
        $data['page'] = 'postalcodes/Show_postalcodesFrm';
        $this->load->view('menu/showpage', $data);
    }
    */
    public function show_student_grade($idStudent)
    {
        $this->load->model('Grades_model');
        $data['idStudent']=$idStudent;
        $data['student_data']=$this->Grades_model->get_student_data($idStudent);
        $data['free_courses'] = $this->Grades_model->get_free_course($idStudent);
        $data['chosen_grade'] = $this->Grades_model->get_student_grade($idStudent);
        $data['page'] = 'grades/Show_GradesFrm';
        $this->load->view('menu/showpage', $data);
    }
    public function show_before_delete($idGrades)
    {
        $this->load->model('Grades_model');
        $data['idGrades'] =$idGrades;
        $data['chosen_grade'] = $this->Grades_model->get_chosen_grade($idGrades);
        $data['page'] = 'grades/delete_gradeFrm';
        $this->load->view('menu/showpage', $data);
    }
    public function delete_grade($idGrades, $idStudent)
    {
        $this->load->model('Grades_model');
        $succes = $this->Grades_model->delete_grade($idGrades);
        if ($succes) {
            $data['message'] = 'The Grade has been deleted';
        } else {
            $data['message'] = 'There was an error!!';
        }
        $data['idStudent']=$idStudent;
        $data['student_data']=$this->Grades_model->get_student_data($idStudent);
        $data['free_courses'] = $this->Grades_model->get_free_course($idStudent);
        $data['chosen_grade'] = $this->Grades_model->get_student_grade($idStudent);
        $data['page'] = 'grades/Show_GradesFrm';
        $this->load->view('menu/showpage', $data);
    }
    
    public function show_for_edit_grade($edit_id )
    {
        $this->load->model('Grades_model');
        $data['idGrades'] =$edit_id;
        $data['idStudent'] =$this->Grades_model->get_studentid_bygrade($edit_id);;
        $data['chosen_grade'] = $this->Grades_model->get_chosen_grade($edit_id);
        $data['page'] = 'grades/edit_selectedgradeFrm';
        $this->load->view('menu/showpage', $data);
    }
    public function save_edited()
    {
        $this->load->model('Grades_model');
        $update_id = $this->input->post('idGrades');
        $idStudent = $this->input->post('idStudent');
        $today=date('Y-m-d');
        $data_update = array(
            'arvosana' => $this->input->post('arvosana'),
            'Date_of_grade' => $today
        );

        if (isset($_POST["submit_grd_btn"])) 
        {
            $success = $this->Grades_model->save_edited($update_id, $data_update);
            if ($success) {
                $data['message'] = 'You have updated Grade: ' . $this->input->post('idGrades') ;
            } else {
                $data['message'] = 'Something went wrong';
            }
        }
        $data['idStudent']=$idStudent;
        $data['student_data']=$this->Grades_model->get_student_data($idStudent);
        $data['free_courses'] = $this->Grades_model->get_free_course($idStudent);
        $data['chosen_grade'] = $this->Grades_model->get_student_grade($idStudent);
        $data['page'] = 'grades/Show_GradesFrm';
        $this->load->view('menu/showpage', $data);
    }


    public function add_grade_to_db()
    {
        $this->load->model('Grades_model');
        $idStudent= $this->input->post('idStudent');
        if (isset($_POST["std_btn_submit_Grd"])) {
            $insert_data = array(
                'idCourse' => $this->input->post('idCourse'),
                'idStudent' => $this->input->post('idStudent')
            );

            $succes = $this->Grades_model->insert_new_grade($insert_data);
            if ($succes) {
                $data['message'] = 'New Grade is inserted to the db';
            } else {
                $data['message'] = 'There was an error, check the primary key';
            }
        }
        $data['idStudent']=$idStudent;
        $data['student_data']=$this->Grades_model->get_student_data($idStudent);
        $data['free_courses'] = $this->Grades_model->get_free_course($idStudent);
        $data['chosen_grade'] = $this->Grades_model->get_student_grade($idStudent);
        $data['page'] = 'grades/Show_GradesFrm';
        $this->load->view('menu/showpage', $data);
    }



}