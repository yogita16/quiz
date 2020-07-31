<?php
    session_start();

    
?>
<?php
      //Connect to database
      $con=mysqli_connect("localhost","root","root","authentication");
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="../style.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Online Quiz</title>
</head>
<body>
    
        
            
        
        <div class="container">
            <br><h2 class="text-center text-primary">Welcome to Random quiz <?php echo $_SESSION['username'];?> </h2><br>
            
            <div class="col-lg-8 m-auto d-block">
                <div class="card">
                    <h3 class="text-center card-header"><?php echo $_SESSION['username'];   ?>,you have to select only one option.Best of luck.</h3>
                </div><br>
                <form action="check.php" method="post">
                <?php
                    for($i=1;$i<=20;$i++){
                        $q="select * from c_quiz1 where id=$i";
                        $query=mysqli_query($con,$q);

                        while($rows = mysqli_fetch_array($query)){
                            ?>
                            
                            <div class="card">
                                <h4 class="card-header"><?php echo $rows['questions']   ?></h4>

                                <?php

                                        $q="select * from c_quiz1 where id=$i";
                                        $query=mysqli_query($con,$q);
                                        
                                        while($rows = mysqli_fetch_array($query)){
                                            ?>

                                            <div class="card-body">
                                                <input type="radio" name="quizcheck[<?php echo $rows['id']; ?>]" value="1">
                                                <?php echo $rows['op1'];  ?><br>
                                                <input type="radio" name="quizcheck[<?php echo $rows['id']; ?>]" value="2">
                                                <?php echo $rows['op2'];  ?><br>
                                                <input type="radio" name="quizcheck[<?php echo $rows['id']; ?>]" value="3">
                                                <?php echo $rows['op3'];  ?><br>
                                                <input type="radio" name="quizcheck[<?php echo $rows['id']; ?>]" value="4">
                                                <?php echo $rows['op4'];  ?><br>
                                                
                                            </div>
                                            
                <?php        
                        }

                    }
                }
                ?>
                <input type="submit" name="submit" value="Submit" class="btn btn-success m-auto d-block">
            
            </form>
            </div>
            </div><br>
                    <div class="m-auto d-block">
                    <a href="../logout/logout.php" class="btn btn-primary ">Logout</a>
                    </div>
           
        </div>
    
    
</body>
</html>