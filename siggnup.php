<!DOCTYPE html>
<?php require_once("connfg.php"); ?>

<html>
<head>
	<title>signup </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				
			</div>
			<div class="col-sm-4">
				
			</div>
			<div class="col-sm-4">
				
			</div>
			
		</div>
		<div class="row">
			<?php
			if (isset($_POST['signup ']))
			{
				extract($_POST);
				if(strlen($fname)<3)
				{
					$error[]='please enter the at least three character';
					
				}
				if (strlen($fname)>20) 
				{
					$error[]='please enter the below the 20 character';

					 
				}
				
				
			}

			?>
			<div class="col-sm-4">
				<?php

				   if (isset($error)) 
				   {
				   	foreach ($error as $error) 
				   	{
				   		echo'<p class="errmsg">&#x26A0;'.$error.'</P>';
				   	}
				    	
				    } 
				?>
				
			</div>
			<div class="col-sm-4">
				<div class="signup_form">
					<form action="" method="POST">
						<div class="form-group">
							<label class="lable_txt">First Name</label>
							<input type="text" class="form-control" name="fname" required="">
							
						</div>
						<div class="form-group">
							<label class="lable_txt">Last Name</label>
							<input type="text" class="form-control" name="lname" required="">
							
						</div>

						<div class="form-group">
							<label class="lable_txt">Username</label>
							<input type="text" class="form-control" name="username" required="">
							
						</div>
						<div class="form-group">
							<label class="label_txt">Email</label>
							<input type="email" class="form-control" name="email" required="">
							
						</div>
						<div class="form-group">
							<label class="label_txt">Password</label>
							<input type="password" class="form-control" name="password" required="">
							
						</div>
						<div class="form-group">
							<label class="label_txt">Confirm Password</label>
							<input type="password" class="form-control" name="passwordConfirm" required="">
						</div>
						<button type="submit"  name="signup" class="btn btn-primary btn-group-lg form_btn">Sign Up
							
						</button>
						<p>Have an account?<a href="logiin.php">Log in</a></p>
					</form>

					
				</div>
				
			</div>

			
		</div>
		
	</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>