<?php


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
        $query=$this->db->query("
                        SELECT *
                        FROM track
                        WHERE artist_id='$artist_id';
                        ");
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return FALSE;
        }
      
    }
    
    function getTrackById($track_id){
        $query=$this->db->query("
                        SELECT *
                        FROM track
                        WHERE track_id='$track_id';
                        ");
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return FALSE;
        }
      
    }


    function trackinfo() {

        $query = $this->db->query("SELECT track_id
                    FROM track
                    ORDER BY track_id DESC
                    LIMIT 1 ");
        return $query;
    }


}
