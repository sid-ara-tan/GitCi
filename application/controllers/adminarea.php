<?php

class Adminarea extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->is_logged_in();
    }

    function home() {

        $userid_session = $this->session->userdata('name');
        $this->load->model('admin', 'Admin');


        $data['query'] = $this->Admin->alldata($userid_session);
        $this->load->view('admin_page', $data);
    }

    function insert_artist() {
        
    }

    function insert_album() {
        
    }

    function insert_track() {
        
    }

    function edit_price() {
        
    }

    function edit_info() {
        
    }

    function delete_info() {
        
    }

    function view_sell_info() {
        
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

