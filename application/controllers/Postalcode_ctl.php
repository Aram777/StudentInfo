<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Postalcode_ctl extends CI_Controller
{

    public function show_postalcodes()
    {
        $this->load->model('Postalcode_model');
        $data['postalcodes'] = $this->Postalcode_model->get_postalcodes();
        $data['page'] = 'postalcodes/Show_postalcodesFrm';
        $this->load->view('menu/showpage', $data);
    }

    public function show_before_delete($PostalCode)
    {
        $this->load->model('Postalcode_model');
        $data['PostalCode'] = $PostalCode;
        $data['chosen_postalcode'] = $this->Postalcode_model->get_chosen_postalcode($PostalCode);
        $data['page'] = 'postalcodes/delete_postalcodeFrm';
        $this->load->view('menu/showpage', $data);
    }
    public function find_by_name()
    {
        $this->load->model('Postalcode_model');
        $postPlace = $this->input->post('postPlace');
        $data['postalcodes'] = $this->Postalcode_model->get_by_name($postPlace);
        $data['page'] = 'postalcodes/Show_postalcodesFrm';
        $this->load->view('menu/showpage', $data);

    }

    public function delete_postalcode($PostalCode)
    {
        $this->load->model('Postalcode_model');
        $succes = $this->Postalcode_model->delete_postalcode($PostalCode);
        if ($succes) {
            $data['message'] = 'The postalcode has been deleted';
        } else {
            $data['message'] = 'There was an error!!';
        }
        $data['postalcodes'] = $this->Postalcode_model->get_postalcodes();
        $data['page'] = 'postalcodes/Show_postalcodesFrm';
        $this->load->view('menu/showpage', $data);
    }
    public function show_for_edit_postalcode($edit_id)
    {
        $this->load->model('Postalcode_model');
        $data['PostalCode'] = $edit_id;
        $data['chosen_postalcode'] = $this->Postalcode_model->get_chosen_postalcode($edit_id);
        $data['page'] = 'postalcodes/edit_selectedpostalcodeFrm';
        $this->load->view('menu/showpage', $data);
    }

    public function save_edited()
    {
        
        $this->load->model('Postalcode_model');
        $update_id = $this->input->post('PostalCode');
        $data_update = array(
            'postPlace' => $this->input->post('postPlace')
        );
        if (isset($_POST["submit_pst_btn"])) 
        {

            $success = $this->Postalcode_model->save_edited($update_id, $data_update);
            if ($success) {
                $data['message'] = 'You have updated Postalcode: ' . $this->input->post('PostalCode') ;
            } else {
                $data['message'] = 'Something went wrong';
            }
        }
        $data['postalcodes'] = $this->Postalcode_model->get_postalcodes();
        $data['page'] = 'postalcodes/Show_postalcodesFrm';
        $this->load->view('menu/showpage', $data);
    }

    public function add_postalcode_form()
    {
        $data['page'] = 'postalcodes/add_postalcode_frm';
        $this->load->view('menu/showpage', $data);
    }

    public function add_postalcode_to_db()
    {
        $this->load->model('Postalcode_model');
        if (isset($_POST["std_btn_submit_Pst"])) {
            $insert_data = array(
                'PostalCode' => $this->input->post('PostalCode'),
                'postPlace' => $this->input->post('postPlace')
            );

            $succes = $this->Postalcode_model->insert_new_postalcode($insert_data);
            if ($succes) {
                $data['message'] = 'New postalcode is inserted to the db';
            } else {
                $data['message'] = 'There was an error, check the primary key';
            }
        }
        $data['postalcodes'] = $this->Postalcode_model->get_postalcodes();
        $data['page'] = 'postalcodes/Show_postalcodesFrm';
        $this->load->view('menu/showpage', $data);
    }
}
