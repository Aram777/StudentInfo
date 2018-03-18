<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Students_ctl extends CI_Controller
{

    public function show_students()
    {
        $this->load->model('Student_model');
        $data['students'] = $this->Student_model->get_students();
        $data['page'] = 'students/Show_StudentsFrm';
        $this->load->view('menu/showpage', $data);
    }

    public function show_before_delete($student_id)
    {
        $this->load->model('Student_model');
        $data['idStudent'] = $student_id;
        $data['chosen_student'] = $this->Student_model->get_chosen_student($student_id);
        $data['page'] = 'students/delete_studentFrm';
        $this->load->view('menu/showpage', $data);
    }
    public function find_by_name()
    {
        $this->load->model('Student_model');
        $student_name = $this->input->post('student_name');
        $data['students'] = $this->Student_model->get_by_name($student_name);
        $data['page'] = 'students/Show_StudentsFrm';
        $this->load->view('menu/showpage', $data);

    }

    public function delete_student($student_id)
    {
        $this->load->model('Student_model');
        $succes = $this->Student_model->delete_student($student_id);
        if ($succes) {
            $data['message'] = 'The student has been deleted';
        } else {
            $data['message'] = 'There was an error!!';
        }
        $data['students'] = $this->Student_model->get_students();
        $data['page'] = 'students/Show_StudentsFrm';
        $this->load->view('menu/showpage', $data);
    }
    public function show_for_edit_student($edit_id)
    {
        $this->load->model('Student_model');
        $data['idStudent'] = $edit_id;
        $data['chosen_student'] = $this->Student_model->get_chosen_student($edit_id);
        $data['page'] = 'students/edit_selectedFrm';
        $this->load->view('menu/showpage', $data);
    }

    public function save_edited()
    {
        $this->load->model('Student_model');
        $update_id = $this->input->post('idStudent');
        $data_update = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'group' => $this->input->post('group'),
            'email' => $this->input->post('email'),
            'StreetAddress' => $this->input->post('StreetAddress'),
            'birthYear' => $this->input->post('birthYear'),
            'PostalCode' => $this->input->post('PostalCode')
        );
        if (isset($_POST["submit_std_btn"])) 
        {
            $success = $this->Student_model->save_edited($update_id, $data_update);
            if ($success) {
                $data['message'] = 'You have updated Student: ' . $this->input->post('firstname') . ' ' . $this->input->post('lastname');
            } else {
                $data['message'] = 'Something went wrong';
            }
        }
        $data['students'] = $this->Student_model->get_students();
        $data['page'] = 'students/Show_StudentsFrm';
        $this->load->view('menu/showpage', $data);
    }

    public function add_student_form()
    {
        $this->load->model('Postalcode_model');
        $data['postalcode'] = $this->Postalcode_model->get_postalcodes();
        $data['page'] = 'students/add_student_frm';
        $this->load->view('menu/showpage', $data);
    }

    public function add_student_to_db()
    {
        $this->load->model('Student_model');
        if (isset($_POST["std_btn_submit"])) {
            $insert_data = array(
                'idStudent' => $this->input->post('idStudent'),
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'group' => $this->input->post('group'),
                'email' => $this->input->post('email'),
                'StreetAddress' => $this->input->post('StreetAddress'),
                'birthYear' => $this->input->post('birthYear'),
                'PostalCode' => $this->input->post('PostalCode')
            );

            $succes = $this->Student_model->insert_new_student($insert_data);
            if ($succes) {
                $data['message'] = 'New book is inserted to the library';
            } else {
                $data['message'] = 'There was an error, check the primary key';
            }
        }
        $data['students'] = $this->Student_model->get_students();
        $data['page'] = 'students/Show_StudentsFrm';
        $this->load->view('menu/showpage', $data);
    }
}
