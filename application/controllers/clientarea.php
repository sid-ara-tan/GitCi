<?php
  class clientarea extends CI_Controller
  {
 
    function __construct() {
        parent::__construct();
        $this->is_logged_in();
    }

    function home() {

        $userid_session = $this->session->userdata('name');
        $this->load->model('client', 'Client');


        $data['query'] = $this->Client->alldata($userid_session);
        $this->load->view('user_page', $data);
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
