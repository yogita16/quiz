<?php
/**
 * File: questions.php
 * 
 * @author: Muni
 * @site: https://smarttutorials.net/
 */

require_once 'config.php';
require_once 'functions.php';

try {
    $category = '';
    if (!empty($_POST['name'])) {
        insertUserSelectedCategory($_POST);
    }
    $category = $_POST['category'];
    if (empty($_SESSION['name'])) {
        header('Location: index.php');
    } 

    $questions = getQuestions($category);
    $rows = count($questions);
} catch (Exception $e) {
    //echo '<pre>';print_r($e);echo '</pre>';exit;
}

?>
        <?php include_once 'templates/header.php' ?>
		<div class="container question vh-center">
			<div class="question-container">
				<form class="form-horizontal" role="form" id='login' method="post" action="result.php">
					<?php 
                    $i=1;
                    foreach ($questions as $key => $result) {
                    ?>                    
                    <?php if($i==1){?>         
                    <div id='question<?php echo $i;?>' class='cont'>
                        <p class='questions' id="qname<?php echo $i;?>"> <?php echo $i?>.<?php echo $result['question_name'];?></p>
                        <hr>
                        <div class="form-group">
                            <input type="radio" value="1" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>
                            <label for='radio1_<?php echo $result['id'];?>'><?php echo $result['answer1'];?></label>
                        </div>
                        <div class="form-group">
                            <input type="radio" value="2" id='radio2_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>
                            <label for='radio2_<?php echo $result['id'];?>'><?php echo $result['answer2'];?></label>
                        </div>
                        <div class="form-group">
                            <input type="radio" value="3" id='radio3_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>
                            <label for='radio3_<?php echo $result['id'];?>'><?php echo $result['answer3'];?></label>
                        </div>
                        <div class="form-group">
                            <input type="radio" value="4" id='radio4_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>
                            <label for='radio4_<?php echo $result['id'];?>'><?php echo $result['answer4'];?></label>
                        </div>
                        <div class="form-group">
                            <input type="radio" checked='checked' style='display:none' value="5" id='radio5_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>                                                                      
                        </div>
                        <button id='<?php echo $i;?>' class='next btn btn-success' type='button'>Next</button>
                    </div>  
                    <?php } elseif($i<1 || $i<$rows) { ?>
            
                    <div id='question<?php echo $i;?>' class='cont'>
                        <p class='questions' id="qname<?php echo $i;?>"><?php echo $i?>.<?php echo $result['question_name'];?></p>
                        <div class="form-group">
                            <input type="radio" value="1" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>
                            <label for='radio1_<?php echo $result['id'];?>'><?php echo $result['answer1'];?></label>
                        </div>
                        <div class="form-group">
                            <input type="radio" value="2" id='radio2_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>
                            <label for='radio2_<?php echo $result['id'];?>'><?php echo $result['answer2'];?></label>
                        </div>
                        <div class="form-group">
                            <input type="radio" value="3" id='radio3_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>
                            <label for='radio3_<?php echo $result['id'];?>'><?php echo $result['answer3'];?></label>
                        </div>
                        <div class="form-group">
                            <input type="radio" value="4" id='radio4_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>
                            <label for='radio4_<?php echo $result['id'];?>'><?php echo $result['answer4'];?></label>
                        </div>
                        <div class="form-group">
                            <input type="radio" checked='checked' style='display:none' value="5" id='radio5_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>                                                                      
                        </div>
                        <button id='<?php echo $i;?>' class='previous btn btn-success' type='button'>Previous</button>                    
                        <button id='<?php echo $i;?>' class='next btn btn-success' type='button' >Next</button>
                    </div>
                
                    <?php } elseif($i==$rows) { ?>
                    <div id='question<?php echo $i;?>' class='cont'>
                        <p class='questions' id="qname<?php echo $i;?>"><?php echo $i?>.<?php echo $result['question_name'];?></p>
                        <div class="form-group">
                            <input type="radio" value="1" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>
                            <label for='radio1_<?php echo $result['id'];?>'><?php echo $result['answer1'];?></label>
                        </div>
                        <div class="form-group">
                            <input type="radio" value="2" id='radio2_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>
                            <label for='radio2_<?php echo $result['id'];?>'><?php echo $result['answer2'];?></label>
                        </div>
                        <div class="form-group">
                            <input type="radio" value="3" id='radio3_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>
                            <label for='radio3_<?php echo $result['id'];?>'><?php echo $result['answer3'];?></label>
                        </div>
                        <div class="form-group">
                            <input type="radio" value="4" id='radio4_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>
                            <label for='radio4_<?php echo $result['id'];?>'><?php echo $result['answer4'];?></label>
                        </div>
                        <div class="form-group">
                            <input type="radio" checked='checked' style='display:none' value="5" id='radio5_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>                                                                      
                        </div>
                        
                        <button id='<?php echo $i;?>' class='previous btn btn-success' type='button'>Previous</button>                    
                        <button id='<?php echo $i;?>' class='next btn btn-success' type='submit'>Finish</button>
                    </div>
					<?php } $i++;} ?>
					
				</form>
			</div>
		</div>
        <?php include_once 'templates/footer.php' ?>
		<script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/app.js"></script>
	</body>
</html>