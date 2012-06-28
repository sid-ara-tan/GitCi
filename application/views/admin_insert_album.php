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

             <font color="red"><?php echo $message; ?></font>
            <form action="<?php echo base_url(); ?>index.php/adminarea/insert_album/insert" method="post" accept-charset="utf-8" id="myform1">
            <div>
                Album Name:
                <input type="text" name="album_name" maxlength="30" value="" />
            </div>
            <br>
            <div>
                Album Info:

                <textarea name="album_info" rows="3" cols="30" maxlenth="1000" ></textarea>
            </div>
                        <div>
                Album Price (BDT):
                <input type="text" name="album_price" maxlength="30" value="" />
            </div>
            
            
            <input type="button" name="btnsubmit" onclick="formalbum(this.form)" value="Insert Album" />
            
            
        </div> 








    </body>
</html>
