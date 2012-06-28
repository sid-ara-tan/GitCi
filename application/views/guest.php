<html>


    <head>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen"/>

        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/formcheck.js"></script>
    </head>
    <body>

        <br/>
        <div align="center">
            <hr />

            <p><?php echo anchor('authenticate/login', 'Member Area'); ?></p>
            <b><h1>Guest Area</h1></b>
            <p><?php echo anchor('search/searchArtist', 'searchArtist'); ?></p>
            <p><?php echo anchor('search/searchAlbum', 'searchAlbum'); ?></p>
            <P><?php echo anchor('search/searchTrack', 'searchTrack'); ?></P>
        </div>

    </body>
</html>


