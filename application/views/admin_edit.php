<html>
        <head>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen"/>

        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/formcheck.js"></script>
    </head>

    <body>



        <div align="center">
            <?php echo heading('Welcome Admin !', 3, 'class="pink"'); ?>
            <?php echo anchor('adminarea/home', "Home"); ?>
        </div> 
        <div align="center">
            <?php echo anchor('authenticate/logout', "Log Out"); ?>
        </div>
        <hr><hr>

        <div align="center">

            Select An Album To Edit<br>
            <?php
                foreach ($query_album->result_array() as $row) {
                    
                    echo anchor('adminarea/edit_info/'.$row['album_id'],$row['album_name']);
                    echo '<hr>';
                    
                }
            ?>
                    
        </div> 








    </body>
</html>
