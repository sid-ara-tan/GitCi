<html>
    <body>
        <?php echo heading($info, 3, 'class="pink"'); ?>

        <div align="center">
            <form action="<?php echo base_url(); ?>index.php/authenticate/validate_register" method="post" accept-charset="utf-8" id="myform1">




                <div>
                    UserID:
                    <input type="text" name="userid" maxlength="30" value="" />
                </div>

                <br>

                <div>
                    Name:
                    <input type="text" name="username" maxlength="50" value="" />
                </div>

                <br>

                <div>
                    Password:
                    <input type="password" name="password" maxlength="30" value="" />
                </div>

                <br>





                <td colspan="2"><input type="submit" value="Register" /></td>




            </form>
        </div>


    </body>
</html>
