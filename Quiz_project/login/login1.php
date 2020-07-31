<?php include('server1.php'); ?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
</head>
<body class="home">
    
    <form method="post" action="login1.php">
        <?php include('errors1.php');  ?>
        <div class="header">
            <h1 id="signin">Welcome Back</h1>
        </div>

        <table>
            <tr style="color:blue;">
                <td class="element">Username:</td>
                <td><input type="text" name="username" class="textInput"></td>
            </tr>

            <tr style="color:blue;">
                <td class="element">Password:</td>
                <td><input type="password" name="password" class="textInput"></td>
            </tr>

            <tr>
                <td></td>
                <td class="element"><button type="submit" name="Login" class="btn">Sign in</button></td>
            </tr>

        </table>
    
    </form>
</body>
</html>
