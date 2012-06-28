<html>
    <head>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen"/>

        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/formcheck.js"></script>
    </head>
    
    <body>
        
        <div>
            <form action="<?php echo base_url(); ?>index.php/authenticate/validate_register" method="post" accept-charset="utf-8" id="myform1">


                <div id="signup_form">
                   <?php   echo form_open('s_login/s_create_student_account'); ?>

                    <P><label for="name">Full Name:</label><?php  echo form_input('name',set_value('name')); ?></P>
                    <p><?php echo form_error('name','<p class="error">'); ?></p>
                    
                    <P><label for="name">User Name:</label><?php  echo form_input('username',set_value('username')); ?></P>
                    <p><?php echo form_error('username','<p class="error">'); ?></p>
                    

                    <p><label for="name">Password:</label><?php   echo form_password('password',set_value('password')); ?></p>
                    <p><?php echo form_error('password','<p class="error">'); ?></p>

                    <p><label for="name">Confirm Password:</label><?php   echo form_password('password2',set_value('password2')); ?></p>
                    <p><?php echo form_error('password2','<p class="error">'); ?></p>
                
                    <p><label for="name">Credit Card NO(exactly 16 digit):</label><?php   echo form_input('credit_no',set_value('credit_no')); ?></p>
                    <p><?php echo form_error('credit_no','<p class="error">'); ?></p>
                
                    
                    <p><?php   echo form_submit('submit','Create Account');?></p>
                    
                    <p class="error"><?php echo $valid_message;?></p>
                    
                </div>

            </form>
        </div>


    </body>
</html>
