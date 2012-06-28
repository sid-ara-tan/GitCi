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
        $data['message'] = '';
        $this->load->model('album', 'Album');
        $this->load->model('artist', 'Artist');
        $this->load->model('track', 'Track');

        $data['query_album'] = $this->Album->albumName();
        $data['query_artist'] = $this->Artist->artistName();

        if ($this->uri->segment(3) == 'inserted') {
            $data['message'] = 'Successfully Inserted';
            $this->load->view('admin_insert_track', $data);
        } elseif ($this->uri->segment(3) == 'insert') {

            $track_name = $this->input->post('track_name');
            $track_info = $this->input->post('track_info');
            $artist_id = $this->input->post('selectArtist');
            $album_id = $this->input->post('selectAlbum');
            $track_price = $this->input->post('track_price');
            $data = array(
                'track_name' => $track_name,
                'track_info' => $track_info,
                'track_price' => $track_price,
                'artist_id' => $artist_id
            );
            
            $this->db->insert('track', $data);
            
            $track_query= $this->Track->trackinfo();
            $row=$track_query->row();
            $track_id=$row->track_id;

            $this->Album->album_Contain_track($album_id,$track_id);
            
            redirect('adminarea/insert_track/inserted');
        }

        else
            $this->load->view('admin_insert_track', $data);
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

