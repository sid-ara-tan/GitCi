<?php

class Album extends CI_Model{
    function searchAlbumByName(){
    $name=$this->input->post('name');
        
        if(strcmp($name,'')!=0){
            $name=$name."%";
         
            $sql=$this->db->query("
            SELECT album_id,album_name
            FROM album 
            WHERE album_name like '$name';
            ");
        }else{
            $sql=$this->db->query("
            SELECT album_id,album_name
            FROM album;
            ");
        }
        
        if($sql->num_rows()>0){
            return $sql->result();
        }else{
            return FALSE;
        }
    }

}
