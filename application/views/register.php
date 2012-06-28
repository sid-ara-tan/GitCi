<html>
    <head>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen"/>

        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/formcheck.js"></script>
    </head>
    
    <body>
        <?php echo heading($info, 3, 'class="pink"'); ?>

        <div>
            <form action="<?php echo base_url(); ?>index.php/authenticate/validate_register" method="post" accept-charset="utf-8" id="myform1">


                <div id="signup_form">
                    Full name:
                    <input type="text" name="name" maxlength="30" value="" />

      
                    User Name:
                    <input type="text" name="username" maxlength="50" value="" />


                    Password:
                    <input type="password" name="password" maxlength="30" value="" />
                 
  
                    Confirm Password:
                    <input type="password" name="password2" maxlength="30" value="" />
                    
                    <input type="submit" value="Register" /></td>
                
                </div>

            </form>
        </div>


    </body>
</html>
