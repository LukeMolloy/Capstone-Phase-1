<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.OurWomen</title>
  <link rel="stylesheet" href="stylesheets/template.css">
		<?php include 'dbLogin.php' ?>
		<script src="validation.js"></script>
</head>

<body>
	<div class="header">
	<label class="title">Safe Haven Our Women</label>
 		<li><a href="/login.php">Login / Register</a></li>
		<li><a href="/About.php">About Us</a></li>
		<li><a href="/Contact.php">Contact Us</a></li>
		<li><a href="/index.php">Home</a></li>
	</ul> 
</div>
	<div class="navbar">

	</div>
	<?php
		$first = ($_POST['FirstName']);
		$last =  ($_POST['LastName']);
		$email = ($_POST['Email']);
		$password = ($_POST['Password']);
	
	
	
		$sql = "INSERT INTO User (FirstName, LastName, EmailAddress, Password)
		VALUES ('$first', '$last', '$email', '$password')";
		
		mysqli_query($db, $sql);
	?>
	<?php
		echo $_SESSION["login_user"] . ".<br>";
	?>
	<div class="loginform">
		<form name="authorityRegistration" onsubmit="return validateRegistrationForm()" method="post">
			<center>
				<p>
					<h1>Register</h1>
				</p>
				
			
			<br /><br /><br /><br />
			<label id="FirstName">First Name</label> <input name="FirstName" type="text" />
			<label id = "FirstNameError"></label> <br /><br /><br /><br />
			
			<label id="LastName">Last Name</label> <input name="LastName" type="text" />
			<label id = "LastNameError"></label> <br /><br /><br /><br />
			
			<label id="Email">Email</label> <input name="Email" type="text" />
			<label id = "EmailError"></label> <br /><br /><br /><br />
			
			<label id="Password">Password</label> <input name="Password" type="password" />
			<label id = "PasswordError"></label> <br /><br /><br /><br />
			
			<label id="ConfirmPassword">Confirm Password</label> <input name="ConfirmPassword" type="password" />
			<label id = "ConfirmPasswordError"></label> <br /><br /><br /><br />
			
			<input name="Register" type="submit" value="Register" />
			</center>
		</form>
	</div>
</body>

<footer>
	<center>Contact Us	|	About</center>
</footer>

</html>
