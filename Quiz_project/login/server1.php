<?php
    session_start();
    $username="";
    $errors=array();
    //Connect to database
    $db=mysqli_connect("localhost","root","root","authentication");

    if(isset($_POST['Login'])){
        $username=mysqli_real_escape_string($db,$_POST['username']);
        $password_1=mysqli_real_escape_string($db,$_POST['password']);
        if ($username != "" && $password_1 != ""){
            $password = md5($password_1);
            $sql_query = "select count(*) as cntUser from users where username='$username' and password='$password'";
            $result = mysqli_query($db,$sql_query);
            $row = mysqli_fetch_array($result);
    
            $count = $row['cntUser'];
    
            if($count > 0){
                $_SESSION['username'] = $username;
                header('Location: ../home.php');
            }else{
                ?>

                <h2 style="color: red;text-align: center;">Invalid username or password!!</h2>

                <?php
            }
    
        }
        else{
            echo "Both username and password are required";
        }
    
      
        //ensure that the form field are filled properly
       /* if (empty($username)) {
            array_push($errors, "Username is required"); 
        }
        
        if (empty($password_1)) {
            array_push($errors, "Password is required"); 
        }
        
        // if there are no errors, save user to the database
        if (count($errors) == 0) {
            $password = md5($password_1); //encrypt password before storing in database (security)
            $sql = "SELECT FROM users username where username='$username' and password='$password'";
            $result=mysqli_query($db,$sql);
            $resultcheck=mysqli_fetch_array($result, MYSQLI_ASSOC);
            if(isset($resultcheck))
            {
                $_SESSION['message']="Login Successful!!!";
                $_SESSION['username']=$username;
                header("location:home1.php");
                
            }else{
                array_push($errors,"Username or password is wrong");
            }
        }*/

    }
?>


