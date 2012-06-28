<?php

class Track extends CI_Model {

    function trackinfo() {

        $query = $this->db->query("SELECT track_id
                    FROM track
                    ORDER BY track_id DESC
                    LIMIT 1 ");
        return $query;
    }

}
