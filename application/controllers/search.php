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
    
    function getArtist($artistName){
        
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
    
    function getAlbum($albumName){
        
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
    
    function getTrack($trackName){
        
    }
    
    
    
}
