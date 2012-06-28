<<<<<<< HEAD
<?php
echo anchor('search/searchArtist',searchArtist);
echo anchor('search/searchTrack',searchTrack);
echo anchor('search/searchAlbum',searchAlbum);
?>
=======

<?php 
    $userid_session = $this->session->userdata('name');
    
    echo "Hello  ".$userid_session;
?>
<br/>
<div align="center">
<P><?php echo anchor('authenticate/logout','Log Out');?></P>
<hr />

<p><?php  echo anchor('search/searchArtist','searchArtist'); ?></p>
<p><?php echo anchor('search/searchAlbum','searchAlbum'); ?></p>
<P><?php echo anchor('search/searchTrack','searchTrack');?></P>
</div>



>>>>>>> 9084e9c34adcca87e8739f639ea242356f398a02
