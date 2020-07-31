<?php
    session_start();

    
?>
<html>
<head>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>
<?php
      //Connect to database
      $con=mysqli_connect("localhost","root","root","authentication");
      
      if(isset($_POST['submit']))
      {
          
          if(!empty($_POST['quizcheck']))
          {
              $count=count($_POST['quizcheck']);
              //echo "Out of 20, you have selected".$count."options";
              $selected=$_POST['quizcheck'];
              //print_r($selected);
              $result=0;
              $i=1;
              $q="select * from c_quiz1";
              $query=mysqli_query($con,$q);
              
              while($rows = mysqli_fetch_array($query))
              {
                //print_r($rows['correct_op']);
                if($selected[$i])
                {
                    $checked=$rows['correct_op']==$selected[$i];
                    
                    if($checked)
                    {
                        $result++;
                    }
                }
                $i++;
             }
            ?>
            <div class="container">
                <div>
                    <h1 class="text-center text-success">Result</h1>
                </div><br>
                <div class="d-flex justify-content-center ">
                    <table class="table-bordered">
                    <tr class="text-center">
                        <td>Number of Solved Questions</td>
                        <td><?php echo $count ?></td>
                    </tr>
                    <tr class="text-center">
                        <td>Your score</td>
                        <td><?php echo $result ?></td>
                    </tr>
                    </table>
                </div>
                <br>


                <div class="m-auto d-block d-flex justify-content-center">
                        <a href="../logout/logout.php" class="btn btn-primary ">Logout</a>
                </div>
            </div>

        <?php 
          }
      }

      ?>
</body>
</html>    
