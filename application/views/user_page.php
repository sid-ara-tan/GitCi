
<?php 
    $userid_session = $this->session->userdata('name');
    
    echo "Hello  ".$userid_session;
?>
<br/>
<P><?php echo anchor('authenticate/logout','Log Out');?></P>
<hr />

<p><?php  echo anchor('search/searchArtist','searchArtist'); ?></p>
<p><?php echo anchor('search/searchAlbum','searchAlbum'); ?></p>
<P><?php echo anchor('search/searchTrack','searchTrack');?></P>




