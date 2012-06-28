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

    function insert_album() {

        $data['message'] = '';

        if ($this->uri->segment(3) == 'inserted') {
            $data['message'] = 'Successfully Inserted';
            $this->load->view('admin_insert_album', $data);
        } elseif ($this->uri->segment(3) == 'insert') {

            $alb_name = $this->input->post('album_name');
            $alb_price = $this->input->post('album_price');
            $alb_info = $this->input->post('album_info');


            $data = array(
                'album_name' => $alb_name,
                'album_price' => $alb_price,
                'album_info' => $alb_info,
            );
            $this->db->insert('album', $data);
            redirect('adminarea/insert_album/inserted');
        }
        else
            $this->load->view('admin_insert_album', $data);
    }

    function insert_track() {
        
    }

    function insert_artist() {
        $data['message'] = '';

        if ($this->uri->segment(3) == 'inserted') {
            $data['message'] = 'Successfully Inserted';
            $this->load->view('admin_insert_artist', $data);
        } elseif ($this->uri->segment(3) == 'insert') {

            $artist_name = $this->input->post('artist_name');


            $data = array(
                'artist_name' => $artist_name,
            );
            $this->db->insert('artist', $data);
            redirect('adminarea/insert_artist/inserted');
        }
        else
            $this->load->view('admin_insert_artist', $data);
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

