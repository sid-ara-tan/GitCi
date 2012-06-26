<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mock extends CI_Controller {

    public function register() {

        if ($this->uri->segment(3) == '')
            $data['info'] = '';
        elseif ($this->uri->segment(3) == 'success')
            $data['info'] = 'Registration Successful ! Validate Your Email From Your Email Inbox !';


        $this->load->view('register', $data);
    }

    public function login($msg1 = '') {

        $data['valid'] = $msg1;
        if ($this->uri->segment(3) == 'error')
            $data['error'] = 'Username/Password Combination missmatch';
        else
            $data['error'] = '';
        $this->load->view('login', $data);
    }

    public function validate_login() {
        
    }

    public function validate_register() {
        
    }

}
