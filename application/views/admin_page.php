<html>
        <head>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen"/>

        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/formcheck.js"></script>
    </head>
    <body>


        <div align="center">.
            <?php echo heading('Welcome Admin !', 3, 'class="pink"'); ?>
            <?php echo anchor('adminarea/insert_artist', "Insert Artist"); ?>
        </div>
        <div align="center">
            
            <?php echo anchor('adminarea/insert_album', "Insert Album"); ?>
        </div> 
        <div align="center">
            <?php echo anchor('adminarea/insert_track', "Insert Tracks"); ?>
        </div>



        <div align="center">
            <?php echo anchor('adminarea/edit_info', "Edit Information"); ?>
        </div>
        <div align="center">
            <?php echo anchor('adminarea/delete_info', "Delete Information"); ?>
        </div>
        <div align="center">
            <?php echo anchor('adminarea/view_sell_info', "View Sell Information"); ?>
        </div>
        <div align="center">
            <?php echo anchor('authenticate/logout', "Log Out"); ?>
        </div>


    </body>
</html>
