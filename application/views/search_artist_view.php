<html>
        <head>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen"/>

        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/formcheck.js"></script>
    </head>
    <body>
        <div align="center">
        <p><?php  echo anchor('clientarea/home','Home'); ?></p>
        <p>Enter  <?php echo $search;?> name</p>
        <?php 
            if($search=='artist')echo form_open('search/searchArtist/process');
            else if($search=='album')echo form_open('search/searchAlbum/process');
            else if($search=='track')echo form_open('search/searchTrack/process');
        ?>
        <input type="text" name="name"/>
        <input type="submit" value="search">
        </div>
    </body>
</html>
