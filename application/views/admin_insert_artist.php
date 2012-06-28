<html>
    <head>

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

            <font color="red"><?php echo $message; ?></font>
            <form action="<?php echo base_url(); ?>index.php/adminarea/insert_artist/insert" method="post" accept-charset="utf-8" id="myform1">
                <div>
                    Artist Name:
                    <input type="text" name="artist_name" maxlength="30" value="" />
                </div>
                <br>



                <input type="button" name="btnsubmit" onclick="formartist(this.form)" value="Insert Artist Info" />


        </div> 








    </body>
</html>
