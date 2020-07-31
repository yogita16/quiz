<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Registration,login and logout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    
</head>
<body id="home">   

    <form method="post" action="login.php">
        <?php include('errors.php');  ?>
        <div class="header">
            <h1>Signup</h1>
        </div>
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" class="textInput" value="<?php echo $username; ?>"></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" class="textInput" value="<?php echo $email; ?>"></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" class="textInput"></td>
            </tr>

            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="password2" class="textInput"></td>
            </tr>

            <tr>
            <td></td>
                <td><button type="submit" name="Register" class="btn">Sign up</button></td>
            </tr>

        </table>
    
    </form>
</body>
</html>