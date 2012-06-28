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
<<<<<<< HEAD
    
=======
>>>>>>> 9084e9c34adcca87e8739f639ea242356f398a02

    function albumName() {


        $query = $this->db->query("select album_id,album_name from album order by album_name asc");
        return $query;

    }

    function album_Contain_track($album_id, $track_id) {


        $query = $this->db->query("INSERT INTO `contain`(`album_id`, `track_id`) VALUES ('$album_id','$track_id')");
        //return $query;
    }


}
