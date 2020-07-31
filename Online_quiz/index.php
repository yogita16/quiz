<?php
/**
 * File: index.php
 * 
 * @author: Muni
 * @site: https://smarttutorials.net/
 */
require 'config.php';
?>
		<?php include_once 'templates/header.php' ?>
		<div class="container vh-center">
			<div class='image'>
				<img src="image/logo.png" class="img-responsive"/>
			</div>
			
			<div class="intro">
				<p class="text-center">
					Please enter your name
				</p>
				<?php if (empty($_SESSION['name'])){ ?>
				<form class="form-signin" method="post" id='signin' name="signin" action="questions.php">
					<div class="form-group">
						<input type="text" id='name' name='name' class="form-control" placeholder="Enter your Name"/>
						<span class="help-block"></span>
					</div>
					<div class="form-group">
						<select class="form-control" name="category" id="category">
							<option value="">Choose your category</option>
							<option value="1">Sports</option>
							<option value="2">HTML</option>
							<option value="3">PHP</option>
							<option value="4">CSS</option>                                
						</select>
						<span class="help-block"></span>
					</div>
					
					<br>
					<button class="btn btn-success btn-block" type="submit">
						Start Quiz!!!
					</button>
				</form>
				
				<?php }else{ ?>
					<form class="form-signin" method="post" id='signin' name="signin" action="questions.php">
						<div class="form-group">
							<select class="form-control" name="category" id="category">
								<option value="">Choose your category</option>
								<option value="1">Sports</option>
								<option value="2">HTML</option>
								<option value="3">PHP</option>
								<option value="4">CSS</option>                                
							</select>
							<span class="help-block"></span>
						</div>
						
						<br>
						<button class="btn btn-success btn-block" type="submit">
							Start Quiz!!!
						</button>
					</form>
				<?php }?>
			</div>
		</div>
		<?php include_once 'templates/footer.php' ?>
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src='//cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js'></script>
		<script src="js/app.js"></script>
	</body>
</html>