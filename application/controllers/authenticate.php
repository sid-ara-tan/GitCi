<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Authenticate extends CI_Controller {

    public function login() {


        if ($this->uri->segment(3) == 'error')
            $data['error'] = 'Username/Password Combination missmatch';
        else
            $data['error'] = '';
        $this->load->view('login', $data);
    }

    public function register() {

        if ($this->uri->segment(3) == '')
            $data['info'] = '';
        elseif ($this->uri->segment(3) == 'success')
            $data['info'] = 'Registration Successful ! Validate Your Email From Your Email Inbox !';


        $this->load->view('register', $data);
    }

    public function validate_login() {

        $post['id'] = $this->input->post('userid');
        $post['password'] = $this->input->post('password');
        $this->load->model('admin', 'Admin');
        
       $type = $_POST['myselect'];
        if ($type == 'one') {
            $data['query_idpass'] = $this->Client->userpass(strip_quotes($post));
        } elseif ($type == 'two')
            $data['query_idpass'] = $this->Admin->userpass(strip_quotes($post));

        if ($data['query_idpass']->num_rows() > 0) {
            $session['islogged'] = TRUE;
            $session['name'] = $post['id'];
            $this->session->set_userdata($session);
            
            if ($type == 'one') {
                redirect('clientarea/login');
            } else if ($type == 'two')
                redirect('adminarea/login');
        }
        
        else redirect('authenticate/login/error');
    }

    function validate_register() {
        
    }

}

