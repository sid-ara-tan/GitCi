<?php

class Adminarea extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->is_logged_in();
    }

    function login() {

        $userid_session = $this->session->userdata('name');
        $this->load->model('admin', 'Admin');


        $data['query'] = $this->Admin->alldata($userid_session);
        $this->load->view('admin_page', $data);
    }


    function logout() {
        $this->load->helper('url');
        $this->session->sess_destroy();
        redirect('authenticate/login');
    }
    
    function is_logged_in() {
        $is_logged = $this->session->userdata('islogged');

        if (!isset($is_logged) || $is_logged != true) {
            echo 'You don\'t have permission to access this page';
            echo anchor(base_url(), "HOME");
            die();
        }
    }
}
?>

