<html>
    <head>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/" type="text/css" media="screen"/>

        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/formcheck.js"></script>
    </head>
    <body>

        <div align="center">

            <?php echo heading('Welcome!', 3, 'class="pink"'); ?>
            <form action="<?php echo base_url(); ?>index.php/authenticate/validate_login" method="post" accept-charset="utf-8" id="myform1">




                <div>
                    UserID:
                    <input type="text" name="userid" maxlength="30" value="" />
                </div>

                <div>
                    Password:
                    <input type="password" name="password" maxlength="30" value="" />
                </div>
                <br>
                <select name="myselect">
                    <option value="one" >User</option>
                    <option value="two" >Admin</option>
                </select></td><td><font color="red"><strong><?php echo $error; ?></strong></font>




                <input type="button" name="btnsubmit" onclick="formv(this.form)" value="Login" />

                <?php echo anchor('authenticate/register', "Register !"); ?>




            </form>

        </div>

    </body>
</html>
