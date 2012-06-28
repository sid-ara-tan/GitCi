<?php
class Artist extends CI_Model{

    function searchArtistByName(){
        $name=$this->input->post('name');
        
        if(strcmp($name,'')!=0){
            $name=$name."%";
         
            $sql=$this->db->query("
            SELECT artist_id,artist_name
            FROM artist 
            WHERE artist_name like '$name';
            ");
        }else{
            $sql=$this->db->query("
            SELECT artist_id,artist_name
            FROM artist;
            ");
        }
        
        if($sql->num_rows()>0){
            return $sql->result();
        }else{
            return FALSE;
        }
    }

        function artistName() {


        $query = $this->db->query("select * from artist");
        return $query;
    }
    

}
