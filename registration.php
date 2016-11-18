<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.Community</title>
  <link rel="stylesheet" href="stylesheets/templatetest.css">
		<?php include 'dbLogin.php' ?>
		<script src="validation.js"></script>
</head>

<body>
	<div class="header">
	<label class="title">Safe Haven Community</label>
			<li><a href="/About.php">About Us</a></li>
			<li><a href="/Contact.php">Contact Us</a></li>
			<li><a href="/index.php">Home</a></li>
		</ul> 
	</div>
	<div class="navbar">
<!--df-->
	</div>
	<?php
		session_start();
	
		/*$sql = $db->prepare("INSERT INTO User (FirstName, LastName, EmailAddress, Password)
		VALUES (?, ?, ?, ?)");
		$sql->bind_param("sss", $first, $last, $email, $password);
		
		$first = ($_POST['FirstName']);
		$last =  ($_POST['LastName']);
		$email = ($_POST['Email']);
		$password = ($_POST['Password']);

		$hashpassword = hash("sha256", $password);
		$sql->execute();
		$sql->close();
				echo $_SESSION["login_user"] . ".<br>";*/
		
	?>

	<div class="loginform">
		<form name="authorityRegistration" id ="authorityRegistration" onsubmit="return validateRegistrationForm()" method="post" action="usregister.php">
				<p>
					<h1>Register as a member of authority</h1><br />
				</p>
				
			
			<br /><br /><br /><br />
			<label id="FirstName">First Name</label> <input name="FirstName" type="text" />
			<label id = "FirstNameError"></label> <br /><br /><br /><br />
			
			<label id="LastName">Last Name</label> <input name="LastName" type="text" />
			<label id = "LastNameError"></label> <br /><br /><br /><br />
			
			<label id="Email">Email</label> <input name="Email" type="text" />
			<label id = "EmailError"></label> <br /><br /><br /><br />
			
			<label id="Phonenumber">Phone Number</label> <input name="Phonenumber" type="text" />
			<label id = "PhoneError"></label> <br /><br /><br /><br />
			
			<label id="Jobtitle">Job Title</label> <input name="Jobtitle" type="text" />
			<label id = "JobError"></label> <br /><br /><br /><br />
			
			<label id="Information">Extra Information</label> <input name="Information" type="text" />
			<label id = "InfoError"></label> <br /><br /><br /><br />
			
			<label id="Password">Password</label> <input name="Password" type="password" />
			<label id = "PasswordError"></label> <br /><br /><br /><br />
			
			<label id="ConfirmPassword">Confirm Password</label> <input name="ConfirmPassword" type="password" />
			<label id = "ConfirmPasswordError"></label> <br /><br /><br /><br />
			
			<a href="/index.php"><button type="button">Back</button></a> &nbsp&nbsp&nbsp <input name="Register" type="submit" value="Register" />

		</form>
	</div>
</body>

<footer>
	<center>Contact Us	|	About</center>
</footer>

</html>


<body>  


</body>
<footer>
<br />
<table class="footertable">
	<tr>
		<td class="lightertext">SHOW<br /><hr></td>
		<td class="lightertext">ABOUT<br /><hr></td>
		<td class="lightertext">HELP<br /><hr></td>
		<td class="lightertext">CONNECT<br /><hr></td>
	</tr>
	<tr>
		<td class="darkertext">
			<br />Home<br />
			User Registration<br />
			Safe Haven Registration
		</td>
		<td class="darkertext">
			<br />About Us<br />
			Company Site
		</td>
		
		<td class="darkertext">
			<br />Contact Us<br />
			Instructions
		</td>
		
		<td class="darkertext">
		<br />	Facebook<br />
			Twitter
		</td>
	</tr>
</table>
</footer>


</html>