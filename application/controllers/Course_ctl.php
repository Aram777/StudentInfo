<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course_ctl extends CI_Controller
{

    public function show_courses()
    {
        $this->load->model('Course_model');
        $data['courses'] = $this->Course_model->get_course();
        $data['page'] = 'courses/Show_CoursesFrm';
        $this->load->view('menu/showpage', $data);
    }

    public function show_before_delete($idCourse)
    {
        $this->load->model('Course_model');
        $data['idCourse'] = $idCourse;
        $data['chosen_course'] = $this->Course_model->get_chosen_course($idCourse);
        $data['page'] = 'courses/delete_courseFrm';
        $this->load->view('menu/showpage', $data);
    }
    public function find_by_name()
    {
        $this->load->model('Course_model');
        $coursename = $this->input->post('coursename');
        $data['courses'] = $this->Course_model->get_by_name($coursename);
        $data['page'] = 'courses/Show_CoursesFrm';
        $this->load->view('menu/showpage', $data);

    }

    public function delete_course($idCourse)
    {
        $this->load->model('Course_model');
        $succes = $this->Course_model->delete_course($idCourse);
        if ($succes) {
            $data['message'] = 'The Course has been deleted';
        } else {
            $data['message'] = 'There was an error!!';
        }
        $data['courses'] = $this->Course_model->get_course();
        $data['page'] = 'courses/Show_CoursesFrm';
        $this->load->view('menu/showpage', $data);
    }
    public function show_for_edit_course($edit_id)
    {
        $this->load->model('Course_model');
        $data['idCourse'] = $edit_id;
        $data['chosen_course'] = $this->Course_model->get_chosen_course($edit_id);
        $data['page'] = 'courses/edit_selectedcourseFrm';
        $this->load->view('menu/showpage', $data);
    }

    public function save_edited()
    {
        $this->load->model('Course_model');
        $update_id = $this->input->post('idCourse');
        $data_update = array(
            'CourseName' => $this->input->post('CourseName'),
            'ectPoints' => $this->input->post('ectPoints')
        );
        if (isset($_POST["submit_crs_btn"])) 
        {
            $success = $this->Course_model->save_edited($update_id, $data_update);
            if ($success) {
                $data['message'] = 'You have updated Course: ' . $this->input->post('CourseName') ;
            } else {
                $data['message'] = 'Something went wrong';
            }
        }
        $data['courses'] = $this->Course_model->get_course();
        $data['page'] = 'courses/Show_CoursesFrm';
        $this->load->view('menu/showpage', $data);
    }

    public function add_course_form()
    {
        $data['page'] = 'courses/add_course_frm';
        $this->load->view('menu/showpage', $data);
    }

    public function add_course_to_db()
    {
        $this->load->model('Course_model');
        if (isset($_POST["std_btn_submit_Crs"])) {
            $insert_data = array(
                'idCourse' => $this->input->post('idCourse'),
                'CourseName' => $this->input->post('CourseName'),
                'ectPoints' => $this->input->post('ectPoints')
            );

            $succes = $this->Course_model->insert_new_course($insert_data);
            if ($succes) {
                $data['message'] = 'New course is inserted to the db';
            } else {
                $data['message'] = 'There was an error, check the primary key';
            }
        }
        $data['courses'] = $this->Course_model->get_course();
        $data['page'] = 'courses/Show_CoursesFrm';
        $this->load->view('menu/showpage', $data);
    }
}
