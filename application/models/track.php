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
}
