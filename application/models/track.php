<?php

<<<<<<< HEAD
class Track extends CI_Model{
    function searchTrackByName(){
        $name=$this->input->post('name');
        
        if(strcmp($name,'')!=0){
            $name=$name."%";
         
            $sql=$this->db->query("
            SELECT track_id,track_name
            FROM track 
            WHERE track_name like '$name';
            ");
        }else{
            $sql=$this->db->query("
            SELECT track_id,track_name
            FROM track;
            ");
        }
        
        if($sql->num_rows()>0){
            return $sql->result();
        }else{
            return FALSE;
        }
    }
    
    function getTrackByArtist($artist_id){
        
    }
=======
class Track extends CI_Model {

    function trackinfo() {

        $query = $this->db->query("SELECT track_id
                    FROM track
                    ORDER BY track_id DESC
                    LIMIT 1 ");
        return $query;
    }

>>>>>>> c065ce7f165296affad106865a41b5feec81e468
}
