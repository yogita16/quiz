<?php
    session_start();

    
?>


<!DOCTYPE html>
<html>
<head>
    
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Keywords" content="C,C++,Java,Python,HTML,CSS,JavaScript,SQL">
    <link rel="stylesheet" href="style.css">
</head>
<body id="page">
   
        <div class="main">
            <img src="image/home.png" height="50" width="50"> 
            <h4 id="user">Welcome <?php echo $_SESSION['username'];   ?></h4>
            <div id="position">
                <a href="logout/logout.php">logout</a>
            </div>
        </div>
        <div id="random">
        <h3>Random Quiz</h3>
        <a href="home/C.php">Check your knowledge</a>
        </div>
        <div id="cquiz">
            <h3>C Basics Quiz</h3>
            <a href="">Quiz 1</a><br>
            <a href="https://www.javatpoint.com/directload.jsp?val=117">Quiz 2</a><br>
            <a href=>Quiz 3</a><br>
            <a href=>Quiz 4</a><br>
            <a href=>Quiz 5</a><br>
            <a href=>Quiz 6</a><br>
        </div>
        <div id="cppquiz">
            <h3>C++ Basics Quiz</h3>
            <a href="https://www.w3schools.com">Quiz 1</a><br>
            <a href=>Quiz 2</a><br>
            <a href=>Quiz 3</a><br>
            <a href=>Quiz 4</a><br>
            <a href=>Quiz 5</a><br>
            <a href=>Quiz 6</a><br>
        </div>
        <div id="javaquiz">
            <h3>Java Basics Quiz</h3>
            <a href="">Quiz 1</a><br>
            <a href=>Quiz 2</a><br>
            <a href=>Quiz 3</a><br>
            <a href=>Quiz 4</a><br>
            <a href=>Quiz 5</a><br>
            <a href=>Quiz 6</a><br>
        </div>
        <div id="pythonquiz">
            <h3>Python Basics Quiz</h3>
            <a href="">Quiz 1</a><br>
            <a href="https://www.javatpoint.com/directload.jsp?val=117">Quiz 2</a><br>
            <a href=>Quiz 3</a><br>
            <a href=>Quiz 4</a><br>
            <a href=>Quiz 5</a><br>
            <a href=>Quiz 6</a><br>
        </div>
 
</body>
</html>