<html>
    <body>


        <div align="center">
            <?php echo anchor('adminarea/insert_artist', "Insert Artist"); ?>
        </div>
        <div align="center">
            <?php echo heading('Welcome Admin !', 3, 'class="pink"'); ?>
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
