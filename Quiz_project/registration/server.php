<?php
    session_start();
    $username="";
    $email="";
    $errors=array();
    //Connect to database
    $db=mysqli_connect("localhost","root","root","authentication");

    if(isset($_POST['Register'])){
        $username=mysqli_real_escape_string($db,$_POST['username']);
        $email=mysqli_real_escape_string($db,$_POST['email']);
        $password_1=mysqli_real_escape_string($db,$_POST['password']);
        $password_2=mysqli_real_escape_string($db,$_POST['password2']);

        //ensure that the form field are filled properly
        if (empty($username)) {
            array_push($errors, "Username is required"); 
        }
        if (empty($email)) {
            array_push($errors, "Email is required"); 
        }
        if (empty($password_1)) {
            array_push($errors, "Password is required"); 
        }
        if ($password_1 != $password_2) {
            array_push($errors, "Two passwords do not match"); 
        }

        // if there are no errors, save user to the database
        if (count($errors) == 0) {
            $password = md5($password_1); //encrypt password before storing in database (security)
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email', '$password')";
            mysqli_query($db,$sql);
            $_SESSION['message']="Registration Successful!!!";
            $_SESSION['username']=$username;
            header("location:../home.php");
        }

    }
?>


