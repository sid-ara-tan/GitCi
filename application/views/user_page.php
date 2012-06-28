<html>


    <head>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen"/>

        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/formcheck.js"></script>
    </head>
    <body>
        <?php
        $userid_session = $this->session->userdata('name');
        ?>
        <br/>
        <div align="center">
            <P><?php echo anchor('authenticate/logout', 'Log Out'); ?></P>
            <hr />
            <b><?php echo "Hello  " . $userid_session; ?></b>
            <p><?php echo anchor('search/searchArtist', 'searchArtist'); ?></p>
            <p><?php echo anchor('search/searchAlbum', 'searchAlbum'); ?></p>
            <P><?php echo anchor('search/searchTrack', 'searchTrack'); ?></P>
        </div>

    </body>
</html>


