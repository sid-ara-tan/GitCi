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
            <form action="<?php echo base_url(); ?>index.php/adminarea/insert_track/insert" method="post" accept-charset="utf-8" id="myform1">
                <div>
                    Track Title:
                    <input type="text" name="track_name" maxlength="30" value="" />
                </div>
                <br>
                <div>
                    Track Information:

                    <textarea name="album_info" rows="3" cols="30" maxlenth="1000" ></textarea>
                </div>
                <div>
                    Album:
                    
                </div>

                <div>
                    Artist:
                    
                </div>

                <div>
                    Track Price (BDT):
                    <input type="text" name="album_price" maxlength="30" value="" />
                </div>


                <input type="button" name="btnsubmit" onclick="formtrack(this.form)" value="Insert Album" />


        </div> 








    </body>
</html>
