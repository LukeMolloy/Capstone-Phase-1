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
	//	$salt = uniqid(mt_rand(), true);
	
//		$hashpassword = hash("sha256", $password.$salt);
	$hashpassword = hash("sha256", $password);
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($first)) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($first);
  }
  
  if (empty($last)) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($last);
  }
  
  if (empty($email)) {
    $emailErr = "Email is required";
  } else {
  	Correctemail("$email");
    $email = test_input($_POST["email"]);
  }

  if (empty($password)) {
    $password = "password is required";
  } else {
    $password = test_input($password);
  }
}
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

function Correctemail($email){
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	
		$sql = "INSERT INTO User (Firstname, Lastname, Emailaddress, Password)
		VALUES ('$first', '$last', '$email', '$hashpassword')";
		
		mysqli_query($db, $sql);
	?>
	<?php
		echo $_SESSION["login_user"] . ".<br>";
	?>
	<div class="loginform">
		<form name="authorityRegistration" id ="authorityRegistration" onsubmit="return validateRegistrationForm()" method="post">
				<p>
					<h1>Register as...</h1><br />
					<h2>Authority or Safe Haven</h2>
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
</html>