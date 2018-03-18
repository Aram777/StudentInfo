<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Students extends CI_Controller
{

    public function show_students()
    {
        $this->load->model('Student_model');
        $data['students'] = $this->Student_model->get_students();
        $data['page'] = 'students/show_students';
        $this->load->view('menu/showpage', $data);
    }

    public function show_before_delete($student_id)
    {
        $this->load->model('Student_model');
        $data['idStudent'] = $student_id;
        $data['chosen_student'] = $this->Student_model->get_chosen_student($student_id);
        $data['page'] = 'students/delete_student';
        $this->load->view('menu/showpage', $data);
    }
    public function find_by_name()
    {
        $this->load->model('Student_model');
        $student_name = $this->input->post('student_name');
        $data['students'] = $this->Student_model->get_by_name($student_name);
        $data['page'] = 'students/show_students';
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
        $data['page'] = 'students/show_students';
        $this->load->view('menu/showpage', $data);
    }
    public function show_for_edit_student($edit_id)
    {
        $this->load->model('Student_model');
        $data['idStudent'] = $edit_id;
        $data['chosen_student'] = $this->Student_model->get_chosen_student($edit_id);
        $data['page'] = 'students/edit_selected';
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
            'PostalCode' => $this->input->post('PostalCode'),
        );

        $success = $this->Student_model->save_edited($update_id, $data_update);
        if ($success) {
            $data['message'] = 'You have updated Student: ' . $this->input->post('firstname') . ' ' . $this->input->post('lastname');
        } else {
            $data['message'] = 'Something went wrong';
        }
        $data['students'] = $this->Student_model->get_students();
        $data['page'] = 'students/show_students';
        $this->load->view('menu/showpage', $data);
    }

    public function add_student_form()
    {
        $data['page'] = 'students/add_student_frm';
        $this->load->view('menu/showpage', $data);
    }

    public function add_student_to_db()
    {
        $this->load->model('Student_model');
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
          echo "<script>alert('yes');</script>";
            $data['message'] = 'New book is inserted to the library';
        } else {
          echo "<script>alert('no');</script>";
            $data['message'] = 'There was an error, check the primary key';
        }
        //$data['new_book']=$insert_data;
        $data['students'] = $this->Student_model->get_students();
        $data['page'] = 'students/show_students';
        $this->load->view('menu/showpage', $data);
    }

/*

public function add_book_form(){
if(isset($_SESSION['logged_in'])) {
if($_SESSION['admin'] == true) {
$data['page']='book/add_book_form';
$this->load->view('menu/content',$data);
}
else {
$data['message']='You dont have an access to this page';
$data['page']='book/add_book_to_db';
$this->load->view('menu/content',$data);
}
}
}

public function edit_selected($edit_id){
$this->load->model('Book_model');
$data['book_id']=$edit_id;
$data['chosen_book']=$this->Book_model->get_chosen_book($edit_id);
$data['page']='book/edit_selected';
$this->load->view('menu/content',$data);
}

public function save_edited(){
$this->load->model('Book_model');
$update_id=$this->input->post('book_id');
$data_update=array(
'book_name'=>$this->input->post('book_name'),
'author'=>$this->input->post('author'),
'isbn'=>$this->input->post('isbn')
);
$success=$this->Book_model->save_edited($update_id,$data_update);
if($success){
$data['message']='You have updated book: '.$this->input->post('book_name');
}
else {
$data['message']='Something went wrong';
}
$data['page']='book/add_book_to_db';
$this->load->view('menu/content',$data);
}

 */

}
