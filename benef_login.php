<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
</head>

<body>
    <div class="container form1">
        <div class="header">
            <h2>Beneficiaries LogIn</h2>
        </div>


        <table>
            <form method="post" name='form' onsubmit="">
                <tr>
                    <td><label>Email Id</label></td>
                    <td><input type="email" required name="benef_login_email"></td>
                </tr>

                <tr>
                    <td><label>Password</label></td>
                    <td><input type="password" required name="benef_login_password"></td>
                </tr>
        </table>
        <div><button type="submit" class="btn btn1" name="submit_login_benef">Login</button></div>
        <a href="benef_register.php">Not a member? Sign Up</a>

        </form>
    </div>

</body>

</html>