<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Login Controller
class Login extends CI_controller
{
    public function login_form()
    {
        $this->load->view('login/login_frm');
    }
    public function log_in()
    {
        $user_form = $this->input->post('username');
        $pass_form = $this->input->post('password');
        //later we can get the username and Password
        //from database
        $real_username = 'admin';
        $real_password = 'admin123';
        if ($user_form == $real_username && $pass_form == $real_password) {
            $_SESSION['logged_in'] = true;
            $_SESSION['admin'] = true;
            $_SESSION['user'] = $user_form;
            $data['sho']=1;
            $data['message'] = 'You have logged in';
            $data['page'] = 'menu/testpage';
            $this->load->view('menu/showpage', $data);
        } else {
            $data['message'] = 'Username/Password did not match';
            $this->load->view('login/login_frm', $data);
        }

    }

    public function logout()
    {
        $_SESSION['logged_in'] = false;
        session_destroy();
        $data['message'] = 'You have logged out';
        $this->load->view('login/login_frm', $data);
    }

}
