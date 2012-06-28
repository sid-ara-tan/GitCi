<html>
    <body>
        <p>Enter  <?php echo $search;?> name</p>
        <?php 
            if($search=='artist')echo form_open('search/searchArtist/process');
            else if($search=='album')echo form_open('search/searchAlbum/process');
            else if($search=='track')echo form_open('search/searchTrack/process');
        ?>
        <input type="text" name="name"/>
        <input type="submit" value="search">
    </body>
</html>
