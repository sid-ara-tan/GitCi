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
            <form action="<?php echo base_url(); ?>index.php/adminarea/insert_track/insert" method="post" accept-charset="utf-8" id="myform1">
                <div>
                    Track Title:
                    <input type="text" name="track_name" maxlength="30" value="" />
                </div>
                <br>
                <div>
                    Track Information:

                    <textarea name="track_info" rows="3" cols="30" maxlenth="1000" ></textarea>
                </div>
                <div>
                    Album:
                    <select name="selectAlbum">
                        <option value="">Select Album</option>
                        <?php foreach ($query_album->result_array() as $row) {
                            ?>
                            <option value="<?php echo $row['album_id'] ?>"><?php echo $row['album_name']; ?></option>

                        <?php } ?>

                    </select>

                </div>

                <div>
                    Artist:
                    <select name="selectArtist">
                        <option value="">Select Artist</option>
                        <?php foreach ($query_artist->result_array() as $row) {
                            ?>
                            <option value="<?php echo $row['artist_id'] ?>"><?php echo $row['artist_name']; ?></option>

                        <?php } ?>

                    </select>

                </div>

                <div>
                    Track Price (BDT):
                    <input type="text" name="track_price" maxlength="30" value="" />
                </div>


                <input type="button" name="btnsubmit" onclick="formtrack(this.form)" value="Insert Track" />


        </div> 








    </body>
</html>
