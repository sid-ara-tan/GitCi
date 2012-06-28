<?php
class Artist extends CI_Model{
        function artistName() {


        $query = $this->db->query("select * from artist");
        return $query;
    }
    
}
