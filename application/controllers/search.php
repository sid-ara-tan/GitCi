<?php
class Search extends CI_Controller{
    function searchArtist($task=''){
        if($task==''){
            $data['search']='artist';
            $this->load->view("search_artist_view",$data);
        }else{
            $this->load->model('artist');
            $data['search']='artist';
            $data['list']=$this->artist->searchArtistByName();
            $this->load->view('show_artist_list',$data);
        }
        
    }
    
    function getArtist($artist_id){
        $data['artist_id']=$artist_id;
        $data['infotype']='artist';
        $this->load->model('track');
        $data['info']=$this->track->getTrackByArtist($artist_id);
        $this->load->view('artist_info',$data);
    }
    
    function searchAlbum($task=''){
        if($task==''){
            $data['search']='album';
            $this->load->view("search_artist_view",$data);
        }else{
            $this->load->model('album');
            $data['search']='album';
            $data['list']=$this->album->searchAlbumByName();
            $this->load->view('show_artist_list',$data);
           
        }
    }
    
    function getAlbum($album_id){
        echo "in album".$album_id;
    }
    
    function searchTrack($task=''){
        if($task==''){
            $data['search']='track';
            $this->load->view("search_artist_view",$data);
        }else{
            $this->load->model('track');
            $data['search']='track';
            $data['list']=$this->track->searchTrackByName();
            $this->load->view('show_artist_list',$data);
        }
    }
    
    function getTrack($track_id){
        
        $data['infotype']='artist';
        $this->load->model('track');
        $data['info']=$this->track->getTrackById($track_id);
        $this->load->view('artist_info',$data);
    }
    
    
    
}
