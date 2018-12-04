<div class="container">
		
		<?php

		$errors= "";
		if(isset($_POST["submit"])){

			if (!empty($_POST["firstName"])) {
				$firstName = filter_var($_POST["firstName"],FILTER_SANITIZE_MAGIC_QUOTES);}
				
				else  {
					$errors .="Please enter your first name <br> <br>";
					
				}

			

			if (!empty($_POST["LastName"])) {
				$lastName = filter_var($_POST["LastName"], FILTER_SANITIZE_MAGIC_QUOTES);}
				
				else {
								$errors .= "Please enter your last name <br> <br>";
								
							}			

			

			if (!empty($_POST["email"])) { 
				$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
				if ($LastName= "") {
					$errors .= "Please enter your email adress <br> <br>";
					
						}	
				else{
					if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
						$errors .= "Please enter a valid email adress <br> <br>";
						
					}
				}

			}

			if (!empty($_POST["message"])) {
				$message = filter_var($_POST["message"], FILTER_SANITIZE_MAGIC_QUOTES);
				
			}
		}

		 if ($errors) {
		 	
		 ?>

		 <div class="alert alert-danger alert-dismissable">
		 	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		 	<strong>Alert !</strong> The following errors occured : <br><br> <?php echo "$errors"; ?>
		 </div>

		 <?php

		 }
		
		elseif (isset($_POST["submit"])) {
 			 	
 			 	//require "../phpmailer/index.php"; This part for sending mail using phpmailer
			     require "insertDataFromForm.php";

			?>

			<div class="alert alert-success alert-dismissable">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong> Success !</strong> Your form has been successefully submitted! We'll be in touch.				
			</div> 

		<?php


		}

		?>

		<h1>Contact Us</h1> <br>
			<form name="myForm" class="form-horizontal" role="form" method="POST" action="#" data-toggle="validator">

				<div class="form-group">
					<label for="firstName" class="col-sm-2 control-label" >First Name: </label>
						<div class="col-sm-10">
						<input type="text" name="firstName" class="form-control" required >
							
						</div>
					
				</div>

				<div class="form-group">
					<label for="LastName" class="col-sm-2 control-label">Last Name: </label>
					<div class="col-sm-10">
						<input type="text" name="LastName" class="form-control" required >
					</div>
				</div>

				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email adresse: </label>
					<div class="col-sm-10">
						<input type="email" name="email" class="form-control" required >
					</div>

				</div>

				<div class="form-group">
					<label for="message" class="col-sm-2 control-label">Your message: </label>
					<div class="col-sm-10">
						<textarea name="message" class="form-control" rows="5" required ></textarea>
					</div>			
				</div>

				<div class="form-group">
					<div class="col-sm-2 col-sm-offset-2"> <!-- offset-2 decale de 2 rang -->
						<button type="submit" name="submit" class="btn btn-primary">Submit form</button>
					</div>
					
				</div>
				
			</form>

	</div>