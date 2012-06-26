<html>
    <body>
        <p><font color="red"><?php echo $valid; ?></font></p>
        <p>Login Here To Enter !</p>
        <form action="<?php echo base_url(); ?>index.php/mock/validate_login" method="post" accept-charset="utf-8" id="myform1">

            <fieldset>
                <table>
                    <tr>
                        <td>UserID:</td>
                        <td><input type="text" name="username" maxlength="30" value="" /></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" maxlength="30" value="" /></td>
                    </tr>
                    
                    <tr><td>
                            <select name="myselect">
                                <option value="one" >Student</option>
                                <option value="two" >Admin</option>
                            </select></td><td><font color="red"><strong><?php echo $error; ?></strong></font></td>
                    </tr>

                    <tr>

                        <td colspan="2"><input type="submit" name="btnsubmit" value="Login" /></td>

                    </tr>

                </table>
                
            </fieldset>
        </form>

    </div>

</body>
</html>
