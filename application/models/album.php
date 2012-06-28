<?php

class Album extends CI_Model {

    function albumName() {


        $query = $this->db->query("select album_id,album_name from album");
        return $query;
    }

}
