<?php

class Album extends CI_Model {

    function albumName() {


        $query = $this->db->query("select album_id,album_name from album");
        return $query;
    }

    function album_Contain_track($album_id, $track_id) {


        $query = $this->db->query("INSERT INTO `contain`(`album_id`, `track_id`) VALUES ('$album_id','$track_id')");
        //return $query;
    }

}
