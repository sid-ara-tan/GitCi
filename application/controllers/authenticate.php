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

       $data['info'] = '';
       $data['valid_message'] = '';


        $this->load->view('register', $data);
    }

    public function reload_register($msg) {

       
        $data['info'] = '';
        $data['valid_message'] = $msg;


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
                redirect('adminarea/home');
        }

        else
            redirect('authenticate/login/error');
    }

    function validate_register() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('password','Password','trim|required|max_length[32]');
        $this->form_validation->set_rules('password2','Password Confirm','trim|matches[password]');
        $this->form_validation->set_rules('name','Name','trim|required|max_length[50]');
        $this->form_validation->set_rules('username','User Name','trim|required|max_length[50]');
        $this->form_validation->set_rules('credit_no','Credit Card No','trim|required|min_length[16]|max_length[16]');

        
        if($this->form_validation->run()==FALSE)
        {
            $this->reload_register("Try again!");
        }
        else
        {
            $this->db->where('username',  $this->input->post('username'));
            $query=$this->db->get('user');

            if($query->num_rows==1)
            {
                $this->reload_register("This username exists");
            }
            
            else
            {
                $this->load->model('user_handle');
                
                if($this->user_handle->create_user_account())
                {
                    $data['error']="Login Now";
                    
                    $this->load->view('login',$data);
                }
                else {
                    $this->reload_register("Database insertion failed");
                }
            }
        }
        
    }

    function logout() {
        $this->load->helper('url');
        $this->session->sess_destroy();
        redirect('authenticate/login');
    }

}

