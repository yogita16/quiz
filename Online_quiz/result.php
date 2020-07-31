<?php 
require_once 'config.php';
require_once 'functions.php';

if (empty($_SESSION['name'])) {
    header( 'Location: index.php') ;exit;
}

if (!empty($_POST)) {
    $keys = array_keys( $_POST );
    $order = join(",", $keys );

    $results = getAnswers($order);

    updateAnsers($results['right_answer'], $_SESSION['name']);
}     
?>
        <?php include_once 'templates/header.php' ?>
        <div class="container result vh-center">
            <div class="w100">
                <div class="row"> 
                    <div class='result-logo'>
                        <img src="image/Quiz_result.png" class="img-responsive"/>
                    </div>    
                </div>  
                <hr>   
                <div class="row dflex results-container"> 
                    
                    <div class='text-center left'>
                            <img src="image/cat.GIF" class="img-responsive"/>
                    </div>
                        
                    <div class="results right"> 
                        <a href="<?php echo BASE_PATH;?>" class='btn btn-success'>Start new Quiz!!!</a>                   
                        <a href="<?php echo BASE_PATH.'logout.php';?>" class='btn btn-success'>Logout</a>
                    
                        <div>
                            <p class="mtb-1">Total no. of right answers : <span class="answer"><?php echo $results['right_answer'];?></span></p>
                            <p class="mtb-1">Total no. of wrong answers : <span class="answer"><?php echo $results['wrong_answer'];?></span></p>
                            <p class="mtb-1">Total no. of Unanswered Questions : <span class="answer"><?php echo $results['unanswered'];?></span></p>                   
                        </div>
                    </div>
                </div>    
            </div>
        </div>
        <?php include_once 'templates/footer.php' ?>
        
    </body>
</html>